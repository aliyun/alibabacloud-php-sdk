<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\BatchCopyVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\BatchCopyVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\BatchDeleteVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\BatchDeleteVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateDownloadTaskRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateDownloadTaskResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSecurityProxyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSecurityProxyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSlsLogDispatchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateSlsLogDispatchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2Request;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2Response;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateTrFirewallV2RoutePolicyShrinkRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyTemplateRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyTemplateResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteDownloadTaskRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteDownloadTaskResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteFirewallV2RoutePoliciesRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteFirewallV2RoutePoliciesResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteNatFirewallControlPolicyBatchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteNatFirewallControlPolicyBatchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteSecurityProxyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteSecurityProxyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteTrFirewallV2Request;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteTrFirewallV2Response;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetRiskListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetRiskListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeCfwRiskLevelSummaryRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeCfwRiskLevelSummaryResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskTypeRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskTypeResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenIpRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenIpResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatAclPageStatusRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatAclPageStatusResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallPolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallPolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficDetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficDetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficTotalRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficTotalResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrefixListsRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrefixListsResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventPayloadRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventPayloadResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSignatureLibVersionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallPolicyBackUpAssociationListShrinkRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2DetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2DetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserBuyVersionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserBuyVersionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallIPSWhitelistRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallIPSWhitelistResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcListLiteRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcListLiteResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcZoneRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcZoneResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVulnerabilityProtectedListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVulnerabilityProtectedListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyFirewallV2RoutePolicySwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyFirewallV2RoutePolicySwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyInstanceMemberAttributesRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyInstanceMemberAttributesResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyObjectGroupOperationRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyObjectGroupOperationResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPolicyAdvancedConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPolicyAdvancedConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2ConfigurationRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2ConfigurationResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyTrFirewallV2RoutePolicyScopeShrinkRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyUserIPSWhitelistRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyUserIPSWhitelistResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenSwitchStatusRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallCenSwitchStatusResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyPositionRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyPositionResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallIPSWhitelistRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallIPSWhitelistResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallSwitchStatusRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyVpcFirewallSwitchStatusResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableAllFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableAllFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutDisableFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableAllFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableAllFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleasePostInstanceRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleasePostInstanceResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetNatFirewallRuleHitCountRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetNatFirewallRuleHitCountResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\SwitchSecurityProxyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\SwitchSecurityProxyResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @summary Creates an address book for access control. Supported address book types are IP address books, Elastic Compute Service (ECS) tag-based address books, port address books, and domain address books. An ECS tag-based address book includes the public IP addresses of the ECS instances that have specific tags.
     *  *
     * @description You can call the AddAddressBook operation to create an address book for access control. The address book can be an IP address book, an ECS tag-based address book, a port address book, or a domain address book.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddAddressBookRequest $request AddAddressBookRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAddressBookResponse AddAddressBookResponse
     */
    public function addAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressList)) {
            $query['AddressList'] = $request->addressList;
        }
        if (!Utils::isUnset($request->autoAddTagEcs)) {
            $query['AutoAddTagEcs'] = $request->autoAddTagEcs;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->tagRelation)) {
            $query['TagRelation'] = $request->tagRelation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an address book for access control. Supported address book types are IP address books, Elastic Compute Service (ECS) tag-based address books, port address books, and domain address books. An ECS tag-based address book includes the public IP addresses of the ECS instances that have specific tags.
     *  *
     * @description You can call the AddAddressBook operation to create an address book for access control. The address book can be an IP address book, an ECS tag-based address book, a port address book, or a domain address book.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddAddressBookRequest $request AddAddressBookRequest
     *
     * @return AddAddressBookResponse AddAddressBookResponse
     */
    public function addAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAddressBookWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access control policy.
     *  *
     * @description You can call the AddControlPolicy operation to create an access control policy to allow, block, or monitor traffic that reaches Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddControlPolicyRequest $request AddControlPolicyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddControlPolicyResponse AddControlPolicyResponse
     */
    public function addControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access control policy.
     *  *
     * @description You can call the AddControlPolicy operation to create an access control policy to allow, block, or monitor traffic that reaches Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddControlPolicyRequest $request AddControlPolicyRequest
     *
     * @return AddControlPolicyResponse AddControlPolicyResponse
     */
    public function addControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Adds members to Cloud Firewall.
     *  *
     * @description You can call this operation to add members to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddInstanceMembersRequest $request AddInstanceMembersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddInstanceMembersResponse AddInstanceMembersResponse
     */
    public function addInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->members)) {
            $query['Members'] = $request->members;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddInstanceMembers',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds members to Cloud Firewall.
     *  *
     * @description You can call this operation to add members to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddInstanceMembersRequest $request AddInstanceMembersRequest
     *
     * @return AddInstanceMembersResponse AddInstanceMembersResponse
     */
    public function addInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * @summary Copies all access control policies from a policy group of a source virtual private cloud (VPC) firewall to a policy group of a destination VPC firewall.
     *  *
     * @description You can call the BatchCopyVpcFirewallControlPolicy operation to copy all access control policies from a policy group of a source VPC firewall to a policy group of a destination VPC firewall.
     * Before you call this operation, we recommend that you back up access control policies. For more information about how to back up an access control policy, see [Back up an access control policy](https://www.alibabacloud.com/help/en/cloud-firewall/latest/back-up-and-roll-back-an-access-control-policy).
     * After you call this operation, all the access control policies in the policy group of the destination VPC firewall are replaced.
     * The policy groups of the source VPC firewall and the destination VPC firewall must belong to the same Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. When the number of calls to this operation per second exceeds the limit, throttling is triggered. Throttling may affect your business. We recommend that you take note of the limit on this operation.
     *  *
     * @param BatchCopyVpcFirewallControlPolicyRequest $request BatchCopyVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCopyVpcFirewallControlPolicyResponse BatchCopyVpcFirewallControlPolicyResponse
     */
    public function batchCopyVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->sourceVpcFirewallId)) {
            $query['SourceVpcFirewallId'] = $request->sourceVpcFirewallId;
        }
        if (!Utils::isUnset($request->targetVpcFirewallId)) {
            $query['TargetVpcFirewallId'] = $request->targetVpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCopyVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCopyVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Copies all access control policies from a policy group of a source virtual private cloud (VPC) firewall to a policy group of a destination VPC firewall.
     *  *
     * @description You can call the BatchCopyVpcFirewallControlPolicy operation to copy all access control policies from a policy group of a source VPC firewall to a policy group of a destination VPC firewall.
     * Before you call this operation, we recommend that you back up access control policies. For more information about how to back up an access control policy, see [Back up an access control policy](https://www.alibabacloud.com/help/en/cloud-firewall/latest/back-up-and-roll-back-an-access-control-policy).
     * After you call this operation, all the access control policies in the policy group of the destination VPC firewall are replaced.
     * The policy groups of the source VPC firewall and the destination VPC firewall must belong to the same Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. When the number of calls to this operation per second exceeds the limit, throttling is triggered. Throttling may affect your business. We recommend that you take note of the limit on this operation.
     *  *
     * @param BatchCopyVpcFirewallControlPolicyRequest $request BatchCopyVpcFirewallControlPolicyRequest
     *
     * @return BatchCopyVpcFirewallControlPolicyResponse BatchCopyVpcFirewallControlPolicyResponse
     */
    public function batchCopyVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCopyVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple access control policies for a virtual private cloud (VPC) firewall at a time.
     *  *
     * @param BatchDeleteVpcFirewallControlPolicyRequest $request BatchDeleteVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteVpcFirewallControlPolicyResponse BatchDeleteVpcFirewallControlPolicyResponse
     */
    public function batchDeleteVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuidList)) {
            $query['AclUuidList'] = $request->aclUuidList;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple access control policies for a virtual private cloud (VPC) firewall at a time.
     *  *
     * @param BatchDeleteVpcFirewallControlPolicyRequest $request BatchDeleteVpcFirewallControlPolicyRequest
     *
     * @return BatchDeleteVpcFirewallControlPolicyResponse BatchDeleteVpcFirewallControlPolicyResponse
     */
    public function batchDeleteVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a file download task.
     *  *
     * @param CreateDownloadTaskRequest $request CreateDownloadTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDownloadTaskResponse CreateDownloadTaskResponse
     */
    public function createDownloadTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskData)) {
            $query['TaskData'] = $request->taskData;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['TimeZone'] = $request->timeZone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDownloadTask',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a file download task.
     *  *
     * @param CreateDownloadTaskRequest $request CreateDownloadTaskRequest
     *
     * @return CreateDownloadTaskResponse CreateDownloadTaskResponse
     */
    public function createDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access control policy for a NAT firewall.
     *  *
     * @description You can call this operation to create a policy that allows, denies, or monitors the traffic that passes through the NAT firewall.
     *  *
     * @param CreateNatFirewallControlPolicyRequest $request CreateNatFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNatFirewallControlPolicyResponse CreateNatFirewallControlPolicyResponse
     */
    public function createNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access control policy for a NAT firewall.
     *  *
     * @description You can call this operation to create a policy that allows, denies, or monitors the traffic that passes through the NAT firewall.
     *  *
     * @param CreateNatFirewallControlPolicyRequest $request CreateNatFirewallControlPolicyRequest
     *
     * @return CreateNatFirewallControlPolicyResponse CreateNatFirewallControlPolicyResponse
     */
    public function createNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a NAT firewall.
     *  *
     * @param CreateSecurityProxyRequest $request CreateSecurityProxyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecurityProxyResponse CreateSecurityProxyResponse
     */
    public function createSecurityProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->natRouteEntryList)) {
            $query['NatRouteEntryList'] = $request->natRouteEntryList;
        }
        if (!Utils::isUnset($request->proxyName)) {
            $query['ProxyName'] = $request->proxyName;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->strictMode)) {
            $query['StrictMode'] = $request->strictMode;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchAuto)) {
            $query['VswitchAuto'] = $request->vswitchAuto;
        }
        if (!Utils::isUnset($request->vswitchCidr)) {
            $query['VswitchCidr'] = $request->vswitchCidr;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecurityProxy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecurityProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a NAT firewall.
     *  *
     * @param CreateSecurityProxyRequest $request CreateSecurityProxyRequest
     *
     * @return CreateSecurityProxyResponse CreateSecurityProxyResponse
     */
    public function createSecurityProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityProxyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建云防火墙SLS日志投递
     *  *
     * @param CreateSlsLogDispatchRequest $request CreateSlsLogDispatchRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSlsLogDispatchResponse CreateSlsLogDispatchResponse
     */
    public function createSlsLogDispatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->slsRegionId)) {
            $body['SlsRegionId'] = $request->slsRegionId;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSlsLogDispatch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSlsLogDispatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建云防火墙SLS日志投递
     *  *
     * @param CreateSlsLogDispatchRequest $request CreateSlsLogDispatchRequest
     *
     * @return CreateSlsLogDispatchResponse CreateSlsLogDispatchResponse
     */
    public function createSlsLogDispatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlsLogDispatchWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a virtual private cloud (VPC) firewall for a transit router.
     *  *
     * @param CreateTrFirewallV2Request $request CreateTrFirewallV2Request
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrFirewallV2Response CreateTrFirewallV2Response
     */
    public function createTrFirewallV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->firewallDescription)) {
            $query['FirewallDescription'] = $request->firewallDescription;
        }
        if (!Utils::isUnset($request->firewallName)) {
            $query['FirewallName'] = $request->firewallName;
        }
        if (!Utils::isUnset($request->firewallSubnetCidr)) {
            $query['FirewallSubnetCidr'] = $request->firewallSubnetCidr;
        }
        if (!Utils::isUnset($request->firewallVpcCidr)) {
            $query['FirewallVpcCidr'] = $request->firewallVpcCidr;
        }
        if (!Utils::isUnset($request->firewallVpcId)) {
            $query['FirewallVpcId'] = $request->firewallVpcId;
        }
        if (!Utils::isUnset($request->firewallVswitchId)) {
            $query['FirewallVswitchId'] = $request->firewallVswitchId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->routeMode)) {
            $query['RouteMode'] = $request->routeMode;
        }
        if (!Utils::isUnset($request->trAttachmentMasterCidr)) {
            $query['TrAttachmentMasterCidr'] = $request->trAttachmentMasterCidr;
        }
        if (!Utils::isUnset($request->trAttachmentMasterZone)) {
            $query['TrAttachmentMasterZone'] = $request->trAttachmentMasterZone;
        }
        if (!Utils::isUnset($request->trAttachmentSlaveCidr)) {
            $query['TrAttachmentSlaveCidr'] = $request->trAttachmentSlaveCidr;
        }
        if (!Utils::isUnset($request->trAttachmentSlaveZone)) {
            $query['TrAttachmentSlaveZone'] = $request->trAttachmentSlaveZone;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrFirewallV2',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrFirewallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a virtual private cloud (VPC) firewall for a transit router.
     *  *
     * @param CreateTrFirewallV2Request $request CreateTrFirewallV2Request
     *
     * @return CreateTrFirewallV2Response CreateTrFirewallV2Response
     */
    public function createTrFirewallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrFirewallV2WithOptions($request, $runtime);
    }

    /**
     * @summary Creates a routing policy for a VPC firewall of a transit router.
     *  *
     * @param CreateTrFirewallV2RoutePolicyRequest $tmpReq  CreateTrFirewallV2RoutePolicyRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrFirewallV2RoutePolicyResponse CreateTrFirewallV2RoutePolicyResponse
     */
    public function createTrFirewallV2RoutePolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTrFirewallV2RoutePolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destCandidateList)) {
            $request->destCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destCandidateList, 'DestCandidateList', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcCandidateList)) {
            $request->srcCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcCandidateList, 'SrcCandidateList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->destCandidateListShrink)) {
            $query['DestCandidateList'] = $request->destCandidateListShrink;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->policyDescription)) {
            $query['PolicyDescription'] = $request->policyDescription;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->srcCandidateListShrink)) {
            $query['SrcCandidateList'] = $request->srcCandidateListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrFirewallV2RoutePolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrFirewallV2RoutePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a routing policy for a VPC firewall of a transit router.
     *  *
     * @param CreateTrFirewallV2RoutePolicyRequest $request CreateTrFirewallV2RoutePolicyRequest
     *
     * @return CreateTrFirewallV2RoutePolicyResponse CreateTrFirewallV2RoutePolicyResponse
     */
    public function createTrFirewallV2RoutePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrFirewallV2RoutePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a virtual private cloud (VPC) firewall to protect traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the CreateVpcFirewallCenConfigure operation to create a VPC firewall. The VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. The VPC firewall cannot protect mutual access traffic between VBRs, between CCN instances, or between VBRs and CCN instances. For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateVpcFirewallCenConfigureRequest $request CreateVpcFirewallCenConfigureRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcFirewallCenConfigureResponse CreateVpcFirewallCenConfigureResponse
     */
    public function createVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->firewallVSwitchCidrBlock)) {
            $query['FirewallVSwitchCidrBlock'] = $request->firewallVSwitchCidrBlock;
        }
        if (!Utils::isUnset($request->firewallVpcCidrBlock)) {
            $query['FirewallVpcCidrBlock'] = $request->firewallVpcCidrBlock;
        }
        if (!Utils::isUnset($request->firewallVpcZoneId)) {
            $query['FirewallVpcZoneId'] = $request->firewallVpcZoneId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->networkInstanceId)) {
            $query['NetworkInstanceId'] = $request->networkInstanceId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        if (!Utils::isUnset($request->vpcRegion)) {
            $query['VpcRegion'] = $request->vpcRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcFirewallCenConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a virtual private cloud (VPC) firewall to protect traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the CreateVpcFirewallCenConfigure operation to create a VPC firewall. The VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. The VPC firewall cannot protect mutual access traffic between VBRs, between CCN instances, or between VBRs and CCN instances. For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateVpcFirewallCenConfigureRequest $request CreateVpcFirewallCenConfigureRequest
     *
     * @return CreateVpcFirewallCenConfigureResponse CreateVpcFirewallCenConfigureResponse
     */
    public function createVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Virtual Private Cloud (VPC) firewall to protect traffic between two VPCs that are connected by using an Express Connect.
     *  *
     * @description You can call this operation to create a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. The VPC firewall does not control the mutual access traffic between VPCs that reside in different regions or belong to different Alibaba Cloud accounts. The firewall also does not control the mutual access traffic between VPCs and virtual border routers (VBRs). For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ### [](#qps)QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateVpcFirewallConfigureRequest $request CreateVpcFirewallConfigureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcFirewallConfigureResponse CreateVpcFirewallConfigureResponse
     */
    public function createVpcFirewallConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localVpcCidrTableList)) {
            $query['LocalVpcCidrTableList'] = $request->localVpcCidrTableList;
        }
        if (!Utils::isUnset($request->localVpcId)) {
            $query['LocalVpcId'] = $request->localVpcId;
        }
        if (!Utils::isUnset($request->localVpcRegion)) {
            $query['LocalVpcRegion'] = $request->localVpcRegion;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->peerVpcCidrTableList)) {
            $query['PeerVpcCidrTableList'] = $request->peerVpcCidrTableList;
        }
        if (!Utils::isUnset($request->peerVpcId)) {
            $query['PeerVpcId'] = $request->peerVpcId;
        }
        if (!Utils::isUnset($request->peerVpcRegion)) {
            $query['PeerVpcRegion'] = $request->peerVpcRegion;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcFirewallConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Virtual Private Cloud (VPC) firewall to protect traffic between two VPCs that are connected by using an Express Connect.
     *  *
     * @description You can call this operation to create a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. The VPC firewall does not control the mutual access traffic between VPCs that reside in different regions or belong to different Alibaba Cloud accounts. The firewall also does not control the mutual access traffic between VPCs and virtual border routers (VBRs). For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ### [](#qps)QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateVpcFirewallConfigureRequest $request CreateVpcFirewallConfigureRequest
     *
     * @return CreateVpcFirewallConfigureResponse CreateVpcFirewallConfigureResponse
     */
    public function createVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access control policy in a specified policy group for a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the CreateVpcFirewallControlPolicy operation to create an access control policy in a specified policy group for a VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateVpcFirewallControlPolicyRequest $request CreateVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcFirewallControlPolicyResponse CreateVpcFirewallControlPolicyResponse
     */
    public function createVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access control policy in a specified policy group for a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the CreateVpcFirewallControlPolicy operation to create an access control policy in a specified policy group for a VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateVpcFirewallControlPolicyRequest $request CreateVpcFirewallControlPolicyRequest
     *
     * @return CreateVpcFirewallControlPolicyResponse CreateVpcFirewallControlPolicyResponse
     */
    public function createVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an address book for access control.
     *  *
     * @description You can call the DeleteAddressBook operation to delete an address book for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteAddressBookRequest $request DeleteAddressBookRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAddressBookResponse DeleteAddressBookResponse
     */
    public function deleteAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an address book for access control.
     *  *
     * @description You can call the DeleteAddressBook operation to delete an address book for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteAddressBookRequest $request DeleteAddressBookRequest
     *
     * @return DeleteAddressBookResponse DeleteAddressBookResponse
     */
    public function deleteAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAddressBookWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an access control policy.
     *  *
     * @description You can call the DeleteControlPolicy operation to delete an access control policy that applies to inbound or outbound traffic.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteControlPolicyRequest $request DeleteControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteControlPolicyResponse DeleteControlPolicyResponse
     */
    public function deleteControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an access control policy.
     *  *
     * @description You can call the DeleteControlPolicy operation to delete an access control policy that applies to inbound or outbound traffic.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteControlPolicyRequest $request DeleteControlPolicyRequest
     *
     * @return DeleteControlPolicyResponse DeleteControlPolicyResponse
     */
    public function deleteControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an access control policy template.
     *  *
     * @param DeleteControlPolicyTemplateRequest $request DeleteControlPolicyTemplateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteControlPolicyTemplateResponse DeleteControlPolicyTemplateResponse
     */
    public function deleteControlPolicyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteControlPolicyTemplate',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteControlPolicyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an access control policy template.
     *  *
     * @param DeleteControlPolicyTemplateRequest $request DeleteControlPolicyTemplateRequest
     *
     * @return DeleteControlPolicyTemplateResponse DeleteControlPolicyTemplateResponse
     */
    public function deleteControlPolicyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlPolicyTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes file download tasks.
     *  *
     * @description You can call this operation to delete file download tasks and delete the files.
     * **
     * **Warning** Both tasks and involved files are deleted. You can no longer download the involved files by using the download links. This operation is irreversible. Proceed with caution.
     *  *
     * @param DeleteDownloadTaskRequest $request DeleteDownloadTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDownloadTaskResponse DeleteDownloadTaskResponse
     */
    public function deleteDownloadTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDownloadTask',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes file download tasks.
     *  *
     * @description You can call this operation to delete file download tasks and delete the files.
     * **
     * **Warning** Both tasks and involved files are deleted. You can no longer download the involved files by using the download links. This operation is irreversible. Proceed with caution.
     *  *
     * @param DeleteDownloadTaskRequest $request DeleteDownloadTaskRequest
     *
     * @return DeleteDownloadTaskResponse DeleteDownloadTaskResponse
     */
    public function deleteDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes routing policies for a virtual private cloud (VPC) firewall of a transit router.
     *  *
     * @param DeleteFirewallV2RoutePoliciesRequest $request DeleteFirewallV2RoutePoliciesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFirewallV2RoutePoliciesResponse DeleteFirewallV2RoutePoliciesResponse
     */
    public function deleteFirewallV2RoutePoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFirewallV2RoutePolicies',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFirewallV2RoutePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes routing policies for a virtual private cloud (VPC) firewall of a transit router.
     *  *
     * @param DeleteFirewallV2RoutePoliciesRequest $request DeleteFirewallV2RoutePoliciesRequest
     *
     * @return DeleteFirewallV2RoutePoliciesResponse DeleteFirewallV2RoutePoliciesResponse
     */
    public function deleteFirewallV2RoutePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallV2RoutePoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes members from Cloud Firewall.
     *  *
     * @description You can call this operation to remove up to 20 members from Cloud Firewall at a time. Separate multiple members with commas (,). After a member is removed, Cloud Firewall can no longer access the cloud resources of the member. Proceed with caution. Before you call this operation, call the [DescribeInstanceMembers](https://help.aliyun.com/document_detail/271704.html) operation to obtain the information about the members that are added to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteInstanceMembersRequest $request DeleteInstanceMembersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceMembersResponse DeleteInstanceMembersResponse
     */
    public function deleteInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberUids)) {
            $query['MemberUids'] = $request->memberUids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceMembers',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes members from Cloud Firewall.
     *  *
     * @description You can call this operation to remove up to 20 members from Cloud Firewall at a time. Separate multiple members with commas (,). After a member is removed, Cloud Firewall can no longer access the cloud resources of the member. Proceed with caution. Before you call this operation, call the [DescribeInstanceMembers](https://help.aliyun.com/document_detail/271704.html) operation to obtain the information about the members that are added to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteInstanceMembersRequest $request DeleteInstanceMembersRequest
     *
     * @return DeleteInstanceMembersResponse DeleteInstanceMembersResponse
     */
    public function deleteInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an access control policy that is created for a NAT firewall.
     *  *
     * @description You can use this operation to delete an outbound access control policy that is created for a NAT firewall.
     *  *
     * @param DeleteNatFirewallControlPolicyRequest $request DeleteNatFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNatFirewallControlPolicyResponse DeleteNatFirewallControlPolicyResponse
     */
    public function deleteNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an access control policy that is created for a NAT firewall.
     *  *
     * @description You can use this operation to delete an outbound access control policy that is created for a NAT firewall.
     *  *
     * @param DeleteNatFirewallControlPolicyRequest $request DeleteNatFirewallControlPolicyRequest
     *
     * @return DeleteNatFirewallControlPolicyResponse DeleteNatFirewallControlPolicyResponse
     */
    public function deleteNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes access control policies that are created for a NAT firewall at a time.
     *  *
     * @param DeleteNatFirewallControlPolicyBatchRequest $request DeleteNatFirewallControlPolicyBatchRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNatFirewallControlPolicyBatchResponse DeleteNatFirewallControlPolicyBatchResponse
     */
    public function deleteNatFirewallControlPolicyBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuidList)) {
            $query['AclUuidList'] = $request->aclUuidList;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNatFirewallControlPolicyBatch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNatFirewallControlPolicyBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes access control policies that are created for a NAT firewall at a time.
     *  *
     * @param DeleteNatFirewallControlPolicyBatchRequest $request DeleteNatFirewallControlPolicyBatchRequest
     *
     * @return DeleteNatFirewallControlPolicyBatchResponse DeleteNatFirewallControlPolicyBatchResponse
     */
    public function deleteNatFirewallControlPolicyBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatFirewallControlPolicyBatchWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a NAT firewall.
     *  *
     * @param DeleteSecurityProxyRequest $request DeleteSecurityProxyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecurityProxyResponse DeleteSecurityProxyResponse
     */
    public function deleteSecurityProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['ProxyId'] = $request->proxyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityProxy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a NAT firewall.
     *  *
     * @param DeleteSecurityProxyRequest $request DeleteSecurityProxyRequest
     *
     * @return DeleteSecurityProxyResponse DeleteSecurityProxyResponse
     */
    public function deleteSecurityProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityProxyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a virtual private cloud (VPC) firewall that is created for a transit router.
     *  *
     * @param DeleteTrFirewallV2Request $request DeleteTrFirewallV2Request
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTrFirewallV2Response DeleteTrFirewallV2Response
     */
    public function deleteTrFirewallV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrFirewallV2',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrFirewallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a virtual private cloud (VPC) firewall that is created for a transit router.
     *  *
     * @param DeleteTrFirewallV2Request $request DeleteTrFirewallV2Request
     *
     * @return DeleteTrFirewallV2Response DeleteTrFirewallV2Response
     */
    public function deleteTrFirewallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrFirewallV2WithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteVpcFirewallCenConfigureRequest $request DeleteVpcFirewallCenConfigureRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcFirewallCenConfigureResponse DeleteVpcFirewallCenConfigureResponse
     */
    public function deleteVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallIdList)) {
            $query['VpcFirewallIdList'] = $request->vpcFirewallIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcFirewallCenConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteVpcFirewallCenConfigureRequest $request DeleteVpcFirewallCenConfigureRequest
     *
     * @return DeleteVpcFirewallCenConfigureResponse DeleteVpcFirewallCenConfigureResponse
     */
    public function deleteVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a virtual private cloud (VPC) firewall that controls traffic between two VPCs. The VPCs are connected by using an Express Connect circuit.
     *  *
     * @description You can call the DeleteVpcFirewallConfigure operation to delete a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteVpcFirewallConfigureRequest $request DeleteVpcFirewallConfigureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcFirewallConfigureResponse DeleteVpcFirewallConfigureResponse
     */
    public function deleteVpcFirewallConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallIdList)) {
            $query['VpcFirewallIdList'] = $request->vpcFirewallIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcFirewallConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a virtual private cloud (VPC) firewall that controls traffic between two VPCs. The VPCs are connected by using an Express Connect circuit.
     *  *
     * @description You can call the DeleteVpcFirewallConfigure operation to delete a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteVpcFirewallConfigureRequest $request DeleteVpcFirewallConfigureRequest
     *
     * @return DeleteVpcFirewallConfigureResponse DeleteVpcFirewallConfigureResponse
     */
    public function deleteVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an access control policy from a specific policy group for a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the DeleteVpcFirewallControlPolicy operation to delete an access control policy from a specific policy group for a VPC firewall. Different access control policies are used for the VPC firewall that is used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewall that is used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteVpcFirewallControlPolicyRequest $request DeleteVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcFirewallControlPolicyResponse DeleteVpcFirewallControlPolicyResponse
     */
    public function deleteVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an access control policy from a specific policy group for a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the DeleteVpcFirewallControlPolicy operation to delete an access control policy from a specific policy group for a VPC firewall. Different access control policies are used for the VPC firewall that is used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewall that is used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteVpcFirewallControlPolicyRequest $request DeleteVpcFirewallControlPolicyRequest
     *
     * @return DeleteVpcFirewallControlPolicyResponse DeleteVpcFirewallControlPolicyResponse
     */
    public function deleteVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on the requests that are blocked by the access control list (ACL) feature.
     *  *
     * @param DescribeACLProtectTrendRequest $request DescribeACLProtectTrendRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeACLProtectTrendResponse DescribeACLProtectTrendResponse
     */
    public function describeACLProtectTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeACLProtectTrend',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeACLProtectTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on the requests that are blocked by the access control list (ACL) feature.
     *  *
     * @param DescribeACLProtectTrendRequest $request DescribeACLProtectTrendRequest
     *
     * @return DescribeACLProtectTrendResponse DescribeACLProtectTrendResponse
     */
    public function describeACLProtectTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeACLProtectTrendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about an address book for an access control policy.
     *  *
     * @description You can call this operation to query the details about an address book for an access control policy.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeAddressBookRequest $request DescribeAddressBookRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAddressBookResponse DescribeAddressBookResponse
     */
    public function describeAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containPort)) {
            $query['ContainPort'] = $request->containPort;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about an address book for an access control policy.
     *  *
     * @description You can call this operation to query the details about an address book for an access control policy.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeAddressBookRequest $request DescribeAddressBookRequest
     *
     * @return DescribeAddressBookResponse DescribeAddressBookResponse
     */
    public function describeAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddressBookWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the assets that are protected by Cloud Firewall.
     *  *
     * @description You can call the DescribeAssetList operation to query the assets that are protected by Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeAssetListRequest $request DescribeAssetListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAssetListResponse DescribeAssetListResponse
     */
    public function describeAssetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->newResourceTag)) {
            $query['NewResourceTag'] = $request->newResourceTag;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->searchItem)) {
            $query['SearchItem'] = $request->searchItem;
        }
        if (!Utils::isUnset($request->sgStatus)) {
            $query['SgStatus'] = $request->sgStatus;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the assets that are protected by Cloud Firewall.
     *  *
     * @description You can call the DescribeAssetList operation to query the assets that are protected by Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeAssetListRequest $request DescribeAssetListRequest
     *
     * @return DescribeAssetListResponse DescribeAssetListResponse
     */
    public function describeAssetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the risk levels of assets.
     *  *
     * @param DescribeAssetRiskListRequest $request DescribeAssetRiskListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAssetRiskListResponse DescribeAssetRiskListResponse
     */
    public function describeAssetRiskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipAddrList)) {
            $query['IpAddrList'] = $request->ipAddrList;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetRiskList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetRiskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the risk levels of assets.
     *  *
     * @param DescribeAssetRiskListRequest $request DescribeAssetRiskListRequest
     *
     * @return DescribeAssetRiskListResponse DescribeAssetRiskListResponse
     */
    public function describeAssetRiskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetRiskListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取资产统计信息
     *  *
     * @param DescribeAssetStatisticRequest $request DescribeAssetStatisticRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAssetStatisticResponse DescribeAssetStatisticResponse
     */
    public function describeAssetStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetStatistic',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资产统计信息
     *  *
     * @param DescribeAssetStatisticRequest $request DescribeAssetStatisticRequest
     *
     * @return DescribeAssetStatisticResponse DescribeAssetStatisticResponse
     */
    public function describeAssetStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the firewall risk level.
     *  *
     * @param DescribeCfwRiskLevelSummaryRequest $request DescribeCfwRiskLevelSummaryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCfwRiskLevelSummaryResponse DescribeCfwRiskLevelSummaryResponse
     */
    public function describeCfwRiskLevelSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCfwRiskLevelSummary',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCfwRiskLevelSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the firewall risk level.
     *  *
     * @param DescribeCfwRiskLevelSummaryRequest $request DescribeCfwRiskLevelSummaryRequest
     *
     * @return DescribeCfwRiskLevelSummaryResponse DescribeCfwRiskLevelSummaryResponse
     */
    public function describeCfwRiskLevelSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCfwRiskLevelSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about all access control policies.
     *  *
     * @description You can call the DescribeControlPolicy operation to query the details about access control policies by page.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeControlPolicyRequest $request DescribeControlPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeControlPolicyResponse DescribeControlPolicyResponse
     */
    public function describeControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about all access control policies.
     *  *
     * @description You can call the DescribeControlPolicy operation to query the details about access control policies by page.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeControlPolicyRequest $request DescribeControlPolicyRequest
     *
     * @return DescribeControlPolicyResponse DescribeControlPolicyResponse
     */
    public function describeControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the default configurations of the intrusion prevention system (IPS).
     *  *
     * @param DescribeDefaultIPSConfigRequest $request DescribeDefaultIPSConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefaultIPSConfigResponse DescribeDefaultIPSConfigResponse
     */
    public function describeDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the default configurations of the intrusion prevention system (IPS).
     *  *
     * @param DescribeDefaultIPSConfigRequest $request DescribeDefaultIPSConfigRequest
     *
     * @return DescribeDefaultIPSConfigResponse DescribeDefaultIPSConfigResponse
     */
    public function describeDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeDomainResolve is deprecated
     *  *
     * @summary Queries Domain Name System (DNS) records.
     *  *
     * @description You can use this operation to query the DNS record of a domain name. This operation can retrieve DNS records only from Alibaba Cloud DNS. Before you can call this operation, make sure that your domain name is hosted on Alibaba Cloud DNS.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * Deprecated
     *
     * @param DescribeDomainResolveRequest $request DescribeDomainResolveRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainResolveResponse DescribeDomainResolveResponse
     */
    public function describeDomainResolveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainResolve',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResolveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeDomainResolve is deprecated
     *  *
     * @summary Queries Domain Name System (DNS) records.
     *  *
     * @description You can use this operation to query the DNS record of a domain name. This operation can retrieve DNS records only from Alibaba Cloud DNS. Before you can call this operation, make sure that your domain name is hosted on Alibaba Cloud DNS.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * Deprecated
     *
     * @param DescribeDomainResolveRequest $request DescribeDomainResolveRequest
     *
     * @return DescribeDomainResolveResponse DescribeDomainResolveResponse
     */
    public function describeDomainResolve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResolveWithOptions($request, $runtime);
    }

    /**
     * @summary Queries file download tasks, including the task information and download URLs.
     *  *
     * @param DescribeDownloadTaskRequest $request DescribeDownloadTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadTaskResponse DescribeDownloadTaskResponse
     */
    public function describeDownloadTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadTask',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries file download tasks, including the task information and download URLs.
     *  *
     * @param DescribeDownloadTaskRequest $request DescribeDownloadTaskRequest
     *
     * @return DescribeDownloadTaskResponse DescribeDownloadTaskResponse
     */
    public function describeDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types of download tasks. The type corresponds to the TaskType fields in the download task-related operations.
     *  *
     * @param DescribeDownloadTaskTypeRequest $request DescribeDownloadTaskTypeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadTaskTypeResponse DescribeDownloadTaskTypeResponse
     */
    public function describeDownloadTaskTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadTaskType',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadTaskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the types of download tasks. The type corresponds to the TaskType fields in the download task-related operations.
     *  *
     * @param DescribeDownloadTaskTypeRequest $request DescribeDownloadTaskTypeRequest
     *
     * @return DescribeDownloadTaskTypeResponse DescribeDownloadTaskTypeResponse
     */
    public function describeDownloadTaskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadTaskTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about members in Cloud Firewall.
     *  *
     * @description You can use this operation to query the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceMembersRequest $request DescribeInstanceMembersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceMembersResponse DescribeInstanceMembersResponse
     */
    public function describeInstanceMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->memberDesc)) {
            $query['MemberDesc'] = $request->memberDesc;
        }
        if (!Utils::isUnset($request->memberDisplayName)) {
            $query['MemberDisplayName'] = $request->memberDisplayName;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceMembers',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about members in Cloud Firewall.
     *  *
     * @description You can use this operation to query the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceMembersRequest $request DescribeInstanceMembersRequest
     *
     * @return DescribeInstanceMembersResponse DescribeInstanceMembersResponse
     */
    public function describeInstanceMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMembersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the risk levels of instances.
     *  *
     * @param DescribeInstanceRiskLevelsRequest $request DescribeInstanceRiskLevelsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceRiskLevelsResponse DescribeInstanceRiskLevelsResponse
     */
    public function describeInstanceRiskLevelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceRiskLevels',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceRiskLevelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the risk levels of instances.
     *  *
     * @param DescribeInstanceRiskLevelsRequest $request DescribeInstanceRiskLevelsRequest
     *
     * @return DescribeInstanceRiskLevelsResponse DescribeInstanceRiskLevelsResponse
     */
    public function describeInstanceRiskLevels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRiskLevelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP addresses that are open to the Internet.
     *  *
     * @param DescribeInternetOpenIpRequest $request DescribeInternetOpenIpRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInternetOpenIpResponse DescribeInternetOpenIpResponse
     */
    public function describeInternetOpenIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetsInstanceId)) {
            $query['AssetsInstanceId'] = $request->assetsInstanceId;
        }
        if (!Utils::isUnset($request->assetsInstanceName)) {
            $query['AssetsInstanceName'] = $request->assetsInstanceName;
        }
        if (!Utils::isUnset($request->assetsType)) {
            $query['AssetsType'] = $request->assetsType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->publicIp)) {
            $query['PublicIp'] = $request->publicIp;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInternetOpenIp',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInternetOpenIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IP addresses that are open to the Internet.
     *  *
     * @param DescribeInternetOpenIpRequest $request DescribeInternetOpenIpRequest
     *
     * @return DescribeInternetOpenIpResponse DescribeInternetOpenIpResponse
     */
    public function describeInternetOpenIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetOpenIpWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the trends of Internet traffic.
     *  *
     * @param DescribeInternetTrafficTrendRequest $request DescribeInternetTrafficTrendRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInternetTrafficTrendResponse DescribeInternetTrafficTrendResponse
     */
    public function describeInternetTrafficTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            $query['SourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->srcPrivateIP)) {
            $query['SrcPrivateIP'] = $request->srcPrivateIP;
        }
        if (!Utils::isUnset($request->srcPublicIP)) {
            $query['SrcPublicIP'] = $request->srcPublicIP;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->trafficType)) {
            $query['TrafficType'] = $request->trafficType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInternetTrafficTrend',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInternetTrafficTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trends of Internet traffic.
     *  *
     * @param DescribeInternetTrafficTrendRequest $request DescribeInternetTrafficTrendRequest
     *
     * @return DescribeInternetTrafficTrendResponse DescribeInternetTrafficTrendResponse
     */
    public function describeInternetTrafficTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetTrafficTrendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the breach awareness events of a firewall.
     *  *
     * @param DescribeInvadeEventListRequest $request DescribeInvadeEventListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInvadeEventListResponse DescribeInvadeEventListResponse
     */
    public function describeInvadeEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetsIP)) {
            $query['AssetsIP'] = $request->assetsIP;
        }
        if (!Utils::isUnset($request->assetsInstanceId)) {
            $query['AssetsInstanceId'] = $request->assetsInstanceId;
        }
        if (!Utils::isUnset($request->assetsInstanceName)) {
            $query['AssetsInstanceName'] = $request->assetsInstanceName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventKey)) {
            $query['EventKey'] = $request->eventKey;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventUuid)) {
            $query['EventUuid'] = $request->eventUuid;
        }
        if (!Utils::isUnset($request->isIgnore)) {
            $query['IsIgnore'] = $request->isIgnore;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processStatusList)) {
            $query['ProcessStatusList'] = $request->processStatusList;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInvadeEventList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvadeEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the breach awareness events of a firewall.
     *  *
     * @param DescribeInvadeEventListRequest $request DescribeInvadeEventListRequest
     *
     * @return DescribeInvadeEventListResponse DescribeInvadeEventListResponse
     */
    public function describeInvadeEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvadeEventListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the pagination status of NAT firewalls.
     *  *
     * @param DescribeNatAclPageStatusRequest $request DescribeNatAclPageStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNatAclPageStatusResponse DescribeNatAclPageStatusResponse
     */
    public function describeNatAclPageStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNatAclPageStatus',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNatAclPageStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the pagination status of NAT firewalls.
     *  *
     * @param DescribeNatAclPageStatusRequest $request DescribeNatAclPageStatusRequest
     *
     * @return DescribeNatAclPageStatusResponse DescribeNatAclPageStatusResponse
     */
    public function describeNatAclPageStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatAclPageStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all access control policies that are created for NAT firewalls.
     *  *
     * @description You can use this operation to query the information about all access control policies that are created for NAT firewalls by page.
     *  *
     * @param DescribeNatFirewallControlPolicyRequest $request DescribeNatFirewallControlPolicyRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNatFirewallControlPolicyResponse DescribeNatFirewallControlPolicyResponse
     */
    public function describeNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all access control policies that are created for NAT firewalls.
     *  *
     * @description You can use this operation to query the information about all access control policies that are created for NAT firewalls by page.
     *  *
     * @param DescribeNatFirewallControlPolicyRequest $request DescribeNatFirewallControlPolicyRequest
     *
     * @return DescribeNatFirewallControlPolicyResponse DescribeNatFirewallControlPolicyResponse
     */
    public function describeNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries details of NAT firewalls.
     *  *
     * @param DescribeNatFirewallListRequest $request DescribeNatFirewallListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNatFirewallListResponse DescribeNatFirewallListResponse
     */
    public function describeNatFirewallListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['ProxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->proxyName)) {
            $query['ProxyName'] = $request->proxyName;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNatFirewallList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNatFirewallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries details of NAT firewalls.
     *  *
     * @param DescribeNatFirewallListRequest $request DescribeNatFirewallListRequest
     *
     * @return DescribeNatFirewallListResponse DescribeNatFirewallListResponse
     */
    public function describeNatFirewallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the priority range of access control policies that are created for a NAT firewall.
     *  *
     * @description You can use this operation to query the priority range of access control policies that are created for a NAT firewall.
     *  *
     * @param DescribeNatFirewallPolicyPriorUsedRequest $request DescribeNatFirewallPolicyPriorUsedRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNatFirewallPolicyPriorUsedResponse DescribeNatFirewallPolicyPriorUsedResponse
     */
    public function describeNatFirewallPolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNatFirewallPolicyPriorUsed',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNatFirewallPolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the priority range of access control policies that are created for a NAT firewall.
     *  *
     * @description You can use this operation to query the priority range of access control policies that are created for a NAT firewall.
     *  *
     * @param DescribeNatFirewallPolicyPriorUsedRequest $request DescribeNatFirewallPolicyPriorUsedRequest
     *
     * @return DescribeNatFirewallPolicyPriorUsedResponse DescribeNatFirewallPolicyPriorUsedResponse
     */
    public function describeNatFirewallPolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallPolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the destination IP addresses in outbound connections.
     *  *
     * @param DescribeOutgoingDestinationIPRequest $request DescribeOutgoingDestinationIPRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOutgoingDestinationIPResponse DescribeOutgoingDestinationIPResponse
     */
    public function describeOutgoingDestinationIPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dstIP)) {
            $query['DstIP'] = $request->dstIP;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->privateIP)) {
            $query['PrivateIP'] = $request->privateIP;
        }
        if (!Utils::isUnset($request->publicIP)) {
            $query['PublicIP'] = $request->publicIP;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tagIdNew)) {
            $query['TagIdNew'] = $request->tagIdNew;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOutgoingDestinationIP',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOutgoingDestinationIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the destination IP addresses in outbound connections.
     *  *
     * @param DescribeOutgoingDestinationIPRequest $request DescribeOutgoingDestinationIPRequest
     *
     * @return DescribeOutgoingDestinationIPResponse DescribeOutgoingDestinationIPResponse
     */
    public function describeOutgoingDestinationIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutgoingDestinationIPWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the domain names in outbound connections.
     *  *
     * @param DescribeOutgoingDomainRequest $request DescribeOutgoingDomainRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOutgoingDomainResponse DescribeOutgoingDomainResponse
     */
    public function describeOutgoingDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->publicIP)) {
            $query['PublicIP'] = $request->publicIP;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tagIdNew)) {
            $query['TagIdNew'] = $request->tagIdNew;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOutgoingDomain',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOutgoingDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the domain names in outbound connections.
     *  *
     * @param DescribeOutgoingDomainRequest $request DescribeOutgoingDomainRequest
     *
     * @return DescribeOutgoingDomainResponse DescribeOutgoingDomainResponse
     */
    public function describeOutgoingDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutgoingDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the strict mode is enabled for an access control policy.
     *  *
     * @description You can call the DescribePolicyAdvancedConfig operation to query whether the strict mode is enabled for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePolicyAdvancedConfigRequest $request DescribePolicyAdvancedConfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyAdvancedConfigResponse DescribePolicyAdvancedConfigResponse
     */
    public function describePolicyAdvancedConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyAdvancedConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the strict mode is enabled for an access control policy.
     *  *
     * @description You can call the DescribePolicyAdvancedConfig operation to query whether the strict mode is enabled for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePolicyAdvancedConfigRequest $request DescribePolicyAdvancedConfigRequest
     *
     * @return DescribePolicyAdvancedConfigResponse DescribePolicyAdvancedConfigResponse
     */
    public function describePolicyAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the priority range of access control policies.
     *  *
     * @description You can call this operation to query the priority range of the access control policies that match specific query conditions.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePolicyPriorUsedRequest $request DescribePolicyPriorUsedRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyPriorUsedResponse DescribePolicyPriorUsedResponse
     */
    public function describePolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyPriorUsed',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the priority range of access control policies.
     *  *
     * @description You can call this operation to query the priority range of the access control policies that match specific query conditions.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePolicyPriorUsedRequest $request DescribePolicyPriorUsedRequest
     *
     * @return DescribePolicyPriorUsedResponse DescribePolicyPriorUsedResponse
     */
    public function describePolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of traffic billed based on the pay-as-you-go billing method.
     *  *
     * @description If you use Cloud Firewall that uses the pay-as-you-go billing method, you can call this operation to query traffic details accurate to the granularity of specific resource instances. If you use Cloud Firewall that uses the subscription billing method, you can call this operation to query the overall traffic details.
     *  *
     * @param DescribePostpayTrafficDetailRequest $request DescribePostpayTrafficDetailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePostpayTrafficDetailResponse DescribePostpayTrafficDetailResponse
     */
    public function describePostpayTrafficDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->searchItem)) {
            $query['SearchItem'] = $request->searchItem;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->trafficType)) {
            $query['TrafficType'] = $request->trafficType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePostpayTrafficDetail',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePostpayTrafficDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of traffic billed based on the pay-as-you-go billing method.
     *  *
     * @description If you use Cloud Firewall that uses the pay-as-you-go billing method, you can call this operation to query traffic details accurate to the granularity of specific resource instances. If you use Cloud Firewall that uses the subscription billing method, you can call this operation to query the overall traffic details.
     *  *
     * @param DescribePostpayTrafficDetailRequest $request DescribePostpayTrafficDetailRequest
     *
     * @return DescribePostpayTrafficDetailResponse DescribePostpayTrafficDetailResponse
     */
    public function describePostpayTrafficDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePostpayTrafficDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the total volume of traffic that is billed based on the pay-as-you-go billing method, including all firewalls within the current account.
     *  *
     * @description You can call this operation to query statistics of the current Cloud Firewall from the date of purchase.
     *  *
     * @param DescribePostpayTrafficTotalRequest $request DescribePostpayTrafficTotalRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePostpayTrafficTotalResponse DescribePostpayTrafficTotalResponse
     */
    public function describePostpayTrafficTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePostpayTrafficTotal',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePostpayTrafficTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the total volume of traffic that is billed based on the pay-as-you-go billing method, including all firewalls within the current account.
     *  *
     * @description You can call this operation to query statistics of the current Cloud Firewall from the date of purchase.
     *  *
     * @param DescribePostpayTrafficTotalRequest $request DescribePostpayTrafficTotalRequest
     *
     * @return DescribePostpayTrafficTotalResponse DescribePostpayTrafficTotalResponse
     */
    public function describePostpayTrafficTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePostpayTrafficTotalWithOptions($request, $runtime);
    }

    /**
     * @summary Queries prefix lists.
     *  *
     * @param DescribePrefixListsRequest $request DescribePrefixListsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePrefixListsResponse DescribePrefixListsResponse
     */
    public function describePrefixListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrefixLists',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrefixListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries prefix lists.
     *  *
     * @param DescribePrefixListsRequest $request DescribePrefixListsRequest
     *
     * @return DescribePrefixListsResponse DescribePrefixListsResponse
     */
    public function describePrefixLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrefixListsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of intrusion events.
     *  *
     * @description You can call the DescribeRiskEventGroup operation to query and download the details of intrusion events. We recommend that you query the details of 5 to 10 intrusion events at a time. If you do not need to query the geographical information about IP addresses, you can set the NoLocation parameter to true to prevent query timeout.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeRiskEventGroupRequest $request DescribeRiskEventGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskEventGroupResponse DescribeRiskEventGroupResponse
     */
    public function describeRiskEventGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attackApp)) {
            $query['AttackApp'] = $request->attackApp;
        }
        if (!Utils::isUnset($request->attackType)) {
            $query['AttackType'] = $request->attackType;
        }
        if (!Utils::isUnset($request->buyVersion)) {
            $query['BuyVersion'] = $request->buyVersion;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->dstIP)) {
            $query['DstIP'] = $request->dstIP;
        }
        if (!Utils::isUnset($request->dstNetworkInstanceId)) {
            $query['DstNetworkInstanceId'] = $request->dstNetworkInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->firewallType)) {
            $query['FirewallType'] = $request->firewallType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->noLocation)) {
            $query['NoLocation'] = $request->noLocation;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleResult)) {
            $query['RuleResult'] = $request->ruleResult;
        }
        if (!Utils::isUnset($request->ruleSource)) {
            $query['RuleSource'] = $request->ruleSource;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->srcIP)) {
            $query['SrcIP'] = $request->srcIP;
        }
        if (!Utils::isUnset($request->srcNetworkInstanceId)) {
            $query['SrcNetworkInstanceId'] = $request->srcNetworkInstanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->vulLevel)) {
            $query['VulLevel'] = $request->vulLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskEventGroup',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskEventGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of intrusion events.
     *  *
     * @description You can call the DescribeRiskEventGroup operation to query and download the details of intrusion events. We recommend that you query the details of 5 to 10 intrusion events at a time. If you do not need to query the geographical information about IP addresses, you can set the NoLocation parameter to true to prevent query timeout.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeRiskEventGroupRequest $request DescribeRiskEventGroupRequest
     *
     * @return DescribeRiskEventGroupResponse DescribeRiskEventGroupResponse
     */
    public function describeRiskEventGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attack payloads of intrusion events.
     *  *
     * @param DescribeRiskEventPayloadRequest $request DescribeRiskEventPayloadRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskEventPayloadResponse DescribeRiskEventPayloadResponse
     */
    public function describeRiskEventPayloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dstIP)) {
            $query['DstIP'] = $request->dstIP;
        }
        if (!Utils::isUnset($request->dstVpcId)) {
            $query['DstVpcId'] = $request->dstVpcId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->firewallType)) {
            $query['FirewallType'] = $request->firewallType;
        }
        if (!Utils::isUnset($request->publicIP)) {
            $query['PublicIP'] = $request->publicIP;
        }
        if (!Utils::isUnset($request->srcIP)) {
            $query['SrcIP'] = $request->srcIP;
        }
        if (!Utils::isUnset($request->srcVpcId)) {
            $query['SrcVpcId'] = $request->srcVpcId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->UUID)) {
            $query['UUID'] = $request->UUID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskEventPayload',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskEventPayloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attack payloads of intrusion events.
     *  *
     * @param DescribeRiskEventPayloadRequest $request DescribeRiskEventPayloadRequest
     *
     * @return DescribeRiskEventPayloadResponse DescribeRiskEventPayloadResponse
     */
    public function describeRiskEventPayload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventPayloadWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about signature library versions.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSignatureLibVersionResponse DescribeSignatureLibVersionResponse
     */
    public function describeSignatureLibVersionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeSignatureLibVersion',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSignatureLibVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about signature library versions.
     *  *
     * @return DescribeSignatureLibVersionResponse DescribeSignatureLibVersionResponse
     */
    public function describeSignatureLibVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignatureLibVersionWithOptions($runtime);
    }

    /**
     * @summary Queries information about the transit routers that are associated with a virtual private cloud (VPC) firewall created for a transit router.
     *  *
     * @param DescribeTrFirewallPolicyBackUpAssociationListRequest $tmpReq  DescribeTrFirewallPolicyBackUpAssociationListRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListResponse DescribeTrFirewallPolicyBackUpAssociationListResponse
     */
    public function describeTrFirewallPolicyBackUpAssociationListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeTrFirewallPolicyBackUpAssociationListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->candidateList)) {
            $request->candidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->candidateList, 'CandidateList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->candidateListShrink)) {
            $query['CandidateList'] = $request->candidateListShrink;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallPolicyBackUpAssociationList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallPolicyBackUpAssociationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about the transit routers that are associated with a virtual private cloud (VPC) firewall created for a transit router.
     *  *
     * @param DescribeTrFirewallPolicyBackUpAssociationListRequest $request DescribeTrFirewallPolicyBackUpAssociationListRequest
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListResponse DescribeTrFirewallPolicyBackUpAssociationListResponse
     */
    public function describeTrFirewallPolicyBackUpAssociationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallPolicyBackUpAssociationListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the routing policies of a virtual private cloud (VPC) firewall that is created for a transit router.
     *  *
     * @param DescribeTrFirewallV2RoutePolicyListRequest $request DescribeTrFirewallV2RoutePolicyListRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrFirewallV2RoutePolicyListResponse DescribeTrFirewallV2RoutePolicyListResponse
     */
    public function describeTrFirewallV2RoutePolicyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallV2RoutePolicyList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallV2RoutePolicyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the routing policies of a virtual private cloud (VPC) firewall that is created for a transit router.
     *  *
     * @param DescribeTrFirewallV2RoutePolicyListRequest $request DescribeTrFirewallV2RoutePolicyListRequest
     *
     * @return DescribeTrFirewallV2RoutePolicyListResponse DescribeTrFirewallV2RoutePolicyListResponse
     */
    public function describeTrFirewallV2RoutePolicyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallV2RoutePolicyListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the virtual private cloud (VPC) firewalls that are created for transit routers.
     *  *
     * @param DescribeTrFirewallsV2DetailRequest $request DescribeTrFirewallsV2DetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrFirewallsV2DetailResponse DescribeTrFirewallsV2DetailResponse
     */
    public function describeTrFirewallsV2DetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallsV2Detail',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallsV2DetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the virtual private cloud (VPC) firewalls that are created for transit routers.
     *  *
     * @param DescribeTrFirewallsV2DetailRequest $request DescribeTrFirewallsV2DetailRequest
     *
     * @return DescribeTrFirewallsV2DetailResponse DescribeTrFirewallsV2DetailResponse
     */
    public function describeTrFirewallsV2Detail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2DetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the virtual private cloud (VPC) firewalls that are created for transit routers.
     *  *
     * @param DescribeTrFirewallsV2ListRequest $request DescribeTrFirewallsV2ListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrFirewallsV2ListResponse DescribeTrFirewallsV2ListResponse
     */
    public function describeTrFirewallsV2ListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->firewallName)) {
            $query['FirewallName'] = $request->firewallName;
        }
        if (!Utils::isUnset($request->firewallSwitchStatus)) {
            $query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->routeMode)) {
            $query['RouteMode'] = $request->routeMode;
        }
        if (!Utils::isUnset($request->transitRouterId)) {
            $query['TransitRouterId'] = $request->transitRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallsV2List',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallsV2ListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the virtual private cloud (VPC) firewalls that are created for transit routers.
     *  *
     * @param DescribeTrFirewallsV2ListRequest $request DescribeTrFirewallsV2ListRequest
     *
     * @return DescribeTrFirewallsV2ListResponse DescribeTrFirewallsV2ListResponse
     */
    public function describeTrFirewallsV2List($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2ListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the route tables of the VPC firewalls that are created for transit routers.
     *  *
     * @param DescribeTrFirewallsV2RouteListRequest $request DescribeTrFirewallsV2RouteListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrFirewallsV2RouteListResponse DescribeTrFirewallsV2RouteListResponse
     */
    public function describeTrFirewallsV2RouteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrFirewallsV2RouteList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrFirewallsV2RouteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the route tables of the VPC firewalls that are created for transit routers.
     *  *
     * @param DescribeTrFirewallsV2RouteListRequest $request DescribeTrFirewallsV2RouteListRequest
     *
     * @return DescribeTrFirewallsV2RouteListResponse DescribeTrFirewallsV2RouteListResponse
     */
    public function describeTrFirewallsV2RouteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2RouteListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the traffic of a specified asset that belongs to your Alibaba Cloud account.
     *  *
     * @param DescribeUserAssetIPTrafficInfoRequest $request DescribeUserAssetIPTrafficInfoRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserAssetIPTrafficInfoResponse DescribeUserAssetIPTrafficInfoResponse
     */
    public function describeUserAssetIPTrafficInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserAssetIPTrafficInfo',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserAssetIPTrafficInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the traffic of a specified asset that belongs to your Alibaba Cloud account.
     *  *
     * @param DescribeUserAssetIPTrafficInfoRequest $request DescribeUserAssetIPTrafficInfoRequest
     *
     * @return DescribeUserAssetIPTrafficInfoResponse DescribeUserAssetIPTrafficInfoResponse
     */
    public function describeUserAssetIPTrafficInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAssetIPTrafficInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户版本信息
     *  *
     * @param DescribeUserBuyVersionRequest $request DescribeUserBuyVersionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserBuyVersionResponse DescribeUserBuyVersionResponse
     */
    public function describeUserBuyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserBuyVersion',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBuyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户版本信息
     *  *
     * @param DescribeUserBuyVersionRequest $request DescribeUserBuyVersionRequest
     *
     * @return DescribeUserBuyVersionResponse DescribeUserBuyVersionResponse
     */
    public function describeUserBuyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBuyVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户IPS白名单
     *  *
     * @param DescribeUserIPSWhitelistRequest $request DescribeUserIPSWhitelistRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserIPSWhitelistResponse DescribeUserIPSWhitelistResponse
     */
    public function describeUserIPSWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserIPSWhitelist',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户IPS白名单
     *  *
     * @param DescribeUserIPSWhitelistRequest $request DescribeUserIPSWhitelistRequest
     *
     * @return DescribeUserIPSWhitelistResponse DescribeUserIPSWhitelistResponse
     */
    public function describeUserIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all policy groups of access control policies that are created for virtual private cloud (VPC) firewalls.
     *  *
     * @description You can call the DescribeVpcFirewallAclGroupList operation to query the information about all policy groups of access control policies that are created for VPC firewalls.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallAclGroupListRequest $request DescribeVpcFirewallAclGroupListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallAclGroupListResponse DescribeVpcFirewallAclGroupListResponse
     */
    public function describeVpcFirewallAclGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallConfigureStatus)) {
            $query['FirewallConfigureStatus'] = $request->firewallConfigureStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallAclGroupList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallAclGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all policy groups of access control policies that are created for virtual private cloud (VPC) firewalls.
     *  *
     * @description You can call the DescribeVpcFirewallAclGroupList operation to query the information about all policy groups of access control policies that are created for VPC firewalls.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallAclGroupListRequest $request DescribeVpcFirewallAclGroupListRequest
     *
     * @return DescribeVpcFirewallAclGroupListResponse DescribeVpcFirewallAclGroupListResponse
     */
    public function describeVpcFirewallAclGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallAclGroupListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall protects access traffic between a VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the DescribeVpcFirewallCenDetail operation to query the details about a VPC firewall. The VPC firewall protects access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallCenDetailRequest $request DescribeVpcFirewallCenDetailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallCenDetailResponse DescribeVpcFirewallCenDetailResponse
     */
    public function describeVpcFirewallCenDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->networkInstanceId)) {
            $query['NetworkInstanceId'] = $request->networkInstanceId;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallCenDetail',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallCenDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall protects access traffic between a VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the DescribeVpcFirewallCenDetail operation to query the details about a VPC firewall. The VPC firewall protects access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallCenDetailRequest $request DescribeVpcFirewallCenDetailRequest
     *
     * @return DescribeVpcFirewallCenDetailResponse DescribeVpcFirewallCenDetailResponse
     */
    public function describeVpcFirewallCenDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallCenDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries virtual private cloud (VPC) firewalls. Each VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the DescribeVpcFirewallCenList operation to query VPC firewalls. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallCenListRequest $request DescribeVpcFirewallCenListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallCenListResponse DescribeVpcFirewallCenListResponse
     */
    public function describeVpcFirewallCenListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallSwitchStatus)) {
            $query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->networkInstanceId)) {
            $query['NetworkInstanceId'] = $request->networkInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->routeMode)) {
            $query['RouteMode'] = $request->routeMode;
        }
        if (!Utils::isUnset($request->transitRouterType)) {
            $query['TransitRouterType'] = $request->transitRouterType;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallCenList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallCenListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries virtual private cloud (VPC) firewalls. Each VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the DescribeVpcFirewallCenList operation to query VPC firewalls. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallCenListRequest $request DescribeVpcFirewallCenListRequest
     *
     * @return DescribeVpcFirewallCenListResponse DescribeVpcFirewallCenListResponse
     */
    public function describeVpcFirewallCenList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallCenListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the access control policies for a specified virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the DescribeVpcFirewallControlPolicy operation to query the information about all access control policies that are created for a specified VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallControlPolicyRequest $request DescribeVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallControlPolicyResponse DescribeVpcFirewallControlPolicyResponse
     */
    public function describeVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the access control policies for a specified virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the DescribeVpcFirewallControlPolicy operation to query the information about all access control policies that are created for a specified VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallControlPolicyRequest $request DescribeVpcFirewallControlPolicyRequest
     *
     * @return DescribeVpcFirewallControlPolicyResponse DescribeVpcFirewallControlPolicyResponse
     */
    public function describeVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the DescribeVpcFirewallDefaultIPSConfig operation to query the intrusion prevention configurations of a VPC firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallDefaultIPSConfigRequest $request DescribeVpcFirewallDefaultIPSConfigRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponse DescribeVpcFirewallDefaultIPSConfigResponse
     */
    public function describeVpcFirewallDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call the DescribeVpcFirewallDefaultIPSConfig operation to query the intrusion prevention configurations of a VPC firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallDefaultIPSConfigRequest $request DescribeVpcFirewallDefaultIPSConfigRequest
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponse DescribeVpcFirewallDefaultIPSConfigResponse
     */
    public function describeVpcFirewallDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the DescribeVpcFirewallDetail operation to query the details about a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://www.alibabacloud.com/help/en/cloud-firewall/latest/createvpcfirewallconfigure) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallDetailRequest $request DescribeVpcFirewallDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallDetailResponse DescribeVpcFirewallDetailResponse
     */
    public function describeVpcFirewallDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localVpcId)) {
            $query['LocalVpcId'] = $request->localVpcId;
        }
        if (!Utils::isUnset($request->peerVpcId)) {
            $query['PeerVpcId'] = $request->peerVpcId;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallDetail',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the DescribeVpcFirewallDetail operation to query the details about a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://www.alibabacloud.com/help/en/cloud-firewall/latest/createvpcfirewallconfigure) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallDetailRequest $request DescribeVpcFirewallDetailRequest
     *
     * @return DescribeVpcFirewallDetailResponse DescribeVpcFirewallDetailResponse
     */
    public function describeVpcFirewallDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IPS whitelist of a virtual private cloud (VPC) firewall.
     *  *
     * @param DescribeVpcFirewallIPSWhitelistRequest $request DescribeVpcFirewallIPSWhitelistRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallIPSWhitelistResponse DescribeVpcFirewallIPSWhitelistResponse
     */
    public function describeVpcFirewallIPSWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallIPSWhitelist',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IPS whitelist of a virtual private cloud (VPC) firewall.
     *  *
     * @param DescribeVpcFirewallIPSWhitelistRequest $request DescribeVpcFirewallIPSWhitelistRequest
     *
     * @return DescribeVpcFirewallIPSWhitelistResponse DescribeVpcFirewallIPSWhitelistResponse
     */
    public function describeVpcFirewallIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about virtual private cloud (VPC) firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the DescribeVpcFirewallList operation to query the details about VPC firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallListRequest $request DescribeVpcFirewallListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallListResponse DescribeVpcFirewallListResponse
     */
    public function describeVpcFirewallListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectSubType)) {
            $query['ConnectSubType'] = $request->connectSubType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->firewallSwitchStatus)) {
            $query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->peerUid)) {
            $query['PeerUid'] = $request->peerUid;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about virtual private cloud (VPC) firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the DescribeVpcFirewallList operation to query the details about VPC firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallListRequest $request DescribeVpcFirewallListRequest
     *
     * @return DescribeVpcFirewallListResponse DescribeVpcFirewallListResponse
     */
    public function describeVpcFirewallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the priority range of access control policies that are created for a virtual private cloud (VPC) firewall in a specific policy group.
     *  *
     * @description You can call this operation to query the priority range of access control policies that are created for a VPC firewall in a specific policy group.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request DescribeVpcFirewallPolicyPriorUsedRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse DescribeVpcFirewallPolicyPriorUsedResponse
     */
    public function describeVpcFirewallPolicyPriorUsedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcFirewallPolicyPriorUsed',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcFirewallPolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the priority range of access control policies that are created for a virtual private cloud (VPC) firewall in a specific policy group.
     *  *
     * @description You can call this operation to query the priority range of access control policies that are created for a VPC firewall in a specific policy group.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request DescribeVpcFirewallPolicyPriorUsedRequest
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse DescribeVpcFirewallPolicyPriorUsedResponse
     */
    public function describeVpcFirewallPolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallPolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * @summary Queries virtual private clouds (VPCs).
     *  *
     * @param DescribeVpcListLiteRequest $request DescribeVpcListLiteRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcListLiteResponse DescribeVpcListLiteResponse
     */
    public function describeVpcListLiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcName)) {
            $query['VpcName'] = $request->vpcName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcListLite',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcListLiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries virtual private clouds (VPCs).
     *  *
     * @param DescribeVpcListLiteRequest $request DescribeVpcListLiteRequest
     *
     * @return DescribeVpcListLiteResponse DescribeVpcListLiteResponse
     */
    public function describeVpcListLite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcListLiteWithOptions($request, $runtime);
    }

    /**
     * @summary Queries virtual private cloud (VPC) zones.
     *  *
     * @param DescribeVpcZoneRequest $request DescribeVpcZoneRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcZoneResponse DescribeVpcZoneResponse
     */
    public function describeVpcZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environment)) {
            $query['Environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcZone',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries virtual private cloud (VPC) zones.
     *  *
     * @param DescribeVpcZoneRequest $request DescribeVpcZoneRequest
     *
     * @return DescribeVpcZoneResponse DescribeVpcZoneResponse
     */
    public function describeVpcZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcZoneWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the vulnerabilities that are supported by Cloud Firewall.
     *  *
     * @param DescribeVulnerabilityProtectedListRequest $request DescribeVulnerabilityProtectedListRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVulnerabilityProtectedListResponse DescribeVulnerabilityProtectedListResponse
     */
    public function describeVulnerabilityProtectedListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attackType)) {
            $query['AttackType'] = $request->attackType;
        }
        if (!Utils::isUnset($request->buyVersion)) {
            $query['BuyVersion'] = $request->buyVersion;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        if (!Utils::isUnset($request->vulnCveName)) {
            $query['VulnCveName'] = $request->vulnCveName;
        }
        if (!Utils::isUnset($request->vulnLevel)) {
            $query['VulnLevel'] = $request->vulnLevel;
        }
        if (!Utils::isUnset($request->vulnResource)) {
            $query['VulnResource'] = $request->vulnResource;
        }
        if (!Utils::isUnset($request->vulnStatus)) {
            $query['VulnStatus'] = $request->vulnStatus;
        }
        if (!Utils::isUnset($request->vulnType)) {
            $query['VulnType'] = $request->vulnType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulnerabilityProtectedList',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulnerabilityProtectedListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the vulnerabilities that are supported by Cloud Firewall.
     *  *
     * @param DescribeVulnerabilityProtectedListRequest $request DescribeVulnerabilityProtectedListRequest
     *
     * @return DescribeVulnerabilityProtectedListResponse DescribeVulnerabilityProtectedListResponse
     */
    public function describeVulnerabilityProtectedList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulnerabilityProtectedListWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the address book that is specified in an access control policy.
     *  *
     * @description You can call the ModifyAddressBook operation to modify the address book that is configured for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyAddressBookRequest $request ModifyAddressBookRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAddressBookResponse ModifyAddressBookResponse
     */
    public function modifyAddressBookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressList)) {
            $query['AddressList'] = $request->addressList;
        }
        if (!Utils::isUnset($request->autoAddTagEcs)) {
            $query['AutoAddTagEcs'] = $request->autoAddTagEcs;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->tagRelation)) {
            $query['TagRelation'] = $request->tagRelation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAddressBook',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the address book that is specified in an access control policy.
     *  *
     * @description You can call the ModifyAddressBook operation to modify the address book that is configured for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyAddressBookRequest $request ModifyAddressBookRequest
     *
     * @return ModifyAddressBookResponse ModifyAddressBookResponse
     */
    public function modifyAddressBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAddressBookWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an access control policy.
     *  *
     * @description You can call this operation to modify the configurations of an access control policy. The policy allows Cloud Firewall to allow, deny, or monitor the traffic that passes through Cloud Firewall.
     * ## [](#qps)Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyControlPolicyRequest $request ModifyControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyControlPolicyResponse ModifyControlPolicyResponse
     */
    public function modifyControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an access control policy.
     *  *
     * @description You can call this operation to modify the configurations of an access control policy. The policy allows Cloud Firewall to allow, deny, or monitor the traffic that passes through Cloud Firewall.
     * ## [](#qps)Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyControlPolicyRequest $request ModifyControlPolicyRequest
     *
     * @return ModifyControlPolicyResponse ModifyControlPolicyResponse
     */
    public function modifyControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the priority of an IPv4 access control policy for the Internet firewall. An IPv4 access control policy refers to a policy whose source IP address and destination IP address are IPv4 addresses.
     *  *
     * @description You can use this operation to modify the priority of an IPv4 access control policy for the Internet firewall. No API operations are provided for you to modify the priority of an IPv6 access control policy for the Internet firewall.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyControlPolicyPositionRequest $request ModifyControlPolicyPositionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyControlPolicyPositionResponse ModifyControlPolicyPositionResponse
     */
    public function modifyControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->oldOrder)) {
            $query['OldOrder'] = $request->oldOrder;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyControlPolicyPosition',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the priority of an IPv4 access control policy for the Internet firewall. An IPv4 access control policy refers to a policy whose source IP address and destination IP address are IPv4 addresses.
     *  *
     * @description You can use this operation to modify the priority of an IPv4 access control policy for the Internet firewall. No API operations are provided for you to modify the priority of an IPv6 access control policy for the Internet firewall.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyControlPolicyPositionRequest $request ModifyControlPolicyPositionRequest
     *
     * @return ModifyControlPolicyPositionResponse ModifyControlPolicyPositionResponse
     */
    public function modifyControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the default configuration of the intrusion prevention system (IPS).
     *  *
     * @param ModifyDefaultIPSConfigRequest $request ModifyDefaultIPSConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefaultIPSConfigResponse ModifyDefaultIPSConfigResponse
     */
    public function modifyDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->basicRules)) {
            $query['BasicRules'] = $request->basicRules;
        }
        if (!Utils::isUnset($request->ctiRules)) {
            $query['CtiRules'] = $request->ctiRules;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->patchRules)) {
            $query['PatchRules'] = $request->patchRules;
        }
        if (!Utils::isUnset($request->ruleClass)) {
            $query['RuleClass'] = $request->ruleClass;
        }
        if (!Utils::isUnset($request->runMode)) {
            $query['RunMode'] = $request->runMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the default configuration of the intrusion prevention system (IPS).
     *  *
     * @param ModifyDefaultIPSConfigRequest $request ModifyDefaultIPSConfigRequest
     *
     * @return ModifyDefaultIPSConfigResponse ModifyDefaultIPSConfigResponse
     */
    public function modifyDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the status of a routing policy.
     *  *
     * @param ModifyFirewallV2RoutePolicySwitchRequest $request ModifyFirewallV2RoutePolicySwitchRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFirewallV2RoutePolicySwitchResponse ModifyFirewallV2RoutePolicySwitchResponse
     */
    public function modifyFirewallV2RoutePolicySwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->shouldRecover)) {
            $query['ShouldRecover'] = $request->shouldRecover;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicySwitchStatus)) {
            $query['TrFirewallRoutePolicySwitchStatus'] = $request->trFirewallRoutePolicySwitchStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFirewallV2RoutePolicySwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFirewallV2RoutePolicySwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the status of a routing policy.
     *  *
     * @param ModifyFirewallV2RoutePolicySwitchRequest $request ModifyFirewallV2RoutePolicySwitchRequest
     *
     * @return ModifyFirewallV2RoutePolicySwitchResponse ModifyFirewallV2RoutePolicySwitchResponse
     */
    public function modifyFirewallV2RoutePolicySwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFirewallV2RoutePolicySwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about members in Cloud Firewall.
     *  *
     * @description You can call the ModifyInstanceMemberAttributes operation to update the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyInstanceMemberAttributesRequest $request ModifyInstanceMemberAttributesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceMemberAttributesResponse ModifyInstanceMemberAttributesResponse
     */
    public function modifyInstanceMemberAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->members)) {
            $query['Members'] = $request->members;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceMemberAttributes',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMemberAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about members in Cloud Firewall.
     *  *
     * @description You can call the ModifyInstanceMemberAttributes operation to update the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyInstanceMemberAttributesRequest $request ModifyInstanceMemberAttributesRequest
     *
     * @return ModifyInstanceMemberAttributesResponse ModifyInstanceMemberAttributesResponse
     */
    public function modifyInstanceMemberAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMemberAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an access control policy that is created for a NAT firewall.
     *  *
     * @description You can use this operation to modify the configurations of an access control policy. The policy is used to allow, deny, or monitor traffic that reaches a NAT firewall.
     *  *
     * @param ModifyNatFirewallControlPolicyRequest $request ModifyNatFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNatFirewallControlPolicyResponse ModifyNatFirewallControlPolicyResponse
     */
    public function modifyNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNatFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an access control policy that is created for a NAT firewall.
     *  *
     * @description You can use this operation to modify the configurations of an access control policy. The policy is used to allow, deny, or monitor traffic that reaches a NAT firewall.
     *  *
     * @param ModifyNatFirewallControlPolicyRequest $request ModifyNatFirewallControlPolicyRequest
     *
     * @return ModifyNatFirewallControlPolicyResponse ModifyNatFirewallControlPolicyResponse
     */
    public function modifyNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the priority of an access control policy that is created for a NAT firewall.
     *  *
     * @param ModifyNatFirewallControlPolicyPositionRequest $request ModifyNatFirewallControlPolicyPositionRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNatFirewallControlPolicyPositionResponse ModifyNatFirewallControlPolicyPositionResponse
     */
    public function modifyNatFirewallControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNatFirewallControlPolicyPosition',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNatFirewallControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the priority of an access control policy that is created for a NAT firewall.
     *  *
     * @param ModifyNatFirewallControlPolicyPositionRequest $request ModifyNatFirewallControlPolicyPositionRequest
     *
     * @return ModifyNatFirewallControlPolicyPositionResponse ModifyNatFirewallControlPolicyPositionResponse
     */
    public function modifyNatFirewallControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatFirewallControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies information about an operation on an object group.
     *  *
     * @param ModifyObjectGroupOperationRequest $request ModifyObjectGroupOperationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyObjectGroupOperationResponse ModifyObjectGroupOperationResponse
     */
    public function modifyObjectGroupOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->objectList)) {
            $query['ObjectList'] = $request->objectList;
        }
        if (!Utils::isUnset($request->objectOperation)) {
            $query['ObjectOperation'] = $request->objectOperation;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyObjectGroupOperation',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyObjectGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies information about an operation on an object group.
     *  *
     * @param ModifyObjectGroupOperationRequest $request ModifyObjectGroupOperationRequest
     *
     * @return ModifyObjectGroupOperationResponse ModifyObjectGroupOperationResponse
     */
    public function modifyObjectGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyObjectGroupOperationWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the strict mode for an access control policy.
     *  *
     * @description You can call the ModifyPolicyAdvancedConfig operation to enable or disable the strict mode for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyPolicyAdvancedConfigRequest $request ModifyPolicyAdvancedConfigRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyAdvancedConfigResponse ModifyPolicyAdvancedConfigResponse
     */
    public function modifyPolicyAdvancedConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->internetSwitch)) {
            $query['InternetSwitch'] = $request->internetSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicyAdvancedConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPolicyAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the strict mode for an access control policy.
     *  *
     * @description You can call the ModifyPolicyAdvancedConfig operation to enable or disable the strict mode for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyPolicyAdvancedConfigRequest $request ModifyPolicyAdvancedConfigRequest
     *
     * @return ModifyPolicyAdvancedConfigResponse ModifyPolicyAdvancedConfigResponse
     */
    public function modifyPolicyAdvancedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyAdvancedConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configuration of a virtual private cloud (VPC) firewall that is created for a transit router.
     *  *
     * @param ModifyTrFirewallV2ConfigurationRequest $request ModifyTrFirewallV2ConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTrFirewallV2ConfigurationResponse ModifyTrFirewallV2ConfigurationResponse
     */
    public function modifyTrFirewallV2ConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->firewallName)) {
            $query['FirewallName'] = $request->firewallName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTrFirewallV2Configuration',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTrFirewallV2ConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of a virtual private cloud (VPC) firewall that is created for a transit router.
     *  *
     * @param ModifyTrFirewallV2ConfigurationRequest $request ModifyTrFirewallV2ConfigurationRequest
     *
     * @return ModifyTrFirewallV2ConfigurationResponse ModifyTrFirewallV2ConfigurationResponse
     */
    public function modifyTrFirewallV2Configuration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrFirewallV2ConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the effective scope of the routing policy created for the VPC firewall for a transit router.
     *  *
     * @param ModifyTrFirewallV2RoutePolicyScopeRequest $tmpReq  ModifyTrFirewallV2RoutePolicyScopeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeResponse ModifyTrFirewallV2RoutePolicyScopeResponse
     */
    public function modifyTrFirewallV2RoutePolicyScopeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyTrFirewallV2RoutePolicyScopeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destCandidateList)) {
            $request->destCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destCandidateList, 'DestCandidateList', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcCandidateList)) {
            $request->srcCandidateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcCandidateList, 'SrcCandidateList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->destCandidateListShrink)) {
            $query['DestCandidateList'] = $request->destCandidateListShrink;
        }
        if (!Utils::isUnset($request->firewallId)) {
            $query['FirewallId'] = $request->firewallId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->shouldRecover)) {
            $query['ShouldRecover'] = $request->shouldRecover;
        }
        if (!Utils::isUnset($request->srcCandidateListShrink)) {
            $query['SrcCandidateList'] = $request->srcCandidateListShrink;
        }
        if (!Utils::isUnset($request->trFirewallRoutePolicyId)) {
            $query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTrFirewallV2RoutePolicyScope',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTrFirewallV2RoutePolicyScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the effective scope of the routing policy created for the VPC firewall for a transit router.
     *  *
     * @param ModifyTrFirewallV2RoutePolicyScopeRequest $request ModifyTrFirewallV2RoutePolicyScopeRequest
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeResponse ModifyTrFirewallV2RoutePolicyScopeResponse
     */
    public function modifyTrFirewallV2RoutePolicyScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrFirewallV2RoutePolicyScopeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改用户IPS白名单
     *  *
     * @param ModifyUserIPSWhitelistRequest $request ModifyUserIPSWhitelistRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserIPSWhitelistResponse ModifyUserIPSWhitelistResponse
     */
    public function modifyUserIPSWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->listType)) {
            $query['ListType'] = $request->listType;
        }
        if (!Utils::isUnset($request->listValue)) {
            $query['ListValue'] = $request->listValue;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->whiteType)) {
            $query['WhiteType'] = $request->whiteType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserIPSWhitelist',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改用户IPS白名单
     *  *
     * @param ModifyUserIPSWhitelistRequest $request ModifyUserIPSWhitelistRequest
     *
     * @return ModifyUserIPSWhitelistResponse ModifyUserIPSWhitelistResponse
     */
    public function modifyUserIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallCenConfigureRequest $request ModifyVpcFirewallCenConfigureRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallCenConfigureResponse ModifyVpcFirewallCenConfigureResponse
     */
    public function modifyVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallCenConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallCenConfigureRequest $request ModifyVpcFirewallCenConfigureRequest
     *
     * @return ModifyVpcFirewallCenConfigureResponse ModifyVpcFirewallCenConfigureResponse
     */
    public function modifyVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the ModifyVpcFirewallCenSwitchStatus operation to enable or disable a VPC firewall. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. After you enable the VPC firewall, the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. After you disable the VPC firewall, the VPC firewall no longer protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance.
     * Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallCenSwitchStatusRequest $request ModifyVpcFirewallCenSwitchStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallCenSwitchStatusResponse ModifyVpcFirewallCenSwitchStatusResponse
     */
    public function modifyVpcFirewallCenSwitchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallCenSwitchStatus',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallCenSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description You can call the ModifyVpcFirewallCenSwitchStatus operation to enable or disable a VPC firewall. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. After you enable the VPC firewall, the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. After you disable the VPC firewall, the VPC firewall no longer protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance.
     * Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallCenSwitchStatusRequest $request ModifyVpcFirewallCenSwitchStatusRequest
     *
     * @return ModifyVpcFirewallCenSwitchStatusResponse ModifyVpcFirewallCenSwitchStatusResponse
     */
    public function modifyVpcFirewallCenSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallCenSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the ModifyVpcFirewallConfigure operation to modify the configurations of a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallConfigureRequest $request ModifyVpcFirewallConfigureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallConfigureResponse ModifyVpcFirewallConfigureResponse
     */
    public function modifyVpcFirewallConfigureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localVpcCidrTableList)) {
            $query['LocalVpcCidrTableList'] = $request->localVpcCidrTableList;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->peerVpcCidrTableList)) {
            $query['PeerVpcCidrTableList'] = $request->peerVpcCidrTableList;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->vpcFirewallName)) {
            $query['VpcFirewallName'] = $request->vpcFirewallName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallConfigure',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the ModifyVpcFirewallConfigure operation to modify the configurations of a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallConfigureRequest $request ModifyVpcFirewallConfigureRequest
     *
     * @return ModifyVpcFirewallConfigureResponse ModifyVpcFirewallConfigureResponse
     */
    public function modifyVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an access control policy that is created for a virtual private cloud (VPC) firewall in a specified policy group.
     *  *
     * @description You can call the ModifyVpcFirewallControlPolicy operation to modify the configurations of an access control policy that is created for a VPC firewall in a specified policy group. Different access control policies are used for the VPC firewalls that are used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewalls that are used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallControlPolicyRequest $request ModifyVpcFirewallControlPolicyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallControlPolicyResponse ModifyVpcFirewallControlPolicyResponse
     */
    public function modifyVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclAction)) {
            $query['AclAction'] = $request->aclAction;
        }
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->applicationNameList)) {
            $query['ApplicationNameList'] = $request->applicationNameList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destPort)) {
            $query['DestPort'] = $request->destPort;
        }
        if (!Utils::isUnset($request->destPortGroup)) {
            $query['DestPortGroup'] = $request->destPortGroup;
        }
        if (!Utils::isUnset($request->destPortType)) {
            $query['DestPortType'] = $request->destPortType;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->domainResolveType)) {
            $query['DomainResolveType'] = $request->domainResolveType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->repeatDays)) {
            $query['RepeatDays'] = $request->repeatDays;
        }
        if (!Utils::isUnset($request->repeatEndTime)) {
            $query['RepeatEndTime'] = $request->repeatEndTime;
        }
        if (!Utils::isUnset($request->repeatStartTime)) {
            $query['RepeatStartTime'] = $request->repeatStartTime;
        }
        if (!Utils::isUnset($request->repeatType)) {
            $query['RepeatType'] = $request->repeatType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallControlPolicy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an access control policy that is created for a virtual private cloud (VPC) firewall in a specified policy group.
     *  *
     * @description You can call the ModifyVpcFirewallControlPolicy operation to modify the configurations of an access control policy that is created for a VPC firewall in a specified policy group. Different access control policies are used for the VPC firewalls that are used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewalls that are used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallControlPolicyRequest $request ModifyVpcFirewallControlPolicyRequest
     *
     * @return ModifyVpcFirewallControlPolicyResponse ModifyVpcFirewallControlPolicyResponse
     */
    public function modifyVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the priority of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *  *
     * @description You can use this operation to modify the priority of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallControlPolicyPositionRequest $request ModifyVpcFirewallControlPolicyPositionRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallControlPolicyPositionResponse ModifyVpcFirewallControlPolicyPositionResponse
     */
    public function modifyVpcFirewallControlPolicyPositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newOrder)) {
            $query['NewOrder'] = $request->newOrder;
        }
        if (!Utils::isUnset($request->oldOrder)) {
            $query['OldOrder'] = $request->oldOrder;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallControlPolicyPosition',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the priority of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *  *
     * @description You can use this operation to modify the priority of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallControlPolicyPositionRequest $request ModifyVpcFirewallControlPolicyPositionRequest
     *
     * @return ModifyVpcFirewallControlPolicyPositionResponse ModifyVpcFirewallControlPolicyPositionResponse
     */
    public function modifyVpcFirewallControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call this operation to modify the intrusion prevention configurations of a VPC firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallDefaultIPSConfigRequest $request ModifyVpcFirewallDefaultIPSConfigRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallDefaultIPSConfigResponse ModifyVpcFirewallDefaultIPSConfigResponse
     */
    public function modifyVpcFirewallDefaultIPSConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->basicRules)) {
            $query['BasicRules'] = $request->basicRules;
        }
        if (!Utils::isUnset($request->enableAllPatch)) {
            $query['EnableAllPatch'] = $request->enableAllPatch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->ruleClass)) {
            $query['RuleClass'] = $request->ruleClass;
        }
        if (!Utils::isUnset($request->runMode)) {
            $query['RunMode'] = $request->runMode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallDefaultIPSConfig',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *  *
     * @description You can call this operation to modify the intrusion prevention configurations of a VPC firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallDefaultIPSConfigRequest $request ModifyVpcFirewallDefaultIPSConfigRequest
     *
     * @return ModifyVpcFirewallDefaultIPSConfigResponse ModifyVpcFirewallDefaultIPSConfigResponse
     */
    public function modifyVpcFirewallDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the IPS whitelist of a virtual private cloud (VPC) firewall.
     *  *
     * @param ModifyVpcFirewallIPSWhitelistRequest $request ModifyVpcFirewallIPSWhitelistRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallIPSWhitelistResponse ModifyVpcFirewallIPSWhitelistResponse
     */
    public function modifyVpcFirewallIPSWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->listType)) {
            $query['ListType'] = $request->listType;
        }
        if (!Utils::isUnset($request->listValue)) {
            $query['ListValue'] = $request->listValue;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        if (!Utils::isUnset($request->whiteType)) {
            $query['WhiteType'] = $request->whiteType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallIPSWhitelist',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the IPS whitelist of a virtual private cloud (VPC) firewall.
     *  *
     * @param ModifyVpcFirewallIPSWhitelistRequest $request ModifyVpcFirewallIPSWhitelistRequest
     *
     * @return ModifyVpcFirewallIPSWhitelistResponse ModifyVpcFirewallIPSWhitelistResponse
     */
    public function modifyVpcFirewallIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the ModifyVpcFirewallSwitchStatus operation to enable or disable a VPC firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit. After you enable the VPC firewall, the VPC firewall protects access traffic between two VPCs that are connected by using an Express Connect circuit. After you disable the VPC firewall, the VPC firewall no longer protects access traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallSwitchStatusRequest $request ModifyVpcFirewallSwitchStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcFirewallSwitchStatusResponse ModifyVpcFirewallSwitchStatusResponse
     */
    public function modifyVpcFirewallSwitchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallSwitch)) {
            $query['FirewallSwitch'] = $request->firewallSwitch;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->vpcFirewallId)) {
            $query['VpcFirewallId'] = $request->vpcFirewallId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcFirewallSwitchStatus',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcFirewallSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *  *
     * @description You can call the ModifyVpcFirewallSwitchStatus operation to enable or disable a VPC firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit. After you enable the VPC firewall, the VPC firewall protects access traffic between two VPCs that are connected by using an Express Connect circuit. After you disable the VPC firewall, the VPC firewall no longer protects access traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyVpcFirewallSwitchStatusRequest $request ModifyVpcFirewallSwitchStatusRequest
     *
     * @return ModifyVpcFirewallSwitchStatusResponse ModifyVpcFirewallSwitchStatusResponse
     */
    public function modifyVpcFirewallSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Turns off all firewall switches.
     *  *
     * @description You can call the PutDisableAllFwSwitch operation to turn off all firewall switches.
     * ## [](#qps-)QPS limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutDisableAllFwSwitchRequest $request PutDisableAllFwSwitchRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return PutDisableAllFwSwitchResponse PutDisableAllFwSwitchResponse
     */
    public function putDisableAllFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutDisableAllFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutDisableAllFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Turns off all firewall switches.
     *  *
     * @description You can call the PutDisableAllFwSwitch operation to turn off all firewall switches.
     * ## [](#qps-)QPS limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutDisableAllFwSwitchRequest $request PutDisableAllFwSwitchRequest
     *
     * @return PutDisableAllFwSwitchResponse PutDisableAllFwSwitchResponse
     */
    public function putDisableAllFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDisableAllFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Disable a firewall for specific assets.
     *  *
     * @description You can call the PutDisableFwSwitch operation to disable a firewall for specific assets. After you disable the firewall, traffic does not pass through Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutDisableFwSwitchRequest $request PutDisableFwSwitchRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PutDisableFwSwitchResponse PutDisableFwSwitchResponse
     */
    public function putDisableFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipaddrList)) {
            $query['IpaddrList'] = $request->ipaddrList;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionList)) {
            $query['RegionList'] = $request->regionList;
        }
        if (!Utils::isUnset($request->resourceTypeList)) {
            $query['ResourceTypeList'] = $request->resourceTypeList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutDisableFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutDisableFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disable a firewall for specific assets.
     *  *
     * @description You can call the PutDisableFwSwitch operation to disable a firewall for specific assets. After you disable the firewall, traffic does not pass through Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutDisableFwSwitchRequest $request PutDisableFwSwitchRequest
     *
     * @return PutDisableFwSwitchResponse PutDisableFwSwitchResponse
     */
    public function putDisableFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDisableFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a firewall for all public IP addresses within your Alibaba Cloud account.
     *  *
     * @description You can call the PutEnableAllFwSwitch operation to enable a firewall for all public IP addresses within your Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutEnableAllFwSwitchRequest $request PutEnableAllFwSwitchRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEnableAllFwSwitchResponse PutEnableAllFwSwitchResponse
     */
    public function putEnableAllFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutEnableAllFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEnableAllFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables a firewall for all public IP addresses within your Alibaba Cloud account.
     *  *
     * @description You can call the PutEnableAllFwSwitch operation to enable a firewall for all public IP addresses within your Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutEnableAllFwSwitchRequest $request PutEnableAllFwSwitchRequest
     *
     * @return PutEnableAllFwSwitchResponse PutEnableAllFwSwitchResponse
     */
    public function putEnableAllFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEnableAllFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Enables firewalls for specific assets.
     *  *
     * @description You can call this operation to enable a firewall. After you enable a firewall, traffic passes through Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutEnableFwSwitchRequest $request PutEnableFwSwitchRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return PutEnableFwSwitchResponse PutEnableFwSwitchResponse
     */
    public function putEnableFwSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipaddrList)) {
            $query['IpaddrList'] = $request->ipaddrList;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionList)) {
            $query['RegionList'] = $request->regionList;
        }
        if (!Utils::isUnset($request->resourceTypeList)) {
            $query['ResourceTypeList'] = $request->resourceTypeList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutEnableFwSwitch',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEnableFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables firewalls for specific assets.
     *  *
     * @description You can call this operation to enable a firewall. After you enable a firewall, traffic passes through Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PutEnableFwSwitchRequest $request PutEnableFwSwitchRequest
     *
     * @return PutEnableFwSwitchResponse PutEnableFwSwitchResponse
     */
    public function putEnableFwSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEnableFwSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Releases Cloud Firewall that uses the pay-as-you-go billing method.
     *  *
     * @param ReleasePostInstanceRequest $request ReleasePostInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleasePostInstanceResponse ReleasePostInstanceResponse
     */
    public function releasePostInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleasePostInstance',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePostInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases Cloud Firewall that uses the pay-as-you-go billing method.
     *  *
     * @param ReleasePostInstanceRequest $request ReleasePostInstanceRequest
     *
     * @return ReleasePostInstanceResponse ReleasePostInstanceResponse
     */
    public function releasePostInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePostInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the number of NAT firewall hits.
     *  *
     * @param ResetNatFirewallRuleHitCountRequest $request ResetNatFirewallRuleHitCountRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetNatFirewallRuleHitCountResponse ResetNatFirewallRuleHitCountResponse
     */
    public function resetNatFirewallRuleHitCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetNatFirewallRuleHitCount',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetNatFirewallRuleHitCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets the number of NAT firewall hits.
     *  *
     * @param ResetNatFirewallRuleHitCountRequest $request ResetNatFirewallRuleHitCountRequest
     *
     * @return ResetNatFirewallRuleHitCountResponse ResetNatFirewallRuleHitCountResponse
     */
    public function resetNatFirewallRuleHitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetNatFirewallRuleHitCountWithOptions($request, $runtime);
    }

    /**
     * @summary Clears the count on hits of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *  *
     * @description You can call the ResetVpcFirewallRuleHitCount operation to clear the count on hits of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ResetVpcFirewallRuleHitCountRequest $request ResetVpcFirewallRuleHitCountRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetVpcFirewallRuleHitCountResponse ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclUuid)) {
            $query['AclUuid'] = $request->aclUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetVpcFirewallRuleHitCount',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetVpcFirewallRuleHitCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clears the count on hits of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *  *
     * @description You can call the ResetVpcFirewallRuleHitCount operation to clear the count on hits of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ResetVpcFirewallRuleHitCountRequest $request ResetVpcFirewallRuleHitCountRequest
     *
     * @return ResetVpcFirewallRuleHitCountResponse ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetVpcFirewallRuleHitCountWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables a NAT firewall.
     *  *
     * @param SwitchSecurityProxyRequest $request SwitchSecurityProxyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchSecurityProxyResponse SwitchSecurityProxyResponse
     */
    public function switchSecurityProxyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['ProxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->switch_)) {
            $query['Switch'] = $request->switch_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchSecurityProxy',
            'version'     => '2017-12-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchSecurityProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables a NAT firewall.
     *  *
     * @param SwitchSecurityProxyRequest $request SwitchSecurityProxyRequest
     *
     * @return SwitchSecurityProxyResponse SwitchSecurityProxyResponse
     */
    public function switchSecurityProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSecurityProxyWithOptions($request, $runtime);
    }
}
