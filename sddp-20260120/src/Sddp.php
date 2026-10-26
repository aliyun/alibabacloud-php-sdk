<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Sddp\V20260120\Models\CheckDataMaskingInstanceRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\CheckDataMaskingInstanceResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\CreateDataMaskingRuleRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\CreateDataMaskingRuleResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\CreateDataMaskingRuleShrinkRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\DeleteDataMaskingRuleRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\DeleteDataMaskingRuleResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\DeleteDataMaskingRuleShrinkRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingAccountCountRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingAccountCountResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingColumnCountRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingColumnCountResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetInstanceAttributeRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\GetInstanceAttributeResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListColumnsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListColumnsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataAssetAccountsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataAssetAccountsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingColumnsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingColumnsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingEncryptionAlgorithmsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingEncryptionAlgorithmsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingInstancesRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingInstancesResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListIdentifyModelsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListIdentifyModelsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListKmsKeysRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListKmsKeysResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListMiniEngineVersionsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListMiniEngineVersionsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListRiskLevelsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListRiskLevelsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTablesRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTablesResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTotalSensitiveInfoRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTotalSensitiveInfoResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\SyncDataAssetsRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\SyncDataAssetsResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\UpdateDataMaskingEncryptionAlgorithmRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\UpdateDataMaskingEncryptionAlgorithmResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\UpdateDataMaskingUsersRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\UpdateDataMaskingUsersResponse;
use AlibabaCloud\SDK\Sddp\V20260120\Models\UpdateDataMaskingUsersShrinkRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\UpgradeKernelVersionRequest;
use AlibabaCloud\SDK\Sddp\V20260120\Models\UpgradeKernelVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sddp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hongkong' => 'sddp-api.cn-hongkong.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sddp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Checks the prerequisites for column encryption on an instance.
     *
     * @remarks
     * Checks the permissions, DPI engine, and running conditions of an instance before you create column encryption. You must check both ErrorCode and ErrorMessage in the response. Only ErrorCode=Success indicates that the check is passed. A successful request does not mean that the instance meets all encryption conditions. This check does not create a column encryption rule.
     * Parameter examples are for format illustration only. When you invoke the operation, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the service registration endpoint of the region where the target asset is located and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - CheckDataMaskingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDataMaskingInstanceResponse
     *
     * @param CheckDataMaskingInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckDataMaskingInstanceResponse
     */
    public function checkDataMaskingInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDataMaskingInstance',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDataMaskingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the prerequisites for column encryption on an instance.
     *
     * @remarks
     * Checks the permissions, DPI engine, and running conditions of an instance before you create column encryption. You must check both ErrorCode and ErrorMessage in the response. Only ErrorCode=Success indicates that the check is passed. A successful request does not mean that the instance meets all encryption conditions. This check does not create a column encryption rule.
     * Parameter examples are for format illustration only. When you invoke the operation, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the service registration endpoint of the region where the target asset is located and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - CheckDataMaskingInstanceRequest
     *
     * @returns CheckDataMaskingInstanceResponse
     *
     * @param CheckDataMaskingInstanceRequest $request
     *
     * @return CheckDataMaskingInstanceResponse
     */
    public function checkDataMaskingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDataMaskingInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a column encryption rule.
     *
     * @remarks
     * Creates a column encryption rule for specified databases, tables, and columns under the same instance. Before calling this operation, check the instance status, supported algorithms, keys, target columns, and accounts. SubRuleList is a list of targets grouped by table, and Columns is a string of column names separated by commas. Accounts in UserList are granted the fullAccess plaintext permission. A successful request only indicates that the request is accepted. You must call the ListDataMaskingColumns and ListDataAssetAccounts operations to confirm the column status, account permissions, and validity period.
     * The parameter examples are for illustrative purposes only. When calling this operation, replace them with the region, resource identifiers, and configuration values obtained by querying the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identity must match those of the target asset.
     * This operation only returns RequestId. Request acceptance does not mean that the business operation is complete. Read back the status as described in the operation description.
     *
     * @param tmpReq - CreateDataMaskingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataMaskingRuleResponse
     *
     * @param CreateDataMaskingRuleRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDataMaskingRuleResponse
     */
    public function createDataMaskingRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataMaskingRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->subRuleList) {
            $request->subRuleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subRuleList, 'SubRuleList', 'json');
        }

        if (null !== $tmpReq->userList) {
            $request->userListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'UserList', 'json');
        }

        $query = [];
        if (null !== $request->encAlgorithm) {
            @$query['EncAlgorithm'] = $request->encAlgorithm;
        }

        if (null !== $request->encryptionKeyId) {
            @$query['EncryptionKeyId'] = $request->encryptionKeyId;
        }

        if (null !== $request->encryptionKeyMode) {
            @$query['EncryptionKeyMode'] = $request->encryptionKeyMode;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->expireTimeOperation) {
            @$query['ExpireTimeOperation'] = $request->expireTimeOperation;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskHandleId) {
            @$query['RiskHandleId'] = $request->riskHandleId;
        }

        if (null !== $request->subRuleListShrink) {
            @$query['SubRuleList'] = $request->subRuleListShrink;
        }

        if (null !== $request->userListShrink) {
            @$query['UserList'] = $request->userListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataMaskingRule',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataMaskingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a column encryption rule.
     *
     * @remarks
     * Creates a column encryption rule for specified databases, tables, and columns under the same instance. Before calling this operation, check the instance status, supported algorithms, keys, target columns, and accounts. SubRuleList is a list of targets grouped by table, and Columns is a string of column names separated by commas. Accounts in UserList are granted the fullAccess plaintext permission. A successful request only indicates that the request is accepted. You must call the ListDataMaskingColumns and ListDataAssetAccounts operations to confirm the column status, account permissions, and validity period.
     * The parameter examples are for illustrative purposes only. When calling this operation, replace them with the region, resource identifiers, and configuration values obtained by querying the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identity must match those of the target asset.
     * This operation only returns RequestId. Request acceptance does not mean that the business operation is complete. Read back the status as described in the operation description.
     *
     * @param request - CreateDataMaskingRuleRequest
     *
     * @returns CreateDataMaskingRuleResponse
     *
     * @param CreateDataMaskingRuleRequest $request
     *
     * @return CreateDataMaskingRuleResponse
     */
    public function createDataMaskingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataMaskingRuleWithOptions($request, $runtime);
    }

    /**
     * Disables encryption for specified columns.
     *
     * @remarks
     * Disables encryption rules for specified columns in the same instance. SubRuleList precisely specifies databases, tables, and columns. If no rule is matched, no new operation object is created. The disable request is processed asynchronously. Use ListDataMaskingColumns to verify that the column is restored to NotEncrypted or that the target rule has been removed. DeleteFailed indicates that the disable operation failed.
     * The parameter examples are for format illustration only. When you invoke the API, replace them with the region, resource identifier, and configuration values obtained for the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identifier must match the target asset.
     * This operation returns only RequestId. Request acceptance does not mean that the business operation is complete. You should check the status as described in the operation description.
     *
     * @param tmpReq - DeleteDataMaskingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataMaskingRuleResponse
     *
     * @param DeleteDataMaskingRuleRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDataMaskingRuleResponse
     */
    public function deleteDataMaskingRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteDataMaskingRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->subRuleList) {
            $request->subRuleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subRuleList, 'SubRuleList', 'json');
        }

        $query = [];
        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->subRuleListShrink) {
            @$query['SubRuleList'] = $request->subRuleListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataMaskingRule',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataMaskingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables encryption for specified columns.
     *
     * @remarks
     * Disables encryption rules for specified columns in the same instance. SubRuleList precisely specifies databases, tables, and columns. If no rule is matched, no new operation object is created. The disable request is processed asynchronously. Use ListDataMaskingColumns to verify that the column is restored to NotEncrypted or that the target rule has been removed. DeleteFailed indicates that the disable operation failed.
     * The parameter examples are for format illustration only. When you invoke the API, replace them with the region, resource identifier, and configuration values obtained for the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identifier must match the target asset.
     * This operation returns only RequestId. Request acceptance does not mean that the business operation is complete. You should check the status as described in the operation description.
     *
     * @param request - DeleteDataMaskingRuleRequest
     *
     * @returns DeleteDataMaskingRuleResponse
     *
     * @param DeleteDataMaskingRuleRequest $request
     *
     * @return DeleteDataMaskingRuleResponse
     */
    public function deleteDataMaskingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataMaskingRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of account permissions for column encryption.
     *
     * @remarks
     * Queries the permission statistics of database accounts in the current region by product scope. Plaintext accounts correspond to FullAccessCount. Restricted access and decryption-prohibited accounts are counted in RestrictedAccessCount and NoneAccessCount, respectively. The number of accounts without configured permissions can be obtained by subtracting the number of the preceding three types of accounts from TotalCount. This operation does not accept filter conditions such as instance, database, table, or column.
     * Parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke this operation.
     * Use the service registration endpoint of the region where the target asset is located and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must be consistent with the target asset.
     *
     * @param request - GetDataMaskingAccountCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataMaskingAccountCountResponse
     *
     * @param GetDataMaskingAccountCountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDataMaskingAccountCountResponse
     */
    public function getDataMaskingAccountCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productIds) {
            @$query['ProductIds'] = $request->productIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataMaskingAccountCount',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataMaskingAccountCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of account permissions for column encryption.
     *
     * @remarks
     * Queries the permission statistics of database accounts in the current region by product scope. Plaintext accounts correspond to FullAccessCount. Restricted access and decryption-prohibited accounts are counted in RestrictedAccessCount and NoneAccessCount, respectively. The number of accounts without configured permissions can be obtained by subtracting the number of the preceding three types of accounts from TotalCount. This operation does not accept filter conditions such as instance, database, table, or column.
     * Parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke this operation.
     * Use the service registration endpoint of the region where the target asset is located and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must be consistent with the target asset.
     *
     * @param request - GetDataMaskingAccountCountRequest
     *
     * @returns GetDataMaskingAccountCountResponse
     *
     * @param GetDataMaskingAccountCountRequest $request
     *
     * @return GetDataMaskingAccountCountResponse
     */
    public function getDataMaskingAccountCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataMaskingAccountCountWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on the number of encrypted columns.
     *
     * @remarks
     * Queries the total number of columns, the number of sensitive columns, the number of encrypted columns, and the number of columns that failed to be encrypted by region, product, and categorization and classification template. This operation returns data for statistics cards and does not filter by instance, database name, table name, column name, or model in the column list.
     * To be compatible with historical detection results, if the specified template has no first-screen results and is not filtered by sensitivity level or detection model, the results may backoff to the built-in general detection results. If strict template attribution is required, use the level or model conditions within the template for verification.
     * The parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke the operation.
     * Use the service registration endpoint of the region where the target asset is located and apply the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - GetDataMaskingColumnCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataMaskingColumnCountResponse
     *
     * @param GetDataMaskingColumnCountRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDataMaskingColumnCountResponse
     */
    public function getDataMaskingColumnCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productIds) {
            @$query['ProductIds'] = $request->productIds;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataMaskingColumnCount',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataMaskingColumnCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on the number of encrypted columns.
     *
     * @remarks
     * Queries the total number of columns, the number of sensitive columns, the number of encrypted columns, and the number of columns that failed to be encrypted by region, product, and categorization and classification template. This operation returns data for statistics cards and does not filter by instance, database name, table name, column name, or model in the column list.
     * To be compatible with historical detection results, if the specified template has no first-screen results and is not filtered by sensitivity level or detection model, the results may backoff to the built-in general detection results. If strict template attribution is required, use the level or model conditions within the template for verification.
     * The parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke the operation.
     * Use the service registration endpoint of the region where the target asset is located and apply the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - GetDataMaskingColumnCountRequest
     *
     * @returns GetDataMaskingColumnCountResponse
     *
     * @param GetDataMaskingColumnCountRequest $request
     *
     * @return GetDataMaskingColumnCountResponse
     */
    public function getDataMaskingColumnCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataMaskingColumnCountWithOptions($request, $runtime);
    }

    /**
     * Queries the engine and kernel attributes of an instance.
     *
     * @remarks
     * Queries the instance engine, current kernel version, maintenance window, and KMS encryption support. After a kernel upgrade, you can read back CurrentKernelVersion to verify the target version. If ErrorCode or ErrorMessage is present, handle the property query exception first.
     * Parameter examples are for format illustration only. When you call the API, replace them with the region, resource ID, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - GetInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceAttributeResponse
     *
     * @param GetInstanceAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetInstanceAttributeResponse
     */
    public function getInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceAttribute',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the engine and kernel attributes of an instance.
     *
     * @remarks
     * Queries the instance engine, current kernel version, maintenance window, and KMS encryption support. After a kernel upgrade, you can read back CurrentKernelVersion to verify the target version. If ErrorCode or ErrorMessage is present, handle the property query exception first.
     * Parameter examples are for format illustration only. When you call the API, replace them with the region, resource ID, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - GetInstanceAttributeRequest
     *
     * @returns GetInstanceAttributeResponse
     *
     * @param GetInstanceAttributeRequest $request
     *
     * @return GetInstanceAttributeResponse
     */
    public function getInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the columns and detection results of a data table.
     *
     * @remarks
     * Performs a paging query on the columns and detection results in a data table. If both DataAssetSourceId and InstanceName are specified, DataAssetSourceId takes precedence. In PostgreSQL and Oracle scenarios, you can use the schema.table format for TableName and pass the corresponding EngineType. To query the execution status of column encryption, call ListDataMaskingColumns.
     * To ensure compatibility with historical detection results, if the specified template has no first-screen results and is not filtered by sensitivity level or detection model, the results may fall back to the built-in general detection results. If strict template attribution is required, use the level or model conditions within the template for verification.
     * The parameter examples are for format illustration only. When you call the API, replace them with the region, resource identifier, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identity must match the target asset.
     *
     * @param request - ListColumnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListColumnsResponse
     *
     * @param ListColumnsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListColumnsResponse
     */
    public function listColumnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dataAssetSourceId) {
            @$query['DataAssetSourceId'] = $request->dataAssetSourceId;
        }

        if (null !== $request->dataSourceName) {
            @$query['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListColumns',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the columns and detection results of a data table.
     *
     * @remarks
     * Performs a paging query on the columns and detection results in a data table. If both DataAssetSourceId and InstanceName are specified, DataAssetSourceId takes precedence. In PostgreSQL and Oracle scenarios, you can use the schema.table format for TableName and pass the corresponding EngineType. To query the execution status of column encryption, call ListDataMaskingColumns.
     * To ensure compatibility with historical detection results, if the specified template has no first-screen results and is not filtered by sensitivity level or detection model, the results may fall back to the built-in general detection results. If strict template attribution is required, use the level or model conditions within the template for verification.
     * The parameter examples are for format illustration only. When you call the API, replace them with the region, resource identifier, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identity must match the target asset.
     *
     * @param request - ListColumnsRequest
     *
     * @returns ListColumnsResponse
     *
     * @param ListColumnsRequest $request
     *
     * @return ListColumnsResponse
     */
    public function listColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listColumnsWithOptions($request, $runtime);
    }

    /**
     * Queries database accounts and column encryption permissions.
     *
     * @remarks
     * Uses paging to query database accounts and their column encryption access permissions. This operation is used to select plaintext accounts when creating rules, and to verify AuthRole, EncryptionKeyMode, and ExpireTime before and after modifying account permissions. AccountName filters accounts by exact account name, and the account ID is obtained from Items[].Id.
     * The parameter examples are for format illustration only. Replace them with the region, resource IDs, and configuration values obtained from the current account when you call the operation.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - ListDataAssetAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataAssetAccountsResponse
     *
     * @param ListDataAssetAccountsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataAssetAccountsResponse
     */
    public function listDataAssetAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->authDb) {
            @$query['AuthDb'] = $request->authDb;
        }

        if (null !== $request->authRole) {
            @$query['AuthRole'] = $request->authRole;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productIds) {
            @$query['ProductIds'] = $request->productIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataAssetAccounts',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataAssetAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries database accounts and column encryption permissions.
     *
     * @remarks
     * Uses paging to query database accounts and their column encryption access permissions. This operation is used to select plaintext accounts when creating rules, and to verify AuthRole, EncryptionKeyMode, and ExpireTime before and after modifying account permissions. AccountName filters accounts by exact account name, and the account ID is obtained from Items[].Id.
     * The parameter examples are for format illustration only. Replace them with the region, resource IDs, and configuration values obtained from the current account when you call the operation.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - ListDataAssetAccountsRequest
     *
     * @returns ListDataAssetAccountsResponse
     *
     * @param ListDataAssetAccountsRequest $request
     *
     * @return ListDataAssetAccountsResponse
     */
    public function listDataAssetAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataAssetAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries the column encryption status and detection results.
     *
     * @remarks
     * Performs a paged query on columns and their encryption status, sensitivity levels, and detection models. Supports paging and combined filtering by template, product, instance, database, table, column name, model, and sensitivity level. Use this operation to read back data after the creation or shutdown of a rule. Processing and Deleting are intermediate states, while Failed and DeleteFailed indicate operation failures. The capitalization of the RiskLeveLId parameter name must be preserved exactly as is.
     * When querying by product, use a single ProductId or the corresponding ProductCode. The current column query cannot rely on ProductIds to filter multiple products. Query each product separately.
     * To ensure compatibility with historical detection results, if the specified template yields no initial results and is not filtered by sensitivity level or detection model, the results may fall back to the built-in general detection results. To strictly verify template attribution, use the level or model conditions within the template simultaneously.
     * Parameter examples are for format illustration only. Replace them with the region, resource identifiers, and configuration values obtained from the current account when making a call.
     * Use the service registration endpoint of the region where the target asset is located, and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListDataMaskingColumnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataMaskingColumnsResponse
     *
     * @param ListDataMaskingColumnsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDataMaskingColumnsResponse
     */
    public function listDataMaskingColumnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->columnName) {
            @$query['ColumnName'] = $request->columnName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maskingStatus) {
            @$query['MaskingStatus'] = $request->maskingStatus;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->productIds) {
            @$query['ProductIds'] = $request->productIds;
        }

        if (null !== $request->riskLeveLId) {
            @$query['RiskLeveLId'] = $request->riskLeveLId;
        }

        if (null !== $request->riskLevelIds) {
            @$query['RiskLevelIds'] = $request->riskLevelIds;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateRuleIds) {
            @$query['TemplateRuleIds'] = $request->templateRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataMaskingColumns',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataMaskingColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the column encryption status and detection results.
     *
     * @remarks
     * Performs a paged query on columns and their encryption status, sensitivity levels, and detection models. Supports paging and combined filtering by template, product, instance, database, table, column name, model, and sensitivity level. Use this operation to read back data after the creation or shutdown of a rule. Processing and Deleting are intermediate states, while Failed and DeleteFailed indicate operation failures. The capitalization of the RiskLeveLId parameter name must be preserved exactly as is.
     * When querying by product, use a single ProductId or the corresponding ProductCode. The current column query cannot rely on ProductIds to filter multiple products. Query each product separately.
     * To ensure compatibility with historical detection results, if the specified template yields no initial results and is not filtered by sensitivity level or detection model, the results may fall back to the built-in general detection results. To strictly verify template attribution, use the level or model conditions within the template simultaneously.
     * Parameter examples are for format illustration only. Replace them with the region, resource identifiers, and configuration values obtained from the current account when making a call.
     * Use the service registration endpoint of the region where the target asset is located, and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListDataMaskingColumnsRequest
     *
     * @returns ListDataMaskingColumnsResponse
     *
     * @param ListDataMaskingColumnsRequest $request
     *
     * @return ListDataMaskingColumnsResponse
     */
    public function listDataMaskingColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataMaskingColumnsWithOptions($request, $runtime);
    }

    /**
     * Queries the column encryption algorithms supported by an instance.
     *
     * @remarks
     * Queries the available column encryption algorithms for a specified instance and the reasons for any restrictions on each algorithm. Before selecting an algorithm, check the ErrorCode and ErrorMessage of the corresponding item. Do not assume that all instances support the same set of algorithms.
     * Parameter examples are for format illustration only. When you invoke the API, replace them with the region, resource IDs, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - ListDataMaskingEncryptionAlgorithmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataMaskingEncryptionAlgorithmsResponse
     *
     * @param ListDataMaskingEncryptionAlgorithmsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListDataMaskingEncryptionAlgorithmsResponse
     */
    public function listDataMaskingEncryptionAlgorithmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataMaskingEncryptionAlgorithms',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataMaskingEncryptionAlgorithmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the column encryption algorithms supported by an instance.
     *
     * @remarks
     * Queries the available column encryption algorithms for a specified instance and the reasons for any restrictions on each algorithm. Before selecting an algorithm, check the ErrorCode and ErrorMessage of the corresponding item. Do not assume that all instances support the same set of algorithms.
     * Parameter examples are for format illustration only. When you invoke the API, replace them with the region, resource IDs, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - ListDataMaskingEncryptionAlgorithmsRequest
     *
     * @returns ListDataMaskingEncryptionAlgorithmsResponse
     *
     * @param ListDataMaskingEncryptionAlgorithmsRequest $request
     *
     * @return ListDataMaskingEncryptionAlgorithmsResponse
     */
    public function listDataMaskingEncryptionAlgorithms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataMaskingEncryptionAlgorithmsWithOptions($request, $runtime);
    }

    /**
     * Queries column-encrypted instances.
     *
     * @remarks
     * Performs a paged query of column encryption instances, and supports filtering by conditions such as product, detect template, database, table, and column. The scope of instance-level status filtering differs from that of column-level status filtering. To find all unencrypted sensitive columns, first enumerate the instances of the target product, and then use ListDataMaskingColumns to filter by NotEncrypted to avoid missing partially encrypted instances.
     * When you need to filter precisely by EngineType, read all candidates by paging and then filter by the returned values. This parameter is not applied in some query paths. The matching semantics of InstanceId vary with query combinations. For precise positioning, verify the complete instance identity returned.
     * Parameter examples are for format illustration only. When you invoke the operation, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the service registration endpoint of the region where the target asset is located, and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListDataMaskingInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataMaskingInstancesResponse
     *
     * @param ListDataMaskingInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDataMaskingInstancesResponse
     */
    public function listDataMaskingInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->columnName) {
            @$query['ColumnName'] = $request->columnName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maskingStatus) {
            @$query['MaskingStatus'] = $request->maskingStatus;
        }

        if (null !== $request->modelTagId) {
            @$query['ModelTagId'] = $request->modelTagId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->productIds) {
            @$query['ProductIds'] = $request->productIds;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->riskLevelIds) {
            @$query['RiskLevelIds'] = $request->riskLevelIds;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateRuleIds) {
            @$query['TemplateRuleIds'] = $request->templateRuleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataMaskingInstances',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataMaskingInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries column-encrypted instances.
     *
     * @remarks
     * Performs a paged query of column encryption instances, and supports filtering by conditions such as product, detect template, database, table, and column. The scope of instance-level status filtering differs from that of column-level status filtering. To find all unencrypted sensitive columns, first enumerate the instances of the target product, and then use ListDataMaskingColumns to filter by NotEncrypted to avoid missing partially encrypted instances.
     * When you need to filter precisely by EngineType, read all candidates by paging and then filter by the returned values. This parameter is not applied in some query paths. The matching semantics of InstanceId vary with query combinations. For precise positioning, verify the complete instance identity returned.
     * Parameter examples are for format illustration only. When you invoke the operation, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the service registration endpoint of the region where the target asset is located, and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListDataMaskingInstancesRequest
     *
     * @returns ListDataMaskingInstancesResponse
     *
     * @param ListDataMaskingInstancesRequest $request
     *
     * @return ListDataMaskingInstancesResponse
     */
    public function listDataMaskingInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataMaskingInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the databases of an instance.
     *
     * @remarks
     * Performs a paged query on managed data sources by using paging. In relational database scenarios, locate the instance by using ProductCode and InstanceId, and select a database from Items[].DbName. This operation queries the database inventory and does not filter by data categorization and classification templates.
     * Parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke this operation.
     * Use the service registration endpoint of the region where the target asset resides and configure the settings of the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourcesResponse
     *
     * @param ListDataSourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectStatus) {
            @$query['ConnectStatus'] = $request->connectStatus;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dataAssetId) {
            @$query['DataAssetId'] = $request->dataAssetId;
        }

        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->identifyStatus) {
            @$query['IdentifyStatus'] = $request->identifyStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataSources',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the databases of an instance.
     *
     * @remarks
     * Performs a paged query on managed data sources by using paging. In relational database scenarios, locate the instance by using ProductCode and InstanceId, and select a database from Items[].DbName. This operation queries the database inventory and does not filter by data categorization and classification templates.
     * Parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke this operation.
     * Use the service registration endpoint of the region where the target asset resides and configure the settings of the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListDataSourcesRequest
     *
     * @returns ListDataSourcesResponse
     *
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the recognition models in a template.
     *
     * @remarks
     * Queries the valid recognition models in a specified template and returns RuleList. If TemplateId is not specified, the currently enabled template is used. The model ID is obtained from RuleList[].Id and can be used to filter TemplateRuleIds.
     * Parameter examples are provided only to illustrate the format. When you call the API, replace them with the region, resource IDs, and configuration values queried from the current account.
     *
     * @param request - ListIdentifyModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentifyModelsResponse
     *
     * @param ListIdentifyModelsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListIdentifyModelsResponse
     */
    public function listIdentifyModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->filterAuditModel) {
            @$query['FilterAuditModel'] = $request->filterAuditModel;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIdentifyModels',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIdentifyModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the recognition models in a template.
     *
     * @remarks
     * Queries the valid recognition models in a specified template and returns RuleList. If TemplateId is not specified, the currently enabled template is used. The model ID is obtained from RuleList[].Id and can be used to filter TemplateRuleIds.
     * Parameter examples are provided only to illustrate the format. When you call the API, replace them with the region, resource IDs, and configuration values queried from the current account.
     *
     * @param request - ListIdentifyModelsRequest
     *
     * @returns ListIdentifyModelsResponse
     *
     * @param ListIdentifyModelsRequest $request
     *
     * @return ListIdentifyModelsResponse
     */
    public function listIdentifyModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIdentifyModelsWithOptions($request, $runtime);
    }

    /**
     * Queries the available KMS keys for column encryption.
     *
     * @remarks
     * Queries the KMS key identities and aliases available for the column encryption configuration of a specified instance. Before using a KMS key, verify the key status and usage conditions by calling the DescribeKey operation of KMS. This operation does not return the plaintext of the key.
     * The parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke the operation.
     * Use the service registration endpoint of the region where the target asset is located and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListKmsKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKmsKeysResponse
     *
     * @param ListKmsKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListKmsKeysResponse
     */
    public function listKmsKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKmsKeys',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKmsKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available KMS keys for column encryption.
     *
     * @remarks
     * Queries the KMS key identities and aliases available for the column encryption configuration of a specified instance. Before using a KMS key, verify the key status and usage conditions by calling the DescribeKey operation of KMS. This operation does not return the plaintext of the key.
     * The parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke the operation.
     * Use the service registration endpoint of the region where the target asset is located and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListKmsKeysRequest
     *
     * @returns ListKmsKeysResponse
     *
     * @param ListKmsKeysRequest $request
     *
     * @return ListKmsKeysResponse
     */
    public function listKmsKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKmsKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the upgradable kernel versions.
     *
     * @remarks
     * Queries the available kernel versions for an instance. For an upgrade, select the target version from KernelVersions[].KernelVersion. Do not manually construct the version number.
     * Parameter examples are for format illustration only. When you call the API, replace them with the region, resource ID, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - ListMiniEngineVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMiniEngineVersionsResponse
     *
     * @param ListMiniEngineVersionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListMiniEngineVersionsResponse
     */
    public function listMiniEngineVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMiniEngineVersions',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMiniEngineVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the upgradable kernel versions.
     *
     * @remarks
     * Queries the available kernel versions for an instance. For an upgrade, select the target version from KernelVersions[].KernelVersion. Do not manually construct the version number.
     * Parameter examples are for format illustration only. When you call the API, replace them with the region, resource ID, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset is located, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance ID must match the target asset.
     *
     * @param request - ListMiniEngineVersionsRequest
     *
     * @returns ListMiniEngineVersionsResponse
     *
     * @param ListMiniEngineVersionsRequest $request
     *
     * @return ListMiniEngineVersionsResponse
     */
    public function listMiniEngineVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMiniEngineVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries the regions where assets are located.
     *
     * @remarks
     * Queries the list of regions where the assets owned by the current account are located. You can use this list to select the RegionId for subsequent region-specific API operations. You can filter the regions based on whether auditing or detection is enabled. The returned region list is not the same as the list of all regions supported by Alibaba Cloud services.
     * The parameter examples are for format illustration only. When you call this operation, replace them with the regions, resource identifiers, and configuration values queried from the current account.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audited) {
            @$query['Audited'] = $request->audited;
        }

        if (null !== $request->identified) {
            @$query['Identified'] = $request->identified;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->loadAll) {
            @$query['LoadAll'] = $request->loadAll;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions where assets are located.
     *
     * @remarks
     * Queries the list of regions where the assets owned by the current account are located. You can use this list to select the RegionId for subsequent region-specific API operations. You can filter the regions based on whether auditing or detection is enabled. The returned region list is not the same as the list of all regions supported by Alibaba Cloud services.
     * The parameter examples are for format illustration only. When you call this operation, replace them with the regions, resource identifiers, and configuration values queried from the current account.
     *
     * @param request - ListRegionsRequest
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the sensitivity levels of a template.
     *
     * @remarks
     * Queries the sensitivity levels in a data classification template. Pass the level ID in subsequent queries. Do not use level names such as S1 or S2 directly as RiskLevelId.
     * The parameter examples are for format illustration only. When calling the API, replace them with the region, resource identifiers, and configuration values obtained for the current account.
     *
     * @param request - ListRiskLevelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRiskLevelsResponse
     *
     * @param ListRiskLevelsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListRiskLevelsResponse
     */
    public function listRiskLevelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRiskLevels',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRiskLevelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the sensitivity levels of a template.
     *
     * @remarks
     * Queries the sensitivity levels in a data classification template. Pass the level ID in subsequent queries. Do not use level names such as S1 or S2 directly as RiskLevelId.
     * The parameter examples are for format illustration only. When calling the API, replace them with the region, resource identifiers, and configuration values obtained for the current account.
     *
     * @param request - ListRiskLevelsRequest
     *
     * @returns ListRiskLevelsResponse
     *
     * @param ListRiskLevelsRequest $request
     *
     * @return ListRiskLevelsResponse
     */
    public function listRiskLevels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRiskLevelsWithOptions($request, $runtime);
    }

    /**
     * Queries database tables.
     *
     * @remarks
     * Queries database tables and detection results in a database by using paging. For relational databases, set DataAssetSourceId to the instance identity and DataSourceName to the database name. Table names in PostgreSQL and Oracle may contain a schema prefix. Pass the table name as is for subsequent column queries.
     * To be compatible with historical detection results, if the specified template yields no initial results and no filtering is applied by sensitivity level or detection model, the results may fall back to the built-in general detection results. To strictly verify template attribution, use the level or model conditions within the template at the same time.
     * The parameter examples are provided only to illustrate the format. When you invoke the API, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset resides, and set the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTablesResponse
     *
     * @param ListTablesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dataAssetSourceId) {
            @$query['DataAssetSourceId'] = $request->dataAssetSourceId;
        }

        if (null !== $request->dataSourceName) {
            @$query['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries database tables.
     *
     * @remarks
     * Queries database tables and detection results in a database by using paging. For relational databases, set DataAssetSourceId to the instance identity and DataSourceName to the database name. Table names in PostgreSQL and Oracle may contain a schema prefix. Pass the table name as is for subsequent column queries.
     * To be compatible with historical detection results, if the specified template yields no initial results and no filtering is applied by sensitivity level or detection model, the results may fall back to the built-in general detection results. To strictly verify template attribution, use the level or model conditions within the template at the same time.
     * The parameter examples are provided only to illustrate the format. When you invoke the API, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target asset resides, and set the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     *
     * @param request - ListTablesRequest
     *
     * @returns ListTablesResponse
     *
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTablesWithOptions($request, $runtime);
    }

    /**
     * Queries classification and grading templates.
     *
     * @remarks
     * Queries the classification and grading templates available for the current account. Use Items[].Id as the TemplateId for subsequent API operations. The detection model and sensitivity level must belong to the same template. Parameter examples are for format illustration only. Replace them with the region, resource identifiers, and configuration values obtained from the current account when making the call.
     *
     * @param request - ListTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->usageScenario) {
            @$query['UsageScenario'] = $request->usageScenario;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTemplates',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries classification and grading templates.
     *
     * @remarks
     * Queries the classification and grading templates available for the current account. Use Items[].Id as the TemplateId for subsequent API operations. The detection model and sensitivity level must belong to the same template. Parameter examples are for format illustration only. Replace them with the region, resource identifiers, and configuration values obtained from the current account when making the call.
     *
     * @param request - ListTemplatesRequest
     *
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the summary of sensitive data.
     *
     * @remarks
     * Queries the statistics of sensitive data in the overview, data catalog, or aggregated by region. If CountType is set to 41, overview statistics are returned. If CountType is set to 42, data catalog statistics for a specified product are returned. If CountType is set to 43, data aggregated by region and template is returned. The column encryption console uses CountType=43 and ProductCodeList to obtain region and template candidates. The statistics may be derived from generated summary results and do not indicate that a recently initiated synchronization or encryption operation has been completed.
     * Parameter examples are for format illustration only. When calling the API, replace them with the regions, resource identifiers, and configuration values obtained from the current account.
     *
     * @param request - ListTotalSensitiveInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTotalSensitiveInfoResponse
     *
     * @param ListTotalSensitiveInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListTotalSensitiveInfoResponse
     */
    public function listTotalSensitiveInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->countType) {
            @$query['CountType'] = $request->countType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productCodeList) {
            @$query['ProductCodeList'] = $request->productCodeList;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTotalSensitiveInfo',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTotalSensitiveInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the summary of sensitive data.
     *
     * @remarks
     * Queries the statistics of sensitive data in the overview, data catalog, or aggregated by region. If CountType is set to 41, overview statistics are returned. If CountType is set to 42, data catalog statistics for a specified product are returned. If CountType is set to 43, data aggregated by region and template is returned. The column encryption console uses CountType=43 and ProductCodeList to obtain region and template candidates. The statistics may be derived from generated summary results and do not indicate that a recently initiated synchronization or encryption operation has been completed.
     * Parameter examples are for format illustration only. When calling the API, replace them with the regions, resource identifiers, and configuration values obtained from the current account.
     *
     * @param request - ListTotalSensitiveInfoRequest
     *
     * @returns ListTotalSensitiveInfoResponse
     *
     * @param ListTotalSensitiveInfoRequest $request
     *
     * @return ListTotalSensitiveInfoResponse
     */
    public function listTotalSensitiveInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTotalSensitiveInfoWithOptions($request, $runtime);
    }

    /**
     * Synchronizes the assets of a specified product in a region.
     *
     * @remarks
     * Triggers asset synchronization for a specified product in the current region. The scope applies to the product and region, and is not limited to a specific instance. A successful request only indicates that the request is accepted. You can then verify asset changes by checking the lists of instances, databases, tables, and columns. This operation does not return a public node identifier for polling.
     * Parameter examples are for format illustration only. When you invoke this operation, replace them with the region, resource identifiers, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target assets reside, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identity must match the target assets.
     * This operation returns only RequestId. Request acceptance does not mean that the business operation is complete. You should check the status as described in the operation description.
     *
     * @param request - SyncDataAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncDataAssetsResponse
     *
     * @param SyncDataAssetsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SyncDataAssetsResponse
     */
    public function syncDataAssetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncDataAssets',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncDataAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes the assets of a specified product in a region.
     *
     * @remarks
     * Triggers asset synchronization for a specified product in the current region. The scope applies to the product and region, and is not limited to a specific instance. A successful request only indicates that the request is accepted. You can then verify asset changes by checking the lists of instances, databases, tables, and columns. This operation does not return a public node identifier for polling.
     * Parameter examples are for format illustration only. When you invoke this operation, replace them with the region, resource identifiers, and configuration values obtained from the current account.
     * Use the endpoint of the region where the target assets reside, and set the common parameter RegionId, such as cn-zhangjiakou. The product code and instance identity must match the target assets.
     * This operation returns only RequestId. Request acceptance does not mean that the business operation is complete. You should check the status as described in the operation description.
     *
     * @param request - SyncDataAssetsRequest
     *
     * @returns SyncDataAssetsResponse
     *
     * @param SyncDataAssetsRequest $request
     *
     * @return SyncDataAssetsResponse
     */
    public function syncDataAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDataAssetsWithOptions($request, $runtime);
    }

    /**
     * Modifies the column encryption algorithm and key for an instance.
     *
     * @remarks
     * Modifies the instance-level column encryption algorithm and key configuration, which affects the column encryption configuration of the instance. The current implementation supports ApsaraDB RDS for MySQL and PolarDB-X 2.0. Query the algorithms and keys supported by the instance before invoking this operation. This operation does not have an EncryptionKeyMode parameter. Configure the parameter based on the usage conditions of EncryptionKeyId. After a successful request, read back the instance encryption configuration and column status. Do not determine completion based solely on the RequestId.
     * The parameter examples are provided only to illustrate the format. Replace them with the region, resource identities, and configuration values obtained by querying your current account.
     * Use the service registration endpoint of the region where the target asset resides, and set the common parameter RegionId, for example, cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     * This operation returns only the RequestId. A successful request does not indicate that the business operation is complete. Read back the status as described in the operation description.
     *
     * @param request - UpdateDataMaskingEncryptionAlgorithmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataMaskingEncryptionAlgorithmResponse
     *
     * @param UpdateDataMaskingEncryptionAlgorithmRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateDataMaskingEncryptionAlgorithmResponse
     */
    public function updateDataMaskingEncryptionAlgorithmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptionAlgorithm) {
            @$query['EncryptionAlgorithm'] = $request->encryptionAlgorithm;
        }

        if (null !== $request->encryptionKeyId) {
            @$query['EncryptionKeyId'] = $request->encryptionKeyId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDataMaskingEncryptionAlgorithm',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataMaskingEncryptionAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the column encryption algorithm and key for an instance.
     *
     * @remarks
     * Modifies the instance-level column encryption algorithm and key configuration, which affects the column encryption configuration of the instance. The current implementation supports ApsaraDB RDS for MySQL and PolarDB-X 2.0. Query the algorithms and keys supported by the instance before invoking this operation. This operation does not have an EncryptionKeyMode parameter. Configure the parameter based on the usage conditions of EncryptionKeyId. After a successful request, read back the instance encryption configuration and column status. Do not determine completion based solely on the RequestId.
     * The parameter examples are provided only to illustrate the format. Replace them with the region, resource identities, and configuration values obtained by querying your current account.
     * Use the service registration endpoint of the region where the target asset resides, and set the common parameter RegionId, for example, cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     * This operation returns only the RequestId. A successful request does not indicate that the business operation is complete. Read back the status as described in the operation description.
     *
     * @param request - UpdateDataMaskingEncryptionAlgorithmRequest
     *
     * @returns UpdateDataMaskingEncryptionAlgorithmResponse
     *
     * @param UpdateDataMaskingEncryptionAlgorithmRequest $request
     *
     * @return UpdateDataMaskingEncryptionAlgorithmResponse
     */
    public function updateDataMaskingEncryptionAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataMaskingEncryptionAlgorithmWithOptions($request, $runtime);
    }

    /**
     * Sets the column encryption permissions for multiple database accounts.
     *
     * @remarks
     * Sets the same column encryption access permissions Settings for a batch of database accounts. UserList can contain accounts from different instances under the same product and region. Each item must include InstanceId and AccountId. fullAccess allows plaintext access, restrictedAccess allows restricted access, and noneAccess prohibits decryption and is supported only by specific DPI engines and key patterns. Only fullAccess supports configuring an expiration time. After a successful request, invoke ListDataAssetAccounts to read back the results.
     * The parameter examples are for format illustration only. When invoking this operation, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the service registration endpoint of the region where the target asset is located and set the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     * This operation returns only RequestId. Request acceptance does not mean the business operation is complete. You must read back the status as described in the operation description.
     *
     * @param tmpReq - UpdateDataMaskingUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataMaskingUsersResponse
     *
     * @param UpdateDataMaskingUsersRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDataMaskingUsersResponse
     */
    public function updateDataMaskingUsersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataMaskingUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userList) {
            $request->userListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userList, 'UserList', 'json');
        }

        $query = [];
        if (null !== $request->authRole) {
            @$query['AuthRole'] = $request->authRole;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->expireTimeOperation) {
            @$query['ExpireTimeOperation'] = $request->expireTimeOperation;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->userListShrink) {
            @$query['UserList'] = $request->userListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDataMaskingUsers',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataMaskingUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the column encryption permissions for multiple database accounts.
     *
     * @remarks
     * Sets the same column encryption access permissions Settings for a batch of database accounts. UserList can contain accounts from different instances under the same product and region. Each item must include InstanceId and AccountId. fullAccess allows plaintext access, restrictedAccess allows restricted access, and noneAccess prohibits decryption and is supported only by specific DPI engines and key patterns. Only fullAccess supports configuring an expiration time. After a successful request, invoke ListDataAssetAccounts to read back the results.
     * The parameter examples are for format illustration only. When invoking this operation, replace them with the region, resource identity, and configuration values obtained from the current account.
     * Use the service registration endpoint of the region where the target asset is located and set the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     * This operation returns only RequestId. Request acceptance does not mean the business operation is complete. You must read back the status as described in the operation description.
     *
     * @param request - UpdateDataMaskingUsersRequest
     *
     * @returns UpdateDataMaskingUsersResponse
     *
     * @param UpdateDataMaskingUsersRequest $request
     *
     * @return UpdateDataMaskingUsersResponse
     */
    public function updateDataMaskingUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataMaskingUsersWithOptions($request, $runtime);
    }

    /**
     * Upgrades the database kernel of an instance.
     *
     * @remarks
     * Upgrades the database kernel of a specified instance at the selected time. Invoke ListMiniEngineVersions to select a version, and check the current status and maintenance window of the instance. SpecifyTime requires a future SwitchTime, and PolarDB-X 2.0 does not support these time options. The upgrade is an asynchronous operation. Invoke GetInstanceAttribute to check the CurrentKernelVersion and verify the result.
     * The parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke the operation.
     * Use the service registration endpoint of the region where the target asset is located, and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     * This operation returns only RequestId. Acceptance of the request does not mean the business operation is complete. Check the status as described in the operation description.
     *
     * @param request - UpgradeKernelVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeKernelVersionResponse
     *
     * @param UpgradeKernelVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeKernelVersionResponse
     */
    public function upgradeKernelVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->kernelVersion) {
            @$query['KernelVersion'] = $request->kernelVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->upgradeTime) {
            @$query['UpgradeTime'] = $request->upgradeTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeKernelVersion',
            'version' => '2026-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the database kernel of an instance.
     *
     * @remarks
     * Upgrades the database kernel of a specified instance at the selected time. Invoke ListMiniEngineVersions to select a version, and check the current status and maintenance window of the instance. SpecifyTime requires a future SwitchTime, and PolarDB-X 2.0 does not support these time options. The upgrade is an asynchronous operation. Invoke GetInstanceAttribute to check the CurrentKernelVersion and verify the result.
     * The parameter examples are for format illustration only. Replace them with the region, resource identity, and configuration values obtained from the current account when you invoke the operation.
     * Use the service registration endpoint of the region where the target asset is located, and configure the Settings for the common parameter RegionId, such as cn-zhangjiakou. The product encoding and instance identity must match the target asset.
     * This operation returns only RequestId. Acceptance of the request does not mean the business operation is complete. Check the status as described in the operation description.
     *
     * @param request - UpgradeKernelVersionRequest
     *
     * @returns UpgradeKernelVersionResponse
     *
     * @param UpgradeKernelVersionRequest $request
     *
     * @return UpgradeKernelVersionResponse
     */
    public function upgradeKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeKernelVersionWithOptions($request, $runtime);
    }
}
