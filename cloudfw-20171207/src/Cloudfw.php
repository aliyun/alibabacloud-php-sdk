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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\CreateVpcFirewallControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteAddressBookResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteControlPolicyResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteInstanceMembersResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallCenConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallCenConfigureResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallConfigureRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DeleteVpcFirewallConfigureResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationIPResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDomainResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyAdvancedConfigResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallPolicyPriorUsedResponse;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVulnerabilityProtectedListRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVulnerabilityProtectedListResponse;
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
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountRequest;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ResetVpcFirewallRuleHitCountResponse;
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
     * @param AddAddressBookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAddressBookResponse
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
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
     * @param BatchCopyVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchCopyVpcFirewallControlPolicyResponse
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
     * @param CreateVpcFirewallCenConfigureRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateVpcFirewallCenConfigureResponse
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->networkInstanceId)) {
            $query['NetworkInstanceId'] = $request->networkInstanceId;
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
     * @param CreateVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateVpcFirewallControlPolicyResponse
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
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
     * @param DeleteVpcFirewallCenConfigureRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteVpcFirewallCenConfigureResponse
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
     * @param DeleteVpcFirewallConfigureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteVpcFirewallConfigureResponse
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
     * @param DeleteVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteVpcFirewallControlPolicyResponse
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
     * @param DescribeInvadeEventListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInvadeEventListResponse
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
     * @param DescribeOutgoingDestinationIPRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeOutgoingDestinationIPResponse
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
     * @param DescribeOutgoingDomainRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOutgoingDomainResponse
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
     * @param DescribePolicyAdvancedConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePolicyAdvancedConfigResponse
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
     * @param DescribeUserAssetIPTrafficInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeUserAssetIPTrafficInfoResponse
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
     * @param DescribeVpcFirewallAclGroupListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVpcFirewallAclGroupListResponse
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
     * @param DescribeVpcFirewallCenDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVpcFirewallCenDetailResponse
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
     * @param DescribeVpcFirewallCenListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVpcFirewallCenListResponse
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
     * @param DescribeVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVpcFirewallControlPolicyResponse
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
     * @param DescribeVpcFirewallDefaultIPSConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponse
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
     * @param DescribeVpcFirewallDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVpcFirewallDetailResponse
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
     * @param DescribeVpcFirewallListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVpcFirewallListResponse
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
     * @param DescribeVpcFirewallPolicyPriorUsedRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVpcFirewallPolicyPriorUsedResponse
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
     * @param DescribeVulnerabilityProtectedListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeVulnerabilityProtectedListResponse
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
     * @param ModifyAddressBookRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyAddressBookResponse
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
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
     * @param ModifyVpcFirewallCenConfigureRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyVpcFirewallCenConfigureResponse
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
     * @param ModifyVpcFirewallCenSwitchStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyVpcFirewallCenSwitchStatusResponse
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
     * @param ModifyVpcFirewallConfigureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyVpcFirewallConfigureResponse
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
     * @param ModifyVpcFirewallControlPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyVpcFirewallControlPolicyResponse
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proto)) {
            $query['Proto'] = $request->proto;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
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
        $query = [];
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
     * @param ModifyVpcFirewallDefaultIPSConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyVpcFirewallDefaultIPSConfigResponse
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
     * @param ModifyVpcFirewallSwitchStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyVpcFirewallSwitchStatusResponse
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
     * @param PutDisableAllFwSwitchRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutDisableAllFwSwitchResponse
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
