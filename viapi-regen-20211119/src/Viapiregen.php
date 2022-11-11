<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateLabelsetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateLabelsetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateTagTaskRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateTagTaskResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateTrainTaskRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateTrainTaskResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeClassifyImageAdvanceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeClassifyImageRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeClassifyImageResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeDetectImageAdvanceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeDetectImageRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeDetectImageResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageAdvanceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\CustomizeInstanceSegmentImageResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DebugServiceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DebugServiceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteDataReflowDataRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteDataReflowDataResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteLabelsetDataRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteLabelsetDataResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteLabelsetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteLabelsetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteTrainTaskRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteTrainTaskResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteWorkspaceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DisableDataReflowRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DisableDataReflowResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DownloadDatasetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DownloadDatasetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DownloadFileNameListRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DownloadFileNameListResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DownloadLabelFileRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\DownloadLabelFileResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\EnableDataReflowRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\EnableDataReflowResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ExportDataReflowDataListRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ExportDataReflowDataListResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetDatasetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetDatasetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetDiffCountLabelsetAndDatasetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetDiffCountLabelsetAndDatasetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetLabelDetailRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetLabelDetailResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetLabelsetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetLabelsetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceInvokeRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceInvokeResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceInvokeShrinkRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceQpsRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceQpsResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceQpsShrinkRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetServiceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainModelRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainModelResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainTaskEstimatedTimeRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainTaskEstimatedTimeResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainTaskRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainTaskResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetUploadPolicyRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetUploadPolicyResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListDataReflowDatasRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListDataReflowDatasResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListDatasetDatasRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListDatasetDatasResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListLabelsetDatasRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListLabelsetDatasResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListLabelsetsRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListLabelsetsResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListServicesRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListServicesResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListTrainTasksRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListTrainTasksResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\SetDatasetUserOssPathRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\SetDatasetUserOssPathResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StartServiceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StartServiceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StartTrainTaskRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StartTrainTaskResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StopServiceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StopServiceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StopTrainTaskRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\StopTrainTaskResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateLabelsetRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateLabelsetResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateTrainTaskRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateTrainTaskResponse;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateWorkspaceRequest;
use AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateWorkspaceResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Viapiregen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'viapi-regen-daily.aliyuncs.com',
            'ap-northeast-2-pop'          => 'viapi-regen-daily.aliyuncs.com',
            'ap-south-1'                  => 'viapi-regen-daily.aliyuncs.com',
            'ap-southeast-1'              => 'viapi-regen-daily.aliyuncs.com',
            'ap-southeast-2'              => 'viapi-regen-daily.aliyuncs.com',
            'ap-southeast-3'              => 'viapi-regen-daily.aliyuncs.com',
            'ap-southeast-5'              => 'viapi-regen-daily.aliyuncs.com',
            'cn-beijing'                  => 'viapi-regen-daily.aliyuncs.com',
            'cn-beijing-finance-1'        => 'viapi-regen-daily.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'viapi-regen-daily.aliyuncs.com',
            'cn-beijing-gov-1'            => 'viapi-regen-daily.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'viapi-regen-daily.aliyuncs.com',
            'cn-chengdu'                  => 'viapi-regen-daily.aliyuncs.com',
            'cn-edge-1'                   => 'viapi-regen-daily.aliyuncs.com',
            'cn-fujian'                   => 'viapi-regen-daily.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'viapi-regen-daily.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'viapi-regen-daily.aliyuncs.com',
            'cn-hangzhou-finance'         => 'viapi-regen-daily.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'viapi-regen-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'viapi-regen-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'viapi-regen-daily.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'viapi-regen-daily.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'viapi-regen-daily.aliyuncs.com',
            'cn-hongkong'                 => 'viapi-regen-daily.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'viapi-regen-daily.aliyuncs.com',
            'cn-huhehaote'                => 'viapi-regen-daily.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'viapi-regen-daily.aliyuncs.com',
            'cn-north-2-gov-1'            => 'viapi-regen-daily.aliyuncs.com',
            'cn-qingdao'                  => 'viapi-regen-daily.aliyuncs.com',
            'cn-qingdao-nebula'           => 'viapi-regen-daily.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'viapi-regen-daily.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'viapi-regen-daily.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'viapi-regen-daily.aliyuncs.com',
            'cn-shanghai-inner'           => 'viapi-regen-daily.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'viapi-regen-daily.aliyuncs.com',
            'cn-shenzhen'                 => 'viapi-regen-daily.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'viapi-regen-daily.aliyuncs.com',
            'cn-shenzhen-inner'           => 'viapi-regen-daily.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'viapi-regen-daily.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'viapi-regen-daily.aliyuncs.com',
            'cn-wuhan'                    => 'viapi-regen-daily.aliyuncs.com',
            'cn-wulanchabu'               => 'viapi-regen-daily.aliyuncs.com',
            'cn-yushanfang'               => 'viapi-regen-daily.aliyuncs.com',
            'cn-zhangbei'                 => 'viapi-regen-daily.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'viapi-regen-daily.aliyuncs.com',
            'cn-zhangjiakou'              => 'viapi-regen-daily.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'viapi-regen-daily.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'viapi-regen-daily.aliyuncs.com',
            'eu-central-1'                => 'viapi-regen-daily.aliyuncs.com',
            'eu-west-1'                   => 'viapi-regen-daily.aliyuncs.com',
            'eu-west-1-oxs'               => 'viapi-regen-daily.aliyuncs.com',
            'me-east-1'                   => 'viapi-regen-daily.aliyuncs.com',
            'rus-west-1-pop'              => 'viapi-regen-daily.aliyuncs.com',
            'us-east-1'                   => 'viapi-regen-daily.aliyuncs.com',
            'us-west-1'                   => 'viapi-regen-daily.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('viapi-regen', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * @param CreateLabelsetRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLabelsetResponse
     */
    public function createLabelsetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->objectKey)) {
            $body['ObjectKey'] = $request->objectKey;
        }
        if (!Utils::isUnset($request->preLabelId)) {
            $body['PreLabelId'] = $request->preLabelId;
        }
        if (!Utils::isUnset($request->tagSettings)) {
            $body['TagSettings'] = $request->tagSettings;
        }
        if (!Utils::isUnset($request->tagUserList)) {
            $body['TagUserList'] = $request->tagUserList;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userOssUrl)) {
            $body['UserOssUrl'] = $request->userOssUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLabelset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLabelsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLabelsetRequest $request
     *
     * @return CreateLabelsetResponse
     */
    public function createLabelset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabelsetWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizationType)) {
            $body['AuthorizationType'] = $request->authorizationType;
        }
        if (!Utils::isUnset($request->authorizedAccount)) {
            $body['AuthorizedAccount'] = $request->authorizedAccount;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->trainTaskId)) {
            $body['TrainTaskId'] = $request->trainTaskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateTagTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTagTaskResponse
     */
    public function createTagTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelsetId)) {
            $body['LabelsetId'] = $request->labelsetId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTagTask',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTagTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTagTaskRequest $request
     *
     * @return CreateTagTaskResponse
     */
    public function createTagTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrainTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTrainTaskResponse
     */
    public function createTrainTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->advancedParameters)) {
            $body['AdvancedParameters'] = $request->advancedParameters;
        }
        if (!Utils::isUnset($request->datasetIds)) {
            $body['DatasetIds'] = $request->datasetIds;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->labelIds)) {
            $body['LabelIds'] = $request->labelIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->preTrainTaskId)) {
            $body['PreTrainTaskId'] = $request->preTrainTaskId;
        }
        if (!Utils::isUnset($request->trainMode)) {
            $body['TrainMode'] = $request->trainMode;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrainTask',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrainTaskRequest $request
     *
     * @return CreateTrainTaskResponse
     */
    public function createTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrainTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param CustomizeClassifyImageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CustomizeClassifyImageResponse
     */
    public function customizeClassifyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CustomizeClassifyImage',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomizeClassifyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CustomizeClassifyImageRequest $request
     *
     * @return CustomizeClassifyImageResponse
     */
    public function customizeClassifyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customizeClassifyImageWithOptions($request, $runtime);
    }

    /**
     * @param CustomizeClassifyImageAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CustomizeClassifyImageResponse
     */
    public function customizeClassifyImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'viapi-regen',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $customizeClassifyImageReq = new CustomizeClassifyImageRequest([]);
        OpenApiUtilClient::convert($request, $customizeClassifyImageReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $customizeClassifyImageReq->imageUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->customizeClassifyImageWithOptions($customizeClassifyImageReq, $runtime);
    }

    /**
     * @param CustomizeDetectImageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CustomizeDetectImageResponse
     */
    public function customizeDetectImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CustomizeDetectImage',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomizeDetectImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CustomizeDetectImageRequest $request
     *
     * @return CustomizeDetectImageResponse
     */
    public function customizeDetectImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customizeDetectImageWithOptions($request, $runtime);
    }

    /**
     * @param CustomizeDetectImageAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CustomizeDetectImageResponse
     */
    public function customizeDetectImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'viapi-regen',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $customizeDetectImageReq = new CustomizeDetectImageRequest([]);
        OpenApiUtilClient::convert($request, $customizeDetectImageReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $customizeDetectImageReq->imageUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->customizeDetectImageWithOptions($customizeDetectImageReq, $runtime);
    }

    /**
     * @param CustomizeInstanceSegmentImageRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CustomizeInstanceSegmentImageResponse
     */
    public function customizeInstanceSegmentImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CustomizeInstanceSegmentImage',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomizeInstanceSegmentImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CustomizeInstanceSegmentImageRequest $request
     *
     * @return CustomizeInstanceSegmentImageResponse
     */
    public function customizeInstanceSegmentImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customizeInstanceSegmentImageWithOptions($request, $runtime);
    }

    /**
     * @param CustomizeInstanceSegmentImageAdvanceRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CustomizeInstanceSegmentImageResponse
     */
    public function customizeInstanceSegmentImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'viapi-regen',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $customizeInstanceSegmentImageReq = new CustomizeInstanceSegmentImageRequest([]);
        OpenApiUtilClient::convert($request, $customizeInstanceSegmentImageReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $customizeInstanceSegmentImageReq->imageUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->customizeInstanceSegmentImageWithOptions($customizeInstanceSegmentImageReq, $runtime);
    }

    /**
     * @param DebugServiceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DebugServiceResponse
     */
    public function debugServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->param)) {
            $body['Param'] = $request->param;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DebugService',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DebugServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DebugServiceRequest $request
     *
     * @return DebugServiceResponse
     */
    public function debugService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->debugServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataReflowDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDataReflowDataResponse
     */
    public function deleteDataReflowDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataReflowData',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataReflowDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataReflowDataRequest $request
     *
     * @return DeleteDataReflowDataResponse
     */
    public function deleteDataReflowData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataReflowDataWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($request, $runtime)
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
            'action'      => 'DeleteDataset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatasetRequest $request
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLabelsetRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteLabelsetResponse
     */
    public function deleteLabelsetWithOptions($request, $runtime)
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
            'action'      => 'DeleteLabelset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLabelsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLabelsetRequest $request
     *
     * @return DeleteLabelsetResponse
     */
    public function deleteLabelset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLabelsetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLabelsetDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLabelsetDataResponse
     */
    public function deleteLabelsetDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLabelsetData',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLabelsetDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLabelsetDataRequest $request
     *
     * @return DeleteLabelsetDataResponse
     */
    public function deleteLabelsetData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLabelsetDataWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
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
            'action'      => 'DeleteService',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrainTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTrainTaskResponse
     */
    public function deleteTrainTaskWithOptions($request, $runtime)
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
            'action'      => 'DeleteTrainTask',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrainTaskRequest $request
     *
     * @return DeleteTrainTaskResponse
     */
    public function deleteTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrainTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($request, $runtime)
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
            'action'      => 'DeleteWorkspace',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWorkspaceRequest $request
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param DisableDataReflowRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableDataReflowResponse
     */
    public function disableDataReflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableDataReflow',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDataReflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableDataReflowRequest $request
     *
     * @return DisableDataReflowResponse
     */
    public function disableDataReflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDataReflowWithOptions($request, $runtime);
    }

    /**
     * @param DownloadDatasetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DownloadDatasetResponse
     */
    public function downloadDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadDataset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadDatasetRequest $request
     *
     * @return DownloadDatasetResponse
     */
    public function downloadDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDatasetWithOptions($request, $runtime);
    }

    /**
     * @param DownloadFileNameListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DownloadFileNameListResponse
     */
    public function downloadFileNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['Identity'] = $request->identity;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadFileNameList',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadFileNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadFileNameListRequest $request
     *
     * @return DownloadFileNameListResponse
     */
    public function downloadFileNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadFileNameListWithOptions($request, $runtime);
    }

    /**
     * @param DownloadLabelFileRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DownloadLabelFileResponse
     */
    public function downloadLabelFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DownloadLabelFile',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadLabelFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadLabelFileRequest $request
     *
     * @return DownloadLabelFileResponse
     */
    public function downloadLabelFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadLabelFileWithOptions($request, $runtime);
    }

    /**
     * @param EnableDataReflowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EnableDataReflowResponse
     */
    public function enableDataReflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataReflowOssPath)) {
            $body['DataReflowOssPath'] = $request->dataReflowOssPath;
        }
        if (!Utils::isUnset($request->dataReflowRate)) {
            $body['DataReflowRate'] = $request->dataReflowRate;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableDataReflow',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableDataReflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableDataReflowRequest $request
     *
     * @return EnableDataReflowResponse
     */
    public function enableDataReflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDataReflowWithOptions($request, $runtime);
    }

    /**
     * @param ExportDataReflowDataListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ExportDataReflowDataListResponse
     */
    public function exportDataReflowDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->imageName)) {
            $body['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportDataReflowDataList',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportDataReflowDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportDataReflowDataListRequest $request
     *
     * @return ExportDataReflowDataListResponse
     */
    public function exportDataReflowDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDataReflowDataListWithOptions($request, $runtime);
    }

    /**
     * @param GetDatasetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetDatasetResponse
     */
    public function getDatasetWithOptions($request, $runtime)
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
            'action'      => 'GetDataset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDatasetRequest $request
     *
     * @return GetDatasetResponse
     */
    public function getDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetWithOptions($request, $runtime);
    }

    /**
     * @param GetDiffCountLabelsetAndDatasetRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetDiffCountLabelsetAndDatasetResponse
     */
    public function getDiffCountLabelsetAndDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labelsetId)) {
            $body['LabelsetId'] = $request->labelsetId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDiffCountLabelsetAndDataset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiffCountLabelsetAndDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiffCountLabelsetAndDatasetRequest $request
     *
     * @return GetDiffCountLabelsetAndDatasetResponse
     */
    public function getDiffCountLabelsetAndDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiffCountLabelsetAndDatasetWithOptions($request, $runtime);
    }

    /**
     * @param GetLabelDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetLabelDetailResponse
     */
    public function getLabelDetailWithOptions($request, $runtime)
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
            'action'      => 'GetLabelDetail',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLabelDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLabelDetailRequest $request
     *
     * @return GetLabelDetailResponse
     */
    public function getLabelDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLabelDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetLabelsetRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetLabelsetResponse
     */
    public function getLabelsetWithOptions($request, $runtime)
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
            'action'      => 'GetLabelset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLabelsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLabelsetRequest $request
     *
     * @return GetLabelsetResponse
     */
    public function getLabelset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLabelsetWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $runtime)
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
            'action'      => 'GetService',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceInvokeRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return GetServiceInvokeResponse
     */
    public function getServiceInvokeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetServiceInvokeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callerParentIdList)) {
            $request->callerParentIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callerParentIdList, 'CallerParentIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->callerParentIdListShrink)) {
            $body['CallerParentIdList'] = $request->callerParentIdListShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceInvoke',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceInvokeRequest $request
     *
     * @return GetServiceInvokeResponse
     */
    public function getServiceInvoke($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInvokeWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceQpsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetServiceQpsResponse
     */
    public function getServiceQpsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetServiceQpsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callerParentIdList)) {
            $request->callerParentIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callerParentIdList, 'CallerParentIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->callerParentIdListShrink)) {
            $body['CallerParentIdList'] = $request->callerParentIdListShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceQps',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceQpsRequest $request
     *
     * @return GetServiceQpsResponse
     */
    public function getServiceQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceQpsWithOptions($request, $runtime);
    }

    /**
     * @param GetTrainModelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTrainModelResponse
     */
    public function getTrainModelWithOptions($request, $runtime)
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
            'action'      => 'GetTrainModel',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrainModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrainModelRequest $request
     *
     * @return GetTrainModelResponse
     */
    public function getTrainModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrainModelWithOptions($request, $runtime);
    }

    /**
     * @param GetTrainTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTrainTaskResponse
     */
    public function getTrainTaskWithOptions($request, $runtime)
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
            'action'      => 'GetTrainTask',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrainTaskRequest $request
     *
     * @return GetTrainTaskResponse
     */
    public function getTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrainTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTrainTaskEstimatedTimeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetTrainTaskEstimatedTimeResponse
     */
    public function getTrainTaskEstimatedTimeWithOptions($request, $runtime)
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
            'action'      => 'GetTrainTaskEstimatedTime',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTrainTaskEstimatedTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTrainTaskEstimatedTimeRequest $request
     *
     * @return GetTrainTaskEstimatedTimeResponse
     */
    public function getTrainTaskEstimatedTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTrainTaskEstimatedTimeWithOptions($request, $runtime);
    }

    /**
     * @param GetUploadPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetUploadPolicyResponse
     */
    public function getUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUploadPolicy',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUploadPolicyRequest $request
     *
     * @return GetUploadPolicyResponse
     */
    public function getUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetWorkspaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($request, $runtime)
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
            'action'      => 'GetWorkspace',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param ListDataReflowDatasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataReflowDatasResponse
     */
    public function listDataReflowDatasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->imageName)) {
            $body['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataReflowDatas',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataReflowDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataReflowDatasRequest $request
     *
     * @return ListDataReflowDatasResponse
     */
    public function listDataReflowDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataReflowDatasWithOptions($request, $runtime);
    }

    /**
     * @param ListDatasetDatasRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDatasetDatasResponse
     */
    public function listDatasetDatasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['Identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDatasetDatas',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatasetDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDatasetDatasRequest $request
     *
     * @return ListDatasetDatasResponse
     */
    public function listDatasetDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetDatasWithOptions($request, $runtime);
    }

    /**
     * @param ListDatasetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDatasets',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDatasetsRequest $request
     *
     * @return ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetsWithOptions($request, $runtime);
    }

    /**
     * @param ListLabelsetDatasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLabelsetDatasResponse
     */
    public function listLabelsetDatasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->isAbandon)) {
            $body['IsAbandon'] = $request->isAbandon;
        }
        if (!Utils::isUnset($request->labelId)) {
            $body['LabelId'] = $request->labelId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLabelsetDatas',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLabelsetDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLabelsetDatasRequest $request
     *
     * @return ListLabelsetDatasResponse
     */
    public function listLabelsetDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLabelsetDatasWithOptions($request, $runtime);
    }

    /**
     * @param ListLabelsetsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListLabelsetsResponse
     */
    public function listLabelsetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListLabelsets',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLabelsetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLabelsetsRequest $request
     *
     * @return ListLabelsetsResponse
     */
    public function listLabelsets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLabelsetsWithOptions($request, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @param ListTrainTasksRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTrainTasksResponse
     */
    public function listTrainTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTrainTasks',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrainTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrainTasksRequest $request
     *
     * @return ListTrainTasksResponse
     */
    public function listTrainTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrainTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListWorkspacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspacesWithOptions($request, $runtime);
    }

    /**
     * @param SetDatasetUserOssPathRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDatasetUserOssPathResponse
     */
    public function setDatasetUserOssPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->userOssUrl)) {
            $body['UserOssUrl'] = $request->userOssUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetDatasetUserOssPath',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDatasetUserOssPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDatasetUserOssPathRequest $request
     *
     * @return SetDatasetUserOssPathResponse
     */
    public function setDatasetUserOssPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDatasetUserOssPathWithOptions($request, $runtime);
    }

    /**
     * @param StartServiceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartServiceResponse
     */
    public function startServiceWithOptions($request, $runtime)
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
            'action'      => 'StartService',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartServiceRequest $request
     *
     * @return StartServiceResponse
     */
    public function startService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startServiceWithOptions($request, $runtime);
    }

    /**
     * @param StartTrainTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartTrainTaskResponse
     */
    public function startTrainTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->forceStartFlag)) {
            $body['ForceStartFlag'] = $request->forceStartFlag;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->relyOnTaskId)) {
            $body['RelyOnTaskId'] = $request->relyOnTaskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartTrainTask',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartTrainTaskRequest $request
     *
     * @return StartTrainTaskResponse
     */
    public function startTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTrainTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopServiceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopServiceResponse
     */
    public function stopServiceWithOptions($request, $runtime)
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
            'action'      => 'StopService',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopServiceRequest $request
     *
     * @return StopServiceResponse
     */
    public function stopService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopServiceWithOptions($request, $runtime);
    }

    /**
     * @param StopTrainTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopTrainTaskResponse
     */
    public function stopTrainTaskWithOptions($request, $runtime)
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
            'action'      => 'StopTrainTask',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopTrainTaskRequest $request
     *
     * @return StopTrainTaskResponse
     */
    public function stopTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTrainTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDatasetRequest $request
     *
     * @return UpdateDatasetResponse
     */
    public function updateDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDatasetWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLabelsetRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateLabelsetResponse
     */
    public function updateLabelsetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->objectKey)) {
            $body['ObjectKey'] = $request->objectKey;
        }
        if (!Utils::isUnset($request->tagUserList)) {
            $body['TagUserList'] = $request->tagUserList;
        }
        if (!Utils::isUnset($request->userOssUrl)) {
            $body['UserOssUrl'] = $request->userOssUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLabelset',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLabelsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLabelsetRequest $request
     *
     * @return UpdateLabelsetResponse
     */
    public function updateLabelset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLabelsetWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizationType)) {
            $body['AuthorizationType'] = $request->authorizationType;
        }
        if (!Utils::isUnset($request->authorizedAccount)) {
            $body['AuthorizedAccount'] = $request->authorizedAccount;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateService',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrainTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTrainTaskResponse
     */
    public function updateTrainTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->advancedParameters)) {
            $body['AdvancedParameters'] = $request->advancedParameters;
        }
        if (!Utils::isUnset($request->datasetIds)) {
            $body['DatasetIds'] = $request->datasetIds;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->labelIds)) {
            $body['LabelIds'] = $request->labelIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->preTrainTaskFlag)) {
            $body['PreTrainTaskFlag'] = $request->preTrainTaskFlag;
        }
        if (!Utils::isUnset($request->preTrainTaskId)) {
            $body['PreTrainTaskId'] = $request->preTrainTaskId;
        }
        if (!Utils::isUnset($request->trainMode)) {
            $body['TrainMode'] = $request->trainMode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrainTask',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrainTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTrainTaskRequest $request
     *
     * @return UpdateTrainTaskResponse
     */
    public function updateTrainTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrainTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspace',
            'version'     => '2021-11-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkspaceRequest $request
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkspaceWithOptions($request, $runtime);
    }
}
