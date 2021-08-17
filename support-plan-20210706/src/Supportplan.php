<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\DeleteEnterpriseDingtalkGroupCustomerMemberRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\DeleteEnterpriseDingtalkGroupCustomerMemberResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupCustomerMemberRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupCustomerMemberResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupCustomerMembersRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupCustomerMembersResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Supportplan extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('support-plan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ListEnterpriseDingtalkGroupCustomerMembersRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return ListEnterpriseDingtalkGroupCustomerMembersResponse
     */
    public function listEnterpriseDingtalkGroupCustomerMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEnterpriseDingtalkGroupCustomerMembersResponse::fromMap($this->doRPCRequest('ListEnterpriseDingtalkGroupCustomerMembers', '2021-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEnterpriseDingtalkGroupCustomerMembersRequest $request
     *
     * @return ListEnterpriseDingtalkGroupCustomerMembersResponse
     */
    public function listEnterpriseDingtalkGroupCustomerMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseDingtalkGroupCustomerMembersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListEnterpriseDingtalkGroupsResponse
     */
    public function listEnterpriseDingtalkGroupsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListEnterpriseDingtalkGroupsResponse::fromMap($this->doRPCRequest('ListEnterpriseDingtalkGroups', '2021-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListEnterpriseDingtalkGroupsResponse
     */
    public function listEnterpriseDingtalkGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseDingtalkGroupsWithOptions($runtime);
    }

    /**
     * @param DeleteEnterpriseDingtalkGroupCustomerMemberRequest $tmpReq
     * @param RuntimeOptions                                     $runtime
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function deleteEnterpriseDingtalkGroupCustomerMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mobiles)) {
            $request->mobilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mobiles, 'Mobiles', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEnterpriseDingtalkGroupCustomerMemberResponse::fromMap($this->doRPCRequest('DeleteEnterpriseDingtalkGroupCustomerMember', '2021-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEnterpriseDingtalkGroupCustomerMemberRequest $request
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function deleteEnterpriseDingtalkGroupCustomerMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDingtalkGroupCustomerMemberRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function getEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEnterpriseDingtalkGroupCustomerMemberResponse::fromMap($this->doRPCRequest('GetEnterpriseDingtalkGroupCustomerMember', '2021-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEnterpriseDingtalkGroupCustomerMemberRequest $request
     *
     * @return GetEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function getEnterpriseDingtalkGroupCustomerMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDingtalkGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEnterpriseDingtalkGroupResponse
     */
    public function getEnterpriseDingtalkGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEnterpriseDingtalkGroupResponse::fromMap($this->doRPCRequest('GetEnterpriseDingtalkGroup', '2021-07-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEnterpriseDingtalkGroupRequest $request
     *
     * @return GetEnterpriseDingtalkGroupResponse
     */
    public function getEnterpriseDingtalkGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDingtalkGroupWithOptions($request, $runtime);
    }
}
