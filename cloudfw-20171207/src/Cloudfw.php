<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddDnsFirewallPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddDnsFirewallPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddPrivateDnsDomainNameRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddPrivateDnsDomainNameResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenManualConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenManualConfigureResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteDnsFirewallPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteDnsFirewallPolicyResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeletePrivateDnsAllDomainNameRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeletePrivateDnsAllDomainNameResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeletePrivateDnsDomainNameRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeletePrivateDnsDomainNameResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeletePrivateDnsEndpointRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeletePrivateDnsEndpointResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAITrafficAnalysisStatusResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDnsFirewallPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDnsFirewallPolicyResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeLogStoreInfoResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatAclPageStatusRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatAclPageStatusResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallPolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallPolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallTrafficTrendRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallTrafficTrendResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsDomainNameListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsDomainNameListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsEndpointDetailRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsEndpointDetailResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsEndpointListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrivateDnsEndpointListResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPriorityRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyPriorityResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDefaultIPSConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDefaultIPSConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDnsFirewallPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyDnsFirewallPolicyResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPrivateDnsEndpointRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyPrivateDnsEndpointResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleaseExpiredInstanceRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleaseExpiredInstanceResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleasePostInstanceRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ReleasePostInstanceResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetNatFirewallRuleHitCountRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetNatFirewallRuleHitCountResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\SwitchSecurityProxyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\SwitchSecurityProxyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateAITrafficAnalysisStatusRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateAITrafficAnalysisStatusResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudfw extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-southeast-1' => 'cloudfw.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou' => 'cloudfw.cn-hangzhou.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Creates an address book for access control. Supported address book types are IP address books, Elastic Compute Service (ECS) tag-based address books, port address books, and domain address books. An ECS tag-based address book includes the public IP addresses of the ECS instances that have specific tags.
     *
     * @remarks
     * You can call the AddAddressBook operation to create an address book for access control. The address book can be an IP address book, an ECS tag-based address book, a port address book, or a domain address book.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddAddressBookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAddressBookResponse
     *
     * @param AddAddressBookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAddressBookResponse
     */
    public function addAddressBookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressList) {
            @$query['AddressList'] = $request->addressList;
        }

        if (null !== $request->autoAddTagEcs) {
            @$query['AutoAddTagEcs'] = $request->autoAddTagEcs;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->tagList) {
            @$query['TagList'] = $request->tagList;
        }

        if (null !== $request->tagRelation) {
            @$query['TagRelation'] = $request->tagRelation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAddressBook',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an address book for access control. Supported address book types are IP address books, Elastic Compute Service (ECS) tag-based address books, port address books, and domain address books. An ECS tag-based address book includes the public IP addresses of the ECS instances that have specific tags.
     *
     * @remarks
     * You can call the AddAddressBook operation to create an address book for access control. The address book can be an IP address book, an ECS tag-based address book, a port address book, or a domain address book.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddAddressBookRequest
     *
     * @returns AddAddressBookResponse
     *
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
     * Creates an access control policy.
     *
     * @remarks
     * You can call the AddControlPolicy operation to create an access control policy to allow, block, or monitor traffic that reaches Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddControlPolicyResponse
     *
     * @param AddControlPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddControlPolicyResponse
     */
    public function addControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->applicationNameList) {
            @$query['ApplicationNameList'] = $request->applicationNameList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destPort) {
            @$query['DestPort'] = $request->destPort;
        }

        if (null !== $request->destPortGroup) {
            @$query['DestPortGroup'] = $request->destPortGroup;
        }

        if (null !== $request->destPortType) {
            @$query['DestPortType'] = $request->destPortType;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainResolveType) {
            @$query['DomainResolveType'] = $request->domainResolveType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newOrder) {
            @$query['NewOrder'] = $request->newOrder;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatDays) {
            @$query['RepeatDays'] = $request->repeatDays;
        }

        if (null !== $request->repeatEndTime) {
            @$query['RepeatEndTime'] = $request->repeatEndTime;
        }

        if (null !== $request->repeatStartTime) {
            @$query['RepeatStartTime'] = $request->repeatStartTime;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control policy.
     *
     * @remarks
     * You can call the AddControlPolicy operation to create an access control policy to allow, block, or monitor traffic that reaches Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddControlPolicyRequest
     *
     * @returns AddControlPolicyResponse
     *
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
     * 添加DNS防火墙ACL.
     *
     * @param request - AddDnsFirewallPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDnsFirewallPolicyResponse
     *
     * @param AddDnsFirewallPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDnsFirewallPolicyResponse
     */
    public function addDnsFirewallPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDnsFirewallPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDnsFirewallPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加DNS防火墙ACL.
     *
     * @param request - AddDnsFirewallPolicyRequest
     *
     * @returns AddDnsFirewallPolicyResponse
     *
     * @param AddDnsFirewallPolicyRequest $request
     *
     * @return AddDnsFirewallPolicyResponse
     */
    public function addDnsFirewallPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsFirewallPolicyWithOptions($request, $runtime);
    }

    /**
     * Adds members to Cloud Firewall.
     *
     * @remarks
     * You can call this operation to add members to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddInstanceMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddInstanceMembersResponse
     *
     * @param AddInstanceMembersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddInstanceMembersResponse
     */
    public function addInstanceMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->members) {
            @$query['Members'] = $request->members;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddInstanceMembers',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds members to Cloud Firewall.
     *
     * @remarks
     * You can call this operation to add members to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - AddInstanceMembersRequest
     *
     * @returns AddInstanceMembersResponse
     *
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
     * 添加私网DNS域名.
     *
     * @param request - AddPrivateDnsDomainNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPrivateDnsDomainNameResponse
     *
     * @param AddPrivateDnsDomainNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddPrivateDnsDomainNameResponse
     */
    public function addPrivateDnsDomainNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessInstanceId) {
            @$query['AccessInstanceId'] = $request->accessInstanceId;
        }

        if (null !== $request->domainNameList) {
            @$query['DomainNameList'] = $request->domainNameList;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPrivateDnsDomainName',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPrivateDnsDomainNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加私网DNS域名.
     *
     * @param request - AddPrivateDnsDomainNameRequest
     *
     * @returns AddPrivateDnsDomainNameResponse
     *
     * @param AddPrivateDnsDomainNameRequest $request
     *
     * @return AddPrivateDnsDomainNameResponse
     */
    public function addPrivateDnsDomainName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrivateDnsDomainNameWithOptions($request, $runtime);
    }

    /**
     * Copies all access control policies from a policy group of a source virtual private cloud (VPC) firewall to a policy group of a destination VPC firewall.
     *
     * @remarks
     * You can call the BatchCopyVpcFirewallControlPolicy operation to copy all access control policies from a policy group of a source VPC firewall to a policy group of a destination VPC firewall.
     * Before you call this operation, we recommend that you back up access control policies. For more information about how to back up an access control policy, see [Back up an access control policy](https://www.alibabacloud.com/help/en/cloud-firewall/latest/back-up-and-roll-back-an-access-control-policy).
     * After you call this operation, all the access control policies in the policy group of the destination VPC firewall are replaced.
     * The policy groups of the source VPC firewall and the destination VPC firewall must belong to the same Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. When the number of calls to this operation per second exceeds the limit, throttling is triggered. Throttling may affect your business. We recommend that you take note of the limit on this operation.
     *
     * @param request - BatchCopyVpcFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCopyVpcFirewallControlPolicyResponse
     *
     * @param BatchCopyVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchCopyVpcFirewallControlPolicyResponse
     */
    public function batchCopyVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->sourceVpcFirewallId) {
            @$query['SourceVpcFirewallId'] = $request->sourceVpcFirewallId;
        }

        if (null !== $request->targetVpcFirewallId) {
            @$query['TargetVpcFirewallId'] = $request->targetVpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchCopyVpcFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCopyVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies all access control policies from a policy group of a source virtual private cloud (VPC) firewall to a policy group of a destination VPC firewall.
     *
     * @remarks
     * You can call the BatchCopyVpcFirewallControlPolicy operation to copy all access control policies from a policy group of a source VPC firewall to a policy group of a destination VPC firewall.
     * Before you call this operation, we recommend that you back up access control policies. For more information about how to back up an access control policy, see [Back up an access control policy](https://www.alibabacloud.com/help/en/cloud-firewall/latest/back-up-and-roll-back-an-access-control-policy).
     * After you call this operation, all the access control policies in the policy group of the destination VPC firewall are replaced.
     * The policy groups of the source VPC firewall and the destination VPC firewall must belong to the same Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. When the number of calls to this operation per second exceeds the limit, throttling is triggered. Throttling may affect your business. We recommend that you take note of the limit on this operation.
     *
     * @param request - BatchCopyVpcFirewallControlPolicyRequest
     *
     * @returns BatchCopyVpcFirewallControlPolicyResponse
     *
     * @param BatchCopyVpcFirewallControlPolicyRequest $request
     *
     * @return BatchCopyVpcFirewallControlPolicyResponse
     */
    public function batchCopyVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCopyVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple access control policies for a virtual private cloud (VPC) firewall at a time.
     *
     * @param request - BatchDeleteVpcFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteVpcFirewallControlPolicyResponse
     *
     * @param BatchDeleteVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return BatchDeleteVpcFirewallControlPolicyResponse
     */
    public function batchDeleteVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuidList) {
            @$query['AclUuidList'] = $request->aclUuidList;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteVpcFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple access control policies for a virtual private cloud (VPC) firewall at a time.
     *
     * @param request - BatchDeleteVpcFirewallControlPolicyRequest
     *
     * @returns BatchDeleteVpcFirewallControlPolicyResponse
     *
     * @param BatchDeleteVpcFirewallControlPolicyRequest $request
     *
     * @return BatchDeleteVpcFirewallControlPolicyResponse
     */
    public function batchDeleteVpcFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteVpcFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a file download task.
     *
     * @param request - CreateDownloadTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDownloadTaskResponse
     *
     * @param CreateDownloadTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDownloadTaskResponse
     */
    public function createDownloadTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->taskData) {
            @$query['TaskData'] = $request->taskData;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->timeZone) {
            @$query['TimeZone'] = $request->timeZone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDownloadTask',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a file download task.
     *
     * @param request - CreateDownloadTaskRequest
     *
     * @returns CreateDownloadTaskResponse
     *
     * @param CreateDownloadTaskRequest $request
     *
     * @return CreateDownloadTaskResponse
     */
    public function createDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an access control policy for a NAT firewall.
     *
     * @remarks
     * You can call this operation to create a policy that allows, denies, or monitors the traffic that passes through the NAT firewall.
     *
     * @param request - CreateNatFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNatFirewallControlPolicyResponse
     *
     * @param CreateNatFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateNatFirewallControlPolicyResponse
     */
    public function createNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->applicationNameList) {
            @$query['ApplicationNameList'] = $request->applicationNameList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destPort) {
            @$query['DestPort'] = $request->destPort;
        }

        if (null !== $request->destPortGroup) {
            @$query['DestPortGroup'] = $request->destPortGroup;
        }

        if (null !== $request->destPortType) {
            @$query['DestPortType'] = $request->destPortType;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainResolveType) {
            @$query['DomainResolveType'] = $request->domainResolveType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->newOrder) {
            @$query['NewOrder'] = $request->newOrder;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatDays) {
            @$query['RepeatDays'] = $request->repeatDays;
        }

        if (null !== $request->repeatEndTime) {
            @$query['RepeatEndTime'] = $request->repeatEndTime;
        }

        if (null !== $request->repeatStartTime) {
            @$query['RepeatStartTime'] = $request->repeatStartTime;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNatFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control policy for a NAT firewall.
     *
     * @remarks
     * You can call this operation to create a policy that allows, denies, or monitors the traffic that passes through the NAT firewall.
     *
     * @param request - CreateNatFirewallControlPolicyRequest
     *
     * @returns CreateNatFirewallControlPolicyResponse
     *
     * @param CreateNatFirewallControlPolicyRequest $request
     *
     * @return CreateNatFirewallControlPolicyResponse
     */
    public function createNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a NAT firewall.
     *
     * @param request - CreateSecurityProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecurityProxyResponse
     *
     * @param CreateSecurityProxyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSecurityProxyResponse
     */
    public function createSecurityProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallSwitch) {
            @$query['FirewallSwitch'] = $request->firewallSwitch;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->natRouteEntryList) {
            @$query['NatRouteEntryList'] = $request->natRouteEntryList;
        }

        if (null !== $request->proxyName) {
            @$query['ProxyName'] = $request->proxyName;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->strictMode) {
            @$query['StrictMode'] = $request->strictMode;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchAuto) {
            @$query['VswitchAuto'] = $request->vswitchAuto;
        }

        if (null !== $request->vswitchCidr) {
            @$query['VswitchCidr'] = $request->vswitchCidr;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecurityProxy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecurityProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a NAT firewall.
     *
     * @param request - CreateSecurityProxyRequest
     *
     * @returns CreateSecurityProxyResponse
     *
     * @param CreateSecurityProxyRequest $request
     *
     * @return CreateSecurityProxyResponse
     */
    public function createSecurityProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityProxyWithOptions($request, $runtime);
    }

    /**
     * Create Cloud Firewall SLS Log Delivery.
     *
     * @param request - CreateSlsLogDispatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSlsLogDispatchResponse
     *
     * @param CreateSlsLogDispatchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSlsLogDispatchResponse
     */
    public function createSlsLogDispatchWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->slsRegionId) {
            @$body['SlsRegionId'] = $request->slsRegionId;
        }

        if (null !== $request->ttl) {
            @$body['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSlsLogDispatch',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSlsLogDispatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Cloud Firewall SLS Log Delivery.
     *
     * @param request - CreateSlsLogDispatchRequest
     *
     * @returns CreateSlsLogDispatchResponse
     *
     * @param CreateSlsLogDispatchRequest $request
     *
     * @return CreateSlsLogDispatchResponse
     */
    public function createSlsLogDispatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlsLogDispatchWithOptions($request, $runtime);
    }

    /**
     * Creates a virtual private cloud (VPC) firewall for a transit router.
     *
     * @param request - CreateTrFirewallV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrFirewallV2Response
     *
     * @param CreateTrFirewallV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTrFirewallV2Response
     */
    public function createTrFirewallV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->firewallDescription) {
            @$query['FirewallDescription'] = $request->firewallDescription;
        }

        if (null !== $request->firewallName) {
            @$query['FirewallName'] = $request->firewallName;
        }

        if (null !== $request->firewallSubnetCidr) {
            @$query['FirewallSubnetCidr'] = $request->firewallSubnetCidr;
        }

        if (null !== $request->firewallVpcCidr) {
            @$query['FirewallVpcCidr'] = $request->firewallVpcCidr;
        }

        if (null !== $request->firewallVpcId) {
            @$query['FirewallVpcId'] = $request->firewallVpcId;
        }

        if (null !== $request->firewallVswitchId) {
            @$query['FirewallVswitchId'] = $request->firewallVswitchId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->routeMode) {
            @$query['RouteMode'] = $request->routeMode;
        }

        if (null !== $request->trAttachmentMasterCidr) {
            @$query['TrAttachmentMasterCidr'] = $request->trAttachmentMasterCidr;
        }

        if (null !== $request->trAttachmentMasterZone) {
            @$query['TrAttachmentMasterZone'] = $request->trAttachmentMasterZone;
        }

        if (null !== $request->trAttachmentSlaveCidr) {
            @$query['TrAttachmentSlaveCidr'] = $request->trAttachmentSlaveCidr;
        }

        if (null !== $request->trAttachmentSlaveZone) {
            @$query['TrAttachmentSlaveZone'] = $request->trAttachmentSlaveZone;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTrFirewallV2',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTrFirewallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a virtual private cloud (VPC) firewall for a transit router.
     *
     * @param request - CreateTrFirewallV2Request
     *
     * @returns CreateTrFirewallV2Response
     *
     * @param CreateTrFirewallV2Request $request
     *
     * @return CreateTrFirewallV2Response
     */
    public function createTrFirewallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrFirewallV2WithOptions($request, $runtime);
    }

    /**
     * Creates a routing policy for a VPC firewall of a transit router.
     *
     * @param tmpReq - CreateTrFirewallV2RoutePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrFirewallV2RoutePolicyResponse
     *
     * @param CreateTrFirewallV2RoutePolicyRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateTrFirewallV2RoutePolicyResponse
     */
    public function createTrFirewallV2RoutePolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTrFirewallV2RoutePolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destCandidateList) {
            $request->destCandidateListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destCandidateList, 'DestCandidateList', 'json');
        }

        if (null !== $tmpReq->srcCandidateList) {
            $request->srcCandidateListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->srcCandidateList, 'SrcCandidateList', 'json');
        }

        $query = [];
        if (null !== $request->destCandidateListShrink) {
            @$query['DestCandidateList'] = $request->destCandidateListShrink;
        }

        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->policyDescription) {
            @$query['PolicyDescription'] = $request->policyDescription;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->srcCandidateListShrink) {
            @$query['SrcCandidateList'] = $request->srcCandidateListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTrFirewallV2RoutePolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTrFirewallV2RoutePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a routing policy for a VPC firewall of a transit router.
     *
     * @param request - CreateTrFirewallV2RoutePolicyRequest
     *
     * @returns CreateTrFirewallV2RoutePolicyResponse
     *
     * @param CreateTrFirewallV2RoutePolicyRequest $request
     *
     * @return CreateTrFirewallV2RoutePolicyResponse
     */
    public function createTrFirewallV2RoutePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrFirewallV2RoutePolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a virtual private cloud (VPC) firewall to protect traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the CreateVpcFirewallCenConfigure operation to create a VPC firewall. The VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. The VPC firewall cannot protect mutual access traffic between VBRs, between CCN instances, or between VBRs and CCN instances. For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVpcFirewallCenConfigureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcFirewallCenConfigureResponse
     *
     * @param CreateVpcFirewallCenConfigureRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateVpcFirewallCenConfigureResponse
     */
    public function createVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->firewallSwitch) {
            @$query['FirewallSwitch'] = $request->firewallSwitch;
        }

        if (null !== $request->firewallVSwitchCidrBlock) {
            @$query['FirewallVSwitchCidrBlock'] = $request->firewallVSwitchCidrBlock;
        }

        if (null !== $request->firewallVpcCidrBlock) {
            @$query['FirewallVpcCidrBlock'] = $request->firewallVpcCidrBlock;
        }

        if (null !== $request->firewallVpcStandbyZoneId) {
            @$query['FirewallVpcStandbyZoneId'] = $request->firewallVpcStandbyZoneId;
        }

        if (null !== $request->firewallVpcZoneId) {
            @$query['FirewallVpcZoneId'] = $request->firewallVpcZoneId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->networkInstanceId) {
            @$query['NetworkInstanceId'] = $request->networkInstanceId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcFirewallName) {
            @$query['VpcFirewallName'] = $request->vpcFirewallName;
        }

        if (null !== $request->vpcRegion) {
            @$query['VpcRegion'] = $request->vpcRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVpcFirewallCenConfigure',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a virtual private cloud (VPC) firewall to protect traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the CreateVpcFirewallCenConfigure operation to create a VPC firewall. The VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. The VPC firewall cannot protect mutual access traffic between VBRs, between CCN instances, or between VBRs and CCN instances. For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVpcFirewallCenConfigureRequest
     *
     * @returns CreateVpcFirewallCenConfigureResponse
     *
     * @param CreateVpcFirewallCenConfigureRequest $request
     *
     * @return CreateVpcFirewallCenConfigureResponse
     */
    public function createVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * 创建VPC防火墙手动配置.
     *
     * @param request - CreateVpcFirewallCenManualConfigureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcFirewallCenManualConfigureResponse
     *
     * @param CreateVpcFirewallCenManualConfigureRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateVpcFirewallCenManualConfigureResponse
     */
    public function createVpcFirewallCenManualConfigureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcFirewallName) {
            @$query['VpcFirewallName'] = $request->vpcFirewallName;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVpcFirewallCenManualConfigure',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVpcFirewallCenManualConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建VPC防火墙手动配置.
     *
     * @param request - CreateVpcFirewallCenManualConfigureRequest
     *
     * @returns CreateVpcFirewallCenManualConfigureResponse
     *
     * @param CreateVpcFirewallCenManualConfigureRequest $request
     *
     * @return CreateVpcFirewallCenManualConfigureResponse
     */
    public function createVpcFirewallCenManualConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallCenManualConfigureWithOptions($request, $runtime);
    }

    /**
     * Creates a Virtual Private Cloud (VPC) firewall to protect traffic between two VPCs that are connected by using an Express Connect.
     *
     * @remarks
     * You can call this operation to create a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. The VPC firewall does not control the mutual access traffic between VPCs that reside in different regions or belong to different Alibaba Cloud accounts. The firewall also does not control the mutual access traffic between VPCs and virtual border routers (VBRs). For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ### [](#qps)QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVpcFirewallConfigureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcFirewallConfigureResponse
     *
     * @param CreateVpcFirewallConfigureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateVpcFirewallConfigureResponse
     */
    public function createVpcFirewallConfigureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallSwitch) {
            @$query['FirewallSwitch'] = $request->firewallSwitch;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->localVpcCidrTableList) {
            @$query['LocalVpcCidrTableList'] = $request->localVpcCidrTableList;
        }

        if (null !== $request->localVpcId) {
            @$query['LocalVpcId'] = $request->localVpcId;
        }

        if (null !== $request->localVpcRegion) {
            @$query['LocalVpcRegion'] = $request->localVpcRegion;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->peerVpcCidrTableList) {
            @$query['PeerVpcCidrTableList'] = $request->peerVpcCidrTableList;
        }

        if (null !== $request->peerVpcId) {
            @$query['PeerVpcId'] = $request->peerVpcId;
        }

        if (null !== $request->peerVpcRegion) {
            @$query['PeerVpcRegion'] = $request->peerVpcRegion;
        }

        if (null !== $request->vpcFirewallName) {
            @$query['VpcFirewallName'] = $request->vpcFirewallName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVpcFirewallConfigure',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Virtual Private Cloud (VPC) firewall to protect traffic between two VPCs that are connected by using an Express Connect.
     *
     * @remarks
     * You can call this operation to create a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. The VPC firewall does not control the mutual access traffic between VPCs that reside in different regions or belong to different Alibaba Cloud accounts. The firewall also does not control the mutual access traffic between VPCs and virtual border routers (VBRs). For more information, see [VPC firewall limits](https://help.aliyun.com/document_detail/172295.html).
     * ### [](#qps)QPS limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVpcFirewallConfigureRequest
     *
     * @returns CreateVpcFirewallConfigureResponse
     *
     * @param CreateVpcFirewallConfigureRequest $request
     *
     * @return CreateVpcFirewallConfigureResponse
     */
    public function createVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * Creates an access control policy in a specified policy group for a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the CreateVpcFirewallControlPolicy operation to create an access control policy in a specified policy group for a VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVpcFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcFirewallControlPolicyResponse
     *
     * @param CreateVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateVpcFirewallControlPolicyResponse
     */
    public function createVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->applicationNameList) {
            @$query['ApplicationNameList'] = $request->applicationNameList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destPort) {
            @$query['DestPort'] = $request->destPort;
        }

        if (null !== $request->destPortGroup) {
            @$query['DestPortGroup'] = $request->destPortGroup;
        }

        if (null !== $request->destPortType) {
            @$query['DestPortType'] = $request->destPortType;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->domainResolveType) {
            @$query['DomainResolveType'] = $request->domainResolveType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->newOrder) {
            @$query['NewOrder'] = $request->newOrder;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatDays) {
            @$query['RepeatDays'] = $request->repeatDays;
        }

        if (null !== $request->repeatEndTime) {
            @$query['RepeatEndTime'] = $request->repeatEndTime;
        }

        if (null !== $request->repeatStartTime) {
            @$query['RepeatStartTime'] = $request->repeatStartTime;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVpcFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control policy in a specified policy group for a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the CreateVpcFirewallControlPolicy operation to create an access control policy in a specified policy group for a VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateVpcFirewallControlPolicyRequest
     *
     * @returns CreateVpcFirewallControlPolicyResponse
     *
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
     * Deletes an address book for access control.
     *
     * @remarks
     * You can call the DeleteAddressBook operation to delete an address book for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteAddressBookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAddressBookResponse
     *
     * @param DeleteAddressBookRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAddressBookResponse
     */
    public function deleteAddressBookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupUuid) {
            @$query['GroupUuid'] = $request->groupUuid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAddressBook',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an address book for access control.
     *
     * @remarks
     * You can call the DeleteAddressBook operation to delete an address book for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteAddressBookRequest
     *
     * @returns DeleteAddressBookResponse
     *
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
     * Deletes an access control policy.
     *
     * @remarks
     * You can call the DeleteControlPolicy operation to delete an access control policy that applies to inbound or outbound traffic.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteControlPolicyResponse
     *
     * @param DeleteControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteControlPolicyResponse
     */
    public function deleteControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control policy.
     *
     * @remarks
     * You can call the DeleteControlPolicy operation to delete an access control policy that applies to inbound or outbound traffic.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteControlPolicyRequest
     *
     * @returns DeleteControlPolicyResponse
     *
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
     * Deletes an access control policy template.
     *
     * @param request - DeleteControlPolicyTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteControlPolicyTemplateResponse
     *
     * @param DeleteControlPolicyTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteControlPolicyTemplateResponse
     */
    public function deleteControlPolicyTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteControlPolicyTemplate',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteControlPolicyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control policy template.
     *
     * @param request - DeleteControlPolicyTemplateRequest
     *
     * @returns DeleteControlPolicyTemplateResponse
     *
     * @param DeleteControlPolicyTemplateRequest $request
     *
     * @return DeleteControlPolicyTemplateResponse
     */
    public function deleteControlPolicyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlPolicyTemplateWithOptions($request, $runtime);
    }

    /**
     * 删除DNS防火墙规则.
     *
     * @param request - DeleteDnsFirewallPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDnsFirewallPolicyResponse
     *
     * @param DeleteDnsFirewallPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDnsFirewallPolicyResponse
     */
    public function deleteDnsFirewallPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDnsFirewallPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDnsFirewallPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除DNS防火墙规则.
     *
     * @param request - DeleteDnsFirewallPolicyRequest
     *
     * @returns DeleteDnsFirewallPolicyResponse
     *
     * @param DeleteDnsFirewallPolicyRequest $request
     *
     * @return DeleteDnsFirewallPolicyResponse
     */
    public function deleteDnsFirewallPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnsFirewallPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes file download tasks.
     *
     * @remarks
     * You can call this operation to delete file download tasks and delete the files.
     * **
     * **Warning** Both tasks and involved files are deleted. You can no longer download the involved files by using the download links. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteDownloadTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDownloadTaskResponse
     *
     * @param DeleteDownloadTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDownloadTaskResponse
     */
    public function deleteDownloadTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDownloadTask',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes file download tasks.
     *
     * @remarks
     * You can call this operation to delete file download tasks and delete the files.
     * **
     * **Warning** Both tasks and involved files are deleted. You can no longer download the involved files by using the download links. This operation is irreversible. Proceed with caution.
     *
     * @param request - DeleteDownloadTaskRequest
     *
     * @returns DeleteDownloadTaskResponse
     *
     * @param DeleteDownloadTaskRequest $request
     *
     * @return DeleteDownloadTaskResponse
     */
    public function deleteDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes routing policies for a virtual private cloud (VPC) firewall of a transit router.
     *
     * @param request - DeleteFirewallV2RoutePoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFirewallV2RoutePoliciesResponse
     *
     * @param DeleteFirewallV2RoutePoliciesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteFirewallV2RoutePoliciesResponse
     */
    public function deleteFirewallV2RoutePoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->trFirewallRoutePolicyId) {
            @$query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFirewallV2RoutePolicies',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFirewallV2RoutePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes routing policies for a virtual private cloud (VPC) firewall of a transit router.
     *
     * @param request - DeleteFirewallV2RoutePoliciesRequest
     *
     * @returns DeleteFirewallV2RoutePoliciesResponse
     *
     * @param DeleteFirewallV2RoutePoliciesRequest $request
     *
     * @return DeleteFirewallV2RoutePoliciesResponse
     */
    public function deleteFirewallV2RoutePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallV2RoutePoliciesWithOptions($request, $runtime);
    }

    /**
     * Removes members from Cloud Firewall.
     *
     * @remarks
     * You can call this operation to remove up to 20 members from Cloud Firewall at a time. Separate multiple members with commas (,). After a member is removed, Cloud Firewall can no longer access the cloud resources of the member. Proceed with caution. Before you call this operation, call the [DescribeInstanceMembers](https://help.aliyun.com/document_detail/271704.html) operation to obtain the information about the members that are added to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteInstanceMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceMembersResponse
     *
     * @param DeleteInstanceMembersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteInstanceMembersResponse
     */
    public function deleteInstanceMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberUids) {
            @$query['MemberUids'] = $request->memberUids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceMembers',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes members from Cloud Firewall.
     *
     * @remarks
     * You can call this operation to remove up to 20 members from Cloud Firewall at a time. Separate multiple members with commas (,). After a member is removed, Cloud Firewall can no longer access the cloud resources of the member. Proceed with caution. Before you call this operation, call the [DescribeInstanceMembers](https://help.aliyun.com/document_detail/271704.html) operation to obtain the information about the members that are added to Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteInstanceMembersRequest
     *
     * @returns DeleteInstanceMembersResponse
     *
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
     * Deletes an access control policy that is created for a NAT firewall.
     *
     * @remarks
     * You can use this operation to delete an outbound access control policy that is created for a NAT firewall.
     *
     * @param request - DeleteNatFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNatFirewallControlPolicyResponse
     *
     * @param DeleteNatFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteNatFirewallControlPolicyResponse
     */
    public function deleteNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNatFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control policy that is created for a NAT firewall.
     *
     * @remarks
     * You can use this operation to delete an outbound access control policy that is created for a NAT firewall.
     *
     * @param request - DeleteNatFirewallControlPolicyRequest
     *
     * @returns DeleteNatFirewallControlPolicyResponse
     *
     * @param DeleteNatFirewallControlPolicyRequest $request
     *
     * @return DeleteNatFirewallControlPolicyResponse
     */
    public function deleteNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes access control policies that are created for a NAT firewall at a time.
     *
     * @param request - DeleteNatFirewallControlPolicyBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNatFirewallControlPolicyBatchResponse
     *
     * @param DeleteNatFirewallControlPolicyBatchRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DeleteNatFirewallControlPolicyBatchResponse
     */
    public function deleteNatFirewallControlPolicyBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuidList) {
            @$query['AclUuidList'] = $request->aclUuidList;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNatFirewallControlPolicyBatch',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNatFirewallControlPolicyBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes access control policies that are created for a NAT firewall at a time.
     *
     * @param request - DeleteNatFirewallControlPolicyBatchRequest
     *
     * @returns DeleteNatFirewallControlPolicyBatchResponse
     *
     * @param DeleteNatFirewallControlPolicyBatchRequest $request
     *
     * @return DeleteNatFirewallControlPolicyBatchResponse
     */
    public function deleteNatFirewallControlPolicyBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatFirewallControlPolicyBatchWithOptions($request, $runtime);
    }

    /**
     * 清空私网DNS域名.
     *
     * @param request - DeletePrivateDnsAllDomainNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateDnsAllDomainNameResponse
     *
     * @param DeletePrivateDnsAllDomainNameRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeletePrivateDnsAllDomainNameResponse
     */
    public function deletePrivateDnsAllDomainNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessInstanceId) {
            @$query['AccessInstanceId'] = $request->accessInstanceId;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateDnsAllDomainName',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateDnsAllDomainNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清空私网DNS域名.
     *
     * @param request - DeletePrivateDnsAllDomainNameRequest
     *
     * @returns DeletePrivateDnsAllDomainNameResponse
     *
     * @param DeletePrivateDnsAllDomainNameRequest $request
     *
     * @return DeletePrivateDnsAllDomainNameResponse
     */
    public function deletePrivateDnsAllDomainName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateDnsAllDomainNameWithOptions($request, $runtime);
    }

    /**
     * 删除私网DNS域名.
     *
     * @param request - DeletePrivateDnsDomainNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateDnsDomainNameResponse
     *
     * @param DeletePrivateDnsDomainNameRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeletePrivateDnsDomainNameResponse
     */
    public function deletePrivateDnsDomainNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessInstanceId) {
            @$query['AccessInstanceId'] = $request->accessInstanceId;
        }

        if (null !== $request->domainNameList) {
            @$query['DomainNameList'] = $request->domainNameList;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateDnsDomainName',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateDnsDomainNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除私网DNS域名.
     *
     * @param request - DeletePrivateDnsDomainNameRequest
     *
     * @returns DeletePrivateDnsDomainNameResponse
     *
     * @param DeletePrivateDnsDomainNameRequest $request
     *
     * @return DeletePrivateDnsDomainNameResponse
     */
    public function deletePrivateDnsDomainName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateDnsDomainNameWithOptions($request, $runtime);
    }

    /**
     * 删除私网DNS终端节点.
     *
     * @param request - DeletePrivateDnsEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateDnsEndpointResponse
     *
     * @param DeletePrivateDnsEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeletePrivateDnsEndpointResponse
     */
    public function deletePrivateDnsEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessInstanceId) {
            @$query['AccessInstanceId'] = $request->accessInstanceId;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateDnsEndpoint',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateDnsEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除私网DNS终端节点.
     *
     * @param request - DeletePrivateDnsEndpointRequest
     *
     * @returns DeletePrivateDnsEndpointResponse
     *
     * @param DeletePrivateDnsEndpointRequest $request
     *
     * @return DeletePrivateDnsEndpointResponse
     */
    public function deletePrivateDnsEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateDnsEndpointWithOptions($request, $runtime);
    }

    /**
     * Deletes a NAT firewall.
     *
     * @param request - DeleteSecurityProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityProxyResponse
     *
     * @param DeleteSecurityProxyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSecurityProxyResponse
     */
    public function deleteSecurityProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->proxyId) {
            @$query['ProxyId'] = $request->proxyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityProxy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecurityProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a NAT firewall.
     *
     * @param request - DeleteSecurityProxyRequest
     *
     * @returns DeleteSecurityProxyResponse
     *
     * @param DeleteSecurityProxyRequest $request
     *
     * @return DeleteSecurityProxyResponse
     */
    public function deleteSecurityProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityProxyWithOptions($request, $runtime);
    }

    /**
     * Deletes a virtual private cloud (VPC) firewall that is created for a transit router.
     *
     * @param request - DeleteTrFirewallV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrFirewallV2Response
     *
     * @param DeleteTrFirewallV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteTrFirewallV2Response
     */
    public function deleteTrFirewallV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrFirewallV2',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTrFirewallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual private cloud (VPC) firewall that is created for a transit router.
     *
     * @param request - DeleteTrFirewallV2Request
     *
     * @returns DeleteTrFirewallV2Response
     *
     * @param DeleteTrFirewallV2Request $request
     *
     * @return DeleteTrFirewallV2Response
     */
    public function deleteTrFirewallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrFirewallV2WithOptions($request, $runtime);
    }

    /**
     * Deletes a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVpcFirewallCenConfigureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcFirewallCenConfigureResponse
     *
     * @param DeleteVpcFirewallCenConfigureRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteVpcFirewallCenConfigureResponse
     */
    public function deleteVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallIdList) {
            @$query['VpcFirewallIdList'] = $request->vpcFirewallIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVpcFirewallCenConfigure',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the DeleteVpcFirewallCenConfigure operation to delete a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVpcFirewallCenConfigureRequest
     *
     * @returns DeleteVpcFirewallCenConfigureResponse
     *
     * @param DeleteVpcFirewallCenConfigureRequest $request
     *
     * @return DeleteVpcFirewallCenConfigureResponse
     */
    public function deleteVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * Deletes a virtual private cloud (VPC) firewall that controls traffic between two VPCs. The VPCs are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the DeleteVpcFirewallConfigure operation to delete a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVpcFirewallConfigureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcFirewallConfigureResponse
     *
     * @param DeleteVpcFirewallConfigureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteVpcFirewallConfigureResponse
     */
    public function deleteVpcFirewallConfigureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallIdList) {
            @$query['VpcFirewallIdList'] = $request->vpcFirewallIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVpcFirewallConfigure',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual private cloud (VPC) firewall that controls traffic between two VPCs. The VPCs are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the DeleteVpcFirewallConfigure operation to delete a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVpcFirewallConfigureRequest
     *
     * @returns DeleteVpcFirewallConfigureResponse
     *
     * @param DeleteVpcFirewallConfigureRequest $request
     *
     * @return DeleteVpcFirewallConfigureResponse
     */
    public function deleteVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * Deletes an access control policy from a specific policy group for a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the DeleteVpcFirewallControlPolicy operation to delete an access control policy from a specific policy group for a VPC firewall. Different access control policies are used for the VPC firewall that is used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewall that is used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVpcFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcFirewallControlPolicyResponse
     *
     * @param DeleteVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteVpcFirewallControlPolicyResponse
     */
    public function deleteVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVpcFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control policy from a specific policy group for a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the DeleteVpcFirewallControlPolicy operation to delete an access control policy from a specific policy group for a VPC firewall. Different access control policies are used for the VPC firewall that is used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewall that is used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteVpcFirewallControlPolicyRequest
     *
     * @returns DeleteVpcFirewallControlPolicyResponse
     *
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
     * Queries the statistics on the requests that are blocked by the access control list (ACL) feature.
     *
     * @param request - DescribeACLProtectTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeACLProtectTrendResponse
     *
     * @param DescribeACLProtectTrendRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeACLProtectTrendResponse
     */
    public function describeACLProtectTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeACLProtectTrend',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeACLProtectTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on the requests that are blocked by the access control list (ACL) feature.
     *
     * @param request - DescribeACLProtectTrendRequest
     *
     * @returns DescribeACLProtectTrendResponse
     *
     * @param DescribeACLProtectTrendRequest $request
     *
     * @return DescribeACLProtectTrendResponse
     */
    public function describeACLProtectTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeACLProtectTrendWithOptions($request, $runtime);
    }

    /**
     * 查询AI流量分析开启状态
     *
     * @param request - DescribeAITrafficAnalysisStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAITrafficAnalysisStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAITrafficAnalysisStatusResponse
     */
    public function describeAITrafficAnalysisStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeAITrafficAnalysisStatus',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAITrafficAnalysisStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询AI流量分析开启状态
     *
     * @returns DescribeAITrafficAnalysisStatusResponse
     *
     * @return DescribeAITrafficAnalysisStatusResponse
     */
    public function describeAITrafficAnalysisStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAITrafficAnalysisStatusWithOptions($runtime);
    }

    /**
     * Queries the details about an address book for an access control policy.
     *
     * @remarks
     * You can call this operation to query the details about an address book for an access control policy.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeAddressBookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAddressBookResponse
     *
     * @param DescribeAddressBookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAddressBookResponse
     */
    public function describeAddressBookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containPort) {
            @$query['ContainPort'] = $request->containPort;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAddressBook',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about an address book for an access control policy.
     *
     * @remarks
     * You can call this operation to query the details about an address book for an access control policy.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeAddressBookRequest
     *
     * @returns DescribeAddressBookResponse
     *
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
     * Queries the assets that are protected by Cloud Firewall.
     *
     * @remarks
     * You can call the DescribeAssetList operation to query the assets that are protected by Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeAssetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAssetListResponse
     *
     * @param DescribeAssetListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAssetListResponse
     */
    public function describeAssetListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->newResourceTag) {
            @$query['NewResourceTag'] = $request->newResourceTag;
        }

        if (null !== $request->outStatistic) {
            @$query['OutStatistic'] = $request->outStatistic;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->searchItem) {
            @$query['SearchItem'] = $request->searchItem;
        }

        if (null !== $request->sensitiveStatus) {
            @$query['SensitiveStatus'] = $request->sensitiveStatus;
        }

        if (null !== $request->sgStatus) {
            @$query['SgStatus'] = $request->sgStatus;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAssetList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAssetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the assets that are protected by Cloud Firewall.
     *
     * @remarks
     * You can call the DescribeAssetList operation to query the assets that are protected by Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeAssetListRequest
     *
     * @returns DescribeAssetListResponse
     *
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
     * Queries the risk levels of assets.
     *
     * @param request - DescribeAssetRiskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAssetRiskListResponse
     *
     * @param DescribeAssetRiskListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAssetRiskListResponse
     */
    public function describeAssetRiskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipAddrList) {
            @$query['IpAddrList'] = $request->ipAddrList;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAssetRiskList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAssetRiskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the risk levels of assets.
     *
     * @param request - DescribeAssetRiskListRequest
     *
     * @returns DescribeAssetRiskListResponse
     *
     * @param DescribeAssetRiskListRequest $request
     *
     * @return DescribeAssetRiskListResponse
     */
    public function describeAssetRiskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetRiskListWithOptions($request, $runtime);
    }

    /**
     * Queries statistics on the assets that are protected by Cloud Firewall.
     *
     * @param request - DescribeAssetStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAssetStatisticResponse
     *
     * @param DescribeAssetStatisticRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAssetStatisticResponse
     */
    public function describeAssetStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAssetStatistic',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAssetStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries statistics on the assets that are protected by Cloud Firewall.
     *
     * @param request - DescribeAssetStatisticRequest
     *
     * @returns DescribeAssetStatisticResponse
     *
     * @param DescribeAssetStatisticRequest $request
     *
     * @return DescribeAssetStatisticResponse
     */
    public function describeAssetStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the firewall risk level.
     *
     * @param request - DescribeCfwRiskLevelSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCfwRiskLevelSummaryResponse
     *
     * @param DescribeCfwRiskLevelSummaryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCfwRiskLevelSummaryResponse
     */
    public function describeCfwRiskLevelSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCfwRiskLevelSummary',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCfwRiskLevelSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the firewall risk level.
     *
     * @param request - DescribeCfwRiskLevelSummaryRequest
     *
     * @returns DescribeCfwRiskLevelSummaryResponse
     *
     * @param DescribeCfwRiskLevelSummaryRequest $request
     *
     * @return DescribeCfwRiskLevelSummaryResponse
     */
    public function describeCfwRiskLevelSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCfwRiskLevelSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the details about all access control policies.
     *
     * @remarks
     * You can call the DescribeControlPolicy operation to query the details about access control policies by page.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeControlPolicyResponse
     *
     * @param DescribeControlPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeControlPolicyResponse
     */
    public function describeControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about all access control policies.
     *
     * @remarks
     * You can call the DescribeControlPolicy operation to query the details about access control policies by page.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeControlPolicyRequest
     *
     * @returns DescribeControlPolicyResponse
     *
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
     * Queries the default intrusion prevention system (IPS) configurations.
     *
     * @param request - DescribeDefaultIPSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefaultIPSConfigResponse
     *
     * @param DescribeDefaultIPSConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDefaultIPSConfigResponse
     */
    public function describeDefaultIPSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefaultIPSConfig',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the default intrusion prevention system (IPS) configurations.
     *
     * @param request - DescribeDefaultIPSConfigRequest
     *
     * @returns DescribeDefaultIPSConfigResponse
     *
     * @param DescribeDefaultIPSConfigRequest $request
     *
     * @return DescribeDefaultIPSConfigResponse
     */
    public function describeDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * 获取DNS防火墙ACL列表.
     *
     * @param request - DescribeDnsFirewallPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsFirewallPolicyResponse
     *
     * @param DescribeDnsFirewallPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDnsFirewallPolicyResponse
     */
    public function describeDnsFirewallPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsFirewallPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsFirewallPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取DNS防火墙ACL列表.
     *
     * @param request - DescribeDnsFirewallPolicyRequest
     *
     * @returns DescribeDnsFirewallPolicyResponse
     *
     * @param DescribeDnsFirewallPolicyRequest $request
     *
     * @return DescribeDnsFirewallPolicyResponse
     */
    public function describeDnsFirewallPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsFirewallPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries Domain Name System (DNS) records.
     *
     * @remarks
     * You can use this operation to query the DNS record of a domain name. This operation can retrieve DNS records only from Alibaba Cloud DNS. Before you can call this operation, make sure that your domain name is hosted on Alibaba Cloud DNS.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @deprecated OpenAPI DescribeDomainResolve is deprecated
     *
     * @param request - DescribeDomainResolveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainResolveResponse
     *
     * @param DescribeDomainResolveRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainResolveResponse
     */
    public function describeDomainResolveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainResolve',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainResolveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries Domain Name System (DNS) records.
     *
     * @remarks
     * You can use this operation to query the DNS record of a domain name. This operation can retrieve DNS records only from Alibaba Cloud DNS. Before you can call this operation, make sure that your domain name is hosted on Alibaba Cloud DNS.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @deprecated OpenAPI DescribeDomainResolve is deprecated
     *
     * @param request - DescribeDomainResolveRequest
     *
     * @returns DescribeDomainResolveResponse
     *
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
     * Queries file download tasks, including the task information and download URLs.
     *
     * @param request - DescribeDownloadTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadTaskResponse
     *
     * @param DescribeDownloadTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDownloadTaskResponse
     */
    public function describeDownloadTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadTask',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries file download tasks, including the task information and download URLs.
     *
     * @param request - DescribeDownloadTaskRequest
     *
     * @returns DescribeDownloadTaskResponse
     *
     * @param DescribeDownloadTaskRequest $request
     *
     * @return DescribeDownloadTaskResponse
     */
    public function describeDownloadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the types of download tasks. The type corresponds to the TaskType fields in the download task-related operations.
     *
     * @param request - DescribeDownloadTaskTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadTaskTypeResponse
     *
     * @param DescribeDownloadTaskTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDownloadTaskTypeResponse
     */
    public function describeDownloadTaskTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadTaskType',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadTaskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the types of download tasks. The type corresponds to the TaskType fields in the download task-related operations.
     *
     * @param request - DescribeDownloadTaskTypeRequest
     *
     * @returns DescribeDownloadTaskTypeResponse
     *
     * @param DescribeDownloadTaskTypeRequest $request
     *
     * @return DescribeDownloadTaskTypeResponse
     */
    public function describeDownloadTaskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadTaskTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the information about members in Cloud Firewall.
     *
     * @remarks
     * You can use this operation to query the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstanceMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceMembersResponse
     *
     * @param DescribeInstanceMembersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceMembersResponse
     */
    public function describeInstanceMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->memberDesc) {
            @$query['MemberDesc'] = $request->memberDesc;
        }

        if (null !== $request->memberDisplayName) {
            @$query['MemberDisplayName'] = $request->memberDisplayName;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceMembers',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about members in Cloud Firewall.
     *
     * @remarks
     * You can use this operation to query the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstanceMembersRequest
     *
     * @returns DescribeInstanceMembersResponse
     *
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
     * Queries the risk levels of instances.
     *
     * @param request - DescribeInstanceRiskLevelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceRiskLevelsResponse
     *
     * @param DescribeInstanceRiskLevelsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceRiskLevelsResponse
     */
    public function describeInstanceRiskLevelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceRiskLevels',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceRiskLevelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the risk levels of instances.
     *
     * @param request - DescribeInstanceRiskLevelsRequest
     *
     * @returns DescribeInstanceRiskLevelsResponse
     *
     * @param DescribeInstanceRiskLevelsRequest $request
     *
     * @return DescribeInstanceRiskLevelsResponse
     */
    public function describeInstanceRiskLevels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRiskLevelsWithOptions($request, $runtime);
    }

    /**
     * Queries the IP addresses that are open to the Internet.
     *
     * @param request - DescribeInternetOpenIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInternetOpenIpResponse
     *
     * @param DescribeInternetOpenIpRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInternetOpenIpResponse
     */
    public function describeInternetOpenIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetsInstanceId) {
            @$query['AssetsInstanceId'] = $request->assetsInstanceId;
        }

        if (null !== $request->assetsInstanceName) {
            @$query['AssetsInstanceName'] = $request->assetsInstanceName;
        }

        if (null !== $request->assetsType) {
            @$query['AssetsType'] = $request->assetsType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->publicIp) {
            @$query['PublicIp'] = $request->publicIp;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInternetOpenIp',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInternetOpenIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP addresses that are open to the Internet.
     *
     * @param request - DescribeInternetOpenIpRequest
     *
     * @returns DescribeInternetOpenIpResponse
     *
     * @param DescribeInternetOpenIpRequest $request
     *
     * @return DescribeInternetOpenIpResponse
     */
    public function describeInternetOpenIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetOpenIpWithOptions($request, $runtime);
    }

    /**
     * Queries the trends of Internet traffic.
     *
     * @param request - DescribeInternetTrafficTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInternetTrafficTrendResponse
     *
     * @param DescribeInternetTrafficTrendRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInternetTrafficTrendResponse
     */
    public function describeInternetTrafficTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceCode) {
            @$query['SourceCode'] = $request->sourceCode;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->srcPrivateIP) {
            @$query['SrcPrivateIP'] = $request->srcPrivateIP;
        }

        if (null !== $request->srcPublicIP) {
            @$query['SrcPublicIP'] = $request->srcPublicIP;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->trafficType) {
            @$query['TrafficType'] = $request->trafficType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInternetTrafficTrend',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInternetTrafficTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the trends of Internet traffic.
     *
     * @param request - DescribeInternetTrafficTrendRequest
     *
     * @returns DescribeInternetTrafficTrendResponse
     *
     * @param DescribeInternetTrafficTrendRequest $request
     *
     * @return DescribeInternetTrafficTrendResponse
     */
    public function describeInternetTrafficTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetTrafficTrendWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the breach awareness events of a firewall.
     *
     * @param request - DescribeInvadeEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInvadeEventListResponse
     *
     * @param DescribeInvadeEventListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInvadeEventListResponse
     */
    public function describeInvadeEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetsIP) {
            @$query['AssetsIP'] = $request->assetsIP;
        }

        if (null !== $request->assetsInstanceId) {
            @$query['AssetsInstanceId'] = $request->assetsInstanceId;
        }

        if (null !== $request->assetsInstanceName) {
            @$query['AssetsInstanceName'] = $request->assetsInstanceName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventKey) {
            @$query['EventKey'] = $request->eventKey;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->eventUuid) {
            @$query['EventUuid'] = $request->eventUuid;
        }

        if (null !== $request->isIgnore) {
            @$query['IsIgnore'] = $request->isIgnore;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processStatusList) {
            @$query['ProcessStatusList'] = $request->processStatusList;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInvadeEventList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInvadeEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the breach awareness events of a firewall.
     *
     * @param request - DescribeInvadeEventListRequest
     *
     * @returns DescribeInvadeEventListResponse
     *
     * @param DescribeInvadeEventListRequest $request
     *
     * @return DescribeInvadeEventListResponse
     */
    public function describeInvadeEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvadeEventListWithOptions($request, $runtime);
    }

    /**
     * Get Log Service Information.
     *
     * @param request - DescribeLogStoreInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogStoreInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeLogStoreInfoResponse
     */
    public function describeLogStoreInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeLogStoreInfo',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogStoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Log Service Information.
     *
     * @returns DescribeLogStoreInfoResponse
     *
     * @return DescribeLogStoreInfoResponse
     */
    public function describeLogStoreInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreInfoWithOptions($runtime);
    }

    /**
     * Queries the pagination status of NAT firewalls.
     *
     * @param request - DescribeNatAclPageStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNatAclPageStatusResponse
     *
     * @param DescribeNatAclPageStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeNatAclPageStatusResponse
     */
    public function describeNatAclPageStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNatAclPageStatus',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNatAclPageStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the pagination status of NAT firewalls.
     *
     * @param request - DescribeNatAclPageStatusRequest
     *
     * @returns DescribeNatAclPageStatusResponse
     *
     * @param DescribeNatAclPageStatusRequest $request
     *
     * @return DescribeNatAclPageStatusResponse
     */
    public function describeNatAclPageStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatAclPageStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all access control policies that are created for NAT firewalls.
     *
     * @remarks
     * You can use this operation to query the information about all access control policies that are created for NAT firewalls by page.
     *
     * @param request - DescribeNatFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNatFirewallControlPolicyResponse
     *
     * @param DescribeNatFirewallControlPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeNatFirewallControlPolicyResponse
     */
    public function describeNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNatFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all access control policies that are created for NAT firewalls.
     *
     * @remarks
     * You can use this operation to query the information about all access control policies that are created for NAT firewalls by page.
     *
     * @param request - DescribeNatFirewallControlPolicyRequest
     *
     * @returns DescribeNatFirewallControlPolicyResponse
     *
     * @param DescribeNatFirewallControlPolicyRequest $request
     *
     * @return DescribeNatFirewallControlPolicyResponse
     */
    public function describeNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries details of NAT firewalls.
     *
     * @param request - DescribeNatFirewallListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNatFirewallListResponse
     *
     * @param DescribeNatFirewallListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeNatFirewallListResponse
     */
    public function describeNatFirewallListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->proxyId) {
            @$query['ProxyId'] = $request->proxyId;
        }

        if (null !== $request->proxyName) {
            @$query['ProxyName'] = $request->proxyName;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNatFirewallList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNatFirewallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details of NAT firewalls.
     *
     * @param request - DescribeNatFirewallListRequest
     *
     * @returns DescribeNatFirewallListResponse
     *
     * @param DescribeNatFirewallListRequest $request
     *
     * @return DescribeNatFirewallListResponse
     */
    public function describeNatFirewallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallListWithOptions($request, $runtime);
    }

    /**
     * Queries the priority range of access control policies that are created for a NAT firewall.
     *
     * @remarks
     * You can use this operation to query the priority range of access control policies that are created for a NAT firewall.
     *
     * @param request - DescribeNatFirewallPolicyPriorUsedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNatFirewallPolicyPriorUsedResponse
     *
     * @param DescribeNatFirewallPolicyPriorUsedRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeNatFirewallPolicyPriorUsedResponse
     */
    public function describeNatFirewallPolicyPriorUsedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNatFirewallPolicyPriorUsed',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNatFirewallPolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the priority range of access control policies that are created for a NAT firewall.
     *
     * @remarks
     * You can use this operation to query the priority range of access control policies that are created for a NAT firewall.
     *
     * @param request - DescribeNatFirewallPolicyPriorUsedRequest
     *
     * @returns DescribeNatFirewallPolicyPriorUsedResponse
     *
     * @param DescribeNatFirewallPolicyPriorUsedRequest $request
     *
     * @return DescribeNatFirewallPolicyPriorUsedResponse
     */
    public function describeNatFirewallPolicyPriorUsed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallPolicyPriorUsedWithOptions($request, $runtime);
    }

    /**
     * 概览页-NAT流量趋势
     *
     * @param request - DescribeNatFirewallTrafficTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNatFirewallTrafficTrendResponse
     *
     * @param DescribeNatFirewallTrafficTrendRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeNatFirewallTrafficTrendResponse
     */
    public function describeNatFirewallTrafficTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNatFirewallTrafficTrend',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNatFirewallTrafficTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 概览页-NAT流量趋势
     *
     * @param request - DescribeNatFirewallTrafficTrendRequest
     *
     * @returns DescribeNatFirewallTrafficTrendResponse
     *
     * @param DescribeNatFirewallTrafficTrendRequest $request
     *
     * @return DescribeNatFirewallTrafficTrendResponse
     */
    public function describeNatFirewallTrafficTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatFirewallTrafficTrendWithOptions($request, $runtime);
    }

    /**
     * Get details of outgoing destination IPs.
     *
     * @param request - DescribeOutgoingDestinationIPRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOutgoingDestinationIPResponse
     *
     * @param DescribeOutgoingDestinationIPRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeOutgoingDestinationIPResponse
     */
    public function describeOutgoingDestinationIPWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dstIP) {
            @$query['DstIP'] = $request->dstIP;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->privateIP) {
            @$query['PrivateIP'] = $request->privateIP;
        }

        if (null !== $request->publicIP) {
            @$query['PublicIP'] = $request->publicIP;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tagIdNew) {
            @$query['TagIdNew'] = $request->tagIdNew;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOutgoingDestinationIP',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOutgoingDestinationIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get details of outgoing destination IPs.
     *
     * @param request - DescribeOutgoingDestinationIPRequest
     *
     * @returns DescribeOutgoingDestinationIPResponse
     *
     * @param DescribeOutgoingDestinationIPRequest $request
     *
     * @return DescribeOutgoingDestinationIPResponse
     */
    public function describeOutgoingDestinationIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutgoingDestinationIPWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the domain names in outbound connections.
     *
     * @param request - DescribeOutgoingDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOutgoingDomainResponse
     *
     * @param DescribeOutgoingDomainRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOutgoingDomainResponse
     */
    public function describeOutgoingDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->isAITraffic) {
            @$query['IsAITraffic'] = $request->isAITraffic;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->publicIP) {
            @$query['PublicIP'] = $request->publicIP;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tagIdNew) {
            @$query['TagIdNew'] = $request->tagIdNew;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOutgoingDomain',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOutgoingDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the domain names in outbound connections.
     *
     * @param request - DescribeOutgoingDomainRequest
     *
     * @returns DescribeOutgoingDomainResponse
     *
     * @param DescribeOutgoingDomainRequest $request
     *
     * @return DescribeOutgoingDomainResponse
     */
    public function describeOutgoingDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutgoingDomainWithOptions($request, $runtime);
    }

    /**
     * Queries whether the strict mode is enabled for an access control policy.
     *
     * @remarks
     * You can call the DescribePolicyAdvancedConfig operation to query whether the strict mode is enabled for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePolicyAdvancedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyAdvancedConfigResponse
     *
     * @param DescribePolicyAdvancedConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePolicyAdvancedConfigResponse
     */
    public function describePolicyAdvancedConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePolicyAdvancedConfig',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePolicyAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the strict mode is enabled for an access control policy.
     *
     * @remarks
     * You can call the DescribePolicyAdvancedConfig operation to query whether the strict mode is enabled for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePolicyAdvancedConfigRequest
     *
     * @returns DescribePolicyAdvancedConfigResponse
     *
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
     * Queries the priority range of access control policies.
     *
     * @remarks
     * You can call this operation to query the priority range of the access control policies that match specific query conditions.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePolicyPriorUsedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyPriorUsedResponse
     *
     * @param DescribePolicyPriorUsedRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePolicyPriorUsedResponse
     */
    public function describePolicyPriorUsedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePolicyPriorUsed',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the priority range of access control policies.
     *
     * @remarks
     * You can call this operation to query the priority range of the access control policies that match specific query conditions.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePolicyPriorUsedRequest
     *
     * @returns DescribePolicyPriorUsedResponse
     *
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
     * Queries the details of traffic billed based on the pay-as-you-go billing method.
     *
     * @remarks
     * If you use Cloud Firewall that uses the pay-as-you-go billing method, you can call this operation to query traffic details accurate to the granularity of specific resource instances. If you use Cloud Firewall that uses the subscription billing method, you can call this operation to query the overall traffic details.
     *
     * @param request - DescribePostpayTrafficDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePostpayTrafficDetailResponse
     *
     * @param DescribePostpayTrafficDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePostpayTrafficDetailResponse
     */
    public function describePostpayTrafficDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->searchItem) {
            @$query['SearchItem'] = $request->searchItem;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->trafficType) {
            @$query['TrafficType'] = $request->trafficType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePostpayTrafficDetail',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePostpayTrafficDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of traffic billed based on the pay-as-you-go billing method.
     *
     * @remarks
     * If you use Cloud Firewall that uses the pay-as-you-go billing method, you can call this operation to query traffic details accurate to the granularity of specific resource instances. If you use Cloud Firewall that uses the subscription billing method, you can call this operation to query the overall traffic details.
     *
     * @param request - DescribePostpayTrafficDetailRequest
     *
     * @returns DescribePostpayTrafficDetailResponse
     *
     * @param DescribePostpayTrafficDetailRequest $request
     *
     * @return DescribePostpayTrafficDetailResponse
     */
    public function describePostpayTrafficDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePostpayTrafficDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the total volume of traffic that is billed based on the pay-as-you-go billing method, including all firewalls within the current account.
     *
     * @remarks
     * You can call this operation to query statistics of the current Cloud Firewall from the date of purchase.
     *
     * @param request - DescribePostpayTrafficTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePostpayTrafficTotalResponse
     *
     * @param DescribePostpayTrafficTotalRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePostpayTrafficTotalResponse
     */
    public function describePostpayTrafficTotalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePostpayTrafficTotal',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePostpayTrafficTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total volume of traffic that is billed based on the pay-as-you-go billing method, including all firewalls within the current account.
     *
     * @remarks
     * You can call this operation to query statistics of the current Cloud Firewall from the date of purchase.
     *
     * @param request - DescribePostpayTrafficTotalRequest
     *
     * @returns DescribePostpayTrafficTotalResponse
     *
     * @param DescribePostpayTrafficTotalRequest $request
     *
     * @return DescribePostpayTrafficTotalResponse
     */
    public function describePostpayTrafficTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePostpayTrafficTotalWithOptions($request, $runtime);
    }

    /**
     * Queries prefix lists.
     *
     * @param request - DescribePrefixListsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrefixListsResponse
     *
     * @param DescribePrefixListsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePrefixListsResponse
     */
    public function describePrefixListsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrefixLists',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrefixListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries prefix lists.
     *
     * @param request - DescribePrefixListsRequest
     *
     * @returns DescribePrefixListsResponse
     *
     * @param DescribePrefixListsRequest $request
     *
     * @return DescribePrefixListsResponse
     */
    public function describePrefixLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrefixListsWithOptions($request, $runtime);
    }

    /**
     * 查询私网DNS域名列表.
     *
     * @param request - DescribePrivateDnsDomainNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrivateDnsDomainNameListResponse
     *
     * @param DescribePrivateDnsDomainNameListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePrivateDnsDomainNameListResponse
     */
    public function describePrivateDnsDomainNameListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrivateDnsDomainNameList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrivateDnsDomainNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询私网DNS域名列表.
     *
     * @param request - DescribePrivateDnsDomainNameListRequest
     *
     * @returns DescribePrivateDnsDomainNameListResponse
     *
     * @param DescribePrivateDnsDomainNameListRequest $request
     *
     * @return DescribePrivateDnsDomainNameListResponse
     */
    public function describePrivateDnsDomainNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrivateDnsDomainNameListWithOptions($request, $runtime);
    }

    /**
     * 查询私网DNS终端节点详情.
     *
     * @param request - DescribePrivateDnsEndpointDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrivateDnsEndpointDetailResponse
     *
     * @param DescribePrivateDnsEndpointDetailRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePrivateDnsEndpointDetailResponse
     */
    public function describePrivateDnsEndpointDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrivateDnsEndpointDetail',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrivateDnsEndpointDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询私网DNS终端节点详情.
     *
     * @param request - DescribePrivateDnsEndpointDetailRequest
     *
     * @returns DescribePrivateDnsEndpointDetailResponse
     *
     * @param DescribePrivateDnsEndpointDetailRequest $request
     *
     * @return DescribePrivateDnsEndpointDetailResponse
     */
    public function describePrivateDnsEndpointDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrivateDnsEndpointDetailWithOptions($request, $runtime);
    }

    /**
     * 查询私网DNS终端节点列表.
     *
     * @param request - DescribePrivateDnsEndpointListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrivateDnsEndpointListResponse
     *
     * @param DescribePrivateDnsEndpointListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribePrivateDnsEndpointListResponse
     */
    public function describePrivateDnsEndpointListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrivateDnsEndpointList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrivateDnsEndpointListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询私网DNS终端节点列表.
     *
     * @param request - DescribePrivateDnsEndpointListRequest
     *
     * @returns DescribePrivateDnsEndpointListResponse
     *
     * @param DescribePrivateDnsEndpointListRequest $request
     *
     * @return DescribePrivateDnsEndpointListResponse
     */
    public function describePrivateDnsEndpointList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrivateDnsEndpointListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of intrusion events.
     *
     * @remarks
     * You can call the DescribeRiskEventGroup operation to query and download the details of intrusion events. We recommend that you query the details of 5 to 10 intrusion events at a time. If you do not need to query the geographical information about IP addresses, you can set the NoLocation parameter to true to prevent query timeout.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeRiskEventGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRiskEventGroupResponse
     *
     * @param DescribeRiskEventGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRiskEventGroupResponse
     */
    public function describeRiskEventGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attackApp) {
            @$query['AttackApp'] = $request->attackApp;
        }

        if (null !== $request->attackAppCategory) {
            @$query['AttackAppCategory'] = $request->attackAppCategory;
        }

        if (null !== $request->attackType) {
            @$query['AttackType'] = $request->attackType;
        }

        if (null !== $request->buyVersion) {
            @$query['BuyVersion'] = $request->buyVersion;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->dstIP) {
            @$query['DstIP'] = $request->dstIP;
        }

        if (null !== $request->dstNetworkInstanceId) {
            @$query['DstNetworkInstanceId'] = $request->dstNetworkInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->firewallType) {
            @$query['FirewallType'] = $request->firewallType;
        }

        if (null !== $request->isOnlyPrivateAssoc) {
            @$query['IsOnlyPrivateAssoc'] = $request->isOnlyPrivateAssoc;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->noLocation) {
            @$query['NoLocation'] = $request->noLocation;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleResult) {
            @$query['RuleResult'] = $request->ruleResult;
        }

        if (null !== $request->ruleSource) {
            @$query['RuleSource'] = $request->ruleSource;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->srcIP) {
            @$query['SrcIP'] = $request->srcIP;
        }

        if (null !== $request->srcNetworkInstanceId) {
            @$query['SrcNetworkInstanceId'] = $request->srcNetworkInstanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vulLevel) {
            @$query['VulLevel'] = $request->vulLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRiskEventGroup',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRiskEventGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of intrusion events.
     *
     * @remarks
     * You can call the DescribeRiskEventGroup operation to query and download the details of intrusion events. We recommend that you query the details of 5 to 10 intrusion events at a time. If you do not need to query the geographical information about IP addresses, you can set the NoLocation parameter to true to prevent query timeout.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeRiskEventGroupRequest
     *
     * @returns DescribeRiskEventGroupResponse
     *
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
     * Queries the attack payloads of intrusion events.
     *
     * @param request - DescribeRiskEventPayloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRiskEventPayloadResponse
     *
     * @param DescribeRiskEventPayloadRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRiskEventPayloadResponse
     */
    public function describeRiskEventPayloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dstIP) {
            @$query['DstIP'] = $request->dstIP;
        }

        if (null !== $request->dstVpcId) {
            @$query['DstVpcId'] = $request->dstVpcId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->firewallType) {
            @$query['FirewallType'] = $request->firewallType;
        }

        if (null !== $request->publicIP) {
            @$query['PublicIP'] = $request->publicIP;
        }

        if (null !== $request->srcIP) {
            @$query['SrcIP'] = $request->srcIP;
        }

        if (null !== $request->srcVpcId) {
            @$query['SrcVpcId'] = $request->srcVpcId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->UUID) {
            @$query['UUID'] = $request->UUID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRiskEventPayload',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRiskEventPayloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attack payloads of intrusion events.
     *
     * @param request - DescribeRiskEventPayloadRequest
     *
     * @returns DescribeRiskEventPayloadResponse
     *
     * @param DescribeRiskEventPayloadRequest $request
     *
     * @return DescribeRiskEventPayloadResponse
     */
    public function describeRiskEventPayload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskEventPayloadWithOptions($request, $runtime);
    }

    /**
     * Queries the information about signature library versions.
     *
     * @param request - DescribeSignatureLibVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSignatureLibVersionResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSignatureLibVersionResponse
     */
    public function describeSignatureLibVersionWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeSignatureLibVersion',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSignatureLibVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about signature library versions.
     *
     * @returns DescribeSignatureLibVersionResponse
     *
     * @return DescribeSignatureLibVersionResponse
     */
    public function describeSignatureLibVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignatureLibVersionWithOptions($runtime);
    }

    /**
     * Queries information about the transit routers that are associated with a virtual private cloud (VPC) firewall created for a transit router.
     *
     * @param tmpReq - DescribeTrFirewallPolicyBackUpAssociationListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrFirewallPolicyBackUpAssociationListResponse
     *
     * @param DescribeTrFirewallPolicyBackUpAssociationListRequest $tmpReq
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListResponse
     */
    public function describeTrFirewallPolicyBackUpAssociationListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeTrFirewallPolicyBackUpAssociationListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->candidateList) {
            $request->candidateListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->candidateList, 'CandidateList', 'json');
        }

        $query = [];
        if (null !== $request->candidateListShrink) {
            @$query['CandidateList'] = $request->candidateListShrink;
        }

        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->trFirewallRoutePolicyId) {
            @$query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrFirewallPolicyBackUpAssociationList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrFirewallPolicyBackUpAssociationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the transit routers that are associated with a virtual private cloud (VPC) firewall created for a transit router.
     *
     * @param request - DescribeTrFirewallPolicyBackUpAssociationListRequest
     *
     * @returns DescribeTrFirewallPolicyBackUpAssociationListResponse
     *
     * @param DescribeTrFirewallPolicyBackUpAssociationListRequest $request
     *
     * @return DescribeTrFirewallPolicyBackUpAssociationListResponse
     */
    public function describeTrFirewallPolicyBackUpAssociationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallPolicyBackUpAssociationListWithOptions($request, $runtime);
    }

    /**
     * Queries the routing policies of a virtual private cloud (VPC) firewall that is created for a transit router.
     *
     * @param request - DescribeTrFirewallV2RoutePolicyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrFirewallV2RoutePolicyListResponse
     *
     * @param DescribeTrFirewallV2RoutePolicyListRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeTrFirewallV2RoutePolicyListResponse
     */
    public function describeTrFirewallV2RoutePolicyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrFirewallV2RoutePolicyList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrFirewallV2RoutePolicyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the routing policies of a virtual private cloud (VPC) firewall that is created for a transit router.
     *
     * @param request - DescribeTrFirewallV2RoutePolicyListRequest
     *
     * @returns DescribeTrFirewallV2RoutePolicyListResponse
     *
     * @param DescribeTrFirewallV2RoutePolicyListRequest $request
     *
     * @return DescribeTrFirewallV2RoutePolicyListResponse
     */
    public function describeTrFirewallV2RoutePolicyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallV2RoutePolicyListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the virtual private cloud (VPC) firewalls that are created for transit routers.
     *
     * @param request - DescribeTrFirewallsV2DetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrFirewallsV2DetailResponse
     *
     * @param DescribeTrFirewallsV2DetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeTrFirewallsV2DetailResponse
     */
    public function describeTrFirewallsV2DetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrFirewallsV2Detail',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrFirewallsV2DetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the virtual private cloud (VPC) firewalls that are created for transit routers.
     *
     * @param request - DescribeTrFirewallsV2DetailRequest
     *
     * @returns DescribeTrFirewallsV2DetailResponse
     *
     * @param DescribeTrFirewallsV2DetailRequest $request
     *
     * @return DescribeTrFirewallsV2DetailResponse
     */
    public function describeTrFirewallsV2Detail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2DetailWithOptions($request, $runtime);
    }

    /**
     * Queries the virtual private cloud (VPC) firewalls that are created for transit routers.
     *
     * @param request - DescribeTrFirewallsV2ListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrFirewallsV2ListResponse
     *
     * @param DescribeTrFirewallsV2ListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTrFirewallsV2ListResponse
     */
    public function describeTrFirewallsV2ListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->firewallName) {
            @$query['FirewallName'] = $request->firewallName;
        }

        if (null !== $request->firewallSwitchStatus) {
            @$query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->routeMode) {
            @$query['RouteMode'] = $request->routeMode;
        }

        if (null !== $request->transitRouterId) {
            @$query['TransitRouterId'] = $request->transitRouterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrFirewallsV2List',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrFirewallsV2ListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the virtual private cloud (VPC) firewalls that are created for transit routers.
     *
     * @param request - DescribeTrFirewallsV2ListRequest
     *
     * @returns DescribeTrFirewallsV2ListResponse
     *
     * @param DescribeTrFirewallsV2ListRequest $request
     *
     * @return DescribeTrFirewallsV2ListResponse
     */
    public function describeTrFirewallsV2List($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2ListWithOptions($request, $runtime);
    }

    /**
     * Queries the route tables of the VPC firewalls that are created for transit routers.
     *
     * @param request - DescribeTrFirewallsV2RouteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrFirewallsV2RouteListResponse
     *
     * @param DescribeTrFirewallsV2RouteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeTrFirewallsV2RouteListResponse
     */
    public function describeTrFirewallsV2RouteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->trFirewallRoutePolicyId) {
            @$query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrFirewallsV2RouteList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrFirewallsV2RouteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the route tables of the VPC firewalls that are created for transit routers.
     *
     * @param request - DescribeTrFirewallsV2RouteListRequest
     *
     * @returns DescribeTrFirewallsV2RouteListResponse
     *
     * @param DescribeTrFirewallsV2RouteListRequest $request
     *
     * @return DescribeTrFirewallsV2RouteListResponse
     */
    public function describeTrFirewallsV2RouteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrFirewallsV2RouteListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the traffic of a specified asset that belongs to your Alibaba Cloud account.
     *
     * @param request - DescribeUserAssetIPTrafficInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserAssetIPTrafficInfoResponse
     *
     * @param DescribeUserAssetIPTrafficInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeUserAssetIPTrafficInfoResponse
     */
    public function describeUserAssetIPTrafficInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserAssetIPTrafficInfo',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserAssetIPTrafficInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the traffic of a specified asset that belongs to your Alibaba Cloud account.
     *
     * @param request - DescribeUserAssetIPTrafficInfoRequest
     *
     * @returns DescribeUserAssetIPTrafficInfoResponse
     *
     * @param DescribeUserAssetIPTrafficInfoRequest $request
     *
     * @return DescribeUserAssetIPTrafficInfoResponse
     */
    public function describeUserAssetIPTrafficInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAssetIPTrafficInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the edition information about Cloud Firewall.
     *
     * @remarks
     * You can call this operation to query the edition information about Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeUserBuyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserBuyVersionResponse
     *
     * @param DescribeUserBuyVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserBuyVersionResponse
     */
    public function describeUserBuyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserBuyVersion',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserBuyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the edition information about Cloud Firewall.
     *
     * @remarks
     * You can call this operation to query the edition information about Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeUserBuyVersionRequest
     *
     * @returns DescribeUserBuyVersionResponse
     *
     * @param DescribeUserBuyVersionRequest $request
     *
     * @return DescribeUserBuyVersionResponse
     */
    public function describeUserBuyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBuyVersionWithOptions($request, $runtime);
    }

    /**
     * 获取用户IPS白名单.
     *
     * @param request - DescribeUserIPSWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserIPSWhitelistResponse
     *
     * @param DescribeUserIPSWhitelistRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUserIPSWhitelistResponse
     */
    public function describeUserIPSWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserIPSWhitelist',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户IPS白名单.
     *
     * @param request - DescribeUserIPSWhitelistRequest
     *
     * @returns DescribeUserIPSWhitelistResponse
     *
     * @param DescribeUserIPSWhitelistRequest $request
     *
     * @return DescribeUserIPSWhitelistResponse
     */
    public function describeUserIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all policy groups of access control policies that are created for virtual private cloud (VPC) firewalls.
     *
     * @remarks
     * You can call the DescribeVpcFirewallAclGroupList operation to query the information about all policy groups of access control policies that are created for VPC firewalls.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallAclGroupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallAclGroupListResponse
     *
     * @param DescribeVpcFirewallAclGroupListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVpcFirewallAclGroupListResponse
     */
    public function describeVpcFirewallAclGroupListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->firewallConfigureStatus) {
            @$query['FirewallConfigureStatus'] = $request->firewallConfigureStatus;
        }

        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallAclGroupList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallAclGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all policy groups of access control policies that are created for virtual private cloud (VPC) firewalls.
     *
     * @remarks
     * You can call the DescribeVpcFirewallAclGroupList operation to query the information about all policy groups of access control policies that are created for VPC firewalls.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallAclGroupListRequest
     *
     * @returns DescribeVpcFirewallAclGroupListResponse
     *
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
     * Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall protects access traffic between a VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the DescribeVpcFirewallCenDetail operation to query the details about a VPC firewall. The VPC firewall protects access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallCenDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallCenDetailResponse
     *
     * @param DescribeVpcFirewallCenDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVpcFirewallCenDetailResponse
     */
    public function describeVpcFirewallCenDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->networkInstanceId) {
            @$query['NetworkInstanceId'] = $request->networkInstanceId;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallCenDetail',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallCenDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall protects access traffic between a VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the DescribeVpcFirewallCenDetail operation to query the details about a VPC firewall. The VPC firewall protects access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallCenDetailRequest
     *
     * @returns DescribeVpcFirewallCenDetailResponse
     *
     * @param DescribeVpcFirewallCenDetailRequest $request
     *
     * @return DescribeVpcFirewallCenDetailResponse
     */
    public function describeVpcFirewallCenDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallCenDetailWithOptions($request, $runtime);
    }

    /**
     * Queries virtual private cloud (VPC) firewalls. Each VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the DescribeVpcFirewallCenList operation to query VPC firewalls. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallCenListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallCenListResponse
     *
     * @param DescribeVpcFirewallCenListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVpcFirewallCenListResponse
     */
    public function describeVpcFirewallCenListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->firewallSwitchStatus) {
            @$query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->networkInstanceId) {
            @$query['NetworkInstanceId'] = $request->networkInstanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->routeMode) {
            @$query['RouteMode'] = $request->routeMode;
        }

        if (null !== $request->transitRouterType) {
            @$query['TransitRouterType'] = $request->transitRouterType;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        if (null !== $request->vpcFirewallName) {
            @$query['VpcFirewallName'] = $request->vpcFirewallName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallCenList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallCenListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries virtual private cloud (VPC) firewalls. Each VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the DescribeVpcFirewallCenList operation to query VPC firewalls. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallCenListRequest
     *
     * @returns DescribeVpcFirewallCenListResponse
     *
     * @param DescribeVpcFirewallCenListRequest $request
     *
     * @return DescribeVpcFirewallCenListResponse
     */
    public function describeVpcFirewallCenList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallCenListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the access control policies for a specified virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the DescribeVpcFirewallControlPolicy operation to query the information about all access control policies that are created for a specified VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallControlPolicyResponse
     *
     * @param DescribeVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVpcFirewallControlPolicyResponse
     */
    public function describeVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the access control policies for a specified virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the DescribeVpcFirewallControlPolicy operation to query the information about all access control policies that are created for a specified VPC firewall. Different access control policies are used when a VPC firewall is used to protect traffic between two VPCs that are connected by using a Cloud Enterprise Network (CEN) instance or an Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallControlPolicyRequest
     *
     * @returns DescribeVpcFirewallControlPolicyResponse
     *
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
     * Queries the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the DescribeVpcFirewallDefaultIPSConfig operation to query the intrusion prevention configurations of a VPC firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallDefaultIPSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallDefaultIPSConfigResponse
     *
     * @param DescribeVpcFirewallDefaultIPSConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponse
     */
    public function describeVpcFirewallDefaultIPSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallDefaultIPSConfig',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call the DescribeVpcFirewallDefaultIPSConfig operation to query the intrusion prevention configurations of a VPC firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallDefaultIPSConfigRequest
     *
     * @returns DescribeVpcFirewallDefaultIPSConfigResponse
     *
     * @param DescribeVpcFirewallDefaultIPSConfigRequest $request
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponse
     */
    public function describeVpcFirewallDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the DescribeVpcFirewallDetail operation to query the details about a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://www.alibabacloud.com/help/en/cloud-firewall/latest/createvpcfirewallconfigure) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallDetailResponse
     *
     * @param DescribeVpcFirewallDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVpcFirewallDetailResponse
     */
    public function describeVpcFirewallDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->localVpcId) {
            @$query['LocalVpcId'] = $request->localVpcId;
        }

        if (null !== $request->peerVpcId) {
            @$query['PeerVpcId'] = $request->peerVpcId;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallDetail',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the DescribeVpcFirewallDetail operation to query the details about a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://www.alibabacloud.com/help/en/cloud-firewall/latest/createvpcfirewallconfigure) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallDetailRequest
     *
     * @returns DescribeVpcFirewallDetailResponse
     *
     * @param DescribeVpcFirewallDetailRequest $request
     *
     * @return DescribeVpcFirewallDetailResponse
     */
    public function describeVpcFirewallDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the IPS whitelist of a virtual private cloud (VPC) firewall.
     *
     * @param request - DescribeVpcFirewallIPSWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallIPSWhitelistResponse
     *
     * @param DescribeVpcFirewallIPSWhitelistRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVpcFirewallIPSWhitelistResponse
     */
    public function describeVpcFirewallIPSWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallIPSWhitelist',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IPS whitelist of a virtual private cloud (VPC) firewall.
     *
     * @param request - DescribeVpcFirewallIPSWhitelistRequest
     *
     * @returns DescribeVpcFirewallIPSWhitelistResponse
     *
     * @param DescribeVpcFirewallIPSWhitelistRequest $request
     *
     * @return DescribeVpcFirewallIPSWhitelistResponse
     */
    public function describeVpcFirewallIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * Queries the details about virtual private cloud (VPC) firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the DescribeVpcFirewallList operation to query the details about VPC firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallListResponse
     *
     * @param DescribeVpcFirewallListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVpcFirewallListResponse
     */
    public function describeVpcFirewallListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectSubType) {
            @$query['ConnectSubType'] = $request->connectSubType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->firewallSwitchStatus) {
            @$query['FirewallSwitchStatus'] = $request->firewallSwitchStatus;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->peerUid) {
            @$query['PeerUid'] = $request->peerUid;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        if (null !== $request->vpcFirewallName) {
            @$query['VpcFirewallName'] = $request->vpcFirewallName;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about virtual private cloud (VPC) firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the DescribeVpcFirewallList operation to query the details about VPC firewalls by page. Each VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     * ### Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallListRequest
     *
     * @returns DescribeVpcFirewallListResponse
     *
     * @param DescribeVpcFirewallListRequest $request
     *
     * @return DescribeVpcFirewallListResponse
     */
    public function describeVpcFirewallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcFirewallListWithOptions($request, $runtime);
    }

    /**
     * Queries the priority range of access control policies that are created for a virtual private cloud (VPC) firewall in a specific policy group.
     *
     * @remarks
     * You can call this operation to query the priority range of access control policies that are created for a VPC firewall in a specific policy group.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallPolicyPriorUsedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcFirewallPolicyPriorUsedResponse
     *
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse
     */
    public function describeVpcFirewallPolicyPriorUsedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcFirewallPolicyPriorUsed',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcFirewallPolicyPriorUsedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the priority range of access control policies that are created for a virtual private cloud (VPC) firewall in a specific policy group.
     *
     * @remarks
     * You can call this operation to query the priority range of access control policies that are created for a VPC firewall in a specific policy group.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeVpcFirewallPolicyPriorUsedRequest
     *
     * @returns DescribeVpcFirewallPolicyPriorUsedResponse
     *
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
     * Queries virtual private clouds (VPCs).
     *
     * @param request - DescribeVpcListLiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcListLiteResponse
     *
     * @param DescribeVpcListLiteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVpcListLiteResponse
     */
    public function describeVpcListLiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcName) {
            @$query['VpcName'] = $request->vpcName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcListLite',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcListLiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries virtual private clouds (VPCs).
     *
     * @param request - DescribeVpcListLiteRequest
     *
     * @returns DescribeVpcListLiteResponse
     *
     * @param DescribeVpcListLiteRequest $request
     *
     * @return DescribeVpcListLiteResponse
     */
    public function describeVpcListLite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcListLiteWithOptions($request, $runtime);
    }

    /**
     * Queries virtual private cloud (VPC) zones.
     *
     * @param request - DescribeVpcZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcZoneResponse
     *
     * @param DescribeVpcZoneRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeVpcZoneResponse
     */
    public function describeVpcZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environment) {
            @$query['Environment'] = $request->environment;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcZone',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries virtual private cloud (VPC) zones.
     *
     * @param request - DescribeVpcZoneRequest
     *
     * @returns DescribeVpcZoneResponse
     *
     * @param DescribeVpcZoneRequest $request
     *
     * @return DescribeVpcZoneResponse
     */
    public function describeVpcZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcZoneWithOptions($request, $runtime);
    }

    /**
     * Queries the vulnerabilities that are supported by Cloud Firewall.
     *
     * @param request - DescribeVulnerabilityProtectedListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVulnerabilityProtectedListResponse
     *
     * @param DescribeVulnerabilityProtectedListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVulnerabilityProtectedListResponse
     */
    public function describeVulnerabilityProtectedListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attackType) {
            @$query['AttackType'] = $request->attackType;
        }

        if (null !== $request->buyVersion) {
            @$query['BuyVersion'] = $request->buyVersion;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortKey) {
            @$query['SortKey'] = $request->sortKey;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        if (null !== $request->vulnCveName) {
            @$query['VulnCveName'] = $request->vulnCveName;
        }

        if (null !== $request->vulnLevel) {
            @$query['VulnLevel'] = $request->vulnLevel;
        }

        if (null !== $request->vulnResource) {
            @$query['VulnResource'] = $request->vulnResource;
        }

        if (null !== $request->vulnStatus) {
            @$query['VulnStatus'] = $request->vulnStatus;
        }

        if (null !== $request->vulnType) {
            @$query['VulnType'] = $request->vulnType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVulnerabilityProtectedList',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVulnerabilityProtectedListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the vulnerabilities that are supported by Cloud Firewall.
     *
     * @param request - DescribeVulnerabilityProtectedListRequest
     *
     * @returns DescribeVulnerabilityProtectedListResponse
     *
     * @param DescribeVulnerabilityProtectedListRequest $request
     *
     * @return DescribeVulnerabilityProtectedListResponse
     */
    public function describeVulnerabilityProtectedList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulnerabilityProtectedListWithOptions($request, $runtime);
    }

    /**
     * Modifies the address book that is specified in an access control policy.
     *
     * @remarks
     * You can call the ModifyAddressBook operation to modify the address book that is configured for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyAddressBookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAddressBookResponse
     *
     * @param ModifyAddressBookRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAddressBookResponse
     */
    public function modifyAddressBookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressList) {
            @$query['AddressList'] = $request->addressList;
        }

        if (null !== $request->autoAddTagEcs) {
            @$query['AutoAddTagEcs'] = $request->autoAddTagEcs;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupUuid) {
            @$query['GroupUuid'] = $request->groupUuid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->tagList) {
            @$query['TagList'] = $request->tagList;
        }

        if (null !== $request->tagRelation) {
            @$query['TagRelation'] = $request->tagRelation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAddressBook',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAddressBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the address book that is specified in an access control policy.
     *
     * @remarks
     * You can call the ModifyAddressBook operation to modify the address book that is configured for access control.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyAddressBookRequest
     *
     * @returns ModifyAddressBookResponse
     *
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
     * Modifies the configurations of an access control policy.
     *
     * @remarks
     * You can call this operation to modify the configurations of an access control policy. The policy allows Cloud Firewall to allow, deny, or monitor the traffic that passes through Cloud Firewall.
     * ## [](#qps)Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyControlPolicyResponse
     *
     * @param ModifyControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyControlPolicyResponse
     */
    public function modifyControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->applicationNameList) {
            @$query['ApplicationNameList'] = $request->applicationNameList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destPort) {
            @$query['DestPort'] = $request->destPort;
        }

        if (null !== $request->destPortGroup) {
            @$query['DestPortGroup'] = $request->destPortGroup;
        }

        if (null !== $request->destPortType) {
            @$query['DestPortType'] = $request->destPortType;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainResolveType) {
            @$query['DomainResolveType'] = $request->domainResolveType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatDays) {
            @$query['RepeatDays'] = $request->repeatDays;
        }

        if (null !== $request->repeatEndTime) {
            @$query['RepeatEndTime'] = $request->repeatEndTime;
        }

        if (null !== $request->repeatStartTime) {
            @$query['RepeatStartTime'] = $request->repeatStartTime;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an access control policy.
     *
     * @remarks
     * You can call this operation to modify the configurations of an access control policy. The policy allows Cloud Firewall to allow, deny, or monitor the traffic that passes through Cloud Firewall.
     * ## [](#qps)Limit
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyControlPolicyRequest
     *
     * @returns ModifyControlPolicyResponse
     *
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
     * Modifies the priority of an IPv4 access control policy for the Internet firewall. An IPv4 access control policy refers to a policy whose source IP address and destination IP address are IPv4 addresses.
     *
     * @remarks
     * You can use this operation to modify the priority of an IPv4 access control policy for the Internet firewall. No API operations are provided for you to modify the priority of an IPv6 access control policy for the Internet firewall.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyControlPolicyPositionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyControlPolicyPositionResponse
     *
     * @param ModifyControlPolicyPositionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyControlPolicyPositionResponse
     */
    public function modifyControlPolicyPositionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newOrder) {
            @$query['NewOrder'] = $request->newOrder;
        }

        if (null !== $request->oldOrder) {
            @$query['OldOrder'] = $request->oldOrder;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyControlPolicyPosition',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the priority of an IPv4 access control policy for the Internet firewall. An IPv4 access control policy refers to a policy whose source IP address and destination IP address are IPv4 addresses.
     *
     * @remarks
     * You can use this operation to modify the priority of an IPv4 access control policy for the Internet firewall. No API operations are provided for you to modify the priority of an IPv6 access control policy for the Internet firewall.
     * ## [](#qps)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyControlPolicyPositionRequest
     *
     * @returns ModifyControlPolicyPositionResponse
     *
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
     * Modifies the priority of an access control policy.
     *
     * @param request - ModifyControlPolicyPriorityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyControlPolicyPriorityResponse
     *
     * @param ModifyControlPolicyPriorityRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyControlPolicyPriorityResponse
     */
    public function modifyControlPolicyPriorityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyControlPolicyPriority',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyControlPolicyPriorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the priority of an access control policy.
     *
     * @param request - ModifyControlPolicyPriorityRequest
     *
     * @returns ModifyControlPolicyPriorityResponse
     *
     * @param ModifyControlPolicyPriorityRequest $request
     *
     * @return ModifyControlPolicyPriorityResponse
     */
    public function modifyControlPolicyPriority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyControlPolicyPriorityWithOptions($request, $runtime);
    }

    /**
     * Modifies the default configuration of the intrusion prevention system (IPS).
     *
     * @param request - ModifyDefaultIPSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefaultIPSConfigResponse
     *
     * @param ModifyDefaultIPSConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDefaultIPSConfigResponse
     */
    public function modifyDefaultIPSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->basicRules) {
            @$query['BasicRules'] = $request->basicRules;
        }

        if (null !== $request->ctiRules) {
            @$query['CtiRules'] = $request->ctiRules;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maxSdl) {
            @$query['MaxSdl'] = $request->maxSdl;
        }

        if (null !== $request->patchRules) {
            @$query['PatchRules'] = $request->patchRules;
        }

        if (null !== $request->ruleClass) {
            @$query['RuleClass'] = $request->ruleClass;
        }

        if (null !== $request->runMode) {
            @$query['RunMode'] = $request->runMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDefaultIPSConfig',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the default configuration of the intrusion prevention system (IPS).
     *
     * @param request - ModifyDefaultIPSConfigRequest
     *
     * @returns ModifyDefaultIPSConfigResponse
     *
     * @param ModifyDefaultIPSConfigRequest $request
     *
     * @return ModifyDefaultIPSConfigResponse
     */
    public function modifyDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * 修改DNS防火墙规则.
     *
     * @param request - ModifyDnsFirewallPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDnsFirewallPolicyResponse
     *
     * @param ModifyDnsFirewallPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDnsFirewallPolicyResponse
     */
    public function modifyDnsFirewallPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDnsFirewallPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDnsFirewallPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改DNS防火墙规则.
     *
     * @param request - ModifyDnsFirewallPolicyRequest
     *
     * @returns ModifyDnsFirewallPolicyResponse
     *
     * @param ModifyDnsFirewallPolicyRequest $request
     *
     * @return ModifyDnsFirewallPolicyResponse
     */
    public function modifyDnsFirewallPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDnsFirewallPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the status of a routing policy.
     *
     * @param request - ModifyFirewallV2RoutePolicySwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFirewallV2RoutePolicySwitchResponse
     *
     * @param ModifyFirewallV2RoutePolicySwitchRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyFirewallV2RoutePolicySwitchResponse
     */
    public function modifyFirewallV2RoutePolicySwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->shouldRecover) {
            @$query['ShouldRecover'] = $request->shouldRecover;
        }

        if (null !== $request->trFirewallRoutePolicyId) {
            @$query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }

        if (null !== $request->trFirewallRoutePolicySwitchStatus) {
            @$query['TrFirewallRoutePolicySwitchStatus'] = $request->trFirewallRoutePolicySwitchStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFirewallV2RoutePolicySwitch',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFirewallV2RoutePolicySwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the status of a routing policy.
     *
     * @param request - ModifyFirewallV2RoutePolicySwitchRequest
     *
     * @returns ModifyFirewallV2RoutePolicySwitchResponse
     *
     * @param ModifyFirewallV2RoutePolicySwitchRequest $request
     *
     * @return ModifyFirewallV2RoutePolicySwitchResponse
     */
    public function modifyFirewallV2RoutePolicySwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFirewallV2RoutePolicySwitchWithOptions($request, $runtime);
    }

    /**
     * Updates the information about members in Cloud Firewall.
     *
     * @remarks
     * You can call the ModifyInstanceMemberAttributes operation to update the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyInstanceMemberAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceMemberAttributesResponse
     *
     * @param ModifyInstanceMemberAttributesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyInstanceMemberAttributesResponse
     */
    public function modifyInstanceMemberAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->members) {
            @$query['Members'] = $request->members;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceMemberAttributes',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceMemberAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about members in Cloud Firewall.
     *
     * @remarks
     * You can call the ModifyInstanceMemberAttributes operation to update the information about members in Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyInstanceMemberAttributesRequest
     *
     * @returns ModifyInstanceMemberAttributesResponse
     *
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
     * Modifies the configurations of an access control policy that is created for a NAT firewall.
     *
     * @remarks
     * You can use this operation to modify the configurations of an access control policy. The policy is used to allow, deny, or monitor traffic that reaches a NAT firewall.
     *
     * @param request - ModifyNatFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNatFirewallControlPolicyResponse
     *
     * @param ModifyNatFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyNatFirewallControlPolicyResponse
     */
    public function modifyNatFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->applicationNameList) {
            @$query['ApplicationNameList'] = $request->applicationNameList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destPort) {
            @$query['DestPort'] = $request->destPort;
        }

        if (null !== $request->destPortGroup) {
            @$query['DestPortGroup'] = $request->destPortGroup;
        }

        if (null !== $request->destPortType) {
            @$query['DestPortType'] = $request->destPortType;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainResolveType) {
            @$query['DomainResolveType'] = $request->domainResolveType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatDays) {
            @$query['RepeatDays'] = $request->repeatDays;
        }

        if (null !== $request->repeatEndTime) {
            @$query['RepeatEndTime'] = $request->repeatEndTime;
        }

        if (null !== $request->repeatStartTime) {
            @$query['RepeatStartTime'] = $request->repeatStartTime;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNatFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNatFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an access control policy that is created for a NAT firewall.
     *
     * @remarks
     * You can use this operation to modify the configurations of an access control policy. The policy is used to allow, deny, or monitor traffic that reaches a NAT firewall.
     *
     * @param request - ModifyNatFirewallControlPolicyRequest
     *
     * @returns ModifyNatFirewallControlPolicyResponse
     *
     * @param ModifyNatFirewallControlPolicyRequest $request
     *
     * @return ModifyNatFirewallControlPolicyResponse
     */
    public function modifyNatFirewallControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatFirewallControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the priority of an access control policy that is created for a NAT firewall.
     *
     * @param request - ModifyNatFirewallControlPolicyPositionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNatFirewallControlPolicyPositionResponse
     *
     * @param ModifyNatFirewallControlPolicyPositionRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ModifyNatFirewallControlPolicyPositionResponse
     */
    public function modifyNatFirewallControlPolicyPositionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->newOrder) {
            @$query['NewOrder'] = $request->newOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNatFirewallControlPolicyPosition',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNatFirewallControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the priority of an access control policy that is created for a NAT firewall.
     *
     * @param request - ModifyNatFirewallControlPolicyPositionRequest
     *
     * @returns ModifyNatFirewallControlPolicyPositionResponse
     *
     * @param ModifyNatFirewallControlPolicyPositionRequest $request
     *
     * @return ModifyNatFirewallControlPolicyPositionResponse
     */
    public function modifyNatFirewallControlPolicyPosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNatFirewallControlPolicyPositionWithOptions($request, $runtime);
    }

    /**
     * Modifies information about an operation on an object group.
     *
     * @param request - ModifyObjectGroupOperationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyObjectGroupOperationResponse
     *
     * @param ModifyObjectGroupOperationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyObjectGroupOperationResponse
     */
    public function modifyObjectGroupOperationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->objectList) {
            @$query['ObjectList'] = $request->objectList;
        }

        if (null !== $request->objectOperation) {
            @$query['ObjectOperation'] = $request->objectOperation;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyObjectGroupOperation',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyObjectGroupOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies information about an operation on an object group.
     *
     * @param request - ModifyObjectGroupOperationRequest
     *
     * @returns ModifyObjectGroupOperationResponse
     *
     * @param ModifyObjectGroupOperationRequest $request
     *
     * @return ModifyObjectGroupOperationResponse
     */
    public function modifyObjectGroupOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyObjectGroupOperationWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the strict mode for an access control policy.
     *
     * @remarks
     * You can call the ModifyPolicyAdvancedConfig operation to enable or disable the strict mode for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyPolicyAdvancedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolicyAdvancedConfigResponse
     *
     * @param ModifyPolicyAdvancedConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyPolicyAdvancedConfigResponse
     */
    public function modifyPolicyAdvancedConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eips) {
            @$query['Eips'] = $request->eips;
        }

        if (null !== $request->internetSwitch) {
            @$query['InternetSwitch'] = $request->internetSwitch;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicyAdvancedConfig',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPolicyAdvancedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the strict mode for an access control policy.
     *
     * @remarks
     * You can call the ModifyPolicyAdvancedConfig operation to enable or disable the strict mode for an access control policy.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyPolicyAdvancedConfigRequest
     *
     * @returns ModifyPolicyAdvancedConfigResponse
     *
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
     * 修改私网DNS终端节点.
     *
     * @param request - ModifyPrivateDnsEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrivateDnsEndpointResponse
     *
     * @param ModifyPrivateDnsEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyPrivateDnsEndpointResponse
     */
    public function modifyPrivateDnsEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessInstanceId) {
            @$query['AccessInstanceId'] = $request->accessInstanceId;
        }

        if (null !== $request->accessInstanceName) {
            @$query['AccessInstanceName'] = $request->accessInstanceName;
        }

        if (null !== $request->primaryDns) {
            @$query['PrimaryDns'] = $request->primaryDns;
        }

        if (null !== $request->privateDnsType) {
            @$query['PrivateDnsType'] = $request->privateDnsType;
        }

        if (null !== $request->regionNo) {
            @$query['RegionNo'] = $request->regionNo;
        }

        if (null !== $request->standbyDns) {
            @$query['StandbyDns'] = $request->standbyDns;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPrivateDnsEndpoint',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPrivateDnsEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改私网DNS终端节点.
     *
     * @param request - ModifyPrivateDnsEndpointRequest
     *
     * @returns ModifyPrivateDnsEndpointResponse
     *
     * @param ModifyPrivateDnsEndpointRequest $request
     *
     * @return ModifyPrivateDnsEndpointResponse
     */
    public function modifyPrivateDnsEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrivateDnsEndpointWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of a virtual private cloud (VPC) firewall that is created for a transit router.
     *
     * @param request - ModifyTrFirewallV2ConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTrFirewallV2ConfigurationResponse
     *
     * @param ModifyTrFirewallV2ConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyTrFirewallV2ConfigurationResponse
     */
    public function modifyTrFirewallV2ConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->firewallName) {
            @$query['FirewallName'] = $request->firewallName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTrFirewallV2Configuration',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTrFirewallV2ConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a virtual private cloud (VPC) firewall that is created for a transit router.
     *
     * @param request - ModifyTrFirewallV2ConfigurationRequest
     *
     * @returns ModifyTrFirewallV2ConfigurationResponse
     *
     * @param ModifyTrFirewallV2ConfigurationRequest $request
     *
     * @return ModifyTrFirewallV2ConfigurationResponse
     */
    public function modifyTrFirewallV2Configuration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrFirewallV2ConfigurationWithOptions($request, $runtime);
    }

    /**
     * Modifies the effective scope of the routing policy created for the VPC firewall for a transit router.
     *
     * @param tmpReq - ModifyTrFirewallV2RoutePolicyScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTrFirewallV2RoutePolicyScopeResponse
     *
     * @param ModifyTrFirewallV2RoutePolicyScopeRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeResponse
     */
    public function modifyTrFirewallV2RoutePolicyScopeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyTrFirewallV2RoutePolicyScopeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destCandidateList) {
            $request->destCandidateListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destCandidateList, 'DestCandidateList', 'json');
        }

        if (null !== $tmpReq->srcCandidateList) {
            $request->srcCandidateListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->srcCandidateList, 'SrcCandidateList', 'json');
        }

        $query = [];
        if (null !== $request->destCandidateListShrink) {
            @$query['DestCandidateList'] = $request->destCandidateListShrink;
        }

        if (null !== $request->firewallId) {
            @$query['FirewallId'] = $request->firewallId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->shouldRecover) {
            @$query['ShouldRecover'] = $request->shouldRecover;
        }

        if (null !== $request->srcCandidateListShrink) {
            @$query['SrcCandidateList'] = $request->srcCandidateListShrink;
        }

        if (null !== $request->trFirewallRoutePolicyId) {
            @$query['TrFirewallRoutePolicyId'] = $request->trFirewallRoutePolicyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTrFirewallV2RoutePolicyScope',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTrFirewallV2RoutePolicyScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the effective scope of the routing policy created for the VPC firewall for a transit router.
     *
     * @param request - ModifyTrFirewallV2RoutePolicyScopeRequest
     *
     * @returns ModifyTrFirewallV2RoutePolicyScopeResponse
     *
     * @param ModifyTrFirewallV2RoutePolicyScopeRequest $request
     *
     * @return ModifyTrFirewallV2RoutePolicyScopeResponse
     */
    public function modifyTrFirewallV2RoutePolicyScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrFirewallV2RoutePolicyScopeWithOptions($request, $runtime);
    }

    /**
     * 修改用户IPS白名单.
     *
     * @param request - ModifyUserIPSWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserIPSWhitelistResponse
     *
     * @param ModifyUserIPSWhitelistRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyUserIPSWhitelistResponse
     */
    public function modifyUserIPSWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->listType) {
            @$query['ListType'] = $request->listType;
        }

        if (null !== $request->listValue) {
            @$query['ListValue'] = $request->listValue;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->whiteType) {
            @$query['WhiteType'] = $request->whiteType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserIPSWhitelist',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改用户IPS白名单.
     *
     * @param request - ModifyUserIPSWhitelistRequest
     *
     * @returns ModifyUserIPSWhitelistResponse
     *
     * @param ModifyUserIPSWhitelistRequest $request
     *
     * @return ModifyUserIPSWhitelistResponse
     */
    public function modifyUserIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallCenConfigureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallCenConfigureResponse
     *
     * @param ModifyVpcFirewallCenConfigureRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyVpcFirewallCenConfigureResponse
     */
    public function modifyVpcFirewallCenConfigureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        if (null !== $request->vpcFirewallName) {
            @$query['VpcFirewallName'] = $request->vpcFirewallName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallCenConfigure',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallCenConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the ModifyVpcFirewallCenConfigure operation to modify the configurations of a VPC firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallCenConfigureRequest
     *
     * @returns ModifyVpcFirewallCenConfigureResponse
     *
     * @param ModifyVpcFirewallCenConfigureRequest $request
     *
     * @return ModifyVpcFirewallCenConfigureResponse
     */
    public function modifyVpcFirewallCenConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallCenConfigureWithOptions($request, $runtime);
    }

    /**
     * Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the ModifyVpcFirewallCenSwitchStatus operation to enable or disable a VPC firewall. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. After you enable the VPC firewall, the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. After you disable the VPC firewall, the VPC firewall no longer protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance.
     * Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallCenSwitchStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallCenSwitchStatusResponse
     *
     * @param ModifyVpcFirewallCenSwitchStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyVpcFirewallCenSwitchStatusResponse
     */
    public function modifyVpcFirewallCenSwitchStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallSwitch) {
            @$query['FirewallSwitch'] = $request->firewallSwitch;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallCenSwitchStatus',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallCenSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * You can call the ModifyVpcFirewallCenSwitchStatus operation to enable or disable a VPC firewall. A VPC firewall protects mutual access traffic between a specified VPC and a network instance that is attached to a CEN instance. The network instance can be a VPC, a virtual border router (VBR), or a Cloud Connect Network (CCN) instance. After you enable the VPC firewall, the VPC firewall protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance. After you disable the VPC firewall, the VPC firewall no longer protects mutual access traffic between a VPC and a specified network instance that is attached to a CEN instance.
     * Before you call this operation, make sure that you have created a VPC firewall by calling the [CreateVpcFirewallCenConfigure](https://help.aliyun.com/document_detail/345772.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallCenSwitchStatusRequest
     *
     * @returns ModifyVpcFirewallCenSwitchStatusResponse
     *
     * @param ModifyVpcFirewallCenSwitchStatusRequest $request
     *
     * @return ModifyVpcFirewallCenSwitchStatusResponse
     */
    public function modifyVpcFirewallCenSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallCenSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the ModifyVpcFirewallConfigure operation to modify the configurations of a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallConfigureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallConfigureResponse
     *
     * @param ModifyVpcFirewallConfigureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyVpcFirewallConfigureResponse
     */
    public function modifyVpcFirewallConfigureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->localVpcCidrTableList) {
            @$query['LocalVpcCidrTableList'] = $request->localVpcCidrTableList;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->peerVpcCidrTableList) {
            @$query['PeerVpcCidrTableList'] = $request->peerVpcCidrTableList;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        if (null !== $request->vpcFirewallName) {
            @$query['VpcFirewallName'] = $request->vpcFirewallName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallConfigure',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallConfigureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a virtual private cloud (VPC) firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the ModifyVpcFirewallConfigure operation to modify the configurations of a VPC firewall. The VPC firewall controls traffic between two VPCs that are connected by using an Express Connect circuit. Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallConfigureRequest
     *
     * @returns ModifyVpcFirewallConfigureResponse
     *
     * @param ModifyVpcFirewallConfigureRequest $request
     *
     * @return ModifyVpcFirewallConfigureResponse
     */
    public function modifyVpcFirewallConfigure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallConfigureWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of an access control policy that is created for a virtual private cloud (VPC) firewall in a specified policy group.
     *
     * @remarks
     * You can call the ModifyVpcFirewallControlPolicy operation to modify the configurations of an access control policy that is created for a VPC firewall in a specified policy group. Different access control policies are used for the VPC firewalls that are used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewalls that are used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallControlPolicyResponse
     *
     * @param ModifyVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyVpcFirewallControlPolicyResponse
     */
    public function modifyVpcFirewallControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclAction) {
            @$query['AclAction'] = $request->aclAction;
        }

        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->applicationNameList) {
            @$query['ApplicationNameList'] = $request->applicationNameList;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destPort) {
            @$query['DestPort'] = $request->destPort;
        }

        if (null !== $request->destPortGroup) {
            @$query['DestPortGroup'] = $request->destPortGroup;
        }

        if (null !== $request->destPortType) {
            @$query['DestPortType'] = $request->destPortType;
        }

        if (null !== $request->destination) {
            @$query['Destination'] = $request->destination;
        }

        if (null !== $request->destinationType) {
            @$query['DestinationType'] = $request->destinationType;
        }

        if (null !== $request->domainResolveType) {
            @$query['DomainResolveType'] = $request->domainResolveType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->proto) {
            @$query['Proto'] = $request->proto;
        }

        if (null !== $request->release) {
            @$query['Release'] = $request->release;
        }

        if (null !== $request->repeatDays) {
            @$query['RepeatDays'] = $request->repeatDays;
        }

        if (null !== $request->repeatEndTime) {
            @$query['RepeatEndTime'] = $request->repeatEndTime;
        }

        if (null !== $request->repeatStartTime) {
            @$query['RepeatStartTime'] = $request->repeatStartTime;
        }

        if (null !== $request->repeatType) {
            @$query['RepeatType'] = $request->repeatType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallControlPolicy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an access control policy that is created for a virtual private cloud (VPC) firewall in a specified policy group.
     *
     * @remarks
     * You can call the ModifyVpcFirewallControlPolicy operation to modify the configurations of an access control policy that is created for a VPC firewall in a specified policy group. Different access control policies are used for the VPC firewalls that are used to protect each Cloud Enterprise Network (CEN) instance and the VPC firewalls that are used to protect each Express Connect circuit.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallControlPolicyRequest
     *
     * @returns ModifyVpcFirewallControlPolicyResponse
     *
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
     * Modifies the priority of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *
     * @remarks
     * You can use this operation to modify the priority of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallControlPolicyPositionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallControlPolicyPositionResponse
     *
     * @param ModifyVpcFirewallControlPolicyPositionRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ModifyVpcFirewallControlPolicyPositionResponse
     */
    public function modifyVpcFirewallControlPolicyPositionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newOrder) {
            @$query['NewOrder'] = $request->newOrder;
        }

        if (null !== $request->oldOrder) {
            @$query['OldOrder'] = $request->oldOrder;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallControlPolicyPosition',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallControlPolicyPositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the priority of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *
     * @remarks
     * You can use this operation to modify the priority of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallControlPolicyPositionRequest
     *
     * @returns ModifyVpcFirewallControlPolicyPositionResponse
     *
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
     * Modifies the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call this operation to modify the intrusion prevention configurations of a VPC firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallDefaultIPSConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallDefaultIPSConfigResponse
     *
     * @param ModifyVpcFirewallDefaultIPSConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyVpcFirewallDefaultIPSConfigResponse
     */
    public function modifyVpcFirewallDefaultIPSConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->basicRules) {
            @$query['BasicRules'] = $request->basicRules;
        }

        if (null !== $request->enableAllPatch) {
            @$query['EnableAllPatch'] = $request->enableAllPatch;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->ruleClass) {
            @$query['RuleClass'] = $request->ruleClass;
        }

        if (null !== $request->runMode) {
            @$query['RunMode'] = $request->runMode;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallDefaultIPSConfig',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallDefaultIPSConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the intrusion prevention configurations of a virtual private cloud (VPC) firewall.
     *
     * @remarks
     * You can call this operation to modify the intrusion prevention configurations of a VPC firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallDefaultIPSConfigRequest
     *
     * @returns ModifyVpcFirewallDefaultIPSConfigResponse
     *
     * @param ModifyVpcFirewallDefaultIPSConfigRequest $request
     *
     * @return ModifyVpcFirewallDefaultIPSConfigResponse
     */
    public function modifyVpcFirewallDefaultIPSConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallDefaultIPSConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the IPS whitelist of a virtual private cloud (VPC) firewall.
     *
     * @param request - ModifyVpcFirewallIPSWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallIPSWhitelistResponse
     *
     * @param ModifyVpcFirewallIPSWhitelistRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyVpcFirewallIPSWhitelistResponse
     */
    public function modifyVpcFirewallIPSWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->listType) {
            @$query['ListType'] = $request->listType;
        }

        if (null !== $request->listValue) {
            @$query['ListValue'] = $request->listValue;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        if (null !== $request->whiteType) {
            @$query['WhiteType'] = $request->whiteType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallIPSWhitelist',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallIPSWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IPS whitelist of a virtual private cloud (VPC) firewall.
     *
     * @param request - ModifyVpcFirewallIPSWhitelistRequest
     *
     * @returns ModifyVpcFirewallIPSWhitelistResponse
     *
     * @param ModifyVpcFirewallIPSWhitelistRequest $request
     *
     * @return ModifyVpcFirewallIPSWhitelistResponse
     */
    public function modifyVpcFirewallIPSWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallIPSWhitelistWithOptions($request, $runtime);
    }

    /**
     * Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the ModifyVpcFirewallSwitchStatus operation to enable or disable a VPC firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit. After you enable the VPC firewall, the VPC firewall protects access traffic between two VPCs that are connected by using an Express Connect circuit. After you disable the VPC firewall, the VPC firewall no longer protects access traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallSwitchStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcFirewallSwitchStatusResponse
     *
     * @param ModifyVpcFirewallSwitchStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyVpcFirewallSwitchStatusResponse
     */
    public function modifyVpcFirewallSwitchStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallSwitch) {
            @$query['FirewallSwitch'] = $request->firewallSwitch;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->vpcFirewallId) {
            @$query['VpcFirewallId'] = $request->vpcFirewallId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcFirewallSwitchStatus',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcFirewallSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a virtual private cloud (VPC) firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit.
     *
     * @remarks
     * You can call the ModifyVpcFirewallSwitchStatus operation to enable or disable a VPC firewall. The VPC firewall protects traffic between two VPCs that are connected by using an Express Connect circuit. After you enable the VPC firewall, the VPC firewall protects access traffic between two VPCs that are connected by using an Express Connect circuit. After you disable the VPC firewall, the VPC firewall no longer protects access traffic between two VPCs that are connected by using an Express Connect circuit.
     * Before you call the operation, make sure that you created a VPC firewall by calling the [CreateVpcFirewallConfigure](https://help.aliyun.com/document_detail/342893.html) operation.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyVpcFirewallSwitchStatusRequest
     *
     * @returns ModifyVpcFirewallSwitchStatusResponse
     *
     * @param ModifyVpcFirewallSwitchStatusRequest $request
     *
     * @return ModifyVpcFirewallSwitchStatusResponse
     */
    public function modifyVpcFirewallSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcFirewallSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * Turns off all firewall switches.
     *
     * @remarks
     * You can call the PutDisableAllFwSwitch operation to turn off all firewall switches.
     * ## [](#qps-)QPS limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutDisableAllFwSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDisableAllFwSwitchResponse
     *
     * @param PutDisableAllFwSwitchRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutDisableAllFwSwitchResponse
     */
    public function putDisableAllFwSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutDisableAllFwSwitch',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDisableAllFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Turns off all firewall switches.
     *
     * @remarks
     * You can call the PutDisableAllFwSwitch operation to turn off all firewall switches.
     * ## [](#qps-)QPS limits
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutDisableAllFwSwitchRequest
     *
     * @returns PutDisableAllFwSwitchResponse
     *
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
     * Disable a firewall for specific assets.
     *
     * @remarks
     * You can call the PutDisableFwSwitch operation to disable a firewall for specific assets. After you disable the firewall, traffic does not pass through Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutDisableFwSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDisableFwSwitchResponse
     *
     * @param PutDisableFwSwitchRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutDisableFwSwitchResponse
     */
    public function putDisableFwSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipaddrList) {
            @$query['IpaddrList'] = $request->ipaddrList;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionList) {
            @$query['RegionList'] = $request->regionList;
        }

        if (null !== $request->resourceTypeList) {
            @$query['ResourceTypeList'] = $request->resourceTypeList;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutDisableFwSwitch',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDisableFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disable a firewall for specific assets.
     *
     * @remarks
     * You can call the PutDisableFwSwitch operation to disable a firewall for specific assets. After you disable the firewall, traffic does not pass through Cloud Firewall.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutDisableFwSwitchRequest
     *
     * @returns PutDisableFwSwitchResponse
     *
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
     * Enables a firewall for all public IP addresses within your Alibaba Cloud account.
     *
     * @remarks
     * You can call the PutEnableAllFwSwitch operation to enable a firewall for all public IP addresses within your Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutEnableAllFwSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEnableAllFwSwitchResponse
     *
     * @param PutEnableAllFwSwitchRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutEnableAllFwSwitchResponse
     */
    public function putEnableAllFwSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutEnableAllFwSwitch',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEnableAllFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a firewall for all public IP addresses within your Alibaba Cloud account.
     *
     * @remarks
     * You can call the PutEnableAllFwSwitch operation to enable a firewall for all public IP addresses within your Alibaba Cloud account.
     * ## Limits
     * You can call this operation up to 10 times per second per account. You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutEnableAllFwSwitchRequest
     *
     * @returns PutEnableAllFwSwitchResponse
     *
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
     * Enables firewalls for specific assets.
     *
     * @remarks
     * You can call this operation to enable a firewall. After you enable a firewall, traffic passes through Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutEnableFwSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEnableFwSwitchResponse
     *
     * @param PutEnableFwSwitchRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PutEnableFwSwitchResponse
     */
    public function putEnableFwSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipaddrList) {
            @$query['IpaddrList'] = $request->ipaddrList;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionList) {
            @$query['RegionList'] = $request->regionList;
        }

        if (null !== $request->resourceTypeList) {
            @$query['ResourceTypeList'] = $request->resourceTypeList;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutEnableFwSwitch',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEnableFwSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables firewalls for specific assets.
     *
     * @remarks
     * You can call this operation to enable a firewall. After you enable a firewall, traffic passes through Cloud Firewall.
     * ## [](#qps-)Limits
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PutEnableFwSwitchRequest
     *
     * @returns PutEnableFwSwitchResponse
     *
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
     * 释放已过期的实例.
     *
     * @param request - ReleaseExpiredInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseExpiredInstanceResponse
     *
     * @param ReleaseExpiredInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleaseExpiredInstanceResponse
     */
    public function releaseExpiredInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseExpiredInstance',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseExpiredInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放已过期的实例.
     *
     * @param request - ReleaseExpiredInstanceRequest
     *
     * @returns ReleaseExpiredInstanceResponse
     *
     * @param ReleaseExpiredInstanceRequest $request
     *
     * @return ReleaseExpiredInstanceResponse
     */
    public function releaseExpiredInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseExpiredInstanceWithOptions($request, $runtime);
    }

    /**
     * Releases Cloud Firewall that uses the pay-as-you-go billing method.
     *
     * @param request - ReleasePostInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleasePostInstanceResponse
     *
     * @param ReleasePostInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReleasePostInstanceResponse
     */
    public function releasePostInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleasePostInstance',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleasePostInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases Cloud Firewall that uses the pay-as-you-go billing method.
     *
     * @param request - ReleasePostInstanceRequest
     *
     * @returns ReleasePostInstanceResponse
     *
     * @param ReleasePostInstanceRequest $request
     *
     * @return ReleasePostInstanceResponse
     */
    public function releasePostInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePostInstanceWithOptions($request, $runtime);
    }

    /**
     * Resets the number of NAT firewall hits.
     *
     * @param request - ResetNatFirewallRuleHitCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetNatFirewallRuleHitCountResponse
     *
     * @param ResetNatFirewallRuleHitCountRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetNatFirewallRuleHitCountResponse
     */
    public function resetNatFirewallRuleHitCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetNatFirewallRuleHitCount',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetNatFirewallRuleHitCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the number of NAT firewall hits.
     *
     * @param request - ResetNatFirewallRuleHitCountRequest
     *
     * @returns ResetNatFirewallRuleHitCountResponse
     *
     * @param ResetNatFirewallRuleHitCountRequest $request
     *
     * @return ResetNatFirewallRuleHitCountResponse
     */
    public function resetNatFirewallRuleHitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetNatFirewallRuleHitCountWithOptions($request, $runtime);
    }

    /**
     * Clears the count on hits of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *
     * @remarks
     * You can call the ResetVpcFirewallRuleHitCount operation to clear the count on hits of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ResetVpcFirewallRuleHitCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetVpcFirewallRuleHitCountResponse
     *
     * @param ResetVpcFirewallRuleHitCountRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclUuid) {
            @$query['AclUuid'] = $request->aclUuid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetVpcFirewallRuleHitCount',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetVpcFirewallRuleHitCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears the count on hits of an access control policy that is created for a virtual private cloud (VPC) firewall in a specific policy group.
     *
     * @remarks
     * You can call the ResetVpcFirewallRuleHitCount operation to clear the count on hits of an access control policy that is created for a VPC firewall in a specific policy group.
     * ## Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ResetVpcFirewallRuleHitCountRequest
     *
     * @returns ResetVpcFirewallRuleHitCountResponse
     *
     * @param ResetVpcFirewallRuleHitCountRequest $request
     *
     * @return ResetVpcFirewallRuleHitCountResponse
     */
    public function resetVpcFirewallRuleHitCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetVpcFirewallRuleHitCountWithOptions($request, $runtime);
    }

    /**
     * Enables or disables a NAT firewall.
     *
     * @param request - SwitchSecurityProxyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchSecurityProxyResponse
     *
     * @param SwitchSecurityProxyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SwitchSecurityProxyResponse
     */
    public function switchSecurityProxyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->proxyId) {
            @$query['ProxyId'] = $request->proxyId;
        }

        if (null !== $request->switch) {
            @$query['Switch'] = $request->switch;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchSecurityProxy',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchSecurityProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a NAT firewall.
     *
     * @param request - SwitchSecurityProxyRequest
     *
     * @returns SwitchSecurityProxyResponse
     *
     * @param SwitchSecurityProxyRequest $request
     *
     * @return SwitchSecurityProxyResponse
     */
    public function switchSecurityProxy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSecurityProxyWithOptions($request, $runtime);
    }

    /**
     * 修改AI流量分析开启状态
     *
     * @param request - UpdateAITrafficAnalysisStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAITrafficAnalysisStatusResponse
     *
     * @param UpdateAITrafficAnalysisStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateAITrafficAnalysisStatusResponse
     */
    public function updateAITrafficAnalysisStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAITrafficAnalysisStatus',
            'version' => '2017-12-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAITrafficAnalysisStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改AI流量分析开启状态
     *
     * @param request - UpdateAITrafficAnalysisStatusRequest
     *
     * @returns UpdateAITrafficAnalysisStatusResponse
     *
     * @param UpdateAITrafficAnalysisStatusRequest $request
     *
     * @return UpdateAITrafficAnalysisStatusResponse
     */
    public function updateAITrafficAnalysisStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAITrafficAnalysisStatusWithOptions($request, $runtime);
    }
}
