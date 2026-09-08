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
     * 校验列加密实例权限.
     *
     * @remarks
     * 创建列加密前检查实例的权限、引擎及运行条件。应同时检查响应中的 ErrorCode 和 ErrorMessage；仅 ErrorCode=Success 表示检查通过，请求成功本身不表示实例满足全部加密条件。此检查不会创建列加密规则。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 校验列加密实例权限.
     *
     * @remarks
     * 创建列加密前检查实例的权限、引擎及运行条件。应同时检查响应中的 ErrorCode 和 ErrorMessage；仅 ErrorCode=Success 表示检查通过，请求成功本身不表示实例满足全部加密条件。此检查不会创建列加密规则。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 创建列加密策略.
     *
     * @remarks
     * 为同一实例下指定数据库、表和列创建列加密规则。调用前检查实例状态、支持算法、密钥、目标列和账号。SubRuleList 为按表分组的目标列表，Columns 是以英文逗号分隔的列名字符串；UserList 中的账号被授予 fullAccess 明文权限。请求成功仅表示已受理，必须回读 ListDataMaskingColumns 和 ListDataAssetAccounts 确认列状态、账号权限及期限。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 创建列加密策略.
     *
     * @remarks
     * 为同一实例下指定数据库、表和列创建列加密规则。调用前检查实例状态、支持算法、密钥、目标列和账号。SubRuleList 为按表分组的目标列表，Columns 是以英文逗号分隔的列名字符串；UserList 中的账号被授予 fullAccess 明文权限。请求成功仅表示已受理，必须回读 ListDataMaskingColumns 和 ListDataAssetAccounts 确认列状态、账号权限及期限。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 删除列加密策略.
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
     * 删除列加密策略.
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
     * 检查实例列加密状态
     *
     * @remarks
     * 按产品范围查询当前地域数据库账号的权限统计。明文账号对应 FullAccessCount；限制访问和禁止解密账号分别计入 RestrictedAccessCount、NoneAccessCount。未配置权限账号数可由 TotalCount 减去上述三类账号数得到。本接口不接受实例、库、表、列等筛选条件。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 检查实例列加密状态
     *
     * @remarks
     * 按产品范围查询当前地域数据库账号的权限统计。明文账号对应 FullAccessCount；限制访问和禁止解密账号分别计入 RestrictedAccessCount、NoneAccessCount。未配置权限账号数可由 TotalCount 减去上述三类账号数得到。本接口不接受实例、库、表、列等筛选条件。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 获取列加密统计信息.
     *
     * @remarks
     * 按地域、产品和分类分级模板查询总列数、敏感列数、已加密列数和加密失败列数。本接口返回统计卡片数据，不跟随列列表中的实例、库名、表名、列名或模型筛选。
     * 为兼容历史识别结果，指定模板无首屏结果且未按敏感等级或识别模型过滤时，结果可能回退到内置通用识别结果。要求严格模板归属时，请同时使用该模板内的等级或模型条件核验。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 获取列加密统计信息.
     *
     * @remarks
     * 按地域、产品和分类分级模板查询总列数、敏感列数、已加密列数和加密失败列数。本接口返回统计卡片数据，不跟随列列表中的实例、库名、表名、列名或模型筛选。
     * 为兼容历史识别结果，指定模板无首屏结果且未按敏感等级或识别模型过滤时，结果可能回退到内置通用识别结果。要求严格模板归属时，请同时使用该模板内的等级或模型条件核验。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 获取实例属性.
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
     * 获取实例属性.
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
     * 查询数据安全中心连接授权的MaxCompute、RDS等数据资产表中列的数据.
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
     * 查询数据安全中心连接授权的MaxCompute、RDS等数据资产表中列的数据.
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
     * 查询账号列表.
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
     * 查询账号列表.
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
     * 获取列加密列列表.
     *
     * @remarks
     * 分页查询列及其加密状态、敏感等级和识别模型。支持模板、产品、实例、数据库、表、列名、模型和敏感等级组合筛选。创建或关闭规则后使用本接口回读；Processing、Deleting 为中间状态，Failed、DeleteFailed 表示操作失败。RiskLeveLId 的参数名大小写应原样保留。
     * 按产品查询时使用单个 ProductId 或对应 ProductCode。当前列查询不能依赖 ProductIds 实现多产品筛选；多产品应分别查询。
     * 为兼容历史识别结果，指定模板无首屏结果且未按敏感等级或识别模型过滤时，结果可能回退到内置通用识别结果。要求严格模板归属时，请同时使用该模板内的等级或模型条件核验。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 获取列加密列列表.
     *
     * @remarks
     * 分页查询列及其加密状态、敏感等级和识别模型。支持模板、产品、实例、数据库、表、列名、模型和敏感等级组合筛选。创建或关闭规则后使用本接口回读；Processing、Deleting 为中间状态，Failed、DeleteFailed 表示操作失败。RiskLeveLId 的参数名大小写应原样保留。
     * 按产品查询时使用单个 ProductId 或对应 ProductCode。当前列查询不能依赖 ProductIds 实现多产品筛选；多产品应分别查询。
     * 为兼容历史识别结果，指定模板无首屏结果且未按敏感等级或识别模型过滤时，结果可能回退到内置通用识别结果。要求严格模板归属时，请同时使用该模板内的等级或模型条件核验。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询实例支持的列加密算法列表.
     *
     * @remarks
     * 查询指定实例可选的列加密算法及各算法的限制原因。选择算法前检查对应项的 ErrorCode 和 ErrorMessage；不要把所有实例都视为支持同一组算法。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询实例支持的列加密算法列表.
     *
     * @remarks
     * 查询指定实例可选的列加密算法及各算法的限制原因。选择算法前检查对应项的 ErrorCode 和 ErrorMessage；不要把所有实例都视为支持同一组算法。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 获取列加密实例列表.
     *
     * @remarks
     * 分页查询列加密实例，并支持产品、识别模板及库表列等条件。实例级状态筛选与列级状态筛选范围不同：查找全部未加密敏感列时，先枚举目标产品的实例，再使用 ListDataMaskingColumns 按 NotEncrypted 筛选，避免遗漏已经部分加密的实例。
     * 需要按 EngineType 精确筛选时，应完整分页读取候选后按返回值过滤；部分查询路径不应用此参数。InstanceId 的匹配语义随查询组合变化，精确定位时应核对返回的完整实例标识。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 获取列加密实例列表.
     *
     * @remarks
     * 分页查询列加密实例，并支持产品、识别模板及库表列等条件。实例级状态筛选与列级状态筛选范围不同：查找全部未加密敏感列时，先枚举目标产品的实例，再使用 ListDataMaskingColumns 按 NotEncrypted 筛选，避免遗漏已经部分加密的实例。
     * 需要按 EngineType 精确筛选时，应完整分页读取候选后按返回值过滤；部分查询路径不应用此参数。InstanceId 的匹配语义随查询组合变化，精确定位时应核对返回的完整实例标识。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询数据源列表.
     *
     * @remarks
     * 分页查询已纳管的数据源。关系型数据库场景通过 ProductCode、InstanceId 定位实例，从 Items[].DbName 选择数据库。本接口查询数据库库存，不使用分类分级模板筛选。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询数据源列表.
     *
     * @remarks
     * 分页查询已纳管的数据源。关系型数据库场景通过 ProductCode、InstanceId 定位实例，从 Items[].DbName 选择数据库。本接口查询数据库库存，不使用分类分级模板筛选。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询模板的所有规则.
     *
     * @remarks
     * 查询指定模板内有效的识别模型，返回 RuleList。未指定 TemplateId 时使用当前启用模板。模型标识取 RuleList[].Id，可用于 TemplateRuleIds 筛选。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
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
     * 查询模板的所有规则.
     *
     * @remarks
     * 查询指定模板内有效的识别模型，返回 RuleList。未指定 TemplateId 时使用当前启用模板。模型标识取 RuleList[].Id，可用于 TemplateRuleIds 筛选。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
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
     * 查询可用的KMS主密钥.
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
     * 查询可用的KMS主密钥.
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
     * 获取实例内核版本列表.
     *
     * @remarks
     * 查询实例可选择的内核版本。升级时从 KernelVersions[].KernelVersion 选择目标，不应手工构造版本号。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 获取实例内核版本列表.
     *
     * @remarks
     * 查询实例可选择的内核版本。升级时从 KernelVersions[].KernelVersion 选择目标，不应手工构造版本号。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询区域列表.
     *
     * @remarks
     * 查询当前账号拥有资产的地域列表，用于选择后续地域化接口的 RegionId。可按是否开启审计、是否开启识别筛选。返回的地域列表不等同于所有云产品支持地域清单。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
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
     * 查询区域列表.
     *
     * @remarks
     * 查询当前账号拥有资产的地域列表，用于选择后续地域化接口的 RegionId。可按是否开启审计、是否开启识别筛选。返回的地域列表不等同于所有云产品支持地域清单。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
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
     * 查询风险级别列表.
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
     * 查询风险级别列表.
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
     * 查询表识别结果列表.
     *
     * @remarks
     * 分页查询数据库中的数据表及识别结果。关系型数据库场景传入 DataAssetSourceId=实例标识、DataSourceName=数据库名称。PostgreSQL 和 Oracle 的表名可能包含 schema 前缀，后续列查询应原样传递表名。
     * 为兼容历史识别结果，指定模板无首屏结果且未按敏感等级或识别模型过滤时，结果可能回退到内置通用识别结果。要求严格模板归属时，请同时使用该模板内的等级或模型条件核验。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询表识别结果列表.
     *
     * @remarks
     * 分页查询数据库中的数据表及识别结果。关系型数据库场景传入 DataAssetSourceId=实例标识、DataSourceName=数据库名称。PostgreSQL 和 Oracle 的表名可能包含 schema 前缀，后续列查询应原样传递表名。
     * 为兼容历史识别结果，指定模板无首屏结果且未按敏感等级或识别模型过滤时，结果可能回退到内置通用识别结果。要求严格模板归属时，请同时使用该模板内的等级或模型条件核验。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
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
     * 查询识别模版列表.
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
     * 查询识别模版列表.
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
     * 提供数据目录、总览页面的敏感数据汇总.
     *
     * @remarks
     * 查询总览、数据目录或按地域汇总的敏感数据统计。CountType=41 返回总览统计，42 返回指定产品的数据目录统计，43 返回按地域和模板聚合的数据。列加密控制台使用 CountType=43 与 ProductCodeList 获取地域和模板候选。统计数据可能来自已生成的汇总结果，不代表刚发起的同步或加密操作已经完成。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
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
     * 提供数据目录、总览页面的敏感数据汇总.
     *
     * @remarks
     * 查询总览、数据目录或按地域汇总的敏感数据统计。CountType=41 返回总览统计，42 返回指定产品的数据目录统计，43 返回按地域和模板聚合的数据。列加密控制台使用 CountType=43 与 ProductCodeList 获取地域和模板候选。统计数据可能来自已生成的汇总结果，不代表刚发起的同步或加密操作已经完成。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
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
     * 资产同步.
     *
     * @remarks
     * 触发当前地域内指定产品的资产同步，作用范围是产品和地域，不限于某个实例。请求成功仅表示已受理；随后通过实例、数据库、表和列列表核对资产变化。该接口不返回可供轮询的公开任务标识。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 资产同步.
     *
     * @remarks
     * 触发当前地域内指定产品的资产同步，作用范围是产品和地域，不限于某个实例。请求成功仅表示已受理；随后通过实例、数据库、表和列列表核对资产变化。该接口不返回可供轮询的公开任务标识。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 更新列加密算法.
     *
     * @remarks
     * 修改实例级列加密算法及密钥配置，影响该实例的列加密配置。当前实现支持 RDS MySQL 和 PolarDB-X 2.0；先查询实例支持算法和密钥。该接口没有 EncryptionKeyMode 参数，应按 EncryptionKeyId 的使用条件配置。请求成功后回读实例加密配置和列状态，不能仅凭 RequestId 判断完成。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 更新列加密算法.
     *
     * @remarks
     * 修改实例级列加密算法及密钥配置，影响该实例的列加密配置。当前实现支持 RDS MySQL 和 PolarDB-X 2.0；先查询实例支持算法和密钥。该接口没有 EncryptionKeyMode 参数，应按 EncryptionKeyId 的使用条件配置。请求成功后回读实例加密配置和列状态，不能仅凭 RequestId 判断完成。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 批量修改账号权限.
     *
     * @remarks
     * 为一批数据库账号设置同一种列加密访问权限。UserList 可包含同一产品、同一地域下不同实例的账号，每项必须携带 InstanceId 和 AccountId。fullAccess 允许明文访问，restrictedAccess 允许受限访问，noneAccess 禁止解密且仅支持特定引擎和密钥模式。仅 fullAccess 可配置有效期。请求成功后使用 ListDataAssetAccounts 回读。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 批量修改账号权限.
     *
     * @remarks
     * 为一批数据库账号设置同一种列加密访问权限。UserList 可包含同一产品、同一地域下不同实例的账号，每项必须携带 InstanceId 和 AccountId。fullAccess 允许明文访问，restrictedAccess 允许受限访问，noneAccess 禁止解密且仅支持特定引擎和密钥模式。仅 fullAccess 可配置有效期。请求成功后使用 ListDataAssetAccounts 回读。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 升级内核版本.
     *
     * @remarks
     * 按所选时间升级指定实例的数据库内核。先调用 ListMiniEngineVersions 选择版本，并检查实例当前状态和维护窗口。SpecifyTime 需要提供未来的 SwitchTime，PolarDB-X 2.0 不支持该时间选项。升级为异步操作，回读 GetInstanceAttribute 的 CurrentKernelVersion 核对结果。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
     * 升级内核版本.
     *
     * @remarks
     * 按所选时间升级指定实例的数据库内核。先调用 ListMiniEngineVersions 选择版本，并检查实例当前状态和维护窗口。SpecifyTime 需要提供未来的 SwitchTime，PolarDB-X 2.0 不支持该时间选项。升级为异步操作，回读 GetInstanceAttribute 的 CurrentKernelVersion 核对结果。
     * 参数示例仅用于说明格式。调用时请替换为当前账号查询得到的地域、资源标识和配置值。
     * 使用目标资产所在地域的服务接入点，并设置公共参数 RegionId，例如 cn-zhangjiakou。产品编码和实例标识必须与目标资产一致。
     * 本接口仅返回 RequestId。请求受理不等于业务操作完成，应按接口说明回读状态。
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
