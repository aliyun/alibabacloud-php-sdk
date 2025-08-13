<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Tag\V20180828\Models\AttachPolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\AttachPolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\CheckCreatedByEnabledRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\CheckCreatedByEnabledResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\CloseCreatedByRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\CloseCreatedByResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreateAssociatedResourceRulesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreateAssociatedResourceRulesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\DeleteAssociatedResourceRuleRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\DeleteAssociatedResourceRuleResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\DetachPolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\DetachPolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\DisablePolicyTypeRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\DisablePolicyTypeResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\EnablePolicyTypeRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\EnablePolicyTypeResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\GenerateConfigRuleReportRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\GenerateConfigRuleReportResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetConfigRuleReportRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetConfigRuleReportResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetEffectivePolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetEffectivePolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyEnableStatusRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyEnableStatusResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetPolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListAssociatedResourceRulesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListAssociatedResourceRulesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListConfigRulesForTargetRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListConfigRulesForTargetResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesForTargetRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesForTargetResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListResourcesByTagRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListResourcesByTagResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListSupportResourceTypesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTargetsForPolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ListTargetsForPolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\ModifyPolicyRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\ModifyPolicyResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\OpenCreatedByRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\OpenCreatedByResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Tag\V20180828\Models\UpdateAssociatedResourceRuleRequest;
use AlibabaCloud\SDK\Tag\V20180828\Models\UpdateAssociatedResourceRuleResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Tag extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'tag.us-east-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1' => 'tag.aliyuncs.com',
            'ap-northeast-2-pop' => 'tag.aliyuncs.com',
            'cn-beijing-finance-pop' => 'tag.aliyuncs.com',
            'cn-beijing-gov-1' => 'tag.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-edge-1' => 'tag.aliyuncs.com',
            'cn-fujian' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'tag.cn-north-2-gov-1.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'tag.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'tag.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'tag.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-test-306' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'tag.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'tag.cn-qingdao-nebula.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'tag.aliyuncs.com',
            'cn-shanghai-inner' => 'tag.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'tag.aliyuncs.com',
            'cn-shenzhen-inner' => 'tag.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'tag.aliyuncs.com',
            'cn-wuhan' => 'tag.aliyuncs.com',
            'cn-yushanfang' => 'tag.aliyuncs.com',
            'cn-zhangbei' => 'tag.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'tag.cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'tag.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'tag.cn-qingdao-nebula.aliyuncs.com',
            'eu-west-1-oxs' => 'tag.cn-shenzhen-cloudstone.aliyuncs.com',
            'rus-west-1-pop' => 'tag.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tag', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 绑定策略.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can call this API operation to attach a tag policy to the current logon account. If you use the Tag Policy feature in multi-account mode, you can call this API operation to attach a tag policy to the Root folder, a folder other than the Root folder, or a member in a resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to attach the tag policy with an ID of `p-de62a0bf400e4b69****` to the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - AttachPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPolicyResponse
     *
     * @param AttachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPolicyResponse
     */
    public function attachPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachPolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定策略.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can call this API operation to attach a tag policy to the current logon account. If you use the Tag Policy feature in multi-account mode, you can call this API operation to attach a tag policy to the Root folder, a folder other than the Root folder, or a member in a resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to attach the tag policy with an ID of `p-de62a0bf400e4b69****` to the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - AttachPolicyRequest
     *
     * @returns AttachPolicyResponse
     *
     * @param AttachPolicyRequest $request
     *
     * @return AttachPolicyResponse
     */
    public function attachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyWithOptions($request, $runtime);
    }

    /**
     * 校验CreatedBy开通状态
     *
     * @param request - CheckCreatedByEnabledRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCreatedByEnabledResponse
     *
     * @param CheckCreatedByEnabledRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckCreatedByEnabledResponse
     */
    public function checkCreatedByEnabledWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCreatedByEnabled',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCreatedByEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验CreatedBy开通状态
     *
     * @param request - CheckCreatedByEnabledRequest
     *
     * @returns CheckCreatedByEnabledResponse
     *
     * @param CheckCreatedByEnabledRequest $request
     *
     * @return CheckCreatedByEnabledResponse
     */
    public function checkCreatedByEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCreatedByEnabledWithOptions($request, $runtime);
    }

    /**
     * 关闭CreatedBy服务
     *
     * @param request - CloseCreatedByRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseCreatedByResponse
     *
     * @param CloseCreatedByRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloseCreatedByResponse
     */
    public function closeCreatedByWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseCreatedBy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseCreatedByResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭CreatedBy服务
     *
     * @param request - CloseCreatedByRequest
     *
     * @returns CloseCreatedByResponse
     *
     * @param CloseCreatedByRequest $request
     *
     * @return CloseCreatedByResponse
     */
    public function closeCreatedBy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeCreatedByWithOptions($request, $runtime);
    }

    /**
     * Creates associated resource tagging rules.
     *
     * @param request - CreateAssociatedResourceRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAssociatedResourceRulesResponse
     *
     * @param CreateAssociatedResourceRulesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateAssociatedResourceRulesResponse
     */
    public function createAssociatedResourceRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createRulesList) {
            @$query['CreateRulesList'] = $request->createRulesList;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAssociatedResourceRules',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAssociatedResourceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates associated resource tagging rules.
     *
     * @param request - CreateAssociatedResourceRulesRequest
     *
     * @returns CreateAssociatedResourceRulesResponse
     *
     * @param CreateAssociatedResourceRulesRequest $request
     *
     * @return CreateAssociatedResourceRulesResponse
     */
    public function createAssociatedResourceRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAssociatedResourceRulesWithOptions($request, $runtime);
    }

    /**
     * Creates a tag policy.
     *
     * @remarks
     * ###
     * This topic provides an example on how to call the API operation to create a tag policy named `test`. In this example, the Tag Policy feature in multi-account mode is used. The tag policy defines that resources to which the `CostCenter:Beijing` or `CostCenter:Shanghai` tag is added are compliant and other resources are not compliant.
     *
     * @param request - CreatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyContent) {
            @$query['PolicyContent'] = $request->policyContent;
        }

        if (null !== $request->policyDesc) {
            @$query['PolicyDesc'] = $request->policyDesc;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a tag policy.
     *
     * @remarks
     * ###
     * This topic provides an example on how to call the API operation to create a tag policy named `test`. In this example, the Tag Policy feature in multi-account mode is used. The tag policy defines that resources to which the `CostCenter:Beijing` or `CostCenter:Shanghai` tag is added are compliant and other resources are not compliant.
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates predefined tags.
     *
     * @remarks
     * ###
     * A preset tag is a tag that you create in advance and is available for the resources in all regions. You can create preset tags in the stage of tag planning and add them to specific resources in the stage of tag implementation. When you create a preset tag, you can specify only the tag key. You can specify a tag value in the future.
     * This topic provides an example on how to call the API operation to create a preset tag whose tag key is `Environment` to indicate the business environment.
     *
     * @param request - CreateTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagsResponse
     *
     * @param CreateTagsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTagsResponse
     */
    public function createTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->tagKeyValueParamList) {
            @$query['TagKeyValueParamList'] = $request->tagKeyValueParamList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTags',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates predefined tags.
     *
     * @remarks
     * ###
     * A preset tag is a tag that you create in advance and is available for the resources in all regions. You can create preset tags in the stage of tag planning and add them to specific resources in the stage of tag implementation. When you create a preset tag, you can specify only the tag key. You can specify a tag value in the future.
     * This topic provides an example on how to call the API operation to create a preset tag whose tag key is `Environment` to indicate the business environment.
     *
     * @param request - CreateTagsRequest
     *
     * @returns CreateTagsResponse
     *
     * @param CreateTagsRequest $request
     *
     * @return CreateTagsResponse
     */
    public function createTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagsWithOptions($request, $runtime);
    }

    /**
     * Deletes an associated resource tagging rule.
     *
     * @param request - DeleteAssociatedResourceRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAssociatedResourceRuleResponse
     *
     * @param DeleteAssociatedResourceRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteAssociatedResourceRuleResponse
     */
    public function deleteAssociatedResourceRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->settingName) {
            @$query['SettingName'] = $request->settingName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAssociatedResourceRule',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAssociatedResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an associated resource tagging rule.
     *
     * @param request - DeleteAssociatedResourceRuleRequest
     *
     * @returns DeleteAssociatedResourceRuleResponse
     *
     * @param DeleteAssociatedResourceRuleRequest $request
     *
     * @return DeleteAssociatedResourceRuleResponse
     */
    public function deleteAssociatedResourceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAssociatedResourceRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a tag policy.
     *
     * @remarks
     * Before you delete a tag policy, make sure that the tag policy is detached from all objects to which the tag policy is attached. For more information about how to detach a tag policy, see [DetachPolicy](https://help.aliyun.com/document_detail/429724.html).
     * This topic provides an example on how to call the API operation to delete the tag policy with an ID of `p-557cb141331f41c7****`.
     *
     * @param request - DeletePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a tag policy.
     *
     * @remarks
     * Before you delete a tag policy, make sure that the tag policy is detached from all objects to which the tag policy is attached. For more information about how to detach a tag policy, see [DetachPolicy](https://help.aliyun.com/document_detail/429724.html).
     * This topic provides an example on how to call the API operation to delete the tag policy with an ID of `p-557cb141331f41c7****`.
     *
     * @param request - DeletePolicyRequest
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a preset tag.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to delete the preset tag whose tag key is `Environment` and tag value is `test`.
     *
     * @param request - DeleteTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTag',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a preset tag.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to delete the preset tag whose tag key is `Environment` and tag value is `test`.
     *
     * @param request - DeleteTagRequest
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     *
     * @return DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithOptions($request, $runtime);
    }

    /**
     * Queries the regions where the Tag service is available.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the regions where the Tag service is available.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Detaches a tag policy from an object.
     *
     * @remarks
     * ###
     * If you use the Tag Policy feature in single-account mode, you can call this API operation to detach a tag policy from the current logon account. If you use the Tag Policy feature in multi-account mode, you can call this API operation to detach a tag policy from the Root folder, a folder other than the Root folder, or a member in a resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to detach the tag policy with an ID of `p-a3381efe2fe34a75****` from the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - DetachPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPolicyResponse
     *
     * @param DetachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachPolicyResponse
     */
    public function detachPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachPolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a tag policy from an object.
     *
     * @remarks
     * ###
     * If you use the Tag Policy feature in single-account mode, you can call this API operation to detach a tag policy from the current logon account. If you use the Tag Policy feature in multi-account mode, you can call this API operation to detach a tag policy from the Root folder, a folder other than the Root folder, or a member in a resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to detach the tag policy with an ID of `p-a3381efe2fe34a75****` from the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - DetachPolicyRequest
     *
     * @returns DetachPolicyResponse
     *
     * @param DetachPolicyRequest $request
     *
     * @return DetachPolicyResponse
     */
    public function detachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyWithOptions($request, $runtime);
    }

    /**
     * 关闭策略.
     *
     * @param request - DisablePolicyTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisablePolicyTypeResponse
     *
     * @param DisablePolicyTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisablePolicyTypeResponse
     */
    public function disablePolicyTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->openType) {
            @$query['OpenType'] = $request->openType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisablePolicyType',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisablePolicyTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭策略.
     *
     * @param request - DisablePolicyTypeRequest
     *
     * @returns DisablePolicyTypeResponse
     *
     * @param DisablePolicyTypeRequest $request
     *
     * @return DisablePolicyTypeResponse
     */
    public function disablePolicyType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disablePolicyTypeWithOptions($request, $runtime);
    }

    /**
     * 开通策略.
     *
     * @param request - EnablePolicyTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnablePolicyTypeResponse
     *
     * @param EnablePolicyTypeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EnablePolicyTypeResponse
     */
    public function enablePolicyTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->openType) {
            @$query['OpenType'] = $request->openType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnablePolicyType',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnablePolicyTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通策略.
     *
     * @param request - EnablePolicyTypeRequest
     *
     * @returns EnablePolicyTypeResponse
     *
     * @param EnablePolicyTypeRequest $request
     *
     * @return EnablePolicyTypeResponse
     */
    public function enablePolicyType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enablePolicyTypeWithOptions($request, $runtime);
    }

    /**
     * 生成规则检测报告.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can call this API operation to generate a resource non-compliance report for the current logon account. If you use the Tag Policy feature in multi-account mode, you can call this API operation to generate a resource non-compliance report for the Root folder, a folder other than the Root folder, or a member in a resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call this API operation to generate a resource non-compliance report for the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - GenerateConfigRuleReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateConfigRuleReportResponse
     *
     * @param GenerateConfigRuleReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateConfigRuleReportResponse
     */
    public function generateConfigRuleReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateConfigRuleReport',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateConfigRuleReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成规则检测报告.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can call this API operation to generate a resource non-compliance report for the current logon account. If you use the Tag Policy feature in multi-account mode, you can call this API operation to generate a resource non-compliance report for the Root folder, a folder other than the Root folder, or a member in a resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call this API operation to generate a resource non-compliance report for the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - GenerateConfigRuleReportRequest
     *
     * @returns GenerateConfigRuleReportResponse
     *
     * @param GenerateConfigRuleReportRequest $request
     *
     * @return GenerateConfigRuleReportResponse
     */
    public function generateConfigRuleReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateConfigRuleReportWithOptions($request, $runtime);
    }

    /**
     * Queries the basic information of the resource non-compliance report that is last generated.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the basic information of the resource non-compliance report that is last generated for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the basic information of the resource non-compliance report that is last generated for an object in the resource directory. The object can be the Root folder, a folder other than the Root folder, or a member. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call this API operation to query the basic information of the resource non-compliance report that is last generated for the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that the ID of the report is `crp-ao0786618088006c****`.
     *
     * @param request - GetConfigRuleReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigRuleReportResponse
     *
     * @param GetConfigRuleReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConfigRuleReportResponse
     */
    public function getConfigRuleReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConfigRuleReport',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigRuleReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information of the resource non-compliance report that is last generated.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the basic information of the resource non-compliance report that is last generated for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the basic information of the resource non-compliance report that is last generated for an object in the resource directory. The object can be the Root folder, a folder other than the Root folder, or a member. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call this API operation to query the basic information of the resource non-compliance report that is last generated for the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that the ID of the report is `crp-ao0786618088006c****`.
     *
     * @param request - GetConfigRuleReportRequest
     *
     * @returns GetConfigRuleReportResponse
     *
     * @param GetConfigRuleReportRequest $request
     *
     * @return GetConfigRuleReportResponse
     */
    public function getConfigRuleReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleReportWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the effective policy.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the effective tag policy for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the effective tag policy for the Root folder, a folder other than the Root folder, or a member in the resource directory. You can also use a member of a resource directory to call this API operation to query the effective tag policy for the member. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * An effective tag policy is obtained based on tag policy inheritance. For more information, see [Inheritance of a tag policy and calculation of an effective tag policy](https://help.aliyun.com/document_detail/417435.html).
     * This topic provides an example on how to call the API operation to query the effective tag policy for the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - GetEffectivePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEffectivePolicyResponse
     *
     * @param GetEffectivePolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetEffectivePolicyResponse
     */
    public function getEffectivePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->tagKeys) {
            @$query['TagKeys'] = $request->tagKeys;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEffectivePolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEffectivePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the effective policy.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the effective tag policy for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the effective tag policy for the Root folder, a folder other than the Root folder, or a member in the resource directory. You can also use a member of a resource directory to call this API operation to query the effective tag policy for the member. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * An effective tag policy is obtained based on tag policy inheritance. For more information, see [Inheritance of a tag policy and calculation of an effective tag policy](https://help.aliyun.com/document_detail/417435.html).
     * This topic provides an example on how to call the API operation to query the effective tag policy for the current logon account. In this example, the Tag Policy feature in single-account mode is used.
     *
     * @param request - GetEffectivePolicyRequest
     *
     * @returns GetEffectivePolicyResponse
     *
     * @param GetEffectivePolicyRequest $request
     *
     * @return GetEffectivePolicyResponse
     */
    public function getEffectivePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEffectivePolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a tag policy.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the details of the tag policy with an ID of `p-557cb141331f41c7****`.
     *
     * @param request - GetPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyResponse
     *
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a tag policy.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the details of the tag policy with an ID of `p-557cb141331f41c7****`.
     *
     * @param request - GetPolicyRequest
     *
     * @returns GetPolicyResponse
     *
     * @param GetPolicyRequest $request
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the Tag Policy feature.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the status of the Tag Policy feature for the current logon account. The response shows that the Tag Policy feature in multi-account mode is enabled for the current logon account.
     *
     * @param request - GetPolicyEnableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyEnableStatusResponse
     *
     * @param GetPolicyEnableStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPolicyEnableStatusResponse
     */
    public function getPolicyEnableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->openType) {
            @$query['OpenType'] = $request->openType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicyEnableStatus',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the Tag Policy feature.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the status of the Tag Policy feature for the current logon account. The response shows that the Tag Policy feature in multi-account mode is enabled for the current logon account.
     *
     * @param request - GetPolicyEnableStatusRequest
     *
     * @returns GetPolicyEnableStatusResponse
     *
     * @param GetPolicyEnableStatusRequest $request
     *
     * @return GetPolicyEnableStatusResponse
     */
    public function getPolicyEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyEnableStatusWithOptions($request, $runtime);
    }

    /**
     * Search the rules for associated resources that the user has set up.
     *
     * @param request - ListAssociatedResourceRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAssociatedResourceRulesResponse
     *
     * @param ListAssociatedResourceRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListAssociatedResourceRulesResponse
     */
    public function listAssociatedResourceRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->settingName) {
            @$query['SettingName'] = $request->settingName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAssociatedResourceRules',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAssociatedResourceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Search the rules for associated resources that the user has set up.
     *
     * @param request - ListAssociatedResourceRulesRequest
     *
     * @returns ListAssociatedResourceRulesResponse
     *
     * @param ListAssociatedResourceRulesRequest $request
     *
     * @return ListAssociatedResourceRulesResponse
     */
    public function listAssociatedResourceRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssociatedResourceRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tag detection tasks for an object.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the tag detection tasks for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the tag detection tasks for the Root folder, a folder other than the Root folder, or a member in the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query the tag detection tasks for the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that only one tag detection task exists.
     *
     * @param request - ListConfigRulesForTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigRulesForTargetResponse
     *
     * @param ListConfigRulesForTargetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListConfigRulesForTargetResponse
     */
    public function listConfigRulesForTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfigRulesForTarget',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConfigRulesForTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tag detection tasks for an object.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the tag detection tasks for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the tag detection tasks for the Root folder, a folder other than the Root folder, or a member in the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query the tag detection tasks for the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that only one tag detection task exists.
     *
     * @param request - ListConfigRulesForTargetRequest
     *
     * @returns ListConfigRulesForTargetResponse
     *
     * @param ListConfigRulesForTargetRequest $request
     *
     * @return ListConfigRulesForTargetResponse
     */
    public function listConfigRulesForTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRulesForTargetWithOptions($request, $runtime);
    }

    /**
     * Queries tag policies.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query all tag policies that are created for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query all tag policies that are created for the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query all tag policies that are created for the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that two tag policies are created.
     *
     * @param request - ListPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyIds) {
            @$query['PolicyIds'] = $request->policyIds;
        }

        if (null !== $request->policyNames) {
            @$query['PolicyNames'] = $request->policyNames;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag policies.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query all tag policies that are created for the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query all tag policies that are created for the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query all tag policies that are created for the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that two tag policies are created.
     *
     * @param request - ListPoliciesRequest
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries the tag policies that are attached to an object.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the tag policies that are attached to the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the tag policies that are attached to the Root folder, a folder other than the Root folder, or a member in the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query the tag policies that are attached to the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that only one tag policy is attached to the current logon account.
     *
     * @param request - ListPoliciesForTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesForTargetResponse
     *
     * @param ListPoliciesForTargetRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPoliciesForTargetResponse
     */
    public function listPoliciesForTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPoliciesForTarget',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesForTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tag policies that are attached to an object.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the tag policies that are attached to the account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the tag policies that are attached to the Root folder, a folder other than the Root folder, or a member in the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query the tag policies that are attached to the current logon account. In this example, the Tag Policy feature in single-account mode is used. The response shows that only one tag policy is attached to the current logon account.
     *
     * @param request - ListPoliciesForTargetRequest
     *
     * @returns ListPoliciesForTargetResponse
     *
     * @param ListPoliciesForTargetRequest $request
     *
     * @return ListPoliciesForTargetResponse
     */
    public function listPoliciesForTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesForTargetWithOptions($request, $runtime);
    }

    /**
     * Queries resources to which a specified tag is added or resources to which a specified tag is not added.
     *
     * @remarks
     * This topic provides an example on how to call the API operation in the China (Shenzhen) region to query virtual private clouds (VPCs) to which the tag key `k1` is added. The response shows that the tag key is added to two VPCs.
     *
     * @param request - ListResourcesByTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesByTagResponse
     *
     * @param ListResourcesByTagRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourcesByTagResponse
     */
    public function listResourcesByTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fuzzyType) {
            @$query['FuzzyType'] = $request->fuzzyType;
        }

        if (null !== $request->includeAllTags) {
            @$query['IncludeAllTags'] = $request->includeAllTags;
        }

        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagFilter) {
            @$query['TagFilter'] = $request->tagFilter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourcesByTag',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourcesByTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resources to which a specified tag is added or resources to which a specified tag is not added.
     *
     * @remarks
     * This topic provides an example on how to call the API operation in the China (Shenzhen) region to query virtual private clouds (VPCs) to which the tag key `k1` is added. The response shows that the tag key is added to two VPCs.
     *
     * @param request - ListResourcesByTagRequest
     *
     * @returns ListResourcesByTagResponse
     *
     * @param ListResourcesByTagRequest $request
     *
     * @return ListResourcesByTagResponse
     */
    public function listResourcesByTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesByTagWithOptions($request, $runtime);
    }

    /**
     * Queries the resource types supported by tags and tag-related capability items.
     *
     * @remarks
     * ### [](#)Call example
     * *   Query a list of resource types supported by TagResources or UntagResources. For more information, see [Example](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG\\&params=%7B%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22TAG_CONSOLE_SUPPORT%22%7D).
     * *   Query a list of resource types supported by ListTagResources or ListResourcesByTag. For more information, see [Example](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG\\&params=%7B%22RegionId%22:%22cn-hangzhou%22%7D).
     * *   Query a list of resource types that support createdby tags. For more information, see [Example](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG\\&params=%7B%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22CREATED_BY_TAG_CONSOLE_SUPPORT%22%7D).
     *
     * @param request - ListSupportResourceTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSupportResourceTypesResponse
     *
     * @param ListSupportResourceTypesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSupportResourceTypesResponse
     */
    public function listSupportResourceTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceTye) {
            @$query['ResourceTye'] = $request->resourceTye;
        }

        if (null !== $request->showItems) {
            @$query['ShowItems'] = $request->showItems;
        }

        if (null !== $request->supportCode) {
            @$query['SupportCode'] = $request->supportCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSupportResourceTypes',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSupportResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource types supported by tags and tag-related capability items.
     *
     * @remarks
     * ### [](#)Call example
     * *   Query a list of resource types supported by TagResources or UntagResources. For more information, see [Example](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG\\&params=%7B%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22TAG_CONSOLE_SUPPORT%22%7D).
     * *   Query a list of resource types supported by ListTagResources or ListResourcesByTag. For more information, see [Example](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG\\&params=%7B%22RegionId%22:%22cn-hangzhou%22%7D).
     * *   Query a list of resource types that support createdby tags. For more information, see [Example](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG\\&params=%7B%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22CREATED_BY_TAG_CONSOLE_SUPPORT%22%7D).
     *
     * @param request - ListSupportResourceTypesRequest
     *
     * @returns ListSupportResourceTypesResponse
     *
     * @param ListSupportResourceTypesRequest $request
     *
     * @return ListSupportResourceTypesResponse
     */
    public function listSupportResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportResourceTypesWithOptions($request, $runtime);
    }

    /**
     * Queries tag keys.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the tag keys in the `cn-hangzhou` region. The response shows that the following tag keys exist: `team`, `k1`, and `k2`.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->fuzzyType) {
            @$query['FuzzyType'] = $request->fuzzyType;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagFilter) {
            @$query['TagFilter'] = $request->tagFilter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagKeys',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tag keys.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the tag keys in the `cn-hangzhou` region. The response shows that the following tag keys exist: `team`, `k1`, and `k2`.
     *
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to the resources of various Alibaba Cloud services.
     *
     * @remarks
     * For information about the Alibaba Cloud services that support tags, see [Services that work with Tag](https://help.aliyun.com/document_detail/171455.html).
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceARN) {
            @$query['ResourceARN'] = $request->resourceARN;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to the resources of various Alibaba Cloud services.
     *
     * @remarks
     * For information about the Alibaba Cloud services that support tags, see [Services that work with Tag](https://help.aliyun.com/document_detail/171455.html).
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the tag values of a tag key.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the values of the tag key `k1` in the `cn-hangzhou` region. The response shows that the value of the tag key `k1` is `v1`.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fuzzyType) {
            @$query['FuzzyType'] = $request->fuzzyType;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagFilter) {
            @$query['TagFilter'] = $request->tagFilter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagValues',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tag values of a tag key.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the values of the tag key `k1` in the `cn-hangzhou` region. The response shows that the value of the tag key `k1` is `v1`.
     *
     * @param request - ListTagValuesRequest
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * Queries the objects to which a tag policy is attached.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the object to which a tag policy is attached. The object is the current logon account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the objects to which a tag policy is attached. The objects include the Root folder, folders other than the Root folder, and members in the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query the objects to which the tag policy with an ID of `p-de62a0bf400e4b69****` is attached. In this example, the Tag Policy feature in multi-account mode is used. The response shows that the tag policy is attached to two members in the related resource directory.
     *
     * @param request - ListTargetsForPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTargetsForPolicyResponse
     *
     * @param ListTargetsForPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTargetsForPolicyResponse
     */
    public function listTargetsForPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResult) {
            @$query['MaxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTargetsForPolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTargetsForPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the objects to which a tag policy is attached.
     *
     * @remarks
     * If you use the Tag Policy feature in single-account mode, you can use the current logon account to call this API operation to query the object to which a tag policy is attached. The object is the current logon account. If you use the Tag Policy feature in multi-account mode, you can use the management account of a resource directory to call this API operation to query the objects to which a tag policy is attached. The objects include the Root folder, folders other than the Root folder, and members in the resource directory. For more information about the modes of the Tag Policy feature, see [Modes of the Tag Policy feature](https://help.aliyun.com/document_detail/417434.html).
     * This topic provides an example on how to call the API operation to query the objects to which the tag policy with an ID of `p-de62a0bf400e4b69****` is attached. In this example, the Tag Policy feature in multi-account mode is used. The response shows that the tag policy is attached to two members in the related resource directory.
     *
     * @param request - ListTargetsForPolicyRequest
     *
     * @returns ListTargetsForPolicyResponse
     *
     * @param ListTargetsForPolicyRequest $request
     *
     * @return ListTargetsForPolicyResponse
     */
    public function listTargetsForPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTargetsForPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies a tag policy.
     *
     * @remarks
     * ### [](#)
     * This topic provides an example on how to call the API operation to change the name of a tag policy to `test`.
     *
     * @param request - ModifyPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolicyResponse
     *
     * @param ModifyPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyPolicyResponse
     */
    public function modifyPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->policyContent) {
            @$query['PolicyContent'] = $request->policyContent;
        }

        if (null !== $request->policyDesc) {
            @$query['PolicyDesc'] = $request->policyDesc;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a tag policy.
     *
     * @remarks
     * ### [](#)
     * This topic provides an example on how to call the API operation to change the name of a tag policy to `test`.
     *
     * @param request - ModifyPolicyRequest
     *
     * @returns ModifyPolicyResponse
     *
     * @param ModifyPolicyRequest $request
     *
     * @return ModifyPolicyResponse
     */
    public function modifyPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyWithOptions($request, $runtime);
    }

    /**
     * Enables createdby tags.
     *
     * @remarks
     * createdby tags can help you analyze costs and bills and manage the costs of cloud resources in an efficient manner. You can identify the creators of resources based on the createdby tags added to the resources. createdby tags are system tags that are provided by Alibaba Cloud and automatically added to resources. The key of createdby tags is `acs:tag:createdby`.
     *
     * @param request - OpenCreatedByRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenCreatedByResponse
     *
     * @param OpenCreatedByRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OpenCreatedByResponse
     */
    public function openCreatedByWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenCreatedBy',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenCreatedByResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables createdby tags.
     *
     * @remarks
     * createdby tags can help you analyze costs and bills and manage the costs of cloud resources in an efficient manner. You can identify the creators of resources based on the createdby tags added to the resources. createdby tags are system tags that are provided by Alibaba Cloud and automatically added to resources. The key of createdby tags is `acs:tag:createdby`.
     *
     * @param request - OpenCreatedByRequest
     *
     * @returns OpenCreatedByResponse
     *
     * @param OpenCreatedByRequest $request
     *
     * @return OpenCreatedByResponse
     */
    public function openCreatedBy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCreatedByWithOptions($request, $runtime);
    }

    /**
     * Adds tags to the resources of various Alibaba Cloud services.
     *
     * @remarks
     * Tags are used to identify resources. Tags allow you to categorize, search for, and aggregate resources that have the same characteristics from different dimensions. This facilitates resource management. For more information, see [Tag overview](https://help.aliyun.com/document_detail/156983.html).
     * For information about the Alibaba Cloud services that support tags, see [Services that work with Tag](https://help.aliyun.com/document_detail/171455.html).
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceARN) {
            @$query['ResourceARN'] = $request->resourceARN;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to the resources of various Alibaba Cloud services.
     *
     * @remarks
     * Tags are used to identify resources. Tags allow you to categorize, search for, and aggregate resources that have the same characteristics from different dimensions. This facilitates resource management. For more information, see [Tag overview](https://help.aliyun.com/document_detail/156983.html).
     * For information about the Alibaba Cloud services that support tags, see [Services that work with Tag](https://help.aliyun.com/document_detail/171455.html).
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Removes tags from the resources of various Alibaba Cloud services.
     *
     * @remarks
     * After you remove a tag, the tag is automatically deleted within 24 hours if it is not added to other resources.
     * For information about the Alibaba Cloud services that support tags, see [Services that work with Tag](https://help.aliyun.com/document_detail/171455.html).
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceARN) {
            @$query['ResourceARN'] = $request->resourceARN;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from the resources of various Alibaba Cloud services.
     *
     * @remarks
     * After you remove a tag, the tag is automatically deleted within 24 hours if it is not added to other resources.
     * For information about the Alibaba Cloud services that support tags, see [Services that work with Tag](https://help.aliyun.com/document_detail/171455.html).
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Update the rule for tagging associated resources.
     *
     * @param request - UpdateAssociatedResourceRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAssociatedResourceRuleResponse
     *
     * @param UpdateAssociatedResourceRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateAssociatedResourceRuleResponse
     */
    public function updateAssociatedResourceRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->existingStatus) {
            @$query['ExistingStatus'] = $request->existingStatus;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->settingName) {
            @$query['SettingName'] = $request->settingName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagKeys) {
            @$query['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAssociatedResourceRule',
            'version' => '2018-08-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAssociatedResourceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the rule for tagging associated resources.
     *
     * @param request - UpdateAssociatedResourceRuleRequest
     *
     * @returns UpdateAssociatedResourceRuleResponse
     *
     * @param UpdateAssociatedResourceRuleRequest $request
     *
     * @return UpdateAssociatedResourceRuleResponse
     */
    public function updateAssociatedResourceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAssociatedResourceRuleWithOptions($request, $runtime);
    }
}
