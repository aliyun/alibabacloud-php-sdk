<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleBasicInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleBasicInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleMetaInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleMetaInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleOutputInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\CreateCustomerModuleOutputInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DeleteModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DeleteModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleBasicInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleBasicInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleMetaInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleMetaInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleOutputInfoRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeCustomerModuleOutputInfoResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFeatureOptionRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFeatureOptionResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeFeatureTemplateListResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelFeatureRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelFeatureResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelOssTokenResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleServiceExistRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleServiceExistResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleStatusRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModuleStatusResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeSafRmmpOrderResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeServiceAndSceneRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeServiceAndSceneResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeUserModelListRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeUserModelListResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DuplicateModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DuplicateModelResponse;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\EditModelRequest;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\EditModelResponse;
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
     * 根据客户模型ID查询模型特征信息.
     *
     * @remarks
     * ## 请求说明
     * 通过提供`customerModuleId`参数，可以查询指定客户模型的当前状态。状态值可能包括但不限于"EDIT"、"ONLINE"等。
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
     * 根据客户模型ID查询模型特征信息.
     *
     * @remarks
     * ## 请求说明
     * 通过提供`customerModuleId`参数，可以查询指定客户模型的当前状态。状态值可能包括但不限于"EDIT"、"ONLINE"等。
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
     * 根据客户模型ID查询模型出参信息.
     *
     * @remarks
     * ## 请求说明
     * 通过提供`customerModuleId`参数，可以查询指定客户模型的当前状态。状态值可能包括但不限于"EDIT"、"ONLINE"等。
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
     * 根据客户模型ID查询模型出参信息.
     *
     * @remarks
     * ## 请求说明
     * 通过提供`customerModuleId`参数，可以查询指定客户模型的当前状态。状态值可能包括但不限于"EDIT"、"ONLINE"等。
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
     * 根据特征模板返回特征模板具体特征选项.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 根据特征模板返回特征模板具体特征选项.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 获取可用的特征模板列表，用于模型配置。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 获取可用的特征模板列表，用于模型配置。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 渲染模型的特征配置.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 渲染模型的特征配置.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 获取上传oss鉴权数据.
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
     * 获取上传oss鉴权数据.
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
     * 根据客户模型ID查询指定模型对应服务是否存在.
     *
     * @remarks
     * ## 请求说明
     * 该接口用于通过提供的`customerModuleId`来检查特定的模型服务是否已经存在。如果存在，则返回`true`；反之则返回`false`。
     * ### 注意事项
     * - `customerModuleId`是必须提供的参数，且为字符串类型。
     * - 此API主要用于前端页面展示或逻辑判断时使用，以确认用户所选模型是否有对应的服务被创建。
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
     * 根据客户模型ID查询指定模型对应服务是否存在.
     *
     * @remarks
     * ## 请求说明
     * 该接口用于通过提供的`customerModuleId`来检查特定的模型服务是否已经存在。如果存在，则返回`true`；反之则返回`false`。
     * ### 注意事项
     * - `customerModuleId`是必须提供的参数，且为字符串类型。
     * - 此API主要用于前端页面展示或逻辑判断时使用，以确认用户所选模型是否有对应的服务被创建。
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
     * 根据客户模型ID查询模型当前状态
     *
     * @remarks
     * ## 请求说明
     * 通过提供`customerModuleId`参数，可以查询指定客户模型的当前状态。状态值可能包括但不限于"EDIT"、"ONLINE"等。
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
     * 根据客户模型ID查询模型当前状态
     *
     * @remarks
     * ## 请求说明
     * 通过提供`customerModuleId`参数，可以查询指定客户模型的当前状态。状态值可能包括但不限于"EDIT"、"ONLINE"等。
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
     * 查询模型托管订单.
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
     * 查询模型托管订单.
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
     * 查询场景和服务
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
     * 查询场景和服务
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
     * 获取指定用户下的所有模型信息，支持分页查询.
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于查询特定用户下的所有模型信息，并支持通过分页参数进行分页查询。可以通过 `name` 参数进行模糊搜索。
     * - `regId`: 地域标识，必填。
     * - `pageSize`: 每页显示的条目数，必填。
     * - `currentPage`: 当前页码，从1开始计数，必填。
     * - `userId`: 用户ID，必填。
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
     * 获取指定用户下的所有模型信息，支持分页查询.
     *
     * @remarks
     * ## 请求说明
     * 该 API 用于查询特定用户下的所有模型信息，并支持通过分页参数进行分页查询。可以通过 `name` 参数进行模糊搜索。
     * - `regId`: 地域标识，必填。
     * - `pageSize`: 每页显示的条目数，必填。
     * - `currentPage`: 当前页码，从1开始计数，必填。
     * - `userId`: 用户ID，必填。
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
     * 迭代模型.
     *
     * @remarks
     * ## 请求说明
     * 本API用于从系统中删除指定的客户模型。调用时必须提供`customerModuleId`参数，该参数标识了要删除的具体模型。
     * - **注意**：删除操作不可逆，请谨慎使用。
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
     * 迭代模型.
     *
     * @remarks
     * ## 请求说明
     * 本API用于从系统中删除指定的客户模型。调用时必须提供`customerModuleId`参数，该参数标识了要删除的具体模型。
     * - **注意**：删除操作不可逆，请谨慎使用。
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
     * 编辑模型.
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
     * 编辑模型.
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
     * 迭代模型.
     *
     * @remarks
     * ## 请求说明
     * 本API用于从系统中删除指定的客户模型。调用时必须提供`customerModuleId`参数，该参数标识了要删除的具体模型。
     * - **注意**：删除操作不可逆，请谨慎使用。
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
     * 迭代模型.
     *
     * @remarks
     * ## 请求说明
     * 本API用于从系统中删除指定的客户模型。调用时必须提供`customerModuleId`参数，该参数标识了要删除的具体模型。
     * - **注意**：删除操作不可逆，请谨慎使用。
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
     * 下线模型.
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
     * 下线模型.
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
     * 上线模型.
     *
     * @remarks
     * ## 请求说明
     * 本API用于从系统中删除指定的客户模型。调用时必须提供`customerModuleId`参数，该参数标识了要删除的具体模型。
     * - **注意**：删除操作不可逆，请谨慎使用。
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
     * 上线模型.
     *
     * @remarks
     * ## 请求说明
     * 本API用于从系统中删除指定的客户模型。调用时必须提供`customerModuleId`参数，该参数标识了要删除的具体模型。
     * - **注意**：删除操作不可逆，请谨慎使用。
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
     * 解析表达式参数.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 解析表达式参数.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 预发布模型.
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
     * 预发布模型.
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
     * 预发布测试模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 预发布测试模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 预发布测试模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 预发布测试模型.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 测试表达式.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
     * 测试表达式.
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于查询系统中所有可用的特征模板。
     * - 请求方式为 GET，无需提供额外参数。
     * - 返回结果包含多个特征模板选项，每个选项包括标签（label）和值（value）。
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
