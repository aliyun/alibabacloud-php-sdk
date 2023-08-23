<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreatePackageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreatePackageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateProjectRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateProjectResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateQuotaScheduleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateQuotaScheduleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateRoleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateRoleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\DeleteQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\DeleteQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclOnObjectRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclOnObjectResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRolePolicyResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsShrinkRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTrustedProjectsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\KillJobsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\KillJobsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListFunctionsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectUsersResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasPlansResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersByRoleResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListUsersResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdatePackageRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdatePackageResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectIpWhiteListRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateProjectIpWhiteListResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaHeaders;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaPlanRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaPlanResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaResponse;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaScheduleRequest;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateQuotaScheduleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class MaxCompute extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'maxcompute.aliyuncs.com',
            'ap-northeast-2-pop'          => 'maxcompute.aliyuncs.com',
            'ap-south-1'                  => 'maxcompute.aliyuncs.com',
            'ap-southeast-1'              => 'maxcompute.aliyuncs.com',
            'ap-southeast-2'              => 'maxcompute.aliyuncs.com',
            'ap-southeast-3'              => 'maxcompute.aliyuncs.com',
            'ap-southeast-5'              => 'maxcompute.aliyuncs.com',
            'cn-beijing'                  => 'maxcompute.aliyuncs.com',
            'cn-beijing-finance-1'        => 'maxcompute.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'maxcompute.aliyuncs.com',
            'cn-beijing-gov-1'            => 'maxcompute.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'maxcompute.aliyuncs.com',
            'cn-chengdu'                  => 'maxcompute.aliyuncs.com',
            'cn-edge-1'                   => 'maxcompute.aliyuncs.com',
            'cn-fujian'                   => 'maxcompute.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'maxcompute.aliyuncs.com',
            'cn-hangzhou'                 => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-finance'         => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'maxcompute.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'maxcompute.aliyuncs.com',
            'cn-hongkong'                 => 'maxcompute.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'maxcompute.aliyuncs.com',
            'cn-huhehaote'                => 'maxcompute.aliyuncs.com',
            'cn-north-2-gov-1'            => 'maxcompute.aliyuncs.com',
            'cn-qingdao'                  => 'maxcompute.aliyuncs.com',
            'cn-qingdao-nebula'           => 'maxcompute.aliyuncs.com',
            'cn-shanghai'                 => 'maxcompute.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'maxcompute.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'maxcompute.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'maxcompute.aliyuncs.com',
            'cn-shanghai-inner'           => 'maxcompute.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'maxcompute.aliyuncs.com',
            'cn-shenzhen'                 => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-inner'           => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'maxcompute.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'maxcompute.aliyuncs.com',
            'cn-wuhan'                    => 'maxcompute.aliyuncs.com',
            'cn-yushanfang'               => 'maxcompute.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'maxcompute.aliyuncs.com',
            'cn-zhangjiakou'              => 'maxcompute.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'maxcompute.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'maxcompute.aliyuncs.com',
            'eu-central-1'                => 'maxcompute.aliyuncs.com',
            'eu-west-1'                   => 'maxcompute.aliyuncs.com',
            'eu-west-1-oxs'               => 'maxcompute.aliyuncs.com',
            'me-east-1'                   => 'maxcompute.aliyuncs.com',
            'rus-west-1-pop'              => 'maxcompute.aliyuncs.com',
            'us-east-1'                   => 'maxcompute.aliyuncs.com',
            'us-west-1'                   => 'maxcompute.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('maxcompute', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string               $projectName
     * @param CreatePackageRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreatePackageResponse
     */
    public function createPackageWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isInstall)) {
            $query['isInstall'] = $request->isInstall;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreatePackage',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $projectName
     * @param CreatePackageRequest $request
     *
     * @return CreatePackageResponse
     */
    public function createPackage($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPackageWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                 $nickname
     * @param CreateQuotaPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateQuotaPlanResponse
     */
    public function createQuotaPlanWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateQuotaPlan',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $nickname
     * @param CreateQuotaPlanRequest $request
     *
     * @return CreateQuotaPlanResponse
     */
    public function createQuotaPlan($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQuotaPlanWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @param string                     $nickname
     * @param CreateQuotaScheduleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateQuotaScheduleResponse
     */
    public function createQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateQuotaSchedule',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/schedule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $nickname
     * @param CreateQuotaScheduleRequest $request
     *
     * @return CreateQuotaScheduleResponse
     */
    public function createQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @param string            $projectName
     * @param CreateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateRole',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $projectName
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRoleWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @param string                 $nickname
     * @param string                 $planName
     * @param DeleteQuotaPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteQuotaPlanResponse
     */
    public function deleteQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQuotaPlan',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $nickname
     * @param string                 $planName
     * @param DeleteQuotaPlanRequest $request
     *
     * @return DeleteQuotaPlanResponse
     */
    public function deleteQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * @param GetJobResourceUsageRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetJobResourceUsageResponse
     */
    public function getJobResourceUsageWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetJobResourceUsageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobOwnerList)) {
            $request->jobOwnerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobOwnerList, 'jobOwnerList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->quotaNicknameList)) {
            $request->quotaNicknameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->quotaNicknameList, 'quotaNicknameList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->date)) {
            $query['date'] = $request->date;
        }
        if (!Utils::isUnset($request->jobOwnerListShrink)) {
            $query['jobOwnerList'] = $request->jobOwnerListShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->quotaNicknameListShrink)) {
            $query['quotaNicknameList'] = $request->quotaNicknameListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobResourceUsage',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/resourceUsage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobResourceUsageRequest $request
     *
     * @return GetJobResourceUsageResponse
     */
    public function getJobResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobResourceUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string            $projectName
     * @param string            $packageName
     * @param GetPackageRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPackageResponse
     */
    public function getPackageWithOptions($projectName, $packageName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceProject)) {
            $query['sourceProject'] = $request->sourceProject;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPackage',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages/' . OpenApiUtilClient::getEncodeParam($packageName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $projectName
     * @param string            $packageName
     * @param GetPackageRequest $request
     *
     * @return GetPackageResponse
     */
    public function getPackage($projectName, $packageName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPackageWithOptions($projectName, $packageName, $request, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     *
     * @return GetProjectResponse
     */
    public function getProject($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @param string          $nickname
     * @param GetQuotaRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->akProven)) {
            $query['AkProven'] = $request->akProven;
        }
        if (!Utils::isUnset($request->mock)) {
            $query['mock'] = $request->mock;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQuota',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $nickname
     * @param GetQuotaRequest $request
     *
     * @return GetQuotaResponse
     */
    public function getQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @param string              $nickname
     * @param string              $planName
     * @param GetQuotaPlanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetQuotaPlanResponse
     */
    public function getQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQuotaPlan',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $nickname
     * @param string              $planName
     * @param GetQuotaPlanRequest $request
     *
     * @return GetQuotaPlanResponse
     */
    public function getQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleAclResponse
     */
    public function getRoleAclWithOptions($projectName, $roleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRoleAcl',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/roleAcl',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRoleAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     * @param string $roleName
     *
     * @return GetRoleAclResponse
     */
    public function getRoleAcl($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleAclWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * @param string                    $projectName
     * @param string                    $roleName
     * @param GetRoleAclOnObjectRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetRoleAclOnObjectResponse
     */
    public function getRoleAclOnObjectWithOptions($projectName, $roleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectName)) {
            $query['objectName'] = $request->objectName;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['objectType'] = $request->objectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRoleAclOnObject',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/acl',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRoleAclOnObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $projectName
     * @param string                    $roleName
     * @param GetRoleAclOnObjectRequest $request
     *
     * @return GetRoleAclOnObjectResponse
     */
    public function getRoleAclOnObject($projectName, $roleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleAclOnObjectWithOptions($projectName, $roleName, $request, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRolePolicyResponse
     */
    public function getRolePolicyWithOptions($projectName, $roleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRolePolicy',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/policy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRolePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     * @param string $roleName
     *
     * @return GetRolePolicyResponse
     */
    public function getRolePolicy($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRolePolicyWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * @param GetRunningJobsRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetRunningJobsResponse
     */
    public function getRunningJobsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetRunningJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobOwnerList)) {
            $request->jobOwnerListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobOwnerList, 'jobOwnerList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->quotaNicknameList)) {
            $request->quotaNicknameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->quotaNicknameList, 'quotaNicknameList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->jobOwnerListShrink)) {
            $query['jobOwnerList'] = $request->jobOwnerListShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->quotaNicknameListShrink)) {
            $query['quotaNicknameList'] = $request->quotaNicknameListShrink;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRunningJobs',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/runningJobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRunningJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRunningJobsRequest $request
     *
     * @return GetRunningJobsResponse
     */
    public function getRunningJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRunningJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTrustedProjectsResponse
     */
    public function getTrustedProjectsWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTrustedProjects',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/trustedProjects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTrustedProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     *
     * @return GetTrustedProjectsResponse
     */
    public function getTrustedProjects($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrustedProjectsWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @param KillJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return KillJobsResponse
     */
    public function killJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'KillJobs',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/kill',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return KillJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KillJobsRequest $request
     *
     * @return KillJobsResponse
     */
    public function killJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->killJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string               $projectName
     * @param ListFunctionsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListFunctionsResponse
     */
    public function listFunctionsWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctions',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/functions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $projectName
     * @param ListFunctionsRequest $request
     *
     * @return ListFunctionsResponse
     */
    public function listFunctions($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionsWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListPackagesResponse
     */
    public function listPackagesWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListPackages',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     *
     * @return ListPackagesResponse
     */
    public function listPackages($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPackagesWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListProjectUsersResponse
     */
    public function listProjectUsersWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListProjectUsers',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     *
     * @return ListProjectUsersResponse
     */
    public function listProjectUsers($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectUsersWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @param ListProjectsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->quotaName)) {
            $query['quotaName'] = $request->quotaName;
        }
        if (!Utils::isUnset($request->quotaNickName)) {
            $query['quotaNickName'] = $request->quotaNickName;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->saleTags)) {
            $query['saleTags'] = $request->saleTags;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListQuotasRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billingType)) {
            $query['billingType'] = $request->billingType;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['productId'] = $request->productId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->saleTags)) {
            $query['saleTags'] = $request->saleTags;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQuotas',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListQuotasRequest $request
     *
     * @return ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                 $nickname
     * @param ListQuotasPlansRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListQuotasPlansResponse
     */
    public function listQuotasPlansWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQuotasPlans',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQuotasPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $nickname
     * @param ListQuotasPlansRequest $request
     *
     * @return ListQuotasPlansResponse
     */
    public function listQuotasPlans($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasPlansWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @param string               $projectName
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $projectName
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($projectName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     *
     * @return ListRolesResponse
     */
    public function listRoles($projectName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRolesWithOptions($projectName, $headers, $runtime);
    }

    /**
     * @param string            $projectName
     * @param ListTablesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItem)) {
            $query['maxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTables',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $projectName
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $projectName
     * @param string         $roleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListUsersByRoleResponse
     */
    public function listUsersByRoleWithOptions($projectName, $roleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListUsersByRole',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/roles/' . OpenApiUtilClient::getEncodeParam($roleName) . '/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUsersByRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $projectName
     * @param string $roleName
     *
     * @return ListUsersByRoleResponse
     */
    public function listUsersByRole($projectName, $roleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersByRoleWithOptions($projectName, $roleName, $headers, $runtime);
    }

    /**
     * @param string               $projectName
     * @param string               $packageName
     * @param UpdatePackageRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdatePackageResponse
     */
    public function updatePackageWithOptions($projectName, $packageName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdatePackage',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/packages/' . OpenApiUtilClient::getEncodeParam($packageName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $projectName
     * @param string               $packageName
     * @param UpdatePackageRequest $request
     *
     * @return UpdatePackageResponse
     */
    public function updatePackage($projectName, $packageName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePackageWithOptions($projectName, $packageName, $request, $headers, $runtime);
    }

    /**
     * @param string                          $projectName
     * @param UpdateProjectIpWhiteListRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateProjectIpWhiteListResponse
     */
    public function updateProjectIpWhiteListWithOptions($projectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateProjectIpWhiteList',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/projects/' . OpenApiUtilClient::getEncodeParam($projectName) . '/ipWhiteList',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $projectName
     * @param UpdateProjectIpWhiteListRequest $request
     *
     * @return UpdateProjectIpWhiteListResponse
     */
    public function updateProjectIpWhiteList($projectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectIpWhiteListWithOptions($projectName, $request, $headers, $runtime);
    }

    /**
     * @param string             $nickname
     * @param UpdateQuotaRequest $request
     * @param UpdateQuotaHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuotaWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->akProven)) {
            $realHeaders['AkProven'] = Utils::toJSONString($headers->akProven);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateQuota',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $nickname
     * @param UpdateQuotaRequest $request
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuota($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateQuotaHeaders([]);

        return $this->updateQuotaWithOptions($nickname, $request, $headers, $runtime);
    }

    /**
     * @param string                 $nickname
     * @param string                 $planName
     * @param UpdateQuotaPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateQuotaPlanResponse
     */
    public function updateQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateQuotaPlan',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/plans/' . OpenApiUtilClient::getEncodeParam($planName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateQuotaPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $nickname
     * @param string                 $planName
     * @param UpdateQuotaPlanRequest $request
     *
     * @return UpdateQuotaPlanResponse
     */
    public function updateQuotaPlan($nickname, $planName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaPlanWithOptions($nickname, $planName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $nickname
     * @param UpdateQuotaScheduleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateQuotaScheduleResponse
     */
    public function updateQuotaScheduleWithOptions($nickname, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateQuotaSchedule',
            'version'     => '2022-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($nickname) . '/schedule',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateQuotaScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $nickname
     * @param UpdateQuotaScheduleRequest $request
     *
     * @return UpdateQuotaScheduleResponse
     */
    public function updateQuotaSchedule($nickname, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaScheduleWithOptions($nickname, $request, $headers, $runtime);
    }
}
