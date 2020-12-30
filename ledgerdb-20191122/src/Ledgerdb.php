<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\AcceptMemberRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\AcceptMemberResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\CreateVpcEndpointRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\CreateVpcEndpointResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DeleteLedgerRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DeleteLedgerResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DeleteMemberRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DeleteMemberResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DeleteVpcEndpointRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DeleteVpcEndpointResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgerRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgerResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgersRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgersResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeTSARequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeTSAResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DisableMemberRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DisableMemberResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\EnableMemberRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\EnableMemberResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetAccessAttributeRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetAccessAttributeResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetIpWhiteListRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetIpWhiteListResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetJournalRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetJournalResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetMemberRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GetMemberResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GrantServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\GrantServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\InviteMembersRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\InviteMembersResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListJournalsRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListJournalsResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListMembersRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListMembersResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListTimeAnchorsRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListTimeAnchorsResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListVpcEndpointsRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListVpcEndpointsResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyAccessAttributeRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyAccessAttributeResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyIpWhiteListRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyIpWhiteListResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyLedgerAttributeRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyLedgerAttributeResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyMemberACLsRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyMemberACLsResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyMemberKeyRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ModifyMemberKeyResponse;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\UpdateMemberKeyByKMSRequest;
use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\UpdateMemberKeyByKMSResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ledgerdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ledgerdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AcceptMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AcceptMemberResponse
     */
    public function acceptMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AcceptMemberResponse::fromMap($this->doRPCRequest('AcceptMember', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AcceptMemberRequest $request
     *
     * @return AcceptMemberResponse
     */
    public function acceptMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptMemberWithOptions($request, $runtime);
    }

    /**
     * @param CreateVpcEndpointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVpcEndpointResponse::fromMap($this->doRPCRequest('CreateVpcEndpoint', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVpcEndpointRequest $request
     *
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLedgerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteLedgerResponse
     */
    public function deleteLedgerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLedgerResponse::fromMap($this->doRPCRequest('DeleteLedger', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLedgerRequest $request
     *
     * @return DeleteLedgerResponse
     */
    public function deleteLedger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLedgerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMemberResponse
     */
    public function deleteMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMemberResponse::fromMap($this->doRPCRequest('DeleteMember', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMemberRequest $request
     *
     * @return DeleteMemberResponse
     */
    public function deleteMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMemberWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpcEndpointRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpcEndpointResponse::fromMap($this->doRPCRequest('DeleteVpcEndpoint', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVpcEndpointRequest $request
     *
     * @return DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLedgerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeLedgerResponse
     */
    public function describeLedgerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeLedgerResponse::fromMap($this->doRPCRequest('DescribeLedger', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLedgerRequest $request
     *
     * @return DescribeLedgerResponse
     */
    public function describeLedger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLedgerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLedgersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeLedgersResponse
     */
    public function describeLedgersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeLedgersResponse::fromMap($this->doRPCRequest('DescribeLedgers', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLedgersRequest $request
     *
     * @return DescribeLedgersResponse
     */
    public function describeLedgers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLedgersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeTSARequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeTSAResponse
     */
    public function describeTSAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTSAResponse::fromMap($this->doRPCRequest('DescribeTSA', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTSARequest $request
     *
     * @return DescribeTSAResponse
     */
    public function describeTSA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTSAWithOptions($request, $runtime);
    }

    /**
     * @param DisableMemberRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DisableMemberResponse
     */
    public function disableMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableMemberResponse::fromMap($this->doRPCRequest('DisableMember', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableMemberRequest $request
     *
     * @return DisableMemberResponse
     */
    public function disableMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMemberWithOptions($request, $runtime);
    }

    /**
     * @param EnableMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableMemberResponse
     */
    public function enableMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableMemberResponse::fromMap($this->doRPCRequest('EnableMember', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableMemberRequest $request
     *
     * @return EnableMemberResponse
     */
    public function enableMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMemberWithOptions($request, $runtime);
    }

    /**
     * @param GetAccessAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAccessAttributeResponse
     */
    public function getAccessAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAccessAttributeResponse::fromMap($this->doRPCRequest('GetAccessAttribute', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAccessAttributeRequest $request
     *
     * @return GetAccessAttributeResponse
     */
    public function getAccessAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessAttributeWithOptions($request, $runtime);
    }

    /**
     * @param GetIpWhiteListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetIpWhiteListResponse
     */
    public function getIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetIpWhiteListResponse::fromMap($this->doRPCRequest('GetIpWhiteList', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetIpWhiteListRequest $request
     *
     * @return GetIpWhiteListResponse
     */
    public function getIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param GetJournalRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetJournalResponse
     */
    public function getJournalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetJournalResponse::fromMap($this->doRPCRequest('GetJournal', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJournalRequest $request
     *
     * @return GetJournalResponse
     */
    public function getJournal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJournalWithOptions($request, $runtime);
    }

    /**
     * @param GetMemberRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetMemberResponse
     */
    public function getMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetMemberResponse::fromMap($this->doRPCRequest('GetMember', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMemberRequest $request
     *
     * @return GetMemberResponse
     */
    public function getMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMemberWithOptions($request, $runtime);
    }

    /**
     * @param GrantServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GrantServiceLinkedRoleResponse
     */
    public function grantServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantServiceLinkedRoleResponse::fromMap($this->doRPCRequest('GrantServiceLinkedRole', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantServiceLinkedRoleRequest $request
     *
     * @return GrantServiceLinkedRoleResponse
     */
    public function grantServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param InviteMembersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InviteMembersResponse
     */
    public function inviteMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InviteMembersResponse::fromMap($this->doRPCRequest('InviteMembers', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InviteMembersRequest $request
     *
     * @return InviteMembersResponse
     */
    public function inviteMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inviteMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListJournalsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListJournalsResponse
     */
    public function listJournalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListJournalsResponse::fromMap($this->doRPCRequest('ListJournals', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListJournalsRequest $request
     *
     * @return ListJournalsResponse
     */
    public function listJournals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJournalsWithOptions($request, $runtime);
    }

    /**
     * @param ListMembersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListMembersResponse
     */
    public function listMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListMembersResponse::fromMap($this->doRPCRequest('ListMembers', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMembersRequest $request
     *
     * @return ListMembersResponse
     */
    public function listMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListTimeAnchorsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListTimeAnchorsResponse
     */
    public function listTimeAnchorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListTimeAnchorsResponse::fromMap($this->doRPCRequest('ListTimeAnchors', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTimeAnchorsRequest $request
     *
     * @return ListTimeAnchorsResponse
     */
    public function listTimeAnchors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTimeAnchorsWithOptions($request, $runtime);
    }

    /**
     * @param ListVpcEndpointsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListVpcEndpointsResponse::fromMap($this->doRPCRequest('ListVpcEndpoints', '2019-11-22', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVpcEndpointsRequest $request
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccessAttributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccessAttributeResponse
     */
    public function modifyAccessAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccessAttributeResponse::fromMap($this->doRPCRequest('ModifyAccessAttribute', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAccessAttributeRequest $request
     *
     * @return ModifyAccessAttributeResponse
     */
    public function modifyAccessAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpWhiteListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyIpWhiteListResponse
     */
    public function modifyIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpWhiteListResponse::fromMap($this->doRPCRequest('ModifyIpWhiteList', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyIpWhiteListRequest $request
     *
     * @return ModifyIpWhiteListResponse
     */
    public function modifyIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLedgerAttributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLedgerAttributeResponse
     */
    public function modifyLedgerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLedgerAttributeResponse::fromMap($this->doRPCRequest('ModifyLedgerAttribute', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyLedgerAttributeRequest $request
     *
     * @return ModifyLedgerAttributeResponse
     */
    public function modifyLedgerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLedgerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMemberACLsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyMemberACLsResponse
     */
    public function modifyMemberACLsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMemberACLsResponse::fromMap($this->doRPCRequest('ModifyMemberACLs', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyMemberACLsRequest $request
     *
     * @return ModifyMemberACLsResponse
     */
    public function modifyMemberACLs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMemberACLsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMemberKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyMemberKeyResponse
     */
    public function modifyMemberKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMemberKeyResponse::fromMap($this->doRPCRequest('ModifyMemberKey', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyMemberKeyRequest $request
     *
     * @return ModifyMemberKeyResponse
     */
    public function modifyMemberKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMemberKeyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMemberKeyByKMSRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMemberKeyByKMSResponse
     */
    public function updateMemberKeyByKMSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMemberKeyByKMSResponse::fromMap($this->doRPCRequest('UpdateMemberKeyByKMS', '2019-11-22', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMemberKeyByKMSRequest $request
     *
     * @return UpdateMemberKeyByKMSResponse
     */
    public function updateMemberKeyByKMS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMemberKeyByKMSWithOptions($request, $runtime);
    }
}
