<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Rdc\V20180821\Models\AddEnterpriseMemberRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\AddEnterpriseMemberResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\AddRamMemberRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\AddRamMemberResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\ApproveJoinCompanyRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\ApproveJoinCompanyResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\CreateEnterpriseRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\CreateEnterpriseResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\CreateEnterpriseShrinkRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\CreateWorkitemRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\CreateWorkitemResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetBindedUserByDingIdResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetChangeLogRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetChangeLogResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetChangeLogShrinkRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetCustomFieldsByTemplateIdRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetCustomFieldsByTemplateIdResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetIssueByIdRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetIssueByIdResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetJoinCodeRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetJoinCodeResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetProjectMembersRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetProjectMembersResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetUserByAliyunPkRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetUserByAliyunPkResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetWorkitemByIdRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\GetWorkitemByIdResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\JoinCompanyRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\JoinCompanyResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchProjectsByRegionRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchProjectsByRegionResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchTestCaseRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchTestCaseResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchWorkitemRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchWorkitemResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchWorkitemWithTotalCountRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SearchWorkitemWithTotalCountResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SyncUserToRdcRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\SyncUserToRdcResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\UpdateWorkitemRequest;
use AlibabaCloud\SDK\Rdc\V20180821\Models\UpdateWorkitemResponse;
use AlibabaCloud\SDK\Rdc\V20180821\Models\UpdateWorkitemShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Rdc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rdc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddEnterpriseMemberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddEnterpriseMemberResponse
     */
    public function addEnterpriseMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddEnterpriseMemberResponse::fromMap($this->doRPCRequest('AddEnterpriseMember', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddEnterpriseMemberRequest $request
     *
     * @return AddEnterpriseMemberResponse
     */
    public function addEnterpriseMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEnterpriseMemberWithOptions($request, $runtime);
    }

    /**
     * @param AddRamMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddRamMemberResponse
     */
    public function addRamMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddRamMemberResponse::fromMap($this->doRPCRequest('AddRamMember', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddRamMemberRequest $request
     *
     * @return AddRamMemberResponse
     */
    public function addRamMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRamMemberWithOptions($request, $runtime);
    }

    /**
     * @param ApproveJoinCompanyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ApproveJoinCompanyResponse
     */
    public function approveJoinCompanyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApproveJoinCompanyResponse::fromMap($this->doRPCRequest('ApproveJoinCompany', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApproveJoinCompanyRequest $request
     *
     * @return ApproveJoinCompanyResponse
     */
    public function approveJoinCompany($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveJoinCompanyWithOptions($request, $runtime);
    }

    /**
     * @param CreateEnterpriseRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEnterpriseResponse
     */
    public function createEnterpriseWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEnterpriseShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->emails)) {
            $request->emailsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->emails, 'Emails', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEnterpriseResponse::fromMap($this->doRPCRequest('CreateEnterprise', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEnterpriseRequest $request
     *
     * @return CreateEnterpriseResponse
     */
    public function createEnterprise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnterpriseWithOptions($request, $runtime);
    }

    /**
     * @param CreateWorkitemRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWorkitemResponse
     */
    public function createWorkitemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWorkitemResponse::fromMap($this->doRPCRequest('CreateWorkitem', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateWorkitemRequest $request
     *
     * @return CreateWorkitemResponse
     */
    public function createWorkitem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkitemWithOptions($request, $runtime);
    }

    /**
     * @param GetBindedUserByDingIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBindedUserByDingIdResponse
     */
    public function getBindedUserByDingIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetBindedUserByDingIdResponse::fromMap($this->doRPCRequest('GetBindedUserByDingId', '2018-08-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBindedUserByDingIdRequest $request
     *
     * @return GetBindedUserByDingIdResponse
     */
    public function getBindedUserByDingId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBindedUserByDingIdWithOptions($request, $runtime);
    }

    /**
     * @param GetChangeLogRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetChangeLogResponse
     */
    public function getChangeLogWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetChangeLogShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->targetIds)) {
            $request->targetIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->targetIds, 'TargetIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetChangeLogResponse::fromMap($this->doRPCRequest('GetChangeLog', '2018-08-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetChangeLogRequest $request
     *
     * @return GetChangeLogResponse
     */
    public function getChangeLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChangeLogWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomFieldsByTemplateIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetCustomFieldsByTemplateIdResponse
     */
    public function getCustomFieldsByTemplateIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCustomFieldsByTemplateIdResponse::fromMap($this->doRPCRequest('GetCustomFieldsByTemplateId', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCustomFieldsByTemplateIdRequest $request
     *
     * @return GetCustomFieldsByTemplateIdResponse
     */
    public function getCustomFieldsByTemplateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomFieldsByTemplateIdWithOptions($request, $runtime);
    }

    /**
     * @param GetIssueByIdRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetIssueByIdResponse
     */
    public function getIssueByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetIssueByIdResponse::fromMap($this->doRPCRequest('GetIssueById', '2018-08-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetIssueByIdRequest $request
     *
     * @return GetIssueByIdResponse
     */
    public function getIssueById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIssueByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetJoinCodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetJoinCodeResponse
     */
    public function getJoinCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJoinCodeResponse::fromMap($this->doRPCRequest('GetJoinCode', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJoinCodeRequest $request
     *
     * @return GetJoinCodeResponse
     */
    public function getJoinCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJoinCodeWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectMembersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetProjectMembersResponse
     */
    public function getProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetProjectMembersResponse::fromMap($this->doRPCRequest('GetProjectMembers', '2018-08-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectMembersRequest $request
     *
     * @return GetProjectMembersResponse
     */
    public function getProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param GetUserByAliyunPkRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserByAliyunPkResponse
     */
    public function getUserByAliyunPkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetUserByAliyunPkResponse::fromMap($this->doRPCRequest('GetUserByAliyunPk', '2018-08-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserByAliyunPkRequest $request
     *
     * @return GetUserByAliyunPkResponse
     */
    public function getUserByAliyunPk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserByAliyunPkWithOptions($request, $runtime);
    }

    /**
     * @param GetWorkitemByIdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWorkitemByIdResponse
     */
    public function getWorkitemByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWorkitemByIdResponse::fromMap($this->doRPCRequest('GetWorkitemById', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetWorkitemByIdRequest $request
     *
     * @return GetWorkitemByIdResponse
     */
    public function getWorkitemById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkitemByIdWithOptions($request, $runtime);
    }

    /**
     * @param JoinCompanyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return JoinCompanyResponse
     */
    public function joinCompanyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinCompanyResponse::fromMap($this->doRPCRequest('JoinCompany', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param JoinCompanyRequest $request
     *
     * @return JoinCompanyResponse
     */
    public function joinCompany($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinCompanyWithOptions($request, $runtime);
    }

    /**
     * @param SearchProjectsByRegionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SearchProjectsByRegionResponse
     */
    public function searchProjectsByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return SearchProjectsByRegionResponse::fromMap($this->doRPCRequest('SearchProjectsByRegion', '2018-08-21', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchProjectsByRegionRequest $request
     *
     * @return SearchProjectsByRegionResponse
     */
    public function searchProjectsByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchProjectsByRegionWithOptions($request, $runtime);
    }

    /**
     * @param SearchTestCaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchTestCaseResponse
     */
    public function searchTestCaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTestCaseResponse::fromMap($this->doRPCRequest('SearchTestCase', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchTestCaseRequest $request
     *
     * @return SearchTestCaseResponse
     */
    public function searchTestCase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTestCaseWithOptions($request, $runtime);
    }

    /**
     * @param SearchWorkitemRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SearchWorkitemResponse
     */
    public function searchWorkitemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchWorkitemResponse::fromMap($this->doRPCRequest('SearchWorkitem', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchWorkitemRequest $request
     *
     * @return SearchWorkitemResponse
     */
    public function searchWorkitem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchWorkitemWithOptions($request, $runtime);
    }

    /**
     * @param SearchWorkitemWithTotalCountRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SearchWorkitemWithTotalCountResponse
     */
    public function searchWorkitemWithTotalCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchWorkitemWithTotalCountResponse::fromMap($this->doRPCRequest('SearchWorkitemWithTotalCount', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchWorkitemWithTotalCountRequest $request
     *
     * @return SearchWorkitemWithTotalCountResponse
     */
    public function searchWorkitemWithTotalCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchWorkitemWithTotalCountWithOptions($request, $runtime);
    }

    /**
     * @param SyncUserToRdcRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SyncUserToRdcResponse
     */
    public function syncUserToRdcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncUserToRdcResponse::fromMap($this->doRPCRequest('SyncUserToRdc', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncUserToRdcRequest $request
     *
     * @return SyncUserToRdcResponse
     */
    public function syncUserToRdc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncUserToRdcWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWorkitemRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkitemResponse
     */
    public function updateWorkitemWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWorkitemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cfList)) {
            $request->cfListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cfList, 'CfList', 'json');
        }
        if (!Utils::isUnset($tmpReq->cfs)) {
            $request->cfsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cfs, 'Cfs', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateWorkitemResponse::fromMap($this->doRPCRequest('UpdateWorkitem', '2018-08-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateWorkitemRequest $request
     *
     * @return UpdateWorkitemResponse
     */
    public function updateWorkitem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkitemWithOptions($request, $runtime);
    }
}
