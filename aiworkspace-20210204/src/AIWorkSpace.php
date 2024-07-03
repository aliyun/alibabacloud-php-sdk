<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddMemberRoleResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateCodeSourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateMemberRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateMemberResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceResourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceResourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteMembersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteMembersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelVersionLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelVersionLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteWorkspaceResourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteWorkspaceResourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetImageRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetMemberRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetMemberResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetServiceTemplateResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListCodeSourcesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListCodeSourcesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImageLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImageLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImagesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImagesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListMembersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListMembersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelVersionsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelVersionsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListPermissionsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListServiceTemplatesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListServiceTemplatesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspaceUsersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspaceUsersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\PublishCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\PublishDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\PublishImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\RemoveImageLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\RemoveImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\RemoveMemberRoleResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDefaultWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDefaultWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelVersionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceResourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceResourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AIWorkSpace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aiworkspace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 增加 Image
     *  *
     * @param AddImageRequest $request AddImageRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImageResponse AddImageResponse
     */
    public function addImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageUri)) {
            $body['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增加 Image
     *  *
     * @param AddImageRequest $request AddImageRequest
     *
     * @return AddImageResponse AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 增加 Image 的标签
     *  *
     * @param string                $ImageId
     * @param AddImageLabelsRequest $request AddImageLabelsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImageLabelsResponse AddImageLabelsResponse
     */
    public function addImageLabelsWithOptions($ImageId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImageLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . OpenApiUtilClient::getEncodeParam($ImageId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增加 Image 的标签
     *  *
     * @param string                $ImageId
     * @param AddImageLabelsRequest $request AddImageLabelsRequest
     *
     * @return AddImageLabelsResponse AddImageLabelsResponse
     */
    public function addImageLabels($ImageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addImageLabelsWithOptions($ImageId, $request, $headers, $runtime);
    }

    /**
     * @summary 增加成员角色
     *  *
     * @param string         $WorkspaceId
     * @param string         $MemberId
     * @param string         $RoleName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return AddMemberRoleResponse AddMemberRoleResponse
     */
    public function addMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AddMemberRole',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/members/' . OpenApiUtilClient::getEncodeParam($MemberId) . '/roles/' . OpenApiUtilClient::getEncodeParam($RoleName) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddMemberRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增加成员角色
     *  *
     * @param string $WorkspaceId
     * @param string $MemberId
     * @param string $RoleName
     *
     * @return AddMemberRoleResponse AddMemberRoleResponse
     */
    public function addMemberRole($WorkspaceId, $MemberId, $RoleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime);
    }

    /**
     * @summary 创建一个代码源配置
     *  *
     * @param CreateCodeSourceRequest $request CreateCodeSourceRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCodeSourceResponse CreateCodeSourceResponse
     */
    public function createCodeSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->codeBranch)) {
            $body['CodeBranch'] = $request->codeBranch;
        }
        if (!Utils::isUnset($request->codeRepo)) {
            $body['CodeRepo'] = $request->codeRepo;
        }
        if (!Utils::isUnset($request->codeRepoAccessToken)) {
            $body['CodeRepoAccessToken'] = $request->codeRepoAccessToken;
        }
        if (!Utils::isUnset($request->codeRepoUserName)) {
            $body['CodeRepoUserName'] = $request->codeRepoUserName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->mountPath)) {
            $body['MountPath'] = $request->mountPath;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个代码源配置
     *  *
     * @param CreateCodeSourceRequest $request CreateCodeSourceRequest
     *
     * @return CreateCodeSourceResponse CreateCodeSourceResponse
     */
    public function createCodeSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCodeSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建数据集
     *  *
     * @param CreateDatasetRequest $request CreateDatasetRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatasetResponse CreateDatasetResponse
     */
    public function createDatasetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->dataType)) {
            $body['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->property)) {
            $body['Property'] = $request->property;
        }
        if (!Utils::isUnset($request->provider)) {
            $body['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->providerType)) {
            $body['ProviderType'] = $request->providerType;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据集
     *  *
     * @param CreateDatasetRequest $request CreateDatasetRequest
     *
     * @return CreateDatasetResponse CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建或更新 Dataset 的标签
     *  *
     * @param string                     $DatasetId
     * @param CreateDatasetLabelsRequest $request   CreateDatasetLabelsRequest
     * @param string[]                   $headers   map
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateDatasetLabelsResponse CreateDatasetLabelsResponse
     */
    public function createDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . OpenApiUtilClient::getEncodeParam($DatasetId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDatasetLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建或更新 Dataset 的标签
     *  *
     * @param string                     $DatasetId
     * @param CreateDatasetLabelsRequest $request   CreateDatasetLabelsRequest
     *
     * @return CreateDatasetLabelsResponse CreateDatasetLabelsResponse
     */
    public function createDatasetLabels($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建成员
     *  *
     * @param string              $WorkspaceId
     * @param CreateMemberRequest $request     CreateMemberRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateMemberResponse CreateMemberResponse
     */
    public function createMemberWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->members)) {
            $body['Members'] = $request->members;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMember',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建成员
     *  *
     * @param string              $WorkspaceId
     * @param CreateMemberRequest $request     CreateMemberRequest
     *
     * @return CreateMemberResponse CreateMemberResponse
     */
    public function createMember($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemberWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建模型
     *  *
     * @param CreateModelRequest $request CreateModelRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateModelResponse CreateModelResponse
     */
    public function createModelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->modelDescription)) {
            $body['ModelDescription'] = $request->modelDescription;
        }
        if (!Utils::isUnset($request->modelDoc)) {
            $body['ModelDoc'] = $request->modelDoc;
        }
        if (!Utils::isUnset($request->modelName)) {
            $body['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->orderNumber)) {
            $body['OrderNumber'] = $request->orderNumber;
        }
        if (!Utils::isUnset($request->origin)) {
            $body['Origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->task)) {
            $body['Task'] = $request->task;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建模型
     *  *
     * @param CreateModelRequest $request CreateModelRequest
     *
     * @return CreateModelResponse CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建或更新模型的标签
     *  *
     * @param string                   $ModelId
     * @param CreateModelLabelsRequest $request CreateModelLabelsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateModelLabelsResponse CreateModelLabelsResponse
     */
    public function createModelLabelsWithOptions($ModelId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModelLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModelLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建或更新模型的标签
     *  *
     * @param string                   $ModelId
     * @param CreateModelLabelsRequest $request CreateModelLabelsRequest
     *
     * @return CreateModelLabelsResponse CreateModelLabelsResponse
     */
    public function createModelLabels($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelLabelsWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建模型版本
     *  *
     * @param string                    $ModelId
     * @param CreateModelVersionRequest $request CreateModelVersionRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateModelVersionResponse CreateModelVersionResponse
     */
    public function createModelVersionWithOptions($ModelId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->approvalStatus)) {
            $body['ApprovalStatus'] = $request->approvalStatus;
        }
        if (!Utils::isUnset($request->compressionSpec)) {
            $body['CompressionSpec'] = $request->compressionSpec;
        }
        if (!Utils::isUnset($request->evaluationSpec)) {
            $body['EvaluationSpec'] = $request->evaluationSpec;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->frameworkType)) {
            $body['FrameworkType'] = $request->frameworkType;
        }
        if (!Utils::isUnset($request->inferenceSpec)) {
            $body['InferenceSpec'] = $request->inferenceSpec;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->metrics)) {
            $body['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->trainingSpec)) {
            $body['TrainingSpec'] = $request->trainingSpec;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        if (!Utils::isUnset($request->versionDescription)) {
            $body['VersionDescription'] = $request->versionDescription;
        }
        if (!Utils::isUnset($request->versionName)) {
            $body['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建模型版本
     *  *
     * @param string                    $ModelId
     * @param CreateModelVersionRequest $request CreateModelVersionRequest
     *
     * @return CreateModelVersionResponse CreateModelVersionResponse
     */
    public function createModelVersion($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelVersionWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建或更新模型版本的标签
     *  *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param CreateModelVersionLabelsRequest $request     CreateModelVersionLabelsRequest
     * @param string[]                        $headers     map
     * @param RuntimeOptions                  $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateModelVersionLabelsResponse CreateModelVersionLabelsResponse
     */
    public function createModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModelVersionLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/versions/' . OpenApiUtilClient::getEncodeParam($VersionName) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModelVersionLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建或更新模型版本的标签
     *  *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param CreateModelVersionLabelsRequest $request     CreateModelVersionLabelsRequest
     *
     * @return CreateModelVersionLabelsResponse CreateModelVersionLabelsResponse
     */
    public function createModelVersionLabels($ModelId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * @summary 创建产品订单
     *  *
     * @param CreateProductOrdersRequest $request CreateProductOrdersRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProductOrdersResponse CreateProductOrdersResponse
     */
    public function createProductOrdersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoPay)) {
            $body['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->products)) {
            $body['Products'] = $request->products;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProductOrders',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/productorders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProductOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建产品订单
     *  *
     * @param CreateProductOrdersRequest $request CreateProductOrdersRequest
     *
     * @return CreateProductOrdersResponse CreateProductOrdersResponse
     */
    public function createProductOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param CreateWorkspaceRequest $request CreateWorkspaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->envTypes)) {
            $body['EnvTypes'] = $request->envTypes;
        }
        if (!Utils::isUnset($request->workspaceName)) {
            $body['WorkspaceName'] = $request->workspaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param CreateWorkspaceRequest $request CreateWorkspaceRequest
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建资源
     *  *
     * @param string                         $WorkspaceId
     * @param CreateWorkspaceResourceRequest $request     CreateWorkspaceResourceRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateWorkspaceResourceResponse CreateWorkspaceResourceResponse
     */
    public function createWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->option)) {
            $body['Option'] = $request->option;
        }
        if (!Utils::isUnset($request->resources)) {
            $body['Resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspaceResource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/resources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建资源
     *  *
     * @param string                         $WorkspaceId
     * @param CreateWorkspaceResourceRequest $request     CreateWorkspaceResourceRequest
     *
     * @return CreateWorkspaceResourceResponse CreateWorkspaceResourceResponse
     */
    public function createWorkspaceResource($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除一个代码源配置
     *  *
     * @param string         $CodeSourceId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteCodeSourceResponse DeleteCodeSourceResponse
     */
    public function deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . OpenApiUtilClient::getEncodeParam($CodeSourceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个代码源配置
     *  *
     * @param string $CodeSourceId
     *
     * @return DeleteCodeSourceResponse DeleteCodeSourceResponse
     */
    public function deleteCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * @summary 删除数据集
     *  *
     * @param string         $DatasetId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($DatasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . OpenApiUtilClient::getEncodeParam($DatasetId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据集
     *  *
     * @param string $DatasetId
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
     */
    public function deleteDataset($DatasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetWithOptions($DatasetId, $headers, $runtime);
    }

    /**
     * @summary 删除 Dataset 的标签
     *  *
     * @param string                     $DatasetId
     * @param DeleteDatasetLabelsRequest $request   DeleteDatasetLabelsRequest
     * @param string[]                   $headers   map
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteDatasetLabelsResponse DeleteDatasetLabelsResponse
     */
    public function deleteDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labelKeys)) {
            $query['LabelKeys'] = $request->labelKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . OpenApiUtilClient::getEncodeParam($DatasetId) . '/labels',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDatasetLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除 Dataset 的标签
     *  *
     * @param string                     $DatasetId
     * @param DeleteDatasetLabelsRequest $request   DeleteDatasetLabelsRequest
     *
     * @return DeleteDatasetLabelsResponse DeleteDatasetLabelsResponse
     */
    public function deleteDatasetLabels($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除工作空间成员
     *  *
     * @param string               $WorkspaceId
     * @param DeleteMembersRequest $request     DeleteMembersRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteMembersResponse DeleteMembersResponse
     */
    public function deleteMembersWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberIds)) {
            $query['MemberIds'] = $request->memberIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMembers',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/members',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作空间成员
     *  *
     * @param string               $WorkspaceId
     * @param DeleteMembersRequest $request     DeleteMembersRequest
     *
     * @return DeleteMembersResponse DeleteMembersResponse
     */
    public function deleteMembers($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMembersWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除模型
     *  *
     * @param string         $ModelId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteModelResponse DeleteModelResponse
     */
    public function deleteModelWithOptions($ModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除模型
     *  *
     * @param string $ModelId
     *
     * @return DeleteModelResponse DeleteModelResponse
     */
    public function deleteModel($ModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelWithOptions($ModelId, $headers, $runtime);
    }

    /**
     * @summary 删除模型的标签
     *  *
     * @param string                   $ModelId
     * @param DeleteModelLabelsRequest $request DeleteModelLabelsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteModelLabelsResponse DeleteModelLabelsResponse
     */
    public function deleteModelLabelsWithOptions($ModelId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labelKeys)) {
            $query['LabelKeys'] = $request->labelKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteModelLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/labels',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteModelLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除模型的标签
     *  *
     * @param string                   $ModelId
     * @param DeleteModelLabelsRequest $request DeleteModelLabelsRequest
     *
     * @return DeleteModelLabelsResponse DeleteModelLabelsResponse
     */
    public function deleteModelLabels($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelLabelsWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除模型版本
     *  *
     * @param string         $ModelId
     * @param string         $VersionName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteModelVersionResponse DeleteModelVersionResponse
     */
    public function deleteModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/versions/' . OpenApiUtilClient::getEncodeParam($VersionName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除模型版本
     *  *
     * @param string $ModelId
     * @param string $VersionName
     *
     * @return DeleteModelVersionResponse DeleteModelVersionResponse
     */
    public function deleteModelVersion($ModelId, $VersionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime);
    }

    /**
     * @summary 删除模型版本的标签
     *  *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param DeleteModelVersionLabelsRequest $request     DeleteModelVersionLabelsRequest
     * @param string[]                        $headers     map
     * @param RuntimeOptions                  $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteModelVersionLabelsResponse DeleteModelVersionLabelsResponse
     */
    public function deleteModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labelKeys)) {
            $query['LabelKeys'] = $request->labelKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteModelVersionLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/versions/' . OpenApiUtilClient::getEncodeParam($VersionName) . '/labels',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteModelVersionLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除模型版本的标签
     *  *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param DeleteModelVersionLabelsRequest $request     DeleteModelVersionLabelsRequest
     *
     * @return DeleteModelVersionLabelsResponse DeleteModelVersionLabelsResponse
     */
    public function deleteModelVersionLabels($ModelId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * @summary 删除工作空间
     *  *
     * @param string         $WorkspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkspaceResponse DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($WorkspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作空间
     *  *
     * @param string $WorkspaceId
     *
     * @return DeleteWorkspaceResponse DeleteWorkspaceResponse
     */
    public function deleteWorkspace($WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($WorkspaceId, $headers, $runtime);
    }

    /**
     * @summary 删除工作空间资源
     *  *
     * @param string                         $WorkspaceId
     * @param DeleteWorkspaceResourceRequest $request     DeleteWorkspaceResourceRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkspaceResourceResponse DeleteWorkspaceResourceResponse
     */
    public function deleteWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceResource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/resources',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作空间资源
     *  *
     * @param string                         $WorkspaceId
     * @param DeleteWorkspaceResourceRequest $request     DeleteWorkspaceResourceRequest
     *
     * @return DeleteWorkspaceResourceResponse DeleteWorkspaceResourceResponse
     */
    public function deleteWorkspaceResource($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取一个代码源配置
     *  *
     * @param string         $CodeSourceId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetCodeSourceResponse GetCodeSourceResponse
     */
    public function getCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . OpenApiUtilClient::getEncodeParam($CodeSourceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个代码源配置
     *  *
     * @param string $CodeSourceId
     *
     * @return GetCodeSourceResponse GetCodeSourceResponse
     */
    public function getCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * @summary 获取数据集
     *  *
     * @param string         $DatasetId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDatasetResponse GetDatasetResponse
     */
    public function getDatasetWithOptions($DatasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . OpenApiUtilClient::getEncodeParam($DatasetId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据集
     *  *
     * @param string $DatasetId
     *
     * @return GetDatasetResponse GetDatasetResponse
     */
    public function getDataset($DatasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetWithOptions($DatasetId, $headers, $runtime);
    }

    /**
     * @summary 获取默认工作空间
     *  *
     * @param GetDefaultWorkspaceRequest $request GetDefaultWorkspaceRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDefaultWorkspaceResponse GetDefaultWorkspaceResponse
     */
    public function getDefaultWorkspaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDefaultWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/defaultWorkspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDefaultWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取默认工作空间
     *  *
     * @param GetDefaultWorkspaceRequest $request GetDefaultWorkspaceRequest
     *
     * @return GetDefaultWorkspaceResponse GetDefaultWorkspaceResponse
     */
    public function getDefaultWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDefaultWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取镜像
     *  *
     * @param string          $ImageId
     * @param GetImageRequest $request GetImageRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImageWithOptions($ImageId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . OpenApiUtilClient::getEncodeParam($ImageId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取镜像
     *  *
     * @param string          $ImageId
     * @param GetImageRequest $request GetImageRequest
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImage($ImageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageWithOptions($ImageId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取成员
     *  *
     * @param string           $WorkspaceId
     * @param GetMemberRequest $request     GetMemberRequest
     * @param string[]         $headers     map
     * @param RuntimeOptions   $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetMemberResponse GetMemberResponse
     */
    public function getMemberWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMember',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/member',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取成员
     *  *
     * @param string           $WorkspaceId
     * @param GetMemberRequest $request     GetMemberRequest
     *
     * @return GetMemberResponse GetMemberResponse
     */
    public function getMember($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemberWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取模型
     *  *
     * @param string         $ModelId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetModelResponse GetModelResponse
     */
    public function getModelWithOptions($ModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模型
     *  *
     * @param string $ModelId
     *
     * @return GetModelResponse GetModelResponse
     */
    public function getModel($ModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelWithOptions($ModelId, $headers, $runtime);
    }

    /**
     * @summary 获取模型版本
     *  *
     * @param string         $ModelId
     * @param string         $VersionName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetModelVersionResponse GetModelVersionResponse
     */
    public function getModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/versions/' . OpenApiUtilClient::getEncodeParam($VersionName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模型版本
     *  *
     * @param string $ModelId
     * @param string $VersionName
     *
     * @return GetModelVersionResponse GetModelVersionResponse
     */
    public function getModelVersion($ModelId, $VersionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime);
    }

    /**
     * @summary 获取权限，若无权限则返回错误
     *  *
     * @param string               $WorkspaceId
     * @param string               $PermissionCode
     * @param GetPermissionRequest $request        GetPermissionRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetPermissionResponse GetPermissionResponse
     */
    public function getPermissionWithOptions($WorkspaceId, $PermissionCode, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessibility)) {
            $query['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPermission',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/permissions/' . OpenApiUtilClient::getEncodeParam($PermissionCode) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取权限，若无权限则返回错误
     *  *
     * @param string               $WorkspaceId
     * @param string               $PermissionCode
     * @param GetPermissionRequest $request        GetPermissionRequest
     *
     * @return GetPermissionResponse GetPermissionResponse
     */
    public function getPermission($WorkspaceId, $PermissionCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPermissionWithOptions($WorkspaceId, $PermissionCode, $request, $headers, $runtime);
    }

    /**
     * @summary 获取服务模版
     *  *
     * @param string         $ServiceTemplateId
     * @param string[]       $headers           map
     * @param RuntimeOptions $runtime           runtime options for this request RuntimeOptions
     *
     * @return GetServiceTemplateResponse GetServiceTemplateResponse
     */
    public function getServiceTemplateWithOptions($ServiceTemplateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetServiceTemplate',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/servicetemplates/' . OpenApiUtilClient::getEncodeParam($ServiceTemplateId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务模版
     *  *
     * @param string $ServiceTemplateId
     *
     * @return GetServiceTemplateResponse GetServiceTemplateResponse
     */
    public function getServiceTemplate($ServiceTemplateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceTemplateWithOptions($ServiceTemplateId, $headers, $runtime);
    }

    /**
     * @summary 获取工作空间
     *  *
     * @param string              $WorkspaceId
     * @param GetWorkspaceRequest $request     GetWorkspaceRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作空间
     *  *
     * @param string              $WorkspaceId
     * @param GetWorkspaceRequest $request     GetWorkspaceRequest
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspace($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取代码源配置列表
     *  *
     * @param ListCodeSourcesRequest $request ListCodeSourcesRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCodeSourcesResponse ListCodeSourcesResponse
     */
    public function listCodeSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCodeSources',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCodeSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取代码源配置列表
     *  *
     * @param ListCodeSourcesRequest $request ListCodeSourcesRequest
     *
     * @return ListCodeSourcesResponse ListCodeSourcesResponse
     */
    public function listCodeSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCodeSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取数据集列表
     *  *
     * @param ListDatasetsRequest $request ListDatasetsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatasetsResponse ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceTypes)) {
            $query['DataSourceTypes'] = $request->dataSourceTypes;
        }
        if (!Utils::isUnset($request->dataTypes)) {
            $query['DataTypes'] = $request->dataTypes;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->properties)) {
            $query['Properties'] = $request->properties;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceTypes)) {
            $query['SourceTypes'] = $request->sourceTypes;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasets',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取数据集列表
     *  *
     * @param ListDatasetsRequest $request ListDatasetsRequest
     *
     * @return ListDatasetsResponse ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举标签
     *  *
     * @param ListImageLabelsRequest $request ListImageLabelsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImageLabelsResponse ListImageLabelsResponse
     */
    public function listImageLabelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->labelFilter)) {
            $query['LabelFilter'] = $request->labelFilter;
        }
        if (!Utils::isUnset($request->labelKeys)) {
            $query['LabelKeys'] = $request->labelKeys;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImageLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/image/labels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举标签
     *  *
     * @param ListImageLabelsRequest $request ListImageLabelsRequest
     *
     * @return ListImageLabelsResponse ListImageLabelsResponse
     */
    public function listImageLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImageLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举已注册镜像
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessibility)) {
            $query['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentUserId)) {
            $query['ParentUserId'] = $request->parentUserId;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举已注册镜像
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举工作空间成员
     *  *
     * @param string             $WorkspaceId
     * @param ListMembersRequest $request     ListMembersRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListMembersResponse ListMembersResponse
     */
    public function listMembersWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberName)) {
            $query['MemberName'] = $request->memberName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->roles)) {
            $query['Roles'] = $request->roles;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMembers',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举工作空间成员
     *  *
     * @param string             $WorkspaceId
     * @param ListMembersRequest $request     ListMembersRequest
     *
     * @return ListMembersResponse ListMembersResponse
     */
    public function listMembers($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMembersWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取模型版本列表
     *  *
     * @param string                   $ModelId
     * @param ListModelVersionsRequest $request ListModelVersionsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListModelVersionsResponse ListModelVersionsResponse
     */
    public function listModelVersionsWithOptions($ModelId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approvalStatus)) {
            $query['ApprovalStatus'] = $request->approvalStatus;
        }
        if (!Utils::isUnset($request->formatType)) {
            $query['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->frameworkType)) {
            $query['FrameworkType'] = $request->frameworkType;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->versionName)) {
            $query['VersionName'] = $request->versionName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModelVersions',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModelVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模型版本列表
     *  *
     * @param string                   $ModelId
     * @param ListModelVersionsRequest $request ListModelVersionsRequest
     *
     * @return ListModelVersionsResponse ListModelVersionsResponse
     */
    public function listModelVersions($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelVersionsWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取模型列表
     *  *
     * @param ListModelsRequest $request ListModelsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListModelsResponse ListModelsResponse
     */
    public function listModelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->collections)) {
            $query['Collections'] = $request->collections;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->origin)) {
            $query['Origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->task)) {
            $query['Task'] = $request->task;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模型列表
     *  *
     * @param ListModelsRequest $request ListModelsRequest
     *
     * @return ListModelsResponse ListModelsResponse
     */
    public function listModels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举权限
     *  *
     * @param string         $WorkspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListPermissionsResponse ListPermissionsResponse
     */
    public function listPermissionsWithOptions($WorkspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListPermissions',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/permissions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举权限
     *  *
     * @param string $WorkspaceId
     *
     * @return ListPermissionsResponse ListPermissionsResponse
     */
    public function listPermissions($WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionsWithOptions($WorkspaceId, $headers, $runtime);
    }

    /**
     * @summary 列举产品
     *  *
     * @param ListProductsRequest $request ListProductsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productCodes)) {
            $query['ProductCodes'] = $request->productCodes;
        }
        if (!Utils::isUnset($request->serviceCodes)) {
            $query['ServiceCodes'] = $request->serviceCodes;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProducts',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/products',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举产品
     *  *
     * @param ListProductsRequest $request ListProductsRequest
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取已有配额列表
     *  *
     * @param ListQuotasRequest $request ListQuotasRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotasResponse ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQuotas',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取已有配额列表
     *  *
     * @param ListQuotasRequest $request ListQuotasRequest
     *
     * @return ListQuotasResponse ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举工作空间资源
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productTypes)) {
            $query['ProductTypes'] = $request->productTypes;
        }
        if (!Utils::isUnset($request->quotaIds)) {
            $query['QuotaIds'] = $request->quotaIds;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->verboseFields)) {
            $query['VerboseFields'] = $request->verboseFields;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举工作空间资源
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取服务模版列表
     *  *
     * @param ListServiceTemplatesRequest $request ListServiceTemplatesRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceTemplatesResponse ListServiceTemplatesResponse
     */
    public function listServiceTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->serviceTemplateName)) {
            $query['ServiceTemplateName'] = $request->serviceTemplateName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceTemplates',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/servicetemplates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务模版列表
     *  *
     * @param ListServiceTemplatesRequest $request ListServiceTemplatesRequest
     *
     * @return ListServiceTemplatesResponse ListServiceTemplatesResponse
     */
    public function listServiceTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列出工作空间的可变为成员的用户
     *  *
     * @param string                    $WorkspaceId
     * @param ListWorkspaceUsersRequest $request     ListWorkspaceUsersRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListWorkspaceUsersResponse ListWorkspaceUsersResponse
     */
    public function listWorkspaceUsersWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaceUsers',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspaceUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出工作空间的可变为成员的用户
     *  *
     * @param string                    $WorkspaceId
     * @param ListWorkspaceUsersRequest $request     ListWorkspaceUsersRequest
     *
     * @return ListWorkspaceUsersResponse ListWorkspaceUsersResponse
     */
    public function listWorkspaceUsers($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspaceUsersWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获得工作空间列表
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fields)) {
            $query['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->moduleList)) {
            $query['ModuleList'] = $request->moduleList;
        }
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->workspaceIds)) {
            $query['WorkspaceIds'] = $request->workspaceIds;
        }
        if (!Utils::isUnset($request->workspaceName)) {
            $query['WorkspaceName'] = $request->workspaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得工作空间列表
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发布一个代码源配置为本工作空间下所有人可见
     *  *
     * @param string         $CodeSourceId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return PublishCodeSourceResponse PublishCodeSourceResponse
     */
    public function publishCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . OpenApiUtilClient::getEncodeParam($CodeSourceId) . '/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布一个代码源配置为本工作空间下所有人可见
     *  *
     * @param string $CodeSourceId
     *
     * @return PublishCodeSourceResponse PublishCodeSourceResponse
     */
    public function publishCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * @summary 更新数据集
     *  *
     * @param string         $DatasetId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return PublishDatasetResponse PublishDatasetResponse
     */
    public function publishDatasetWithOptions($DatasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . OpenApiUtilClient::getEncodeParam($DatasetId) . '/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据集
     *  *
     * @param string $DatasetId
     *
     * @return PublishDatasetResponse PublishDatasetResponse
     */
    public function publishDataset($DatasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishDatasetWithOptions($DatasetId, $headers, $runtime);
    }

    /**
     * @summary 发布 Image
     *  *
     * @param string         $ImageId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishImageResponse PublishImageResponse
     */
    public function publishImageWithOptions($ImageId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . OpenApiUtilClient::getEncodeParam($ImageId) . '/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布 Image
     *  *
     * @param string $ImageId
     *
     * @return PublishImageResponse PublishImageResponse
     */
    public function publishImage($ImageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishImageWithOptions($ImageId, $headers, $runtime);
    }

    /**
     * @summary 删除 Image
     *  *
     * @param string         $ImageId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveImageResponse RemoveImageResponse
     */
    public function removeImageWithOptions($ImageId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . OpenApiUtilClient::getEncodeParam($ImageId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除 Image
     *  *
     * @param string $ImageId
     *
     * @return RemoveImageResponse RemoveImageResponse
     */
    public function removeImage($ImageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeImageWithOptions($ImageId, $headers, $runtime);
    }

    /**
     * @summary 删除 Image 的标签
     *  *
     * @param string         $ImageId
     * @param string         $LabelKey
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return RemoveImageLabelsResponse RemoveImageLabelsResponse
     */
    public function removeImageLabelsWithOptions($ImageId, $LabelKey, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveImageLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . OpenApiUtilClient::getEncodeParam($ImageId) . '/labels/' . OpenApiUtilClient::getEncodeParam($LabelKey) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除 Image 的标签
     *  *
     * @param string $ImageId
     * @param string $LabelKey
     *
     * @return RemoveImageLabelsResponse RemoveImageLabelsResponse
     */
    public function removeImageLabels($ImageId, $LabelKey)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeImageLabelsWithOptions($ImageId, $LabelKey, $headers, $runtime);
    }

    /**
     * @summary 删除成员角色
     *  *
     * @param string         $WorkspaceId
     * @param string         $MemberId
     * @param string         $RoleName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return RemoveMemberRoleResponse RemoveMemberRoleResponse
     */
    public function removeMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveMemberRole',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/members/' . OpenApiUtilClient::getEncodeParam($MemberId) . '/roles/' . OpenApiUtilClient::getEncodeParam($RoleName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveMemberRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除成员角色
     *  *
     * @param string $WorkspaceId
     * @param string $MemberId
     * @param string $RoleName
     *
     * @return RemoveMemberRoleResponse RemoveMemberRoleResponse
     */
    public function removeMemberRole($WorkspaceId, $MemberId, $RoleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime);
    }

    /**
     * @summary 更新数据集
     *  *
     * @param string               $DatasetId
     * @param UpdateDatasetRequest $request   UpdateDatasetRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateDatasetResponse UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($DatasetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . OpenApiUtilClient::getEncodeParam($DatasetId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新数据集
     *  *
     * @param string               $DatasetId
     * @param UpdateDatasetRequest $request   UpdateDatasetRequest
     *
     * @return UpdateDatasetResponse UpdateDatasetResponse
     */
    public function updateDataset($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新默认工作空间
     *  *
     * @param UpdateDefaultWorkspaceRequest $request UpdateDefaultWorkspaceRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDefaultWorkspaceResponse UpdateDefaultWorkspaceResponse
     */
    public function updateDefaultWorkspaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDefaultWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/defaultWorkspaces',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDefaultWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新默认工作空间
     *  *
     * @param UpdateDefaultWorkspaceRequest $request UpdateDefaultWorkspaceRequest
     *
     * @return UpdateDefaultWorkspaceResponse UpdateDefaultWorkspaceResponse
     */
    public function updateDefaultWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDefaultWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新模型
     *  *
     * @param string             $ModelId
     * @param UpdateModelRequest $request UpdateModelRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateModelResponse UpdateModelResponse
     */
    public function updateModelWithOptions($ModelId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->domain)) {
            $body['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->modelDescription)) {
            $body['ModelDescription'] = $request->modelDescription;
        }
        if (!Utils::isUnset($request->modelDoc)) {
            $body['ModelDoc'] = $request->modelDoc;
        }
        if (!Utils::isUnset($request->modelName)) {
            $body['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->orderNumber)) {
            $body['OrderNumber'] = $request->orderNumber;
        }
        if (!Utils::isUnset($request->origin)) {
            $body['Origin'] = $request->origin;
        }
        if (!Utils::isUnset($request->task)) {
            $body['Task'] = $request->task;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新模型
     *  *
     * @param string             $ModelId
     * @param UpdateModelRequest $request UpdateModelRequest
     *
     * @return UpdateModelResponse UpdateModelResponse
     */
    public function updateModel($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新模型版本
     *  *
     * @param string                    $ModelId
     * @param string                    $VersionName
     * @param UpdateModelVersionRequest $request     UpdateModelVersionRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateModelVersionResponse UpdateModelVersionResponse
     */
    public function updateModelVersionWithOptions($ModelId, $VersionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->approvalStatus)) {
            $body['ApprovalStatus'] = $request->approvalStatus;
        }
        if (!Utils::isUnset($request->compressionSpec)) {
            $body['CompressionSpec'] = $request->compressionSpec;
        }
        if (!Utils::isUnset($request->evaluationSpec)) {
            $body['EvaluationSpec'] = $request->evaluationSpec;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->inferenceSpec)) {
            $body['InferenceSpec'] = $request->inferenceSpec;
        }
        if (!Utils::isUnset($request->metrics)) {
            $body['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->trainingSpec)) {
            $body['TrainingSpec'] = $request->trainingSpec;
        }
        if (!Utils::isUnset($request->versionDescription)) {
            $body['VersionDescription'] = $request->versionDescription;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . OpenApiUtilClient::getEncodeParam($ModelId) . '/versions/' . OpenApiUtilClient::getEncodeParam($VersionName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新模型版本
     *  *
     * @param string                    $ModelId
     * @param string                    $VersionName
     * @param UpdateModelVersionRequest $request     UpdateModelVersionRequest
     *
     * @return UpdateModelVersionResponse UpdateModelVersionResponse
     */
    public function updateModelVersion($ModelId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelVersionWithOptions($ModelId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新工作空间
     *  *
     * @param string                 $WorkspaceId
     * @param UpdateWorkspaceRequest $request     UpdateWorkspaceRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkspaceResponse UpdateWorkspaceResponse
     */
    public function updateWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新工作空间
     *  *
     * @param string                 $WorkspaceId
     * @param UpdateWorkspaceRequest $request     UpdateWorkspaceRequest
     *
     * @return UpdateWorkspaceResponse UpdateWorkspaceResponse
     */
    public function updateWorkspace($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新工作空间资源
     *  *
     * @param string                         $WorkspaceId
     * @param UpdateWorkspaceResourceRequest $request     UpdateWorkspaceResourceRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkspaceResourceResponse UpdateWorkspaceResourceResponse
     */
    public function updateWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->isDefault)) {
            $body['IsDefault'] = $request->isDefault;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceResource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/resources',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新工作空间资源
     *  *
     * @param string                         $WorkspaceId
     * @param UpdateWorkspaceResourceRequest $request     UpdateWorkspaceResourceRequest
     *
     * @return UpdateWorkspaceResourceResponse UpdateWorkspaceResourceResponse
     */
    public function updateWorkspaceResource($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }
}
