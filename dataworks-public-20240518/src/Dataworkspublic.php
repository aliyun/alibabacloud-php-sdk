<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AbolishDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\AbolishDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDeploymentShrinkRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DeleteWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecDeploymentStageRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecDeploymentStageResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\MoveWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RenameWorkflowDefinitionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateFunctionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateFunctionResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateNodeRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateNodeResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateResourceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowDefinitionRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowDefinitionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dataworkspublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'dataworks.ap-northeast-1.aliyuncs.com',
            'ap-south-1'            => 'dataworks.ap-south-1.aliyuncs.com',
            'ap-southeast-1'        => 'dataworks.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dataworks.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dataworks.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dataworks.ap-southeast-5.aliyuncs.com',
            'cn-beijing'            => 'dataworks.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'dataworks.cn-chengdu.aliyuncs.com',
            'cn-hangzhou'           => 'dataworks.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dataworks.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'          => 'dataworks.aliyuncs.com',
            'cn-qingdao'            => 'dataworks.aliyuncs.com',
            'cn-shanghai'           => 'dataworks.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'dataworks.cn-shenzhen.aliyuncs.com',
            'cn-zhangjiakou'        => 'dataworks.aliyuncs.com',
            'eu-central-1'          => 'dataworks.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'dataworks.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dataworks.me-east-1.aliyuncs.com',
            'us-east-1'             => 'dataworks.us-east-1.aliyuncs.com',
            'us-west-1'             => 'dataworks.us-west-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dataworks.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dataworks.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dataworks.aliyuncs.com',
            'cn-north-2-gov-1'      => 'dataworks.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dataworks-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 终止发布流程
     *  *
     * @param AbolishDeploymentRequest $request AbolishDeploymentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AbolishDeploymentResponse AbolishDeploymentResponse
     */
    public function abolishDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AbolishDeployment',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbolishDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止发布流程
     *  *
     * @param AbolishDeploymentRequest $request AbolishDeploymentRequest
     *
     * @return AbolishDeploymentResponse AbolishDeploymentResponse
     */
    public function abolishDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishDeploymentWithOptions($request, $runtime);
    }

    /**
     * @summary 创建发布流程
     *  *
     * @param CreateDeploymentRequest $tmpReq  CreateDeploymentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDeploymentResponse CreateDeploymentResponse
     */
    public function createDeploymentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDeploymentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->objectIds)) {
            $request->objectIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->objectIds, 'ObjectIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->objectIdsShrink)) {
            $body['ObjectIds'] = $request->objectIdsShrink;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeployment',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建发布流程
     *  *
     * @param CreateDeploymentRequest $request CreateDeploymentRequest
     *
     * @return CreateDeploymentResponse CreateDeploymentResponse
     */
    public function createDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeploymentWithOptions($request, $runtime);
    }

    /**
     * @summary 创建udf函数
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建udf函数
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 创建节点
     *  *
     * @param CreateNodeRequest $request CreateNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodeResponse CreateNodeResponse
     */
    public function createNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->containerId)) {
            $body['ContainerId'] = $request->containerId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建节点
     *  *
     * @param CreateNodeRequest $request CreateNodeRequest
     *
     * @return CreateNodeResponse CreateNodeResponse
     */
    public function createNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 创建资源文件
     *  *
     * @param CreateResourceRequest $request CreateResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceResponse CreateResourceResponse
     */
    public function createResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建资源文件
     *  *
     * @param CreateResourceRequest $request CreateResourceRequest
     *
     * @return CreateResourceResponse CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建工作流
     *  *
     * @param CreateWorkflowDefinitionRequest $request CreateWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWorkflowDefinitionResponse CreateWorkflowDefinitionResponse
     */
    public function createWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作流
     *  *
     * @param CreateWorkflowDefinitionRequest $request CreateWorkflowDefinitionRequest
     *
     * @return CreateWorkflowDefinitionResponse CreateWorkflowDefinitionResponse
     */
    public function createWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除udf函数
     *  *
     * @param DeleteFunctionRequest $request DeleteFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除udf函数
     *  *
     * @param DeleteFunctionRequest $request DeleteFunctionRequest
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除节点
     *  *
     * @param DeleteNodeRequest $request DeleteNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNodeResponse DeleteNodeResponse
     */
    public function deleteNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除节点
     *  *
     * @param DeleteNodeRequest $request DeleteNodeRequest
     *
     * @return DeleteNodeResponse DeleteNodeResponse
     */
    public function deleteNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 删除资源文件
     *  *
     * @param DeleteResourceRequest $request DeleteResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceResponse DeleteResourceResponse
     */
    public function deleteResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除资源文件
     *  *
     * @param DeleteResourceRequest $request DeleteResourceRequest
     *
     * @return DeleteResourceResponse DeleteResourceResponse
     */
    public function deleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除工作流
     *  *
     * @param DeleteWorkflowDefinitionRequest $request DeleteWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkflowDefinitionResponse DeleteWorkflowDefinitionResponse
     */
    public function deleteWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作流
     *  *
     * @param DeleteWorkflowDefinitionRequest $request DeleteWorkflowDefinitionRequest
     *
     * @return DeleteWorkflowDefinitionResponse DeleteWorkflowDefinitionResponse
     */
    public function deleteWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 执行Deployment一个阶段
     *  *
     * @param ExecDeploymentStageRequest $request ExecDeploymentStageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecDeploymentStageResponse ExecDeploymentStageResponse
     */
    public function execDeploymentStageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecDeploymentStage',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecDeploymentStageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 执行Deployment一个阶段
     *  *
     * @param ExecDeploymentStageRequest $request ExecDeploymentStageRequest
     *
     * @return ExecDeploymentStageResponse ExecDeploymentStageResponse
     */
    public function execDeploymentStage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execDeploymentStageWithOptions($request, $runtime);
    }

    /**
     * @summary 获取发布流程详情
     *  *
     * @param GetDeploymentRequest $request GetDeploymentRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeploymentResponse GetDeploymentResponse
     */
    public function getDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeployment',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取发布流程详情
     *  *
     * @param GetDeploymentRequest $request GetDeploymentRequest
     *
     * @return GetDeploymentResponse GetDeploymentResponse
     */
    public function getDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeploymentWithOptions($request, $runtime);
    }

    /**
     * @summary 获取函数信息
     *  *
     * @param GetFunctionRequest $request GetFunctionRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取函数信息
     *  *
     * @param GetFunctionRequest $request GetFunctionRequest
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFunctionWithOptions($request, $runtime);
    }

    /**
     * @param GetNodeRequest $request GetNodeRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNodeResponse GetNodeResponse
     */
    public function getNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeRequest $request GetNodeRequest
     *
     * @return GetNodeResponse GetNodeResponse
     */
    public function getNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取资源文件
     *  *
     * @param GetResourceRequest $request GetResourceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源文件
     *  *
     * @param GetResourceRequest $request GetResourceRequest
     *
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取工作流详情
     *  *
     * @param GetWorkflowDefinitionRequest $request GetWorkflowDefinitionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkflowDefinitionResponse GetWorkflowDefinitionResponse
     */
    public function getWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作流详情
     *  *
     * @param GetWorkflowDefinitionRequest $request GetWorkflowDefinitionRequest
     *
     * @return GetWorkflowDefinitionResponse GetWorkflowDefinitionResponse
     */
    public function getWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 分页获取发布流程
     *  *
     * @param ListDeploymentsRequest $request ListDeploymentsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeploymentsResponse ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeployments',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页获取发布流程
     *  *
     * @param ListDeploymentsRequest $request ListDeploymentsRequest
     *
     * @return ListDeploymentsResponse ListDeploymentsResponse
     */
    public function listDeployments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeploymentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取udf函数列表
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctions',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取udf函数列表
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFunctionsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取节点依赖列表
     *  *
     * @param ListNodeDependenciesRequest $request ListNodeDependenciesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodeDependenciesResponse ListNodeDependenciesResponse
     */
    public function listNodeDependenciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeDependencies',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeDependenciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取节点依赖列表
     *  *
     * @param ListNodeDependenciesRequest $request ListNodeDependenciesRequest
     *
     * @return ListNodeDependenciesResponse ListNodeDependenciesResponse
     */
    public function listNodeDependencies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeDependenciesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取节点列表
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取节点列表
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @summary 分页获取资源文件
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页获取资源文件
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取workflowDefinition的列表
     *  *
     * @param ListWorkflowDefinitionsRequest $request ListWorkflowDefinitionsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkflowDefinitionsResponse ListWorkflowDefinitionsResponse
     */
    public function listWorkflowDefinitionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflowDefinitions',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkflowDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取workflowDefinition的列表
     *  *
     * @param ListWorkflowDefinitionsRequest $request ListWorkflowDefinitionsRequest
     *
     * @return ListWorkflowDefinitionsResponse ListWorkflowDefinitionsResponse
     */
    public function listWorkflowDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowDefinitionsWithOptions($request, $runtime);
    }

    /**
     * @summary 移动funciton的路径
     *  *
     * @param MoveFunctionRequest $request MoveFunctionRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveFunctionResponse MoveFunctionResponse
     */
    public function moveFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动funciton的路径
     *  *
     * @param MoveFunctionRequest $request MoveFunctionRequest
     *
     * @return MoveFunctionResponse MoveFunctionResponse
     */
    public function moveFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 移动节点路径
     *  *
     * @param MoveNodeRequest $request MoveNodeRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveNodeResponse MoveNodeResponse
     */
    public function moveNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动节点路径
     *  *
     * @param MoveNodeRequest $request MoveNodeRequest
     *
     * @return MoveNodeResponse MoveNodeResponse
     */
    public function moveNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 移动资源文件路径
     *  *
     * @param MoveResourceRequest $request MoveResourceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceResponse MoveResourceResponse
     */
    public function moveResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动资源文件路径
     *  *
     * @param MoveResourceRequest $request MoveResourceRequest
     *
     * @return MoveResourceResponse MoveResourceResponse
     */
    public function moveResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 移动工作流的路径
     *  *
     * @param MoveWorkflowDefinitionRequest $request MoveWorkflowDefinitionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveWorkflowDefinitionResponse MoveWorkflowDefinitionResponse
     */
    public function moveWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动工作流的路径
     *  *
     * @param MoveWorkflowDefinitionRequest $request MoveWorkflowDefinitionRequest
     *
     * @return MoveWorkflowDefinitionResponse MoveWorkflowDefinitionResponse
     */
    public function moveWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 对function重命名
     *  *
     * @param RenameFunctionRequest $request RenameFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameFunctionResponse RenameFunctionResponse
     */
    public function renameFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 对function重命名
     *  *
     * @param RenameFunctionRequest $request RenameFunctionRequest
     *
     * @return RenameFunctionResponse RenameFunctionResponse
     */
    public function renameFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 重命名节点
     *  *
     * @param RenameNodeRequest $request RenameNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameNodeResponse RenameNodeResponse
     */
    public function renameNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重命名节点
     *  *
     * @param RenameNodeRequest $request RenameNodeRequest
     *
     * @return RenameNodeResponse RenameNodeResponse
     */
    public function renameNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 对资源文件重命名
     *  *
     * @param RenameResourceRequest $request RenameResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameResourceResponse RenameResourceResponse
     */
    public function renameResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenameResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 对资源文件重命名
     *  *
     * @param RenameResourceRequest $request RenameResourceRequest
     *
     * @return RenameResourceResponse RenameResourceResponse
     */
    public function renameResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 重命名工作流
     *  *
     * @param RenameWorkflowDefinitionRequest $request RenameWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameWorkflowDefinitionResponse RenameWorkflowDefinitionResponse
     */
    public function renameWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenameWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重命名工作流
     *  *
     * @param RenameWorkflowDefinitionRequest $request RenameWorkflowDefinitionRequest
     *
     * @return RenameWorkflowDefinitionResponse RenameWorkflowDefinitionResponse
     */
    public function renameWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameWorkflowDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新udf函数
     *  *
     * @param UpdateFunctionRequest $request UpdateFunctionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunction',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新udf函数
     *  *
     * @param UpdateFunctionRequest $request UpdateFunctionRequest
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新节点
     *  *
     * @param UpdateNodeRequest $request UpdateNodeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNodeResponse UpdateNodeResponse
     */
    public function updateNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateNode',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新节点
     *  *
     * @param UpdateNodeRequest $request UpdateNodeRequest
     *
     * @return UpdateNodeResponse UpdateNodeResponse
     */
    public function updateNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 更新资源文件
     *  *
     * @param UpdateResourceRequest $request UpdateResourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceResponse UpdateResourceResponse
     */
    public function updateResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResource',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新资源文件
     *  *
     * @param UpdateResourceRequest $request UpdateResourceRequest
     *
     * @return UpdateResourceResponse UpdateResourceResponse
     */
    public function updateResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 更新工作流
     *  *
     * @param UpdateWorkflowDefinitionRequest $request UpdateWorkflowDefinitionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkflowDefinitionResponse UpdateWorkflowDefinitionResponse
     */
    public function updateWorkflowDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->spec)) {
            $body['Spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkflowDefinition',
            'version'     => '2024-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkflowDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新工作流
     *  *
     * @param UpdateWorkflowDefinitionRequest $request UpdateWorkflowDefinitionRequest
     *
     * @return UpdateWorkflowDefinitionResponse UpdateWorkflowDefinitionResponse
     */
    public function updateWorkflowDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowDefinitionWithOptions($request, $runtime);
    }
}
