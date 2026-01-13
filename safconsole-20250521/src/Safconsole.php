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
}
