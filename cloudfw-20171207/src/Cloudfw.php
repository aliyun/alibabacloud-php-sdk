<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyInstanceMemberAttributesRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyInstanceMemberAttributesResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPolicyAdvancedConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPolicyAdvancedConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableAllFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableAllFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableAllFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableAllFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cloudfw extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-southeast-1' => 'cloudfw.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou'    => 'cloudfw.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudfw', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAddressBookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAddressBookResponse
     */
    public function addAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAddressBookResponse::fromMap($this->doRPCRequest('AddAddressBook', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddAddressBookRequest $request
     *
     * @return AddAddressBookResponse
     */
    public function addAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAddressBookWithOptions($request, $runtime);
    }

    /**
     * @param AddControlPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddControlPolicyResponse
     */
    public function addControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddControlPolicyResponse::fromMap($this->doRPCRequest('AddControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddControlPolicyRequest $request
     *
     * @return AddControlPolicyResponse
     */
    public function addControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param AddInstanceMembersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddInstanceMembersResponse
     */
    public function addInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddInstanceMembersResponse::fromMap($this->doRPCRequest('AddInstanceMembers', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddInstanceMembersRequest $request
     *
     * @return AddInstanceMembersResponse
     */
    public function addInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateVpcFirewallControlPolicyResponse
     */
    public function createVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpcFirewallControlPolicyResponse::fromMap($this->doRPCRequest('CreateVpcFirewallControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVpcFirewallControlPolicyRequest $request
     *
     * @return CreateVpcFirewallControlPolicyResponse
     */
    public function createVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAddressBookRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAddressBookResponse
     */
    public function deleteAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAddressBookResponse::fromMap($this->doRPCRequest('DeleteAddressBook', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAddressBookRequest $request
     *
     * @return DeleteAddressBookResponse
     */
    public function deleteAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAddressBookWithOptions($request, $runtime);
    }

    /**
     * @param DeleteControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteControlPolicyResponse
     */
    public function deleteControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteControlPolicyResponse::fromMap($this->doRPCRequest('DeleteControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteControlPolicyRequest $request
     *
     * @return DeleteControlPolicyResponse
     */
    public function deleteControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceMembersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteInstanceMembersResponse
     */
    public function deleteInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceMembersResponse::fromMap($this->doRPCRequest('DeleteInstanceMembers', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceMembersRequest $request
     *
     * @return DeleteInstanceMembersResponse
     */
    public function deleteInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteVpcFirewallControlPolicyResponse
     */
    public function deleteVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpcFirewallControlPolicyResponse::fromMap($this->doRPCRequest('DeleteVpcFirewallControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVpcFirewallControlPolicyRequest $request
     *
     * @return DeleteVpcFirewallControlPolicyResponse
     */
    public function deleteVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAddressBookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAddressBookResponse
     */
    public function describeAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAddressBookResponse::fromMap($this->doRPCRequest('DescribeAddressBook', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAddressBookRequest $request
     *
     * @return DescribeAddressBookResponse
     */
    public function describeAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddressBookWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssetListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAssetListResponse
     */
    public function describeAssetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAssetListResponse::fromMap($this->doRPCRequest('DescribeAssetList', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAssetListRequest $request
     *
     * @return DescribeAssetListResponse
     */
    public function describeAssetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeControlPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeControlPolicyResponse
     */
    public function describeControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeControlPolicyResponse::fromMap($this->doRPCRequest('DescribeControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeControlPolicyRequest $request
     *
     * @return DescribeControlPolicyResponse
     */
    public function describeControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainResolveRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainResolveResponse
     */
    public function describeDomainResolveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainResolveResponse::fromMap($this->doRPCRequest('DescribeDomainResolve', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainResolveRequest $request
     *
     * @return DescribeDomainResolveResponse
     */
    public function describeDomainResolve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResolveWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceMembersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceMembersResponse
     */
    public function describeInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceMembersResponse::fromMap($this->doRPCRequest('DescribeInstanceMembers', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceMembersRequest $request
     *
     * @return DescribeInstanceMembersResponse
     */
    public function describeInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolicyAdvancedConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePolicyAdvancedConfigResponse
     */
    public function describePolicyAdvancedConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePolicyAdvancedConfigResponse::fromMap($this->doRPCRequest('DescribePolicyAdvancedConfig', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePolicyAdvancedConfigRequest $request
     *
     * @return DescribePolicyAdvancedConfigResponse
     */
    public function describePolicyAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolicyPriorUsedRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePolicyPriorUsedResponse
     */
    public function describePolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePolicyPriorUsedResponse::fromMap($this->doRPCRequest('DescribePolicyPriorUsed', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePolicyPriorUsedRequest $request
     *
     * @return DescribePolicyPriorUsedResponse
     */
    public function describePolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskEventGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRiskEventGroupResponse
     */
    public function describeRiskEventGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRiskEventGroupResponse::fromMap($this->doRPCRequest('DescribeRiskEventGroup', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRiskEventGroupRequest $request
     *
     * @return DescribeRiskEventGroupResponse
     */
    public function describeRiskEventGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcFirewallAclGroupListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVpcFirewallAclGroupListResponse
     */
    public function describeVpcFirewallAclGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcFirewallAclGroupListResponse::fromMap($this->doRPCRequest('DescribeVpcFirewallAclGroupList', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVpcFirewallAclGroupListRequest $request
     *
     * @return DescribeVpcFirewallAclGroupListResponse
     */
    public function describeVpcFirewallAclGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallAclGroupListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVpcFirewallControlPolicyResponse
     */
    public function describeVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcFirewallControlPolicyResponse::fromMap($this->doRPCRequest('DescribeVpcFirewallControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVpcFirewallControlPolicyRequest $request
     *
     * @return DescribeVpcFirewallControlPolicyResponse
     */
    public function describeVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse
     */
    public function describeVpcFirewallPolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcFirewallPolicyPriorUsedResponse::fromMap($this->doRPCRequest('DescribeVpcFirewallPolicyPriorUsed', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse
     */
    public function describeVpcFirewallPolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallPolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAddressBookRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAddressBookResponse
     */
    public function modifyAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAddressBookResponse::fromMap($this->doRPCRequest('ModifyAddressBook', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAddressBookRequest $request
     *
     * @return ModifyAddressBookResponse
     */
    public function modifyAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAddressBookWithOptions($request, $runtime);
    }

    /**
     * @param ModifyControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyControlPolicyResponse
     */
    public function modifyControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyControlPolicyResponse::fromMap($this->doRPCRequest('ModifyControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyControlPolicyRequest $request
     *
     * @return ModifyControlPolicyResponse
     */
    public function modifyControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyControlPolicyPositionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyControlPolicyPositionResponse
     */
    public function modifyControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyControlPolicyPositionResponse::fromMap($this->doRPCRequest('ModifyControlPolicyPosition', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyControlPolicyPositionRequest $request
     *
     * @return ModifyControlPolicyPositionResponse
     */
    public function modifyControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceMemberAttributesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyInstanceMemberAttributesResponse
     */
    public function modifyInstanceMemberAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceMemberAttributesResponse::fromMap($this->doRPCRequest('ModifyInstanceMemberAttributes', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceMemberAttributesRequest $request
     *
     * @return ModifyInstanceMemberAttributesResponse
     */
    public function modifyInstanceMemberAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMemberAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPolicyAdvancedConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyPolicyAdvancedConfigResponse
     */
    public function modifyPolicyAdvancedConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPolicyAdvancedConfigResponse::fromMap($this->doRPCRequest('ModifyPolicyAdvancedConfig', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPolicyAdvancedConfigRequest $request
     *
     * @return ModifyPolicyAdvancedConfigResponse
     */
    public function modifyPolicyAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyVpcFirewallControlPolicyResponse
     */
    public function modifyVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpcFirewallControlPolicyResponse::fromMap($this->doRPCRequest('ModifyVpcFirewallControlPolicy', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyVpcFirewallControlPolicyRequest $request
     *
     * @return ModifyVpcFirewallControlPolicyResponse
     */
    public function modifyVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpcFirewallControlPolicyPositionRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ModifyVpcFirewallControlPolicyPositionResponse
     */
    public function modifyVpcFirewallControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpcFirewallControlPolicyPositionResponse::fromMap($this->doRPCRequest('ModifyVpcFirewallControlPolicyPosition', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyVpcFirewallControlPolicyPositionRequest $request
     *
     * @return ModifyVpcFirewallControlPolicyPositionResponse
     */
    public function modifyVpcFirewallControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * @param PutDisableAllFwSwitchRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutDisableAllFwSwitchResponse
     */
    public function putDisableAllFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutDisableAllFwSwitchResponse::fromMap($this->doRPCRequest('PutDisableAllFwSwitch', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutDisableAllFwSwitchRequest $request
     *
     * @return PutDisableAllFwSwitchResponse
     */
    public function putDisableAllFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDisableAllFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @param PutDisableFwSwitchRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutDisableFwSwitchResponse
     */
    public function putDisableFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutDisableFwSwitchResponse::fromMap($this->doRPCRequest('PutDisableFwSwitch', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutDisableFwSwitchRequest $request
     *
     * @return PutDisableFwSwitchResponse
     */
    public function putDisableFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDisableFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @param PutEnableAllFwSwitchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutEnableAllFwSwitchResponse
     */
    public function putEnableAllFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutEnableAllFwSwitchResponse::fromMap($this->doRPCRequest('PutEnableAllFwSwitch', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutEnableAllFwSwitchRequest $request
     *
     * @return PutEnableAllFwSwitchResponse
     */
    public function putEnableAllFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEnableAllFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @param PutEnableFwSwitchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PutEnableFwSwitchResponse
     */
    public function putEnableFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutEnableFwSwitchResponse::fromMap($this->doRPCRequest('PutEnableFwSwitch', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutEnableFwSwitchRequest $request
     *
     * @return PutEnableFwSwitchResponse
     */
    public function putEnableFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEnableFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ResetVpcFirewallRuleHitCountRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetVpcFirewallRuleHitCountResponse::fromMap($this->doRPCRequest('ResetVpcFirewallRuleHitCount', '2017-12-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetVpcFirewallRuleHitCountRequest $request
     *
     * @return ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetVpcFirewallRuleHitCountWithOptions($request, $runtime);
    }
}
