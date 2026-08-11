<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AddSharedAccountsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AddSharedAccountsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateDetectConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateDetectConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateDetectConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateDetectConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryNamespaceRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryNamespaceResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateStackRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateStackResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteDetectConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteDetectConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryNamespaceRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryNamespaceResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteStackRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteStackResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DetectTerraformStateRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DetectTerraformStateResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateDetectConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateDetectConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteRegistryModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformApplyRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformApplyResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformDestroyRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformDestroyResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformPlanRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformPlanResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GenerateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GenerateModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetDetectConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetDetectConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetEncryptionConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetEncryptionConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetExecuteStateRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetExecuteStateResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProviderDocumentRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProviderDocumentResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryNamespaceRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryNamespaceResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceTypeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceTypeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackExecutionResultRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackExecutionResultResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListDetectConfigRelationsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListDetectConfigRelationsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListDetectConfigsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListDetectConfigsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleExamplesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleExamplesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModulesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProductsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProductsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModulesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModuleVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModuleVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryNamespacesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryNamespacesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceTypesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceTypesShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStackConfigsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStacksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListStacksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTerraformProviderVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTerraformProviderVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ManageTerraformStateRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ManageTerraformStateResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\PublishRegistryModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\PublishRegistryModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveSharedAccountsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveSharedAccountsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveSharedAccountsShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\SetEncryptionConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\SetEncryptionConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\TriggerStackExecutionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\TriggerStackExecutionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateDetectConfigRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateDetectConfigResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateExplorerModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateExplorerModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateParameterSetAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateParameterSetAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryNamespaceAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryNamespaceAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateStackRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateStackResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UploadModuleAdvanceRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UploadModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UploadModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ValidateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ValidateModuleResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class IaCService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-zhangjiakou' => 'iac.cn-zhangjiakou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iacservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $tmp = '' . @$form['host'];
                $host = '' . $bucketName . '.' . $tmp . '';
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => $host,
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_runtime['stream'] = true;
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * Adds shared accounts.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - AddSharedAccountsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSharedAccountsResponse
     *
     * @param AddSharedAccountsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return AddSharedAccountsResponse
     */
    public function addSharedAccountsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountIds) {
            @$body['accountIds'] = $request->accountIds;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddSharedAccounts',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/sharedAccounts',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds shared accounts.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - AddSharedAccountsRequest
     *
     * @returns AddSharedAccountsResponse
     *
     * @param AddSharedAccountsRequest $request
     *
     * @return AddSharedAccountsResponse
     */
    public function addSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSharedAccountsWithOptions($request, $headers, $runtime);
    }

    /**
     * Associate drift detection configuration.
     *
     * @param Request - AssociateDetectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateDetectConfigResponse
     *
     * @param AssociateDetectConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AssociateDetectConfigResponse
     */
    public function associateDetectConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->detectConfigId) {
            @$body['detectConfigId'] = $request->detectConfigId;
        }

        if (null !== $request->targetId) {
            @$body['targetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$body['targetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateDetectConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig/operations/associate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AssociateDetectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associate drift detection configuration.
     *
     * @param Request - AssociateDetectConfigRequest
     *
     * @returns AssociateDetectConfigResponse
     *
     * @param AssociateDetectConfigRequest $request
     *
     * @return AssociateDetectConfigResponse
     */
    public function associateDetectConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->associateDetectConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Associates resources with a group.
     *
     * @param Request - AssociateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateGroupResponse
     *
     * @param string                $groupId
     * @param AssociateGroupRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AssociateGroupResponse
     */
    public function associateGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->resourceIds) {
            @$body['resourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '/associate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AssociateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates resources with a group.
     *
     * @param Request - AssociateGroupRequest
     *
     * @returns AssociateGroupResponse
     *
     * @param string                $groupId
     * @param AssociateGroupRequest $request
     *
     * @return AssociateGroupResponse
     */
    public function associateGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->associateGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Associates parameter sets.
     *
     * @remarks
     * After creating a parameter set, you need to associate it with a resource. Valid values for the resource type:
     * - Module: template
     * - ModuleVersion: template version
     * - Task: node.
     *
     * @param Request - AssociateParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateParameterSetResponse
     *
     * @param AssociateParameterSetRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AssociateParameterSetResponse
     */
    public function associateParameterSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parameterSetIds) {
            @$body['parameterSetIds'] = $request->parameterSetIds;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/operations/associate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AssociateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates parameter sets.
     *
     * @remarks
     * After creating a parameter set, you need to associate it with a resource. Valid values for the resource type:
     * - Module: template
     * - ModuleVersion: template version
     * - Task: node.
     *
     * @param Request - AssociateParameterSetRequest
     *
     * @returns AssociateParameterSetResponse
     *
     * @param AssociateParameterSetRequest $request
     *
     * @return AssociateParameterSetResponse
     */
    public function associateParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->associateParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancels a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CancelResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelResourceExportTaskResponse
     *
     * @param string                          $exportTaskId
     * @param CancelResourceExportTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelResourceExportTaskResponse
     */
    public function cancelResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/cancel/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CancelResourceExportTaskRequest
     *
     * @returns CancelResourceExportTaskResponse
     *
     * @param string                          $exportTaskId
     * @param CancelResourceExportTaskRequest $request
     *
     * @return CancelResourceExportTaskResponse
     */
    public function cancelResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * Creates a drift detection configuration that supports manual or scheduled triggering.
     *
     * @remarks
     * ## Request Description
     * - When `triggerType` is set to `Cron`, a valid `cronExpression` must be provided.
     * - Each element in the `alarmConfigs` list must specify the alerting method `type` and the corresponding alerting address `address`.
     * - If the `enabled` parameter is not explicitly set, its default value is `true`, meaning newly created detection configurations are enabled by default.
     * - It is recommended to use a UUID as the value of `clientToken` to ensure request idempotence.
     *
     * @param Request - CreateDetectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDetectConfigResponse
     *
     * @param CreateDetectConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDetectConfigResponse
     */
    public function createDetectConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmConfigs) {
            @$body['alarmConfigs'] = $request->alarmConfigs;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->cronExpression) {
            @$body['cronExpression'] = $request->cronExpression;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->detectConfigName) {
            @$body['detectConfigName'] = $request->detectConfigName;
        }

        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->triggerType) {
            @$body['triggerType'] = $request->triggerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDetectConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDetectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a drift detection configuration that supports manual or scheduled triggering.
     *
     * @remarks
     * ## Request Description
     * - When `triggerType` is set to `Cron`, a valid `cronExpression` must be provided.
     * - Each element in the `alarmConfigs` list must specify the alerting method `type` and the corresponding alerting address `address`.
     * - If the `enabled` parameter is not explicitly set, its default value is `true`, meaning newly created detection configurations are enabled by default.
     * - It is recommended to use a UUID as the value of `clientToken` to ensure request idempotence.
     *
     * @param Request - CreateDetectConfigRequest
     *
     * @returns CreateDetectConfigResponse
     *
     * @param CreateDetectConfigRequest $request
     *
     * @return CreateDetectConfigResponse
     */
    public function createDetectConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDetectConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a group.
     *
     * @param Request - CreateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->autoTrigger) {
            @$body['autoTrigger'] = $request->autoTrigger;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->forcedSetting) {
            @$body['forcedSetting'] = $request->forcedSetting;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->notifyConfig) {
            @$body['notifyConfig'] = $request->notifyConfig;
        }

        if (null !== $request->notifyOperationTypes) {
            @$body['notifyOperationTypes'] = $request->notifyOperationTypes;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->reportExportField) {
            @$body['reportExportField'] = $request->reportExportField;
        }

        if (null !== $request->reportExportPath) {
            @$body['reportExportPath'] = $request->reportExportPath;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->triggerConfig) {
            @$body['triggerConfig'] = $request->triggerConfig;
        }

        if (null !== $request->triggerResourceType) {
            @$body['triggerResourceType'] = $request->triggerResourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a group.
     *
     * @param Request - CreateGroupRequest
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a job and runs a task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param string           $taskId
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->subCommand) {
            @$body['subCommand'] = $request->subCommand;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a job and runs a task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
     * @param string           $taskId
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Creates a Terraform template. Multiple source methods are supported, such as OSS import, Registry import, file upload, and online editing.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModuleResponse
     *
     * @param CreateModuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateModuleResponse
     */
    public function createModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        if (null !== $request->statePath) {
            @$body['statePath'] = $request->statePath;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->versionStrategy) {
            @$body['versionStrategy'] = $request->versionStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Terraform template. Multiple source methods are supported, such as OSS import, Registry import, file upload, and online editing.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateModuleRequest
     *
     * @returns CreateModuleResponse
     *
     * @param CreateModuleRequest $request
     *
     * @return CreateModuleResponse
     */
    public function createModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * Publishes a new version for a specified template.
     *
     * @remarks
     * ## Operation description
     * - Use the `clientToken` parameter to ensure idempotence of the request and prevent duplicate submissions caused by network retries.
     * - Use semantic versioning (such as `v1.0.0`).
     *
     * @param Request - CreateModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModuleVersionResponse
     *
     * @param string                     $moduleId
     * @param CreateModuleVersionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModuleVersionResponse
     */
    public function createModuleVersionWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a new version for a specified template.
     *
     * @remarks
     * ## Operation description
     * - Use the `clientToken` parameter to ensure idempotence of the request and prevent duplicate submissions caused by network retries.
     * - Use semantic versioning (such as `v1.0.0`).
     *
     * @param Request - CreateModuleVersionRequest
     *
     * @returns CreateModuleVersionResponse
     *
     * @param string                     $moduleId
     * @param CreateModuleVersionRequest $request
     *
     * @return CreateModuleVersionResponse
     */
    public function createModuleVersion($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModuleVersionWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * Adds a new parameter set. You can set the name, description, and parameter list.
     *
     * @remarks
     * ## Operation description
     * - This operation creates a new parameter set.
     * - The `name` field is required and can be up to 128 characters in length.
     * - Each element in the `parameters` array must contain the `name` field. Other fields are optional.
     * - Use the `clientToken` field to ensure idempotence of the request.
     * - The request header must contain authentication information to ensure secure access.
     *
     * @param Request - CreateParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateParameterSetResponse
     *
     * @param CreateParameterSetRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateParameterSetResponse
     */
    public function createParameterSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a new parameter set. You can set the name, description, and parameter list.
     *
     * @remarks
     * ## Operation description
     * - This operation creates a new parameter set.
     * - The `name` field is required and can be up to 128 characters in length.
     * - Each element in the `parameters` array must contain the `name` field. Other fields are optional.
     * - Use the `clientToken` field to ensure idempotence of the request.
     * - The request header must contain authentication information to ensure secure access.
     *
     * @param Request - CreateParameterSetRequest
     *
     * @returns CreateParameterSetResponse
     *
     * @param CreateParameterSetRequest $request
     *
     * @return CreateParameterSetResponse
     */
    public function createParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a project.
     *
     * @param Request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a project.
     *
     * @param Request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a Registry template.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - CreateRegistryModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRegistryModuleResponse
     *
     * @param CreateRegistryModuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateRegistryModuleResponse
     */
    public function createRegistryModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->moduleName) {
            @$body['moduleName'] = $request->moduleName;
        }

        if (null !== $request->namespaceName) {
            @$body['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->provider) {
            @$body['provider'] = $request->provider;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Registry template.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - CreateRegistryModuleRequest
     *
     * @returns CreateRegistryModuleResponse
     *
     * @param CreateRegistryModuleRequest $request
     *
     * @return CreateRegistryModuleResponse
     */
    public function createRegistryModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRegistryModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a workspace.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateRegistryNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRegistryNamespaceResponse
     *
     * @param CreateRegistryNamespaceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRegistryNamespaceResponse
     */
    public function createRegistryNamespaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->maintainer) {
            @$body['maintainer'] = $request->maintainer;
        }

        if (null !== $request->namespaceName) {
            @$body['namespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRegistryNamespace',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRegistryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a workspace.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateRegistryNamespaceRequest
     *
     * @returns CreateRegistryNamespaceResponse
     *
     * @param CreateRegistryNamespaceRequest $request
     *
     * @return CreateRegistryNamespaceResponse
     */
    public function createRegistryNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRegistryNamespaceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceExportTaskResponse
     *
     * @param CreateResourceExportTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateResourceExportTaskResponse
     */
    public function createResourceExportTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->exportToModule) {
            @$body['exportToModule'] = $request->exportToModule;
        }

        if (null !== $request->includeRules) {
            @$body['includeRules'] = $request->includeRules;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateResourceExportTaskRequest
     *
     * @returns CreateResourceExportTaskResponse
     *
     * @param CreateResourceExportTaskRequest $request
     *
     * @return CreateResourceExportTaskResponse
     */
    public function createResourceExportTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceExportTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a resource stack and triggers deployment.
     *
     * @param Request - CreateStackRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStackResponse
     *
     * @param CreateStackRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStackResponse
     */
    public function createStackWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameterSetIds) {
            @$body['parameterSetIds'] = $request->parameterSetIds;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        if (null !== $request->workingDirectory) {
            @$body['workingDirectory'] = $request->workingDirectory;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateStack',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource stack and triggers deployment.
     *
     * @param Request - CreateStackRequest
     *
     * @returns CreateStackResponse
     *
     * @param CreateStackRequest $request
     *
     * @return CreateStackResponse
     */
    public function createStack($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createStackWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoApply) {
            @$body['autoApply'] = $request->autoApply;
        }

        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->initModuleState) {
            @$body['initModuleState'] = $request->initModuleState;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameterSetIds) {
            @$body['parameterSetIds'] = $request->parameterSetIds;
        }

        if (null !== $request->protectionStrategy) {
            @$body['protectionStrategy'] = $request->protectionStrategy;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->skipPropertyValidation) {
            @$body['skipPropertyValidation'] = $request->skipPropertyValidation;
        }

        if (null !== $request->skipRegionValidation) {
            @$body['skipRegionValidation'] = $request->skipRegionValidation;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->taskBackend) {
            @$body['taskBackend'] = $request->taskBackend;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - CreateTaskRequest
     *
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Delete drift detection configuration.
     *
     * @param Request - DeleteDetectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDetectConfigResponse
     *
     * @param string                    $detectConfigId
     * @param DeleteDetectConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDetectConfigResponse
     */
    public function deleteDetectConfigWithOptions($detectConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDetectConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig/' . Url::percentEncode($detectConfigId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDetectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete drift detection configuration.
     *
     * @param Request - DeleteDetectConfigRequest
     *
     * @returns DeleteDetectConfigResponse
     *
     * @param string                    $detectConfigId
     * @param DeleteDetectConfigRequest $request
     *
     * @return DeleteDetectConfigResponse
     */
    public function deleteDetectConfig($detectConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDetectConfigWithOptions($detectConfigId, $request, $headers, $runtime);
    }

    /**
     * Deletes a group.
     *
     * @param Request - DeleteGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupResponse
     *
     * @param string             $groupId
     * @param DeleteGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a group.
     *
     * @param Request - DeleteGroupRequest
     *
     * @returns DeleteGroupResponse
     *
     * @param string             $groupId
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified template and all its versions.
     *
     * @remarks
     * ## Operation description
     * - This operation deletes a specified template.
     * - Deletion is irreversible. Proceed with caution.
     *
     * @param Request - DeleteModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModuleResponse
     *
     * @param string              $moduleId
     * @param DeleteModuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteModuleResponse
     */
    public function deleteModuleWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified template and all its versions.
     *
     * @remarks
     * ## Operation description
     * - This operation deletes a specified template.
     * - Deletion is irreversible. Proceed with caution.
     *
     * @param Request - DeleteModuleRequest
     *
     * @returns DeleteModuleResponse
     *
     * @param string              $moduleId
     * @param DeleteModuleRequest $request
     *
     * @return DeleteModuleResponse
     */
    public function deleteModule($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModuleWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified parameter set by parameter set ID.
     *
     * @remarks
     * Deletes a specified parameter set.
     *
     * @param Request - DeleteParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteParameterSetResponse
     *
     * @param string                    $parameterSetId
     * @param DeleteParameterSetRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteParameterSetResponse
     */
    public function deleteParameterSetWithOptions($parameterSetId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/' . Url::percentEncode($parameterSetId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified parameter set by parameter set ID.
     *
     * @remarks
     * Deletes a specified parameter set.
     *
     * @param Request - DeleteParameterSetRequest
     *
     * @returns DeleteParameterSetResponse
     *
     * @param string                    $parameterSetId
     * @param DeleteParameterSetRequest $request
     *
     * @return DeleteParameterSetResponse
     */
    public function deleteParameterSet($parameterSetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteParameterSetWithOptions($parameterSetId, $request, $headers, $runtime);
    }

    /**
     * Deletes a project.
     *
     * @param Request - DeleteProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $projectId
     * @param DeleteProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a project.
     *
     * @param Request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $projectId
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * Deletes a Registry template.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteRegistryModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistryModuleResponse
     *
     * @param string                      $namespaceName
     * @param string                      $moduleName
     * @param DeleteRegistryModuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteRegistryModuleResponse
     */
    public function deleteRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Registry template.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteRegistryModuleRequest
     *
     * @returns DeleteRegistryModuleResponse
     *
     * @param string                      $namespaceName
     * @param string                      $moduleName
     * @param DeleteRegistryModuleRequest $request
     *
     * @return DeleteRegistryModuleResponse
     */
    public function deleteRegistryModule($namespaceName, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime);
    }

    /**
     * Deletes a Registry template version.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteRegistryModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistryModuleVersionResponse
     *
     * @param string                             $namespaceName
     * @param string                             $moduleName
     * @param string                             $version
     * @param DeleteRegistryModuleVersionRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteRegistryModuleVersionResponse
     */
    public function deleteRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRegistryModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '/' . Url::percentEncode($version) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRegistryModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Registry template version.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteRegistryModuleVersionRequest
     *
     * @returns DeleteRegistryModuleVersionResponse
     *
     * @param string                             $namespaceName
     * @param string                             $moduleName
     * @param string                             $version
     * @param DeleteRegistryModuleVersionRequest $request
     *
     * @return DeleteRegistryModuleVersionResponse
     */
    public function deleteRegistryModuleVersion($namespaceName, $moduleName, $version, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $request, $headers, $runtime);
    }

    /**
     * Deletes a workspace.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteRegistryNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistryNamespaceResponse
     *
     * @param string                         $namespaceName
     * @param DeleteRegistryNamespaceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteRegistryNamespaceResponse
     */
    public function deleteRegistryNamespaceWithOptions($namespaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRegistryNamespace',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace/' . Url::percentEncode($namespaceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRegistryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a workspace.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteRegistryNamespaceRequest
     *
     * @returns DeleteRegistryNamespaceResponse
     *
     * @param string                         $namespaceName
     * @param DeleteRegistryNamespaceRequest $request
     *
     * @return DeleteRegistryNamespaceResponse
     */
    public function deleteRegistryNamespace($namespaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRegistryNamespaceWithOptions($namespaceName, $request, $headers, $runtime);
    }

    /**
     * Deletes a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceExportTaskResponse
     *
     * @param string                          $exportTaskId
     * @param DeleteResourceExportTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteResourceExportTaskResponse
     */
    public function deleteResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - DeleteResourceExportTaskRequest
     *
     * @returns DeleteResourceExportTaskResponse
     *
     * @param string                          $exportTaskId
     * @param DeleteResourceExportTaskRequest $request
     *
     * @return DeleteResourceExportTaskResponse
     */
    public function deleteResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * Deletes a stack.
     *
     * @param Request - DeleteStackRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStackResponse
     *
     * @param string             $stackId
     * @param DeleteStackRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStackResponse
     */
    public function deleteStackWithOptions($stackId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cleanResources) {
            @$query['cleanResources'] = $request->cleanResources;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStack',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks/' . Url::percentEncode($stackId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a stack.
     *
     * @param Request - DeleteStackRequest
     *
     * @returns DeleteStackResponse
     *
     * @param string             $stackId
     * @param DeleteStackRequest $request
     *
     * @return DeleteStackResponse
     */
    public function deleteStack($stackId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteStackWithOptions($stackId, $request, $headers, $runtime);
    }

    /**
     * Deletes a node.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     * Deletes a node. If the node has resources that have not been destroyed, the node cannot be deleted.
     *
     * @param Request - DeleteTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTaskResponse
     *
     * @param string            $taskId
     * @param DeleteTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteTaskResponse
     */
    public function deleteTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a node.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     * Deletes a node. If the node has resources that have not been destroyed, the node cannot be deleted.
     *
     * @param Request - DeleteTaskRequest
     *
     * @returns DeleteTaskResponse
     *
     * @param string            $taskId
     * @param DeleteTaskRequest $request
     *
     * @return DeleteTaskResponse
     */
    public function deleteTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Initiates a state file consistency check.
     *
     * @remarks
     * This API is used to perform drift detection on the state files of resource orchestration tasks and stack tasks in the automated service desk.
     *
     * @param Request - DetectTerraformStateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectTerraformStateResponse
     *
     * @param DetectTerraformStateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DetectTerraformStateResponse
     */
    public function detectTerraformStateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->identifier) {
            @$body['identifier'] = $request->identifier;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectTerraformState',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detect',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DetectTerraformStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a state file consistency check.
     *
     * @remarks
     * This API is used to perform drift detection on the state files of resource orchestration tasks and stack tasks in the automated service desk.
     *
     * @param Request - DetectTerraformStateRequest
     *
     * @returns DetectTerraformStateResponse
     *
     * @param DetectTerraformStateRequest $request
     *
     * @return DetectTerraformStateResponse
     */
    public function detectTerraformState($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detectTerraformStateWithOptions($request, $headers, $runtime);
    }

    /**
     * Disassociate drift detection configuration.
     *
     * @param Request - DissociateDetectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateDetectConfigResponse
     *
     * @param DissociateDetectConfigRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DissociateDetectConfigResponse
     */
    public function dissociateDetectConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->detectConfigId) {
            @$body['detectConfigId'] = $request->detectConfigId;
        }

        if (null !== $request->targetId) {
            @$body['targetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$body['targetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DissociateDetectConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig/operations/dissociate',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DissociateDetectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociate drift detection configuration.
     *
     * @param Request - DissociateDetectConfigRequest
     *
     * @returns DissociateDetectConfigResponse
     *
     * @param DissociateDetectConfigRequest $request
     *
     * @return DissociateDetectConfigResponse
     */
    public function dissociateDetectConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dissociateDetectConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Dissociates a resource group.
     *
     * @param Request - DissociateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateGroupResponse
     *
     * @param string                 $projectId
     * @param string                 $groupId
     * @param DissociateGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DissociateGroupResponse
     */
    public function dissociateGroupWithOptions($projectId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceIds) {
            @$body['resourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DissociateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '/dissociate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DissociateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates a resource group.
     *
     * @param Request - DissociateGroupRequest
     *
     * @returns DissociateGroupResponse
     *
     * @param string                 $projectId
     * @param string                 $groupId
     * @param DissociateGroupRequest $request
     *
     * @return DissociateGroupResponse
     */
    public function dissociateGroup($projectId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dissociateGroupWithOptions($projectId, $groupId, $request, $headers, $runtime);
    }

    /**
     * Dissociates a parameter set from other resources.
     *
     * @param Request - DissociateParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateParameterSetResponse
     *
     * @param DissociateParameterSetRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DissociateParameterSetResponse
     */
    public function dissociateParameterSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parameterSetIds) {
            @$body['parameterSetIds'] = $request->parameterSetIds;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DissociateParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/operations/dissociate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DissociateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates a parameter set from other resources.
     *
     * @param Request - DissociateParameterSetRequest
     *
     * @returns DissociateParameterSetResponse
     *
     * @param DissociateParameterSetRequest $request
     *
     * @return DissociateParameterSetResponse
     */
    public function dissociateParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dissociateParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * Executes a Module officially provided by Alibaba Cloud Terraform.
     *
     * @remarks
     * This API operation is used to execute Terraform Module code to create or update cloud resources. Before using this API operation, make sure that all required authentication information is correctly configured and that the Terraform code corresponding to the Module meets the expected functional requirements.
     *
     * @param Request - ExecuteRegistryModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteRegistryModuleResponse
     *
     * @param string                       $namespaceName
     * @param string                       $moduleName
     * @param ExecuteRegistryModuleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExecuteRegistryModuleResponse
     */
    public function executeRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '/execution',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a Module officially provided by Alibaba Cloud Terraform.
     *
     * @remarks
     * This API operation is used to execute Terraform Module code to create or update cloud resources. Before using this API operation, make sure that all required authentication information is correctly configured and that the Terraform code corresponding to the Module meets the expected functional requirements.
     *
     * @param Request - ExecuteRegistryModuleRequest
     *
     * @returns ExecuteRegistryModuleResponse
     *
     * @param string                       $namespaceName
     * @param string                       $moduleName
     * @param ExecuteRegistryModuleRequest $request
     *
     * @return ExecuteRegistryModuleResponse
     */
    public function executeRegistryModule($namespaceName, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime);
    }

    /**
     * Runs a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ExecuteResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteResourceExportTaskResponse
     *
     * @param string                           $exportTaskId
     * @param ExecuteResourceExportTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ExecuteResourceExportTaskResponse
     */
    public function executeResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/execute/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ExecuteResourceExportTaskRequest
     *
     * @returns ExecuteResourceExportTaskResponse
     *
     * @param string                           $exportTaskId
     * @param ExecuteResourceExportTaskRequest $request
     *
     * @return ExecuteResourceExportTaskResponse
     */
    public function executeResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * Executes TerraformApply.
     *
     * @remarks
     * Executes the Terraform Apply command to create or update cloud resources based on the provided Terraform code. This API can handle complex scenarios such as operations that depend on a previous state.
     * Before calling this API, ensure that all required authentication information is properly configured and that the Terraform code meets the expected functional requirements.
     *
     * @param Request - ExecuteTerraformApplyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTerraformApplyResponse
     *
     * @param ExecuteTerraformApplyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExecuteTerraformApplyResponse
     */
    public function executeTerraformApplyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->stateId) {
            @$body['stateId'] = $request->stateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTerraformApply',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTerraformApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes TerraformApply.
     *
     * @remarks
     * Executes the Terraform Apply command to create or update cloud resources based on the provided Terraform code. This API can handle complex scenarios such as operations that depend on a previous state.
     * Before calling this API, ensure that all required authentication information is properly configured and that the Terraform code meets the expected functional requirements.
     *
     * @param Request - ExecuteTerraformApplyRequest
     *
     * @returns ExecuteTerraformApplyResponse
     *
     * @param ExecuteTerraformApplyRequest $request
     *
     * @return ExecuteTerraformApplyResponse
     */
    public function executeTerraformApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTerraformApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * Executes Terraform Destroy.
     *
     * @remarks
     * Executes the Terraform Destroy command to destroy resources created by Terraform.
     *
     * @param Request - ExecuteTerraformDestroyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTerraformDestroyResponse
     *
     * @param ExecuteTerraformDestroyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ExecuteTerraformDestroyResponse
     */
    public function executeTerraformDestroyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->stateId) {
            @$body['stateId'] = $request->stateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTerraformDestroy',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/destroy',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTerraformDestroyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes Terraform Destroy.
     *
     * @remarks
     * Executes the Terraform Destroy command to destroy resources created by Terraform.
     *
     * @param Request - ExecuteTerraformDestroyRequest
     *
     * @returns ExecuteTerraformDestroyResponse
     *
     * @param ExecuteTerraformDestroyRequest $request
     *
     * @return ExecuteTerraformDestroyResponse
     */
    public function executeTerraformDestroy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTerraformDestroyWithOptions($request, $headers, $runtime);
    }

    /**
     * Executes a Terraform plan.
     *
     * @remarks
     * Executes a Terraform Plan command by using the provided Terraform code to create or update cloud resources. This API operation can handle complex scenarios such as operations that depend on a previous state.
     * Before calling this API operation, ensure that all required authentication information is properly configured and that the Terraform code meets the expected functional requirements.
     *
     * @param Request - ExecuteTerraformPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTerraformPlanResponse
     *
     * @param ExecuteTerraformPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ExecuteTerraformPlanResponse
     */
    public function executeTerraformPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->stateId) {
            @$body['stateId'] = $request->stateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTerraformPlan',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/plan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTerraformPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a Terraform plan.
     *
     * @remarks
     * Executes a Terraform Plan command by using the provided Terraform code to create or update cloud resources. This API operation can handle complex scenarios such as operations that depend on a previous state.
     * Before calling this API operation, ensure that all required authentication information is properly configured and that the Terraform code meets the expected functional requirements.
     *
     * @param Request - ExecuteTerraformPlanRequest
     *
     * @returns ExecuteTerraformPlanResponse
     *
     * @param ExecuteTerraformPlanRequest $request
     *
     * @return ExecuteTerraformPlanResponse
     */
    public function executeTerraformPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTerraformPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * Generates Terraform HCL template code.
     *
     * @param Request - GenerateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateModuleResponse
     *
     * @param GenerateModuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateModuleResponse
     */
    public function generateModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->generateSource) {
            @$body['generateSource'] = $request->generateSource;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$body['regionId'] = $request->regionId;
        }

        if (null !== $request->syntax) {
            @$body['syntax'] = $request->syntax;
        }

        if (null !== $request->template) {
            @$body['template'] = $request->template;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformResourceType) {
            @$body['terraformResourceType'] = $request->terraformResourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorer/generate/module',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateModuleResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Generates Terraform HCL template code.
     *
     * @param Request - GenerateModuleRequest
     *
     * @returns GenerateModuleResponse
     *
     * @param GenerateModuleRequest $request
     *
     * @return GenerateModuleResponse
     */
    public function generateModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieve drift detection configuration.
     *
     * @param Request - GetDetectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDetectConfigResponse
     *
     * @param string                 $detectConfigId
     * @param GetDetectConfigRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDetectConfigResponse
     */
    public function getDetectConfigWithOptions($detectConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDetectConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig/' . Url::percentEncode($detectConfigId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDetectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve drift detection configuration.
     *
     * @param Request - GetDetectConfigRequest
     *
     * @returns GetDetectConfigResponse
     *
     * @param string                 $detectConfigId
     * @param GetDetectConfigRequest $request
     *
     * @return GetDetectConfigResponse
     */
    public function getDetectConfig($detectConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDetectConfigWithOptions($detectConfigId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the encryption configuration.
     *
     * @param Request - GetEncryptionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEncryptionConfigResponse
     *
     * @param GetEncryptionConfigRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetEncryptionConfigResponse
     */
    public function getEncryptionConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEncryptionConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/encryption/config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEncryptionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the encryption configuration.
     *
     * @param Request - GetEncryptionConfigRequest
     *
     * @returns GetEncryptionConfigResponse
     *
     * @param GetEncryptionConfigRequest $request
     *
     * @return GetEncryptionConfigResponse
     */
    public function getEncryptionConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEncryptionConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the result of a Terraform run.
     *
     * @remarks
     * Retrieves the result of a Terraform run.
     *
     * @param Request - GetExecuteStateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExecuteStateResponse
     *
     * @param string                 $stateId
     * @param GetExecuteStateRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetExecuteStateResponse
     */
    public function getExecuteStateWithOptions($stateId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExecuteState',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/' . Url::percentEncode($stateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExecuteStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the result of a Terraform run.
     *
     * @remarks
     * Retrieves the result of a Terraform run.
     *
     * @param Request - GetExecuteStateRequest
     *
     * @returns GetExecuteStateResponse
     *
     * @param string                 $stateId
     * @param GetExecuteStateRequest $request
     *
     * @return GetExecuteStateResponse
     */
    public function getExecuteState($stateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExecuteStateWithOptions($stateId, $request, $headers, $runtime);
    }

    /**
     * Queries a group.
     *
     * @param Request - GetGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupResponse
     *
     * @param string          $groupId
     * @param GetGroupRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a group.
     *
     * @param Request - GetGroupRequest
     *
     * @returns GetGroupResponse
     *
     * @param string          $groupId
     * @param GetGroupRequest $request
     *
     * @return GetGroupResponse
     */
    public function getGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Retrieves job information.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - GetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param string         $taskId
     * @param string         $jobId
     * @param GetJobRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($taskId, $jobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs/' . Url::percentEncode($jobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves job information.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param string        $taskId
     * @param string        $jobId
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($taskId, $jobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($taskId, $jobId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specified template.
     *
     * @remarks
     * ## Operation description
     * You can call this operation to query the details of a specified template, including but not limited to the template name, description, source, status, and latest version. You must specify the template ID and include authentication information in the request.
     *
     * @param Request - GetModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModuleResponse
     *
     * @param string           $moduleId
     * @param GetModuleRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetModuleResponse
     */
    public function getModuleWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified template.
     *
     * @remarks
     * ## Operation description
     * You can call this operation to query the details of a specified template, including but not limited to the template name, description, source, status, and latest version. You must specify the template ID and include authentication information in the request.
     *
     * @param Request - GetModuleRequest
     *
     * @returns GetModuleResponse
     *
     * @param string           $moduleId
     * @param GetModuleRequest $request
     *
     * @return GetModuleResponse
     */
    public function getModule($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModuleWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a specific version of a specified template.
     *
     * @remarks
     * ## Operation description
     * You can call this operation to query the details of a specific version of a specified template, including the version number, description, and release time. Make sure that the template ID and version number are correct.
     *
     * @param Request - GetModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModuleVersionResponse
     *
     * @param string                  $moduleId
     * @param string                  $moduleVersion
     * @param GetModuleVersionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetModuleVersionResponse
     */
    public function getModuleVersionWithOptions($moduleId, $moduleVersion, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '/versions/' . Url::percentEncode($moduleVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific version of a specified template.
     *
     * @remarks
     * ## Operation description
     * You can call this operation to query the details of a specific version of a specified template, including the version number, description, and release time. Make sure that the template ID and version number are correct.
     *
     * @param Request - GetModuleVersionRequest
     *
     * @returns GetModuleVersionResponse
     *
     * @param string                  $moduleId
     * @param string                  $moduleVersion
     * @param GetModuleVersionRequest $request
     *
     * @return GetModuleVersionResponse
     */
    public function getModuleVersion($moduleId, $moduleVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModuleVersionWithOptions($moduleId, $moduleVersion, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a parameter set by parameter set ID.
     *
     * @remarks
     * ## Request description
     * - This operation retrieves detailed parameter set information by specifying a `parameterSetId`.
     * - Authentication is required to access this operation.
     * - If the request is successful, detailed data including the parameter set name, description, and parameter list is returned.
     *
     * @param Request - GetParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParameterSetResponse
     *
     * @param string                 $parameterSetId
     * @param GetParameterSetRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetParameterSetResponse
     */
    public function getParameterSetWithOptions($parameterSetId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/' . Url::percentEncode($parameterSetId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a parameter set by parameter set ID.
     *
     * @remarks
     * ## Request description
     * - This operation retrieves detailed parameter set information by specifying a `parameterSetId`.
     * - Authentication is required to access this operation.
     * - If the request is successful, detailed data including the parameter set name, description, and parameter list is returned.
     *
     * @param Request - GetParameterSetRequest
     *
     * @returns GetParameterSetResponse
     *
     * @param string                 $parameterSetId
     * @param GetParameterSetRequest $request
     *
     * @return GetParameterSetResponse
     */
    public function getParameterSet($parameterSetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getParameterSetWithOptions($parameterSetId, $request, $headers, $runtime);
    }

    /**
     * Queries a project.
     *
     * @param Request - GetProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param string            $projectId
     * @param GetProjectRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a project.
     *
     * @param Request - GetProjectRequest
     *
     * @returns GetProjectResponse
     *
     * @param string            $projectId
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the resource documentation of a Terraform provider.
     *
     * @param Request - GetProviderDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProviderDocumentResponse
     *
     * @param GetProviderDocumentRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetProviderDocumentResponse
     */
    public function getProviderDocumentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->providerVersion) {
            @$query['providerVersion'] = $request->providerVersion;
        }

        if (null !== $request->terraformResourceType) {
            @$query['terraformResourceType'] = $request->terraformResourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProviderDocument',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/version/terraform/provider/document',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProviderDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the resource documentation of a Terraform provider.
     *
     * @param Request - GetProviderDocumentRequest
     *
     * @returns GetProviderDocumentResponse
     *
     * @param GetProviderDocumentRequest $request
     *
     * @return GetProviderDocumentResponse
     */
    public function getProviderDocument($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProviderDocumentWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a Registry module.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - GetRegistryModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegistryModuleResponse
     *
     * @param string                   $namespaceName
     * @param string                   $moduleName
     * @param GetRegistryModuleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetRegistryModuleResponse
     */
    public function getRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a Registry module.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - GetRegistryModuleRequest
     *
     * @returns GetRegistryModuleResponse
     *
     * @param string                   $namespaceName
     * @param string                   $moduleName
     * @param GetRegistryModuleRequest $request
     *
     * @return GetRegistryModuleResponse
     */
    public function getRegistryModule($namespaceName, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime);
    }

    /**
     * Queries a Registry template version.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - GetRegistryModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegistryModuleVersionResponse
     *
     * @param string                          $namespaceName
     * @param string                          $moduleName
     * @param string                          $version
     * @param GetRegistryModuleVersionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRegistryModuleVersionResponse
     */
    public function getRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegistryModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '/' . Url::percentEncode($version) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegistryModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a Registry template version.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - GetRegistryModuleVersionRequest
     *
     * @returns GetRegistryModuleVersionResponse
     *
     * @param string                          $namespaceName
     * @param string                          $moduleName
     * @param string                          $version
     * @param GetRegistryModuleVersionRequest $request
     *
     * @return GetRegistryModuleVersionResponse
     */
    public function getRegistryModuleVersion($namespaceName, $moduleName, $version, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $request, $headers, $runtime);
    }

    /**
     * Queries a workspace.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - GetRegistryNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegistryNamespaceResponse
     *
     * @param string                      $namespaceName
     * @param GetRegistryNamespaceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetRegistryNamespaceResponse
     */
    public function getRegistryNamespaceWithOptions($namespaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegistryNamespace',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace/' . Url::percentEncode($namespaceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegistryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a workspace.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - GetRegistryNamespaceRequest
     *
     * @returns GetRegistryNamespaceResponse
     *
     * @param string                      $namespaceName
     * @param GetRegistryNamespaceRequest $request
     *
     * @return GetRegistryNamespaceResponse
     */
    public function getRegistryNamespace($namespaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegistryNamespaceWithOptions($namespaceName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - GetResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceExportTaskResponse
     *
     * @param string                       $exportTaskId
     * @param GetResourceExportTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceExportTaskResponse
     */
    public function getResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportVersion) {
            @$query['exportVersion'] = $request->exportVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - GetResourceExportTaskRequest
     *
     * @returns GetResourceExportTaskResponse
     *
     * @param string                       $exportTaskId
     * @param GetResourceExportTaskRequest $request
     *
     * @return GetResourceExportTaskResponse
     */
    public function getResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves resource type information.
     *
     * @remarks
     * ## Request description.
     *
     * @param Request - GetResourceTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceTypeResponse
     *
     * @param string                 $resourceType
     * @param GetResourceTypeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($resourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->filterReadOnly) {
            @$query['filterReadOnly'] = $request->filterReadOnly;
        }

        if (null !== $request->terraformProviderVersion) {
            @$query['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceType',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceType/' . Url::percentEncode($resourceType) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceTypeResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Retrieves resource type information.
     *
     * @remarks
     * ## Request description.
     *
     * @param Request - GetResourceTypeRequest
     *
     * @returns GetResourceTypeResponse
     *
     * @param string                 $resourceType
     * @param GetResourceTypeRequest $request
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceType($resourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceTypeWithOptions($resourceType, $request, $headers, $runtime);
    }

    /**
     * Queries a stack.
     *
     * @param Request - GetStackRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackResponse
     *
     * @param string          $stackId
     * @param GetStackRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions($stackId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetStack',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks/' . Url::percentEncode($stackId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a stack.
     *
     * @param Request - GetStackRequest
     *
     * @returns GetStackResponse
     *
     * @param string          $stackId
     * @param GetStackRequest $request
     *
     * @return GetStackResponse
     */
    public function getStack($stackId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStackWithOptions($stackId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of deployments for a stack.
     *
     * @param Request - GetStackDeploymentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackDeploymentsResponse
     *
     * @param string                     $stackId
     * @param GetStackDeploymentsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetStackDeploymentsResponse
     */
    public function getStackDeploymentsWithOptions($stackId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configVersion) {
            @$query['configVersion'] = $request->configVersion;
        }

        if (null !== $request->deploymentName) {
            @$query['deploymentName'] = $request->deploymentName;
        }

        if (null !== $request->deploymentNo) {
            @$query['deploymentNo'] = $request->deploymentNo;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackDeployments',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks/' . Url::percentEncode($stackId) . '/deployments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStackDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of deployments for a stack.
     *
     * @param Request - GetStackDeploymentsRequest
     *
     * @returns GetStackDeploymentsResponse
     *
     * @param string                     $stackId
     * @param GetStackDeploymentsRequest $request
     *
     * @return GetStackDeploymentsResponse
     */
    public function getStackDeployments($stackId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStackDeploymentsWithOptions($stackId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the trigger result of a Stack.
     *
     * @param Request - GetStackExecutionResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackExecutionResultResponse
     *
     * @param string                         $triggerId
     * @param GetStackExecutionResultRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetStackExecutionResultResponse
     */
    public function getStackExecutionResultWithOptions($triggerId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetStackExecutionResult',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks/trigger/' . Url::percentEncode($triggerId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStackExecutionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the trigger result of a Stack.
     *
     * @param Request - GetStackExecutionResultRequest
     *
     * @returns GetStackExecutionResultResponse
     *
     * @param string                         $triggerId
     * @param GetStackExecutionResultRequest $request
     *
     * @return GetStackExecutionResultResponse
     */
    public function getStackExecutionResult($triggerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStackExecutionResultWithOptions($triggerId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a task.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - GetTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param string         $taskId
     * @param GetTaskRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a task.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - GetTaskRequest
     *
     * @returns GetTaskResponse
     *
     * @param string         $taskId
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the detection result of a state file.
     *
     * @remarks
     * This API is used to retrieve the detection results of state files for resource orchestration tasks and stack tasks on the automation service desk.
     *
     * @param Request - GetTerraformStateDetectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTerraformStateDetectionResponse
     *
     * @param string                            $detectionId
     * @param GetTerraformStateDetectionRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetTerraformStateDetectionResponse
     */
    public function getTerraformStateDetectionWithOptions($detectionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTerraformStateDetection',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detect/' . Url::percentEncode($detectionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTerraformStateDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the detection result of a state file.
     *
     * @remarks
     * This API is used to retrieve the detection results of state files for resource orchestration tasks and stack tasks on the automation service desk.
     *
     * @param Request - GetTerraformStateDetectionRequest
     *
     * @returns GetTerraformStateDetectionResponse
     *
     * @param string                            $detectionId
     * @param GetTerraformStateDetectionRequest $request
     *
     * @return GetTerraformStateDetectionResponse
     */
    public function getTerraformStateDetection($detectionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTerraformStateDetectionWithOptions($detectionId, $request, $headers, $runtime);
    }

    /**
     * List drift detection associations.
     *
     * @param Request - ListDetectConfigRelationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDetectConfigRelationsResponse
     *
     * @param ListDetectConfigRelationsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDetectConfigRelationsResponse
     */
    public function listDetectConfigRelationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detectConfigId) {
            @$query['detectConfigId'] = $request->detectConfigId;
        }

        if (null !== $request->targetId) {
            @$query['targetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['targetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDetectConfigRelations',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig/operations/relation',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDetectConfigRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List drift detection associations.
     *
     * @param Request - ListDetectConfigRelationsRequest
     *
     * @returns ListDetectConfigRelationsResponse
     *
     * @param ListDetectConfigRelationsRequest $request
     *
     * @return ListDetectConfigRelationsResponse
     */
    public function listDetectConfigRelations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDetectConfigRelationsWithOptions($request, $headers, $runtime);
    }

    /**
     * List drift detection configurations.
     *
     * @param Request - ListDetectConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDetectConfigsResponse
     *
     * @param ListDetectConfigsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListDetectConfigsResponse
     */
    public function listDetectConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detectConfigName) {
            @$query['detectConfigName'] = $request->detectConfigName;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDetectConfigs',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDetectConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List drift detection configurations.
     *
     * @param Request - ListDetectConfigsRequest
     *
     * @returns ListDetectConfigsResponse
     *
     * @param ListDetectConfigsRequest $request
     *
     * @return ListDetectConfigsResponse
     */
    public function listDetectConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDetectConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of official Terraform Module examples.
     *
     * @remarks
     * This operation queries the example information of Terraform Modules officially provided by Alibaba Cloud.
     * You can use the `maxResults` parameter to adjust the maximum number of entries to return.
     * - If `nextToken` is not included in the response, no more data is available. Otherwise, more data is available. To query the next page, set the `nextToken` parameter of the ListExplorerRegistryModuleExamples operation to the `nextToken` value returned in the previous response. If the `NextToken` parameter is not specified, the first page of data is returned by default.
     * - You can use keyword, namespaceName, moduleName, moduleVersion, and exampleName as conditional filter settings to narrow down the search scope. Multiple filter conditions have a logical `AND` relationship, and only resources that meet all filter conditions are returned.
     *   - keyword: optional. Searches by keyword and supports fuzzy match on exampleName. For example, if keyword is set to ecs, module examples whose names contain ecs are returned.
     *   - namespaceName: optional. Filters module examples by a specific workspace. For example, if namespaceName is set to alibaba, module examples in the alibaba workspace are returned.
     *   - moduleName: optional. Filters module examples by a specific module name. For example, if moduleName is set to ecs, module examples whose module name is ecs are returned.
     *   - moduleVersion: optional. Filters module examples by a specific module version. For example, if moduleVersion is set to 1.0.0, module examples whose module version is 1.0.0 are returned.
     *   - exampleName: optional. Filters module examples by a specific example name. For example, if exampleName is set to ecs, module examples whose example name is ecs are returned.
     * The response contains the request ID, total number of entries, data of the current page, and pagination information, which facilitates processing of query results.
     *
     * @param Request - ListExplorerRegistryModuleExamplesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExplorerRegistryModuleExamplesResponse
     *
     * @param ListExplorerRegistryModuleExamplesRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListExplorerRegistryModuleExamplesResponse
     */
    public function listExplorerRegistryModuleExamplesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exampleName) {
            @$query['exampleName'] = $request->exampleName;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->moduleVersion) {
            @$query['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExplorerRegistryModuleExamples',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerRegistryModule/example',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExplorerRegistryModuleExamplesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Retrieves the list of official Terraform Module examples.
     *
     * @remarks
     * This operation queries the example information of Terraform Modules officially provided by Alibaba Cloud.
     * You can use the `maxResults` parameter to adjust the maximum number of entries to return.
     * - If `nextToken` is not included in the response, no more data is available. Otherwise, more data is available. To query the next page, set the `nextToken` parameter of the ListExplorerRegistryModuleExamples operation to the `nextToken` value returned in the previous response. If the `NextToken` parameter is not specified, the first page of data is returned by default.
     * - You can use keyword, namespaceName, moduleName, moduleVersion, and exampleName as conditional filter settings to narrow down the search scope. Multiple filter conditions have a logical `AND` relationship, and only resources that meet all filter conditions are returned.
     *   - keyword: optional. Searches by keyword and supports fuzzy match on exampleName. For example, if keyword is set to ecs, module examples whose names contain ecs are returned.
     *   - namespaceName: optional. Filters module examples by a specific workspace. For example, if namespaceName is set to alibaba, module examples in the alibaba workspace are returned.
     *   - moduleName: optional. Filters module examples by a specific module name. For example, if moduleName is set to ecs, module examples whose module name is ecs are returned.
     *   - moduleVersion: optional. Filters module examples by a specific module version. For example, if moduleVersion is set to 1.0.0, module examples whose module version is 1.0.0 are returned.
     *   - exampleName: optional. Filters module examples by a specific example name. For example, if exampleName is set to ecs, module examples whose example name is ecs are returned.
     * The response contains the request ID, total number of entries, data of the current page, and pagination information, which facilitates processing of query results.
     *
     * @param Request - ListExplorerRegistryModuleExamplesRequest
     *
     * @returns ListExplorerRegistryModuleExamplesResponse
     *
     * @param ListExplorerRegistryModuleExamplesRequest $request
     *
     * @return ListExplorerRegistryModuleExamplesResponse
     */
    public function listExplorerRegistryModuleExamples($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExplorerRegistryModuleExamplesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists the version information of official Terraform modules provided by Alibaba Cloud.
     *
     * @remarks
     * This operation queries the version information of official Terraform modules provided by Alibaba Cloud.
     * You can use the `maxResults` parameter to adjust the maximum number of entries to return.
     * - If `nextToken` is not included in the response, no more data is available. Otherwise, more data is available. To query the next page, set the `nextToken` parameter of the ListExplorerRegistryModules operation to the `nextToken` value returned in the previous response. If the `NextToken` parameter is not specified, the first page of data is returned by default.
     * - You can use keyword, namespaceName, moduleName, and moduleVersion as conditional filter Settings to narrow the search scope. Multiple filter conditions have a logical `AND` relationship. Only resources that meet all filter conditions are returned.
     *   - keyword: optional. Performs a fuzzy match on the module name. For example, if keyword is set to ecs, modules whose names contain ecs are returned.
     *   - namespaceName: optional. Filters modules by a specific workspace. For example, if namespaceName is set to alibaba, modules whose workspace is alibaba are returned. When moduleName is specified, namespaceName must also be specified. You can call the ListExplorerRegistryModule operation to obtain the namespaceName information.
     *   - moduleName: optional. Filters modules by a specific name. For example, if moduleName is set to ecs, modules whose name is ecs are returned.
     *   - moduleVersion: optional. Filters modules by a specific version. For example, if moduleVersion is set to 1.0.0, modules whose version is 1.0.0 are returned.
     * The response contains the request ID, total number of entries, data on the current page, and pagination information, which facilitates the processing of query results.
     *
     * @param Request - ListExplorerRegistryModuleVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExplorerRegistryModuleVersionsResponse
     *
     * @param ListExplorerRegistryModuleVersionsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListExplorerRegistryModuleVersionsResponse
     */
    public function listExplorerRegistryModuleVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->moduleVersion) {
            @$query['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExplorerRegistryModuleVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerRegistryModule/version',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExplorerRegistryModuleVersionsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Lists the version information of official Terraform modules provided by Alibaba Cloud.
     *
     * @remarks
     * This operation queries the version information of official Terraform modules provided by Alibaba Cloud.
     * You can use the `maxResults` parameter to adjust the maximum number of entries to return.
     * - If `nextToken` is not included in the response, no more data is available. Otherwise, more data is available. To query the next page, set the `nextToken` parameter of the ListExplorerRegistryModules operation to the `nextToken` value returned in the previous response. If the `NextToken` parameter is not specified, the first page of data is returned by default.
     * - You can use keyword, namespaceName, moduleName, and moduleVersion as conditional filter Settings to narrow the search scope. Multiple filter conditions have a logical `AND` relationship. Only resources that meet all filter conditions are returned.
     *   - keyword: optional. Performs a fuzzy match on the module name. For example, if keyword is set to ecs, modules whose names contain ecs are returned.
     *   - namespaceName: optional. Filters modules by a specific workspace. For example, if namespaceName is set to alibaba, modules whose workspace is alibaba are returned. When moduleName is specified, namespaceName must also be specified. You can call the ListExplorerRegistryModule operation to obtain the namespaceName information.
     *   - moduleName: optional. Filters modules by a specific name. For example, if moduleName is set to ecs, modules whose name is ecs are returned.
     *   - moduleVersion: optional. Filters modules by a specific version. For example, if moduleVersion is set to 1.0.0, modules whose version is 1.0.0 are returned.
     * The response contains the request ID, total number of entries, data on the current page, and pagination information, which facilitates the processing of query results.
     *
     * @param Request - ListExplorerRegistryModuleVersionsRequest
     *
     * @returns ListExplorerRegistryModuleVersionsResponse
     *
     * @param ListExplorerRegistryModuleVersionsRequest $request
     *
     * @return ListExplorerRegistryModuleVersionsResponse
     */
    public function listExplorerRegistryModuleVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExplorerRegistryModuleVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists information about official Terraform modules provided by Alibaba Cloud.
     *
     * @remarks
     * This operation queries information about official Terraform modules provided by Alibaba Cloud.
     * You can use the `maxResults` parameter to adjust the maximum number of entries to return.
     * - If the `nextToken` parameter is not included in the response, no more data is available. Otherwise, more data is available. To query the next page, set the `nextToken` parameter of the ListExplorerRegistryModules operation to the `nextToken` value returned in the previous response. If you do not specify the `NextToken` parameter, the first page of data is returned by default.
     * - You can use keyword and moduleName as filter conditions to narrow the search scope. Multiple filter conditions are evaluated by using a logical `AND`. Only resources that meet all filter conditions are returned.
     *   - keyword: optional. Searches by keyword through fuzzy matching against ModuleName. For example, if keyword is set to ecs, modules whose names contain ecs are returned.
     *   - moduleName: optional. Filters modules by a specific name. For example, if moduleName is set to ecs, only the module whose name is exactly ecs is returned.
     * The response contains the request ID, total number of entries, data of the current page, and pagination information, which facilitates the processing of query results.
     *
     * @param Request - ListExplorerRegistryModulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExplorerRegistryModulesResponse
     *
     * @param ListExplorerRegistryModulesRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListExplorerRegistryModulesResponse
     */
    public function listExplorerRegistryModulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExplorerRegistryModules',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerRegistryModule',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExplorerRegistryModulesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Lists information about official Terraform modules provided by Alibaba Cloud.
     *
     * @remarks
     * This operation queries information about official Terraform modules provided by Alibaba Cloud.
     * You can use the `maxResults` parameter to adjust the maximum number of entries to return.
     * - If the `nextToken` parameter is not included in the response, no more data is available. Otherwise, more data is available. To query the next page, set the `nextToken` parameter of the ListExplorerRegistryModules operation to the `nextToken` value returned in the previous response. If you do not specify the `NextToken` parameter, the first page of data is returned by default.
     * - You can use keyword and moduleName as filter conditions to narrow the search scope. Multiple filter conditions are evaluated by using a logical `AND`. Only resources that meet all filter conditions are returned.
     *   - keyword: optional. Searches by keyword through fuzzy matching against ModuleName. For example, if keyword is set to ecs, modules whose names contain ecs are returned.
     *   - moduleName: optional. Filters modules by a specific name. For example, if moduleName is set to ecs, only the module whose name is exactly ecs is returned.
     * The response contains the request ID, total number of entries, data of the current page, and pagination information, which facilitates the processing of query results.
     *
     * @param Request - ListExplorerRegistryModulesRequest
     *
     * @returns ListExplorerRegistryModulesResponse
     *
     * @param ListExplorerRegistryModulesRequest $request
     *
     * @return ListExplorerRegistryModulesResponse
     */
    public function listExplorerRegistryModules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExplorerRegistryModulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of groups.
     *
     * @param tmpReq - ListGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupResponse
     *
     * @param ListGroupRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListGroupResponse
     */
    public function listGroupWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of groups.
     *
     * @param Request - ListGroupRequest
     *
     * @returns ListGroupResponse
     *
     * @param ListGroupRequest $request
     *
     * @return ListGroupResponse
     */
    public function listGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of jobs.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ListJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param string          $taskId
     * @param ListJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobType) {
            @$query['jobType'] = $request->jobType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of jobs.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param string          $taskId
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of template versions.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ListModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModuleVersionResponse
     *
     * @param string                   $moduleId
     * @param ListModuleVersionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModuleVersionResponse
     */
    public function listModuleVersionWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of template versions.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ListModuleVersionRequest
     *
     * @returns ListModuleVersionResponse
     *
     * @param string                   $moduleId
     * @param ListModuleVersionRequest $request
     *
     * @return ListModuleVersionResponse
     */
    public function listModuleVersion($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModuleVersionWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of templates under the current user, with support for pagination and conditional filtering.
     *
     * @remarks
     * ## Operation description
     * This operation lists all Terraform templates under the current user. You can specify query parameters to implement pagination, fuzzy match template names, filter templates by source or status, and more. You can also filter templates by tags for more granular results.
     * ### Precautions
     * - The pagination parameters `pageNumber` and `pageSize` help control the number of returned results.
     * - Use the `name` parameter to perform a fuzzy match search on template names.
     * - Use the `source` parameter to filter templates by source (such as OSS import or file upload).
     * - Use the `status` parameter to filter templates by status (such as created or published).
     * - Tag filtering requires a JSON-formatted string, for example, `[{"key":"env","value":"prod"}]`.
     *
     * @param tmpReq - ListModulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModulesResponse
     *
     * @param ListModulesRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListModulesResponse
     */
    public function listModulesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModules',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of templates under the current user, with support for pagination and conditional filtering.
     *
     * @remarks
     * ## Operation description
     * This operation lists all Terraform templates under the current user. You can specify query parameters to implement pagination, fuzzy match template names, filter templates by source or status, and more. You can also filter templates by tags for more granular results.
     * ### Precautions
     * - The pagination parameters `pageNumber` and `pageSize` help control the number of returned results.
     * - Use the `name` parameter to perform a fuzzy match search on template names.
     * - Use the `source` parameter to filter templates by source (such as OSS import or file upload).
     * - Use the `status` parameter to filter templates by status (such as created or published).
     * - Tag filtering requires a JSON-formatted string, for example, `[{"key":"env","value":"prod"}]`.
     *
     * @param Request - ListModulesRequest
     *
     * @returns ListModulesResponse
     *
     * @param ListModulesRequest $request
     *
     * @return ListModulesResponse
     */
    public function listModules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists the parameter sets associated with a resource.
     *
     * @param Request - ListParameterSetRelationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListParameterSetRelationResponse
     *
     * @param ListParameterSetRelationRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListParameterSetRelationResponse
     */
    public function listParameterSetRelationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListParameterSetRelation',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/operations/relation',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListParameterSetRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the parameter sets associated with a resource.
     *
     * @param Request - ListParameterSetRelationRequest
     *
     * @returns ListParameterSetRelationResponse
     *
     * @param ListParameterSetRelationRequest $request
     *
     * @return ListParameterSetRelationResponse
     */
    public function listParameterSetRelation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParameterSetRelationWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries and retrieves a paginated list of parameter sets with keyword search support.
     *
     * @remarks
     * ## Operation description
     * This operation queries all parameter sets in the system and supports filtering by keyword and paginated results. Authentication information is required in the request.
     * ### Notes
     * - The `keyword` parameter can be used to fuzzy match parameter sets by name or description.
     * - Pagination is controlled by `pageNumber` and `pageSize`. By default, results start from the first page. The page size is customizable but should be set to a reasonable value to avoid performance issues.
     *
     * @param Request - ListParameterSetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListParameterSetsResponse
     *
     * @param ListParameterSetsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListParameterSetsResponse
     */
    public function listParameterSetsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->kmsKeyId) {
            @$query['kmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListParameterSets',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListParameterSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries and retrieves a paginated list of parameter sets with keyword search support.
     *
     * @remarks
     * ## Operation description
     * This operation queries all parameter sets in the system and supports filtering by keyword and paginated results. Authentication information is required in the request.
     * ### Notes
     * - The `keyword` parameter can be used to fuzzy match parameter sets by name or description.
     * - Pagination is controlled by `pageNumber` and `pageSize`. By default, results start from the first page. The page size is customizable but should be set to a reasonable value to avoid performance issues.
     *
     * @param Request - ListParameterSetsRequest
     *
     * @returns ListParameterSetsResponse
     *
     * @param ListParameterSetsRequest $request
     *
     * @return ListParameterSetsResponse
     */
    public function listParameterSets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParameterSetsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of all products.
     *
     * @remarks
     * ## Operation description
     * - **Keyword search**: Use the `keyword` parameter for fuzzy matching.
     * - **Paged query**: Use `nextToken` for pagination and `maxResults` to specify the maximum number of results per page (default: 100, maximum: 200).
     * - **Terraform Provider version**: The optional `terraformProviderVersion` parameter filters products associated with a specific Provider version.
     * - **Response structure**: The response contains the request ID, total number of entries, data of the current page, and pagination information for easy processing of query results.
     *
     * @param Request - ListProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->supportTerraformer) {
            @$query['supportTerraformer'] = $request->supportTerraformer;
        }

        if (null !== $request->terraformProviderVersion) {
            @$query['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/products',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries the list of all products.
     *
     * @remarks
     * ## Operation description
     * - **Keyword search**: Use the `keyword` parameter for fuzzy matching.
     * - **Paged query**: Use `nextToken` for pagination and `maxResults` to specify the maximum number of results per page (default: 100, maximum: 200).
     * - **Terraform Provider version**: The optional `terraformProviderVersion` parameter filters products associated with a specific Provider version.
     * - **Response structure**: The response contains the request ID, total number of entries, data of the current page, and pagination information for easy processing of query results.
     *
     * @param Request - ListProductsRequest
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
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of projects.
     *
     * @param tmpReq - ListProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of projects.
     *
     * @param Request - ListProjectRequest
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of Registry template versions.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - ListRegistryModuleVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistryModuleVersionsResponse
     *
     * @param ListRegistryModuleVersionsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListRegistryModuleVersionsResponse
     */
    public function listRegistryModuleVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistryModuleVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegistryModuleVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Registry template versions.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - ListRegistryModuleVersionsRequest
     *
     * @returns ListRegistryModuleVersionsResponse
     *
     * @param ListRegistryModuleVersionsRequest $request
     *
     * @return ListRegistryModuleVersionsResponse
     */
    public function listRegistryModuleVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegistryModuleVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of Registry modules.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - ListRegistryModulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistryModulesResponse
     *
     * @param ListRegistryModulesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListRegistryModulesResponse
     */
    public function listRegistryModulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistryModules',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegistryModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Registry modules.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - ListRegistryModulesRequest
     *
     * @returns ListRegistryModulesResponse
     *
     * @param ListRegistryModulesRequest $request
     *
     * @return ListRegistryModulesResponse
     */
    public function listRegistryModules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegistryModulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of workspaces.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - ListRegistryNamespacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistryNamespacesResponse
     *
     * @param ListRegistryNamespacesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListRegistryNamespacesResponse
     */
    public function listRegistryNamespacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistryNamespaces',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegistryNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of workspaces.
     *
     * @remarks
     * Single-user call frequency: 200 calls per second.
     *
     * @param Request - ListRegistryNamespacesRequest
     *
     * @returns ListRegistryNamespacesResponse
     *
     * @param ListRegistryNamespacesRequest $request
     *
     * @return ListRegistryNamespacesResponse
     */
    public function listRegistryNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegistryNamespacesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of versions for a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ListResourceExportTaskVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceExportTaskVersionsResponse
     *
     * @param string                                $exportTaskId
     * @param ListResourceExportTaskVersionsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListResourceExportTaskVersionsResponse
     */
    public function listResourceExportTaskVersionsWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportVersion) {
            @$query['exportVersion'] = $request->exportVersion;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceExportTaskVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '/exportVersions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceExportTaskVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of versions for a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - ListResourceExportTaskVersionsRequest
     *
     * @returns ListResourceExportTaskVersionsResponse
     *
     * @param string                                $exportTaskId
     * @param ListResourceExportTaskVersionsRequest $request
     *
     * @return ListResourceExportTaskVersionsResponse
     */
    public function listResourceExportTaskVersions($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceExportTaskVersionsWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of resource export tasks.
     *
     * @remarks
     * Rate limit per user: 100 calls per second.
     *
     * @param Request - ListResourceExportTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceExportTasksResponse
     *
     * @param ListResourceExportTasksRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListResourceExportTasksResponse
     */
    public function listResourceExportTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportTaskId) {
            @$query['exportTaskId'] = $request->exportTaskId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceExportTasks',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceExportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of resource export tasks.
     *
     * @remarks
     * Rate limit per user: 100 calls per second.
     *
     * @param Request - ListResourceExportTasksRequest
     *
     * @returns ListResourceExportTasksResponse
     *
     * @param ListResourceExportTasksRequest $request
     *
     * @return ListResourceExportTasksResponse
     */
    public function listResourceExportTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceExportTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of resource types by filter conditions with pagination support.
     *
     * @remarks
     * ## Operation description
     * This API allows you to perform a conditional query for a list of resource types based on conditions such as product code, Terraform Provider version, child class, status, and keyword. The results contain detailed information about resources, including product code, status, status effective version, child class, Terraform Provider version, and resource type code. Paging is supported for handling large amounts of data.
     *
     * @param tmpReq - ListResourceTypesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTypesResponse
     *
     * @param ListResourceTypesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListResourceTypesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->terraformResourceTypes) {
            $request->terraformResourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->terraformResourceTypes, 'terraformResourceTypes', 'simple');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->subcategory) {
            @$query['subcategory'] = $request->subcategory;
        }

        if (null !== $request->supportTerraformer) {
            @$query['supportTerraformer'] = $request->supportTerraformer;
        }

        if (null !== $request->terraformProviderVersion) {
            @$query['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformResourceTypesShrink) {
            @$query['terraformResourceTypes'] = $request->terraformResourceTypesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTypes',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceTypes',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Queries a list of resource types by filter conditions with pagination support.
     *
     * @remarks
     * ## Operation description
     * This API allows you to perform a conditional query for a list of resource types based on conditions such as product code, Terraform Provider version, child class, status, and keyword. The results contain detailed information about resources, including product code, status, status effective version, child class, Terraform Provider version, and resource type code. Paging is supported for handling large amounts of data.
     *
     * @param Request - ListResourceTypesRequest
     *
     * @returns ListResourceTypesResponse
     *
     * @param ListResourceTypesRequest $request
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceTypesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the resources of a node.
     *
     * @param Request - ListResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->sourceValue) {
            @$query['sourceValue'] = $request->sourceValue;
        }

        if (null !== $request->specType) {
            @$query['specType'] = $request->specType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResources',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/resources/stateparser',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the resources of a node.
     *
     * @param Request - ListResourcesRequest
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of stack configurations.
     *
     * @param Request - ListStackConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStackConfigsResponse
     *
     * @param string                  $stackId
     * @param ListStackConfigsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListStackConfigsResponse
     */
    public function listStackConfigsWithOptions($stackId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStackConfigs',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks/' . Url::percentEncode($stackId) . '/configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStackConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of stack configurations.
     *
     * @param Request - ListStackConfigsRequest
     *
     * @returns ListStackConfigsResponse
     *
     * @param string                  $stackId
     * @param ListStackConfigsRequest $request
     *
     * @return ListStackConfigsResponse
     */
    public function listStackConfigs($stackId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStackConfigsWithOptions($stackId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of stacks.
     *
     * @param Request - ListStacksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStacksResponse
     *
     * @param ListStacksRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListStacksResponse
     */
    public function listStacksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->kmsKeyId) {
            @$query['kmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStacks',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of stacks.
     *
     * @param Request - ListStacksRequest
     *
     * @returns ListStacksResponse
     *
     * @param ListStacksRequest $request
     *
     * @return ListStacksResponse
     */
    public function listStacks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStacksWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of tasks.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param tmpReq - ListTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->kmsKeyId) {
            @$query['kmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->moduleId) {
            @$query['moduleId'] = $request->moduleId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of tasks.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of Terraform provider versions.
     *
     * @param Request - ListTerraformProviderVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTerraformProviderVersionsResponse
     *
     * @param ListTerraformProviderVersionsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTerraformProviderVersionsResponse
     */
    public function listTerraformProviderVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->usage) {
            @$query['usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTerraformProviderVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/version/terraform/provider',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTerraformProviderVersionsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Retrieves the list of Terraform provider versions.
     *
     * @param Request - ListTerraformProviderVersionsRequest
     *
     * @returns ListTerraformProviderVersionsResponse
     *
     * @param ListTerraformProviderVersionsRequest $request
     *
     * @return ListTerraformProviderVersionsResponse
     */
    public function listTerraformProviderVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTerraformProviderVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Supports resource import and removal for state files.
     *
     * @remarks
     * This API is used to manage state files for resource orchestration tasks and stack tasks on the automated service desk.
     * Before using this API, make sure that all required authentication information is correctly configured and that the Terraform code meets the expected functional requirements.
     *
     * @param Request - ManageTerraformStateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManageTerraformStateResponse
     *
     * @param ManageTerraformStateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ManageTerraformStateResponse
     */
    public function manageTerraformStateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->identifier) {
            @$body['identifier'] = $request->identifier;
        }

        if (null !== $request->importResourceId) {
            @$body['importResourceId'] = $request->importResourceId;
        }

        if (null !== $request->resourceIdentifier) {
            @$body['resourceIdentifier'] = $request->resourceIdentifier;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ManageTerraformState',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/manage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ManageTerraformStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Supports resource import and removal for state files.
     *
     * @remarks
     * This API is used to manage state files for resource orchestration tasks and stack tasks on the automated service desk.
     * Before using this API, make sure that all required authentication information is correctly configured and that the Terraform code meets the expected functional requirements.
     *
     * @param Request - ManageTerraformStateRequest
     *
     * @returns ManageTerraformStateResponse
     *
     * @param ManageTerraformStateRequest $request
     *
     * @return ManageTerraformStateResponse
     */
    public function manageTerraformState($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->manageTerraformStateWithOptions($request, $headers, $runtime);
    }

    /**
     * After a job is created, you can perform the **Cancel** operation to stop the job while it is running.
     * After a job reaches the pending confirmation state, you can perform the **Abolish** operation to stop the job, or perform the **Execute** operation to continue the job execution.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - OperateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateJobResponse
     *
     * @param string            $taskId
     * @param string            $jobId
     * @param string            $operationType
     * @param OperateJobRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return OperateJobResponse
     */
    public function operateJobWithOptions($taskId, $jobId, $operationType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['comment'] = $request->comment;
        }

        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateJob',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs/' . Url::percentEncode($jobId) . '/operation/' . Url::percentEncode($operationType) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OperateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a job is created, you can perform the **Cancel** operation to stop the job while it is running.
     * After a job reaches the pending confirmation state, you can perform the **Abolish** operation to stop the job, or perform the **Execute** operation to continue the job execution.
     *
     * @remarks
     * Per-user call frequency: 100 calls per second.
     *
     * @param Request - OperateJobRequest
     *
     * @returns OperateJobResponse
     *
     * @param string            $taskId
     * @param string            $jobId
     * @param string            $operationType
     * @param OperateJobRequest $request
     *
     * @return OperateJobResponse
     */
    public function operateJob($taskId, $jobId, $operationType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateJobWithOptions($taskId, $jobId, $operationType, $request, $headers, $runtime);
    }

    /**
     * Publishes a Registry template version.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - PublishRegistryModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishRegistryModuleVersionResponse
     *
     * @param PublishRegistryModuleVersionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return PublishRegistryModuleVersionResponse
     */
    public function publishRegistryModuleVersionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->moduleName) {
            @$body['moduleName'] = $request->moduleName;
        }

        if (null !== $request->namespaceName) {
            @$body['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishRegistryModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishRegistryModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a Registry template version.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - PublishRegistryModuleVersionRequest
     *
     * @returns PublishRegistryModuleVersionResponse
     *
     * @param PublishRegistryModuleVersionRequest $request
     *
     * @return PublishRegistryModuleVersionResponse
     */
    public function publishRegistryModuleVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishRegistryModuleVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes a shared account.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param tmpReq - RemoveSharedAccountsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSharedAccountsResponse
     *
     * @param RemoveSharedAccountsRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveSharedAccountsResponse
     */
    public function removeSharedAccountsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveSharedAccountsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'accountIds', 'simple');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['accountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveSharedAccounts',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/sharedAccounts',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a shared account.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - RemoveSharedAccountsRequest
     *
     * @returns RemoveSharedAccountsResponse
     *
     * @param RemoveSharedAccountsRequest $request
     *
     * @return RemoveSharedAccountsResponse
     */
    public function removeSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSharedAccountsWithOptions($request, $headers, $runtime);
    }

    /**
     * Sets the encryption configuration.
     *
     * @param Request - SetEncryptionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetEncryptionConfigResponse
     *
     * @param SetEncryptionConfigRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SetEncryptionConfigResponse
     */
    public function setEncryptionConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->kmsKeyId) {
            @$body['kmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->kmsRegionId) {
            @$body['kmsRegionId'] = $request->kmsRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetEncryptionConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/encryption/config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SetEncryptionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the encryption configuration.
     *
     * @param Request - SetEncryptionConfigRequest
     *
     * @returns SetEncryptionConfigResponse
     *
     * @param SetEncryptionConfigRequest $request
     *
     * @return SetEncryptionConfigResponse
     */
    public function setEncryptionConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setEncryptionConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Triggers the execution of a stack.
     *
     * @param Request - TriggerStackExecutionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerStackExecutionResponse
     *
     * @param TriggerStackExecutionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return TriggerStackExecutionResponse
     */
    public function triggerStackExecutionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->changedFolders) {
            @$body['changedFolders'] = $request->changedFolders;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->codePackagePath) {
            @$body['codePackagePath'] = $request->codePackagePath;
        }

        if (null !== $request->codeVersionId) {
            @$body['codeVersionId'] = $request->codeVersionId;
        }

        if (null !== $request->sourceTriggerId) {
            @$body['sourceTriggerId'] = $request->sourceTriggerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TriggerStackExecution',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks/trigger',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TriggerStackExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers the execution of a stack.
     *
     * @param Request - TriggerStackExecutionRequest
     *
     * @returns TriggerStackExecutionResponse
     *
     * @param TriggerStackExecutionRequest $request
     *
     * @return TriggerStackExecutionResponse
     */
    public function triggerStackExecution($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerStackExecutionWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the drift detection configuration information for the specified ID.
     *
     * @remarks
     * ## Request Description
     * - `detectConfigId` is a required parameter used to identify the specific detection configuration to update.
     * - When `triggerType` is set to `Cron`, a valid `cronExpression` must be provided.
     * - Each element in the `alarmConfigs` list must include an alert type (`type`) and an address (`address`).
     * - If you do not want to change certain properties (such as `name`, `description`, etc.), you can omit these fields from the request body.
     *
     * @param Request - UpdateDetectConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDetectConfigResponse
     *
     * @param string                    $detectConfigId
     * @param UpdateDetectConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDetectConfigResponse
     */
    public function updateDetectConfigWithOptions($detectConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmConfigs) {
            @$body['alarmConfigs'] = $request->alarmConfigs;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->cronExpression) {
            @$body['cronExpression'] = $request->cronExpression;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->detectConfigName) {
            @$body['detectConfigName'] = $request->detectConfigName;
        }

        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->triggerType) {
            @$body['triggerType'] = $request->triggerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDetectConfig',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraformState/detectConfig/' . Url::percentEncode($detectConfigId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDetectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the drift detection configuration information for the specified ID.
     *
     * @remarks
     * ## Request Description
     * - `detectConfigId` is a required parameter used to identify the specific detection configuration to update.
     * - When `triggerType` is set to `Cron`, a valid `cronExpression` must be provided.
     * - Each element in the `alarmConfigs` list must include an alert type (`type`) and an address (`address`).
     * - If you do not want to change certain properties (such as `name`, `description`, etc.), you can omit these fields from the request body.
     *
     * @param Request - UpdateDetectConfigRequest
     *
     * @returns UpdateDetectConfigResponse
     *
     * @param string                    $detectConfigId
     * @param UpdateDetectConfigRequest $request
     *
     * @return UpdateDetectConfigResponse
     */
    public function updateDetectConfig($detectConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDetectConfigWithOptions($detectConfigId, $request, $headers, $runtime);
    }

    /**
     * Updates an Explorer template.
     *
     * @remarks
     * Updates an Explorer template.
     *
     * @param Request - UpdateExplorerModuleAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExplorerModuleAttributeResponse
     *
     * @param string                               $explorerModuleId
     * @param UpdateExplorerModuleAttributeRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateExplorerModuleAttributeResponse
     */
    public function updateExplorerModuleAttributeWithOptions($explorerModuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExplorerModuleAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerModule/' . Url::percentEncode($explorerModuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExplorerModuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an Explorer template.
     *
     * @remarks
     * Updates an Explorer template.
     *
     * @param Request - UpdateExplorerModuleAttributeRequest
     *
     * @returns UpdateExplorerModuleAttributeResponse
     *
     * @param string                               $explorerModuleId
     * @param UpdateExplorerModuleAttributeRequest $request
     *
     * @return UpdateExplorerModuleAttributeResponse
     */
    public function updateExplorerModuleAttribute($explorerModuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExplorerModuleAttributeWithOptions($explorerModuleId, $request, $headers, $runtime);
    }

    /**
     * Modifies a group.
     *
     * @param Request - UpdateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGroupResponse
     *
     * @param string             $groupId
     * @param UpdateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->autoTrigger) {
            @$body['autoTrigger'] = $request->autoTrigger;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->forcedSetting) {
            @$body['forcedSetting'] = $request->forcedSetting;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->notifyConfig) {
            @$body['notifyConfig'] = $request->notifyConfig;
        }

        if (null !== $request->notifyOperationTypes) {
            @$body['notifyOperationTypes'] = $request->notifyOperationTypes;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->reportExportField) {
            @$body['reportExportField'] = $request->reportExportField;
        }

        if (null !== $request->reportExportPath) {
            @$body['reportExportPath'] = $request->reportExportPath;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->triggerConfig) {
            @$body['triggerConfig'] = $request->triggerConfig;
        }

        if (null !== $request->triggerResourceType) {
            @$body['triggerResourceType'] = $request->triggerResourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a group.
     *
     * @param Request - UpdateGroupRequest
     *
     * @returns UpdateGroupResponse
     *
     * @param string             $groupId
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * Updates the name, description, tags, and other information of a specified template.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to modify the basic attributes of an existing template, including but not limited to the template name, description, and tags.
     * - The update operation does not affect the content or version information of the template.
     * - To enable or disable deletion protection, use the deletionProtection parameter.
     * - Use clientToken to ensure the idempotence of the request and avoid duplicate submissions caused by network issues.
     *
     * @param Request - UpdateModuleAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModuleAttributeResponse
     *
     * @param string                       $moduleId
     * @param UpdateModuleAttributeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateModuleAttributeResponse
     */
    public function updateModuleAttributeWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        if (null !== $request->statePath) {
            @$body['statePath'] = $request->statePath;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->versionStrategy) {
            @$body['versionStrategy'] = $request->versionStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModuleAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateModuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name, description, tags, and other information of a specified template.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to modify the basic attributes of an existing template, including but not limited to the template name, description, and tags.
     * - The update operation does not affect the content or version information of the template.
     * - To enable or disable deletion protection, use the deletionProtection parameter.
     * - Use clientToken to ensure the idempotence of the request and avoid duplicate submissions caused by network issues.
     *
     * @param Request - UpdateModuleAttributeRequest
     *
     * @returns UpdateModuleAttributeResponse
     *
     * @param string                       $moduleId
     * @param UpdateModuleAttributeRequest $request
     *
     * @return UpdateModuleAttributeResponse
     */
    public function updateModuleAttribute($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModuleAttributeWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * Updates the attributes of a specified parameter set, such as the name and description.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to modify the basic information of an existing parameter set, including the name and description.
     * - If the request includes the `parameters` field, the parameter list in the parameter set is updated.
     * - The `clientToken` field can be used to ensure the idempotence of the request.
     * - The update operation requires a valid `parameterSetId` as a path parameter.
     * - The request must include authentication information to pass identity verification.
     *
     * @param Request - UpdateParameterSetAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateParameterSetAttributeResponse
     *
     * @param string                             $parameterSetId
     * @param UpdateParameterSetAttributeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateParameterSetAttributeResponse
     */
    public function updateParameterSetAttributeWithOptions($parameterSetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateParameterSetAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/' . Url::percentEncode($parameterSetId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateParameterSetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a specified parameter set, such as the name and description.
     *
     * @remarks
     * ## Operation description
     * - This operation allows you to modify the basic information of an existing parameter set, including the name and description.
     * - If the request includes the `parameters` field, the parameter list in the parameter set is updated.
     * - The `clientToken` field can be used to ensure the idempotence of the request.
     * - The update operation requires a valid `parameterSetId` as a path parameter.
     * - The request must include authentication information to pass identity verification.
     *
     * @param Request - UpdateParameterSetAttributeRequest
     *
     * @returns UpdateParameterSetAttributeResponse
     *
     * @param string                             $parameterSetId
     * @param UpdateParameterSetAttributeRequest $request
     *
     * @return UpdateParameterSetAttributeResponse
     */
    public function updateParameterSetAttribute($parameterSetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateParameterSetAttributeWithOptions($parameterSetId, $request, $headers, $runtime);
    }

    /**
     * Updates project information.
     *
     * @param Request - UpdateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $projectId
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates project information.
     *
     * @param Request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $projectId
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * Updates a Registry template.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateRegistryModuleAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRegistryModuleAttributeResponse
     *
     * @param string                               $namespaceName
     * @param string                               $moduleName
     * @param UpdateRegistryModuleAttributeRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateRegistryModuleAttributeResponse
     */
    public function updateRegistryModuleAttributeWithOptions($namespaceName, $moduleName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRegistryModuleAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRegistryModuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Registry template.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateRegistryModuleAttributeRequest
     *
     * @returns UpdateRegistryModuleAttributeResponse
     *
     * @param string                               $namespaceName
     * @param string                               $moduleName
     * @param UpdateRegistryModuleAttributeRequest $request
     *
     * @return UpdateRegistryModuleAttributeResponse
     */
    public function updateRegistryModuleAttribute($namespaceName, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRegistryModuleAttributeWithOptions($namespaceName, $moduleName, $request, $headers, $runtime);
    }

    /**
     * Modifies a workspace.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateRegistryNamespaceAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRegistryNamespaceAttributeResponse
     *
     * @param string                                  $namespaceName
     * @param UpdateRegistryNamespaceAttributeRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateRegistryNamespaceAttributeResponse
     */
    public function updateRegistryNamespaceAttributeWithOptions($namespaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRegistryNamespaceAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace/' . Url::percentEncode($namespaceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRegistryNamespaceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a workspace.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateRegistryNamespaceAttributeRequest
     *
     * @returns UpdateRegistryNamespaceAttributeResponse
     *
     * @param string                                  $namespaceName
     * @param UpdateRegistryNamespaceAttributeRequest $request
     *
     * @return UpdateRegistryNamespaceAttributeResponse
     */
    public function updateRegistryNamespaceAttribute($namespaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRegistryNamespaceAttributeWithOptions($namespaceName, $request, $headers, $runtime);
    }

    /**
     * Modifies a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateResourceExportTaskAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceExportTaskAttributeResponse
     *
     * @param string                                   $exportTaskId
     * @param UpdateResourceExportTaskAttributeRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateResourceExportTaskAttributeResponse
     */
    public function updateResourceExportTaskAttributeWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->exportToModule) {
            @$body['exportToModule'] = $request->exportToModule;
        }

        if (null !== $request->includeRules) {
            @$body['includeRules'] = $request->includeRules;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceExportTaskAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceExportTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a resource export task.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateResourceExportTaskAttributeRequest
     *
     * @returns UpdateResourceExportTaskAttributeResponse
     *
     * @param string                                   $exportTaskId
     * @param UpdateResourceExportTaskAttributeRequest $request
     *
     * @return UpdateResourceExportTaskAttributeResponse
     */
    public function updateResourceExportTaskAttribute($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceExportTaskAttributeWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * Modifies a stack. When the configuration changes, a stack deployment is triggered.
     *
     * @param Request - UpdateStackRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStackResponse
     *
     * @param string             $stackId
     * @param UpdateStackRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStackResponse
     */
    public function updateStackWithOptions($stackId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        if (null !== $request->workingDirectory) {
            @$body['workingDirectory'] = $request->workingDirectory;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateStack',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/stacks/' . Url::percentEncode($stackId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a stack. When the configuration changes, a stack deployment is triggered.
     *
     * @param Request - UpdateStackRequest
     *
     * @returns UpdateStackResponse
     *
     * @param string             $stackId
     * @param UpdateStackRequest $request
     *
     * @return UpdateStackResponse
     */
    public function updateStack($stackId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateStackWithOptions($stackId, $request, $headers, $runtime);
    }

    /**
     * Updates the attributes of a node.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateTaskAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTaskAttributeResponse
     *
     * @param string                     $taskId
     * @param UpdateTaskAttributeRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTaskAttributeResponse
     */
    public function updateTaskAttributeWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoApply) {
            @$body['autoApply'] = $request->autoApply;
        }

        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->initModuleState) {
            @$body['initModuleState'] = $request->initModuleState;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->protectionStrategy) {
            @$body['protectionStrategy'] = $request->protectionStrategy;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->skipPropertyValidation) {
            @$body['skipPropertyValidation'] = $request->skipPropertyValidation;
        }

        if (null !== $request->skipRegionValidation) {
            @$body['skipRegionValidation'] = $request->skipRegionValidation;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTaskAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a node.
     *
     * @remarks
     * Single-user call frequency: 100 calls per second.
     *
     * @param Request - UpdateTaskAttributeRequest
     *
     * @returns UpdateTaskAttributeResponse
     *
     * @param string                     $taskId
     * @param UpdateTaskAttributeRequest $request
     *
     * @return UpdateTaskAttributeResponse
     */
    public function updateTaskAttribute($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskAttributeWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * Uploads a template.
     *
     * @param Request - UploadModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadModuleResponse
     *
     * @param string              $resourceType
     * @param UploadModuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UploadModuleResponse
     */
    public function uploadModuleWithOptions($resourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->moduleId) {
            @$query['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->url) {
            @$query['url'] = $request->url;
        }

        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/upload/' . Url::percentEncode($resourceType) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UploadModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a template.
     *
     * @param Request - UploadModuleRequest
     *
     * @returns UploadModuleResponse
     *
     * @param string              $resourceType
     * @param UploadModuleRequest $request
     *
     * @return UploadModuleResponse
     */
    public function uploadModule($resourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadModuleWithOptions($resourceType, $request, $headers, $runtime);
    }

    /**
     * @param string                     $resourceType
     * @param UploadModuleAdvanceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UploadModuleResponse
     */
    public function uploadModuleAdvance($resourceType, $request, $headers, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'IaCService',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $uploadModuleReq = new UploadModuleRequest([]);
        Utils::convert($request, $uploadModuleReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $uploadModuleReq->url = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->uploadModuleWithOptions($resourceType, $uploadModuleReq, $headers, $runtime);
    }

    /**
     * Performs a dry run on a template.
     *
     * @remarks
     * Performs a dry run on the content of a Terraform configuration file.
     *
     * @param Request - ValidateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateModuleResponse
     *
     * @param ValidateModuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ValidateModuleResponse
     */
    public function validateModuleWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->codeMap) {
            @$body['codeMap'] = $request->codeMap;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/module/validation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ValidateModuleResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Performs a dry run on a template.
     *
     * @remarks
     * Performs a dry run on the content of a Terraform configuration file.
     *
     * @param Request - ValidateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateModuleResponse
     *
     * @param ValidateModuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ValidateModuleResponse
     */
    public function validateModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->codeMap) {
            @$body['codeMap'] = $request->codeMap;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/module/validation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a dry run on a template.
     *
     * @remarks
     * Performs a dry run on the content of a Terraform configuration file.
     *
     * @param Request - ValidateModuleRequest
     *
     * @returns ValidateModuleResponse
     *
     * @param ValidateModuleRequest $request
     *
     * @return ValidateModuleResponse
     */
    public function validateModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateModuleWithOptions($request, $headers, $runtime);
    }
}
