<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ApplyBastionAccountRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ApplyBastionAccountResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\AssociatePocTaskRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\AssociatePocTaskResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CompleteModelingProjectRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CompleteModelingProjectResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleBasicInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleBasicInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleMetaInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleMetaInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleOutputInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleOutputInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateModelingProjectRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateModelingProjectResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DeleteModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DeleteModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DeployModelFileRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DeployModelFileResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleBasicInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleBasicInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleMetaInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleMetaInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleOutputInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleOutputInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFeatureOptionRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFeatureOptionResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFeatureTemplateListResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFileDownloadUrlRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFileDownloadUrlResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelFeatureRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelFeatureResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectListRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectListResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelOssTokenResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleServiceExistRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleServiceExistResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleStatusRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleStatusResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribePocTaskListResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeSafRmmpOrderResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeServiceAndSceneRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeServiceAndSceneResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeUserModelListRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeUserModelListResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DuplicateModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DuplicateModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\EditModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\EditModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\GetBastionHostCertificationRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\GetBastionHostCertificationResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\IterateModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\IterateModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\OfflineModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\OfflineModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\OnlineModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\OnlineModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ParseExpressionParametersRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ParseExpressionParametersResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\PrepublishModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\PrepublishModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\RequestModelFileSyncRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\RequestModelFileSyncResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\RollbackModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\RollbackModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\TestModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\TestModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\TestPreModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\TestPreModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\TestProcessExpressionRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\TestProcessExpressionResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\UpdateModuleBasicInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\UpdateModuleBasicInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ValidateModelFileRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ValidateModelFileResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ValidateTestFileRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\ValidateTestFileResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Safconsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('safconsole', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Apply for Bastion Host Account.
     *
     * @remarks
     * ## Request Description
     * - This interface is used for customers to create a modeling project for the first time.
     * - `projectName` is a required field, with a maximum length of 50 characters.
     * - `remark` and `instanceSpec` are optional, where `remark` has a maximum length of 200 characters.
     * - The available values for `instanceSpec` include `SECURE_ENV_LITE` and `SECURE_ENV_PRO`.
     *
     * @param request - ApplyBastionAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyBastionAccountResponse
     *
     * @param ApplyBastionAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ApplyBastionAccountResponse
     */
    public function applyBastionAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyBastionAccount',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyBastionAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Apply for Bastion Host Account.
     *
     * @remarks
     * ## Request Description
     * - This interface is used for customers to create a modeling project for the first time.
     * - `projectName` is a required field, with a maximum length of 50 characters.
     * - `remark` and `instanceSpec` are optional, where `remark` has a maximum length of 200 characters.
     * - The available values for `instanceSpec` include `SECURE_ENV_LITE` and `SECURE_ENV_PRO`.
     *
     * @param request - ApplyBastionAccountRequest
     *
     * @returns ApplyBastionAccountResponse
     *
     * @param ApplyBastionAccountRequest $request
     *
     * @return ApplyBastionAccountResponse
     */
    public function applyBastionAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyBastionAccountWithOptions($request, $runtime);
    }

    /**
     * Associate Retrospective Task.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - AssociatePocTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociatePocTaskResponse
     *
     * @param AssociatePocTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AssociatePocTaskResponse
     */
    public function associatePocTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociatePocTask',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociatePocTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associate Retrospective Task.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - AssociatePocTaskRequest
     *
     * @returns AssociatePocTaskResponse
     *
     * @param AssociatePocTaskRequest $request
     *
     * @return AssociatePocTaskResponse
     */
    public function associatePocTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associatePocTaskWithOptions($request, $runtime);
    }

    /**
     * Complete project and release resources.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - CompleteModelingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteModelingProjectResponse
     *
     * @param CompleteModelingProjectRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CompleteModelingProjectResponse
     */
    public function completeModelingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompleteModelingProject',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompleteModelingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Complete project and release resources.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - CompleteModelingProjectRequest
     *
     * @returns CompleteModelingProjectResponse
     *
     * @param CompleteModelingProjectRequest $request
     *
     * @return CompleteModelingProjectResponse
     */
    public function completeModelingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeModelingProjectWithOptions($request, $runtime);
    }

    /**
     * Create basic model information.
     *
     * @param request - CreateCustomerModuleBasicInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomerModuleBasicInfoResponse
     *
     * @param CreateCustomerModuleBasicInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateCustomerModuleBasicInfoResponse
     */
    public function createCustomerModuleBasicInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleName) {
            @$query['CustomerModuleName'] = $request->customerModuleName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->moduleType) {
            @$query['ModuleType'] = $request->moduleType;
        }

        if (null !== $request->storePath) {
            @$query['StorePath'] = $request->storePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomerModuleBasicInfo',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomerModuleBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create basic model information.
     *
     * @param request - CreateCustomerModuleBasicInfoRequest
     *
     * @returns CreateCustomerModuleBasicInfoResponse
     *
     * @param CreateCustomerModuleBasicInfoRequest $request
     *
     * @return CreateCustomerModuleBasicInfoResponse
     */
    public function createCustomerModuleBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerModuleBasicInfoWithOptions($request, $runtime);
    }

    /**
     * Save Model Feature Configuration.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each option including a label (label) and value (value).
     *
     * @param request - CreateCustomerModuleMetaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomerModuleMetaInfoResponse
     *
     * @param CreateCustomerModuleMetaInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateCustomerModuleMetaInfoResponse
     */
    public function createCustomerModuleMetaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        if (null !== $request->featureString) {
            @$query['FeatureString'] = $request->featureString;
        }

        if (null !== $request->featureTemplate) {
            @$query['FeatureTemplate'] = $request->featureTemplate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomerModuleMetaInfo',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomerModuleMetaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Save Model Feature Configuration.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each option including a label (label) and value (value).
     *
     * @param request - CreateCustomerModuleMetaInfoRequest
     *
     * @returns CreateCustomerModuleMetaInfoResponse
     *
     * @param CreateCustomerModuleMetaInfoRequest $request
     *
     * @return CreateCustomerModuleMetaInfoResponse
     */
    public function createCustomerModuleMetaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerModuleMetaInfoWithOptions($request, $runtime);
    }

    /**
     * Create Model Output Information.
     *
     * @param request - CreateCustomerModuleOutputInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomerModuleOutputInfoResponse
     *
     * @param CreateCustomerModuleOutputInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateCustomerModuleOutputInfoResponse
     */
    public function createCustomerModuleOutputInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        if (null !== $request->finalScoreFormat) {
            @$query['FinalScoreFormat'] = $request->finalScoreFormat;
        }

        if (null !== $request->processExpression) {
            @$query['ProcessExpression'] = $request->processExpression;
        }

        if (null !== $request->testFileUrl) {
            @$query['TestFileUrl'] = $request->testFileUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomerModuleOutputInfo',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomerModuleOutputInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Model Output Information.
     *
     * @param request - CreateCustomerModuleOutputInfoRequest
     *
     * @returns CreateCustomerModuleOutputInfoResponse
     *
     * @param CreateCustomerModuleOutputInfoRequest $request
     *
     * @return CreateCustomerModuleOutputInfoResponse
     */
    public function createCustomerModuleOutputInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerModuleOutputInfoWithOptions($request, $runtime);
    }

    /**
     * Initialize a modeling project.
     *
     * @remarks
     * ## Request Description
     * - This interface is used for customers to create a modeling project for the first time.
     * - `projectName` is a required field, with a maximum length of 50 characters.
     * - `remark` and `instanceSpec` are optional, where `remark` has a maximum length of 200 characters.
     * - The available values for `instanceSpec` include `SECURE_ENV_LITE` and `SECURE_ENV_PRO`.
     *
     * @param request - CreateModelingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelingProjectResponse
     *
     * @param CreateModelingProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateModelingProjectResponse
     */
    public function createModelingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModelingProject',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initialize a modeling project.
     *
     * @remarks
     * ## Request Description
     * - This interface is used for customers to create a modeling project for the first time.
     * - `projectName` is a required field, with a maximum length of 50 characters.
     * - `remark` and `instanceSpec` are optional, where `remark` has a maximum length of 200 characters.
     * - The available values for `instanceSpec` include `SECURE_ENV_LITE` and `SECURE_ENV_PRO`.
     *
     * @param request - CreateModelingProjectRequest
     *
     * @returns CreateModelingProjectResponse
     *
     * @param CreateModelingProjectRequest $request
     *
     * @return CreateModelingProjectResponse
     */
    public function createModelingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelingProjectWithOptions($request, $runtime);
    }

    /**
     * Deletes the specified customer model based on the provided customer model ID.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: Deletion is irreversible, please use with caution.
     *
     * @param request - DeleteModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelResponse
     *
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the specified customer model based on the provided customer model ID.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: Deletion is irreversible, please use with caution.
     *
     * @param request - DeleteModelRequest
     *
     * @returns DeleteModelResponse
     *
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * Deploy Model File.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - DeployModelFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployModelFileResponse
     *
     * @param DeployModelFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeployModelFileResponse
     */
    public function deployModelFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployModelFile',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployModelFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploy Model File.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - DeployModelFileRequest
     *
     * @returns DeployModelFileResponse
     *
     * @param DeployModelFileRequest $request
     *
     * @return DeployModelFileResponse
     */
    public function deployModelFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployModelFileWithOptions($request, $runtime);
    }

    /**
     * Query basic model information based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include but are not limited to "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeCustomerModuleBasicInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomerModuleBasicInfoResponse
     *
     * @param DescribeCustomerModuleBasicInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCustomerModuleBasicInfoResponse
     */
    public function describeCustomerModuleBasicInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomerModuleBasicInfo',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomerModuleBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query basic model information based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include but are not limited to "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeCustomerModuleBasicInfoRequest
     *
     * @returns DescribeCustomerModuleBasicInfoResponse
     *
     * @param DescribeCustomerModuleBasicInfoRequest $request
     *
     * @return DescribeCustomerModuleBasicInfoResponse
     */
    public function describeCustomerModuleBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerModuleBasicInfoWithOptions($request, $runtime);
    }

    /**
     * Query model feature information based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include, but are not limited to, "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeCustomerModuleMetaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomerModuleMetaInfoResponse
     *
     * @param DescribeCustomerModuleMetaInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCustomerModuleMetaInfoResponse
     */
    public function describeCustomerModuleMetaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomerModuleMetaInfo',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomerModuleMetaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query model feature information based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include, but are not limited to, "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeCustomerModuleMetaInfoRequest
     *
     * @returns DescribeCustomerModuleMetaInfoResponse
     *
     * @param DescribeCustomerModuleMetaInfoRequest $request
     *
     * @return DescribeCustomerModuleMetaInfoResponse
     */
    public function describeCustomerModuleMetaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerModuleMetaInfoWithOptions($request, $runtime);
    }

    /**
     * Query model output information based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include but are not limited to "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeCustomerModuleOutputInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomerModuleOutputInfoResponse
     *
     * @param DescribeCustomerModuleOutputInfoRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCustomerModuleOutputInfoResponse
     */
    public function describeCustomerModuleOutputInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomerModuleOutputInfo',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomerModuleOutputInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query model output information based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include but are not limited to "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeCustomerModuleOutputInfoRequest
     *
     * @returns DescribeCustomerModuleOutputInfoResponse
     *
     * @param DescribeCustomerModuleOutputInfoRequest $request
     *
     * @return DescribeCustomerModuleOutputInfoResponse
     */
    public function describeCustomerModuleOutputInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerModuleOutputInfoWithOptions($request, $runtime);
    }

    /**
     * Return specific feature options based on the feature template.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - DescribeFeatureOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFeatureOptionResponse
     *
     * @param DescribeFeatureOptionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFeatureOptionResponse
     */
    public function describeFeatureOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureTemplate) {
            @$query['FeatureTemplate'] = $request->featureTemplate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFeatureOption',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFeatureOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Return specific feature options based on the feature template.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - DescribeFeatureOptionRequest
     *
     * @returns DescribeFeatureOptionResponse
     *
     * @param DescribeFeatureOptionRequest $request
     *
     * @return DescribeFeatureOptionResponse
     */
    public function describeFeatureOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFeatureOptionWithOptions($request, $runtime);
    }

    /**
     * Get the list of available feature templates for model configuration.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which consists of a label (label) and a value (value).
     *
     * @param request - DescribeFeatureTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFeatureTemplateListResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFeatureTemplateListResponse
     */
    public function describeFeatureTemplateListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeFeatureTemplateList',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFeatureTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of available feature templates for model configuration.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which consists of a label (label) and a value (value).
     *
     * @returns DescribeFeatureTemplateListResponse
     *
     * @return DescribeFeatureTemplateListResponse
     */
    public function describeFeatureTemplateList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFeatureTemplateListWithOptions($runtime);
    }

    /**
     * Get File Download Link.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - DescribeFileDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFileDownloadUrlResponse
     *
     * @param DescribeFileDownloadUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeFileDownloadUrlResponse
     */
    public function describeFileDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFileDownloadUrl',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFileDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get File Download Link.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - DescribeFileDownloadUrlRequest
     *
     * @returns DescribeFileDownloadUrlResponse
     *
     * @param DescribeFileDownloadUrlRequest $request
     *
     * @return DescribeFileDownloadUrlResponse
     */
    public function describeFileDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * Render the feature configuration of the model.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each including a label (label) and value (value).
     *
     * @param request - DescribeModelFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelFeatureResponse
     *
     * @param DescribeModelFeatureRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeModelFeatureResponse
     */
    public function describeModelFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        if (null !== $request->featureTemplate) {
            @$query['FeatureTemplate'] = $request->featureTemplate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModelFeature',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Render the feature configuration of the model.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each including a label (label) and value (value).
     *
     * @param request - DescribeModelFeatureRequest
     *
     * @returns DescribeModelFeatureResponse
     *
     * @param DescribeModelFeatureRequest $request
     *
     * @return DescribeModelFeatureResponse
     */
    public function describeModelFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelFeatureWithOptions($request, $runtime);
    }

    /**
     * Obtain OSS Authentication Data for Upload.
     *
     * @param request - DescribeModelOssTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelOssTokenResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeModelOssTokenResponse
     */
    public function describeModelOssTokenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeModelOssToken',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelOssTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain OSS Authentication Data for Upload.
     *
     * @returns DescribeModelOssTokenResponse
     *
     * @return DescribeModelOssTokenResponse
     */
    public function describeModelOssToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelOssTokenWithOptions($runtime);
    }

    /**
     * Get detailed project data.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - DescribeModelingProjectDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelingProjectDetailResponse
     *
     * @param DescribeModelingProjectDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeModelingProjectDetailResponse
     */
    public function describeModelingProjectDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModelingProjectDetail',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelingProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get detailed project data.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - DescribeModelingProjectDetailRequest
     *
     * @returns DescribeModelingProjectDetailResponse
     *
     * @param DescribeModelingProjectDetailRequest $request
     *
     * @return DescribeModelingProjectDetailResponse
     */
    public function describeModelingProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelingProjectDetailWithOptions($request, $runtime);
    }

    /**
     * Paginated query for the list of modeling projects under the current user.
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取指定租户下的所有建模项目的概览信息。
     * - 支持通过`pageSize`和`currentPage`参数进行分页查询，默认每页显示10条记录。
     * - 可选地，使用`status`参数来过滤特定状态（如`active`, `released`等）的项目。
     * - 返回结果中包含每个项目的ID、名称、环境状态、建模状态、开始时间及结束时间（如果有的话），以及创建该项目的登录账号。
     *
     * @param request - DescribeModelingProjectListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelingProjectListResponse
     *
     * @param DescribeModelingProjectListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeModelingProjectListResponse
     */
    public function describeModelingProjectListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModelingProjectList',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelingProjectListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paginated query for the list of modeling projects under the current user.
     *
     * @remarks
     * ## 请求说明
     * - 该API用于获取指定租户下的所有建模项目的概览信息。
     * - 支持通过`pageSize`和`currentPage`参数进行分页查询，默认每页显示10条记录。
     * - 可选地，使用`status`参数来过滤特定状态（如`active`, `released`等）的项目。
     * - 返回结果中包含每个项目的ID、名称、环境状态、建模状态、开始时间及结束时间（如果有的话），以及创建该项目的登录账号。
     *
     * @param request - DescribeModelingProjectListRequest
     *
     * @returns DescribeModelingProjectListResponse
     *
     * @param DescribeModelingProjectListRequest $request
     *
     * @return DescribeModelingProjectListResponse
     */
    public function describeModelingProjectList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelingProjectListWithOptions($request, $runtime);
    }

    /**
     * Query Whether the Service Corresponding to a Specific Model Exists Based on Customer Model ID.
     *
     * @remarks
     * ## Request Description
     * This interface is used to check whether a specific model service exists by providing the `customerModuleId`. If it exists, it returns `true`; otherwise, it returns `false`.
     * ### Notes
     * - `customerModuleId` is a required parameter and must be of string type.
     * - This API is mainly used for front-end page display or logical judgment to confirm whether the service corresponding to the user\\"s selected model has been created.
     *
     * @param request - DescribeModuleServiceExistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModuleServiceExistResponse
     *
     * @param DescribeModuleServiceExistRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeModuleServiceExistResponse
     */
    public function describeModuleServiceExistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModuleServiceExist',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModuleServiceExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Whether the Service Corresponding to a Specific Model Exists Based on Customer Model ID.
     *
     * @remarks
     * ## Request Description
     * This interface is used to check whether a specific model service exists by providing the `customerModuleId`. If it exists, it returns `true`; otherwise, it returns `false`.
     * ### Notes
     * - `customerModuleId` is a required parameter and must be of string type.
     * - This API is mainly used for front-end page display or logical judgment to confirm whether the service corresponding to the user\\"s selected model has been created.
     *
     * @param request - DescribeModuleServiceExistRequest
     *
     * @returns DescribeModuleServiceExistResponse
     *
     * @param DescribeModuleServiceExistRequest $request
     *
     * @return DescribeModuleServiceExistResponse
     */
    public function describeModuleServiceExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModuleServiceExistWithOptions($request, $runtime);
    }

    /**
     * Query the current status of a model based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include, but are not limited to, "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeModuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModuleStatusResponse
     *
     * @param DescribeModuleStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeModuleStatusResponse
     */
    public function describeModuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModuleStatus',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the current status of a model based on the customer model ID.
     *
     * @remarks
     * ## Request Description
     * By providing the `customerModuleId` parameter, you can query the current status of a specified customer model. The status values may include, but are not limited to, "EDIT", "ONLINE", etc.
     *
     * @param request - DescribeModuleStatusRequest
     *
     * @returns DescribeModuleStatusResponse
     *
     * @param DescribeModuleStatusRequest $request
     *
     * @return DescribeModuleStatusResponse
     */
    public function describeModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModuleStatusWithOptions($request, $runtime);
    }

    /**
     * Query POC task list.
     *
     * @param request - DescribePocTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePocTaskListResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribePocTaskListResponse
     */
    public function describePocTaskListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribePocTaskList',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePocTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query POC task list.
     *
     * @returns DescribePocTaskListResponse
     *
     * @return DescribePocTaskListResponse
     */
    public function describePocTaskList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePocTaskListWithOptions($runtime);
    }

    /**
     * Query Model Hosting Orders.
     *
     * @param request - DescribeSafRmmpOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSafRmmpOrderResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSafRmmpOrderResponse
     */
    public function describeSafRmmpOrderWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeSafRmmpOrder',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSafRmmpOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Model Hosting Orders.
     *
     * @returns DescribeSafRmmpOrderResponse
     *
     * @return DescribeSafRmmpOrderResponse
     */
    public function describeSafRmmpOrder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSafRmmpOrderWithOptions($runtime);
    }

    /**
     * Query Scene and Service.
     *
     * @param request - DescribeServiceAndSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceAndSceneResponse
     *
     * @param DescribeServiceAndSceneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServiceAndSceneResponse
     */
    public function describeServiceAndSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceAndScene',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceAndSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Scene and Service.
     *
     * @param request - DescribeServiceAndSceneRequest
     *
     * @returns DescribeServiceAndSceneResponse
     *
     * @param DescribeServiceAndSceneRequest $request
     *
     * @return DescribeServiceAndSceneResponse
     */
    public function describeServiceAndScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceAndSceneWithOptions($request, $runtime);
    }

    /**
     * Get all model information for a specified user, supporting pagination.
     *
     * @remarks
     * ## Request Description
     * This API is used to query all model information under a specific user and supports pagination through page parameters. Fuzzy search can be performed using the `name` parameter.
     * - `regId`: Region identifier, required.
     * - `pageSize`: Number of items per page, required.
     * - `currentPage`: Current page number, starting from 1, required.
     * - `userId`: User ID, required.
     *
     * @param request - DescribeUserModelListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserModelListResponse
     *
     * @param DescribeUserModelListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUserModelListResponse
     */
    public function describeUserModelListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserModelList',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserModelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get all model information for a specified user, supporting pagination.
     *
     * @remarks
     * ## Request Description
     * This API is used to query all model information under a specific user and supports pagination through page parameters. Fuzzy search can be performed using the `name` parameter.
     * - `regId`: Region identifier, required.
     * - `pageSize`: Number of items per page, required.
     * - `currentPage`: Current page number, starting from 1, required.
     * - `userId`: User ID, required.
     *
     * @param request - DescribeUserModelListRequest
     *
     * @returns DescribeUserModelListResponse
     *
     * @param DescribeUserModelListRequest $request
     *
     * @return DescribeUserModelListResponse
     */
    public function describeUserModelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserModelListWithOptions($request, $runtime);
    }

    /**
     * Iterate Model.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: The deletion operation is irreversible, please use with caution.
     *
     * @param request - DuplicateModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DuplicateModelResponse
     *
     * @param DuplicateModelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DuplicateModelResponse
     */
    public function duplicateModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DuplicateModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DuplicateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Iterate Model.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: The deletion operation is irreversible, please use with caution.
     *
     * @param request - DuplicateModelRequest
     *
     * @returns DuplicateModelResponse
     *
     * @param DuplicateModelRequest $request
     *
     * @return DuplicateModelResponse
     */
    public function duplicateModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->duplicateModelWithOptions($request, $runtime);
    }

    /**
     * Edit Model.
     *
     * @param request - EditModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditModelResponse
     *
     * @param EditModelRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return EditModelResponse
     */
    public function editModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Model.
     *
     * @param request - EditModelRequest
     *
     * @returns EditModelResponse
     *
     * @param EditModelRequest $request
     *
     * @return EditModelResponse
     */
    public function editModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editModelWithOptions($request, $runtime);
    }

    /**
     * View Bastion Host Initial Password.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - GetBastionHostCertificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBastionHostCertificationResponse
     *
     * @param GetBastionHostCertificationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetBastionHostCertificationResponse
     */
    public function getBastionHostCertificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBastionHostCertification',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBastionHostCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View Bastion Host Initial Password.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - GetBastionHostCertificationRequest
     *
     * @returns GetBastionHostCertificationResponse
     *
     * @param GetBastionHostCertificationRequest $request
     *
     * @return GetBastionHostCertificationResponse
     */
    public function getBastionHostCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBastionHostCertificationWithOptions($request, $runtime);
    }

    /**
     * Iterate Model.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: The deletion operation is irreversible, please use with caution.
     *
     * @param request - IterateModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IterateModelResponse
     *
     * @param IterateModelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return IterateModelResponse
     */
    public function iterateModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IterateModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IterateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Iterate Model.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: The deletion operation is irreversible, please use with caution.
     *
     * @param request - IterateModelRequest
     *
     * @returns IterateModelResponse
     *
     * @param IterateModelRequest $request
     *
     * @return IterateModelResponse
     */
    public function iterateModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->iterateModelWithOptions($request, $runtime);
    }

    /**
     * Offline Model.
     *
     * @param request - OfflineModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineModelResponse
     *
     * @param OfflineModelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OfflineModelResponse
     */
    public function offlineModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OfflineModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OfflineModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Offline Model.
     *
     * @param request - OfflineModelRequest
     *
     * @returns OfflineModelResponse
     *
     * @param OfflineModelRequest $request
     *
     * @return OfflineModelResponse
     */
    public function offlineModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineModelWithOptions($request, $runtime);
    }

    /**
     * Online Model.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: Deletion is irreversible, please use with caution.
     *
     * @param request - OnlineModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineModelResponse
     *
     * @param OnlineModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return OnlineModelResponse
     */
    public function onlineModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OnlineModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OnlineModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Online Model.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: Deletion is irreversible, please use with caution.
     *
     * @param request - OnlineModelRequest
     *
     * @returns OnlineModelResponse
     *
     * @param OnlineModelRequest $request
     *
     * @return OnlineModelResponse
     */
    public function onlineModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onlineModelWithOptions($request, $runtime);
    }

    /**
     * Parse Expression Parameters.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - ParseExpressionParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ParseExpressionParametersResponse
     *
     * @param ParseExpressionParametersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ParseExpressionParametersResponse
     */
    public function parseExpressionParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ParseExpressionParameters',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ParseExpressionParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Parse Expression Parameters.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - ParseExpressionParametersRequest
     *
     * @returns ParseExpressionParametersResponse
     *
     * @param ParseExpressionParametersRequest $request
     *
     * @return ParseExpressionParametersResponse
     */
    public function parseExpressionParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->parseExpressionParametersWithOptions($request, $runtime);
    }

    /**
     * Pre-release Model.
     *
     * @param request - PrepublishModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrepublishModelResponse
     *
     * @param PrepublishModelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PrepublishModelResponse
     */
    public function prepublishModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PrepublishModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PrepublishModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pre-release Model.
     *
     * @param request - PrepublishModelRequest
     *
     * @returns PrepublishModelResponse
     *
     * @param PrepublishModelRequest $request
     *
     * @return PrepublishModelResponse
     */
    public function prepublishModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->prepublishModelWithOptions($request, $runtime);
    }

    /**
     * Request to Sync Model Files.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - RequestModelFileSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RequestModelFileSyncResponse
     *
     * @param RequestModelFileSyncRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RequestModelFileSyncResponse
     */
    public function requestModelFileSyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RequestModelFileSync',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RequestModelFileSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Request to Sync Model Files.
     *
     * @remarks
     * ## 请求说明
     * - 本接口用于客户首次创建建模项目。
     * - `projectName` 是必填项，长度不超过50个字符。
     * - `remark` 和 `instanceSpec` 为可选项，其中 `remark` 长度不超过200个字符。
     * - `instanceSpec` 可选值包括 `SECURE_ENV_LITE` 和 `SECURE_ENV_PRO`。
     *
     * @param request - RequestModelFileSyncRequest
     *
     * @returns RequestModelFileSyncResponse
     *
     * @param RequestModelFileSyncRequest $request
     *
     * @return RequestModelFileSyncResponse
     */
    public function requestModelFileSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestModelFileSyncWithOptions($request, $runtime);
    }

    /**
     * Roll back the specified customer model based on the provided customer model ID.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: The deletion operation is irreversible, please use with caution.
     *
     * @param request - RollbackModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackModelResponse
     *
     * @param RollbackModelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RollbackModelResponse
     */
    public function rollbackModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Roll back the specified customer model based on the provided customer model ID.
     *
     * @remarks
     * ## Request Description
     * This API is used to delete a specified customer model from the system. When calling, you must provide the `customerModuleId` parameter, which identifies the specific model to be deleted.
     * - **Note**: The deletion operation is irreversible, please use with caution.
     *
     * @param request - RollbackModelRequest
     *
     * @returns RollbackModelResponse
     *
     * @param RollbackModelRequest $request
     *
     * @return RollbackModelResponse
     */
    public function rollbackModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackModelWithOptions($request, $runtime);
    }

    /**
     * Pre-release Model Testing.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - TestModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestModelResponse
     *
     * @param TestModelRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return TestModelResponse
     */
    public function testModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TestModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pre-release Model Testing.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - TestModelRequest
     *
     * @returns TestModelResponse
     *
     * @param TestModelRequest $request
     *
     * @return TestModelResponse
     */
    public function testModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testModelWithOptions($request, $runtime);
    }

    /**
     * Pre-release Test Model.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - TestPreModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestPreModelResponse
     *
     * @param TestPreModelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TestPreModelResponse
     */
    public function testPreModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TestPreModel',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestPreModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pre-release Test Model.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - TestPreModelRequest
     *
     * @returns TestPreModelResponse
     *
     * @param TestPreModelRequest $request
     *
     * @return TestPreModelResponse
     */
    public function testPreModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testPreModelWithOptions($request, $runtime);
    }

    /**
     * Test Expression.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - TestProcessExpressionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestProcessExpressionResponse
     *
     * @param TestProcessExpressionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TestProcessExpressionResponse
     */
    public function testProcessExpressionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TestProcessExpression',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestProcessExpressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Test Expression.
     *
     * @remarks
     * ## Request Description
     * - This interface is used to query all available feature templates in the system.
     * - The request method is GET, and no additional parameters are required.
     * - The returned result includes multiple feature template options, each of which includes a label (label) and a value (value).
     *
     * @param request - TestProcessExpressionRequest
     *
     * @returns TestProcessExpressionResponse
     *
     * @param TestProcessExpressionRequest $request
     *
     * @return TestProcessExpressionResponse
     */
    public function testProcessExpression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testProcessExpressionWithOptions($request, $runtime);
    }

    /**
     * Update basic model information.
     *
     * @param request - UpdateModuleBasicInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModuleBasicInfoResponse
     *
     * @param UpdateModuleBasicInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateModuleBasicInfoResponse
     */
    public function updateModuleBasicInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        if (null !== $request->customerModuleName) {
            @$query['CustomerModuleName'] = $request->customerModuleName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->moduleType) {
            @$query['ModuleType'] = $request->moduleType;
        }

        if (null !== $request->storePath) {
            @$query['StorePath'] = $request->storePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateModuleBasicInfo',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModuleBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update basic model information.
     *
     * @param request - UpdateModuleBasicInfoRequest
     *
     * @returns UpdateModuleBasicInfoResponse
     *
     * @param UpdateModuleBasicInfoRequest $request
     *
     * @return UpdateModuleBasicInfoResponse
     */
    public function updateModuleBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModuleBasicInfoWithOptions($request, $runtime);
    }

    /**
     * Validate model file.
     *
     * @param request - ValidateModelFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateModelFileResponse
     *
     * @param ValidateModelFileRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ValidateModelFileResponse
     */
    public function validateModelFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateModelFile',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateModelFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validate model file.
     *
     * @param request - ValidateModelFileRequest
     *
     * @returns ValidateModelFileResponse
     *
     * @param ValidateModelFileRequest $request
     *
     * @return ValidateModelFileResponse
     */
    public function validateModelFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateModelFileWithOptions($request, $runtime);
    }

    /**
     * Validate Test File.
     *
     * @param request - ValidateTestFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateTestFileResponse
     *
     * @param ValidateTestFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ValidateTestFileResponse
     */
    public function validateTestFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerModuleId) {
            @$query['CustomerModuleId'] = $request->customerModuleId;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateTestFile',
            'version' => '2025-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateTestFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validate Test File.
     *
     * @param request - ValidateTestFileRequest
     *
     * @returns ValidateTestFileResponse
     *
     * @param ValidateTestFileRequest $request
     *
     * @return ValidateTestFileResponse
     */
    public function validateTestFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateTestFileWithOptions($request, $runtime);
    }
}
