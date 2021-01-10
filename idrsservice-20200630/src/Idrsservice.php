<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateLiveDetectionRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateLiveDetectionResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateLiveRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateLiveResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateStatisticsRecordRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateStatisticsRecordResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateStatisticsTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateStatisticsTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTaskGroupRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTaskGroupResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateUserDepartmentsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateUserDepartmentsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserDepartmentsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserDepartmentsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ExitLiveRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ExitLiveResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetBatchSignedUrlRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetBatchSignedUrlResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectEvaluationRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectEvaluationResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectionRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectionResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessJsonFileRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessJsonFileResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessTemplateResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetGlobalConfigRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetGlobalConfigResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetModelSignedUrlRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetModelSignedUrlResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetPreSignedUrlRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetPreSignedUrlResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetServiceConfigurationRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetServiceConfigurationResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetSignedUrlRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetSignedUrlResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetSlrConfigurationRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetSlrConfigurationResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskGroupRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskGroupResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetUserRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetUserResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\InitializeServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\InitializeServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinLiveRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinLiveResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListAppsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListAppsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectionsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectionsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectProcessesRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectProcessesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListFilesRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListFilesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListLivesRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListLivesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRolesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRulesRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRulesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListStatisticsTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListStatisticsTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskGroupsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskGroupsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskItemsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskItemsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTasksRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTasksResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListUsersRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListUsersResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\RenameDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\RenameDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateLiveRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateLiveResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateServiceConfigurationRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateServiceConfigurationResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateSlrConfigurationRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateSlrConfigurationResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Idrsservice extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'idrsservice.aliyuncs.com',
            'ap-northeast-2-pop'          => 'idrsservice.aliyuncs.com',
            'ap-south-1'                  => 'idrsservice.aliyuncs.com',
            'ap-southeast-1'              => 'idrsservice.aliyuncs.com',
            'ap-southeast-2'              => 'idrsservice.aliyuncs.com',
            'ap-southeast-3'              => 'idrsservice.aliyuncs.com',
            'ap-southeast-5'              => 'idrsservice.aliyuncs.com',
            'cn-beijing'                  => 'idrsservice.aliyuncs.com',
            'cn-beijing-finance-1'        => 'idrsservice.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'idrsservice.aliyuncs.com',
            'cn-beijing-gov-1'            => 'idrsservice.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'idrsservice.aliyuncs.com',
            'cn-chengdu'                  => 'idrsservice.aliyuncs.com',
            'cn-edge-1'                   => 'idrsservice.aliyuncs.com',
            'cn-fujian'                   => 'idrsservice.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-finance'         => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'idrsservice.aliyuncs.com',
            'cn-hongkong'                 => 'idrsservice.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'idrsservice.aliyuncs.com',
            'cn-huhehaote'                => 'idrsservice.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'idrsservice.aliyuncs.com',
            'cn-north-2-gov-1'            => 'idrsservice.aliyuncs.com',
            'cn-qingdao'                  => 'idrsservice.aliyuncs.com',
            'cn-qingdao-nebula'           => 'idrsservice.aliyuncs.com',
            'cn-shanghai'                 => 'idrsservice.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'idrsservice.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'idrsservice.aliyuncs.com',
            'cn-shanghai-inner'           => 'idrsservice.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'idrsservice.aliyuncs.com',
            'cn-shenzhen'                 => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-inner'           => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'idrsservice.aliyuncs.com',
            'cn-wuhan'                    => 'idrsservice.aliyuncs.com',
            'cn-wulanchabu'               => 'idrsservice.aliyuncs.com',
            'cn-yushanfang'               => 'idrsservice.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'idrsservice.aliyuncs.com',
            'cn-zhangjiakou'              => 'idrsservice.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'idrsservice.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'idrsservice.aliyuncs.com',
            'eu-central-1'                => 'idrsservice.aliyuncs.com',
            'eu-west-1'                   => 'idrsservice.aliyuncs.com',
            'eu-west-1-oxs'               => 'idrsservice.aliyuncs.com',
            'me-east-1'                   => 'idrsservice.aliyuncs.com',
            'rus-west-1-pop'              => 'idrsservice.aliyuncs.com',
            'us-east-1'                   => 'idrsservice.aliyuncs.com',
            'us-west-1'                   => 'idrsservice.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('idrsservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->doRPCRequest('CheckServiceLinkedRole', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckServiceLinkedRoleRequest $request
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppResponse::fromMap($this->doRPCRequest('CreateApp', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDepartmentResponse
     */
    public function createDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDepartmentResponse::fromMap($this->doRPCRequest('CreateDepartment', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDepartmentRequest $request
     *
     * @return CreateDepartmentResponse
     */
    public function createDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param CreateDetectProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDetectProcessResponse
     */
    public function createDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDetectProcessResponse::fromMap($this->doRPCRequest('CreateDetectProcess', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDetectProcessRequest $request
     *
     * @return CreateDetectProcessResponse
     */
    public function createDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateLiveResponse
     */
    public function createLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLiveResponse::fromMap($this->doRPCRequest('CreateLive', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLiveRequest $request
     *
     * @return CreateLiveResponse
     */
    public function createLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveDetectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLiveDetectionResponse
     */
    public function createLiveDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLiveDetectionResponse::fromMap($this->doRPCRequest('CreateLiveDetection', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLiveDetectionRequest $request
     *
     * @return CreateLiveDetectionResponse
     */
    public function createLiveDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveDetectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleResponse::fromMap($this->doRPCRequest('CreateRule', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateStatisticsRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateStatisticsRecordResponse
     */
    public function createStatisticsRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateStatisticsRecordResponse::fromMap($this->doRPCRequest('CreateStatisticsRecord', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateStatisticsRecordRequest $request
     *
     * @return CreateStatisticsRecordResponse
     */
    public function createStatisticsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStatisticsRecordWithOptions($request, $runtime);
    }

    /**
     * @param CreateStatisticsTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStatisticsTaskResponse
     */
    public function createStatisticsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateStatisticsTaskResponse::fromMap($this->doRPCRequest('CreateStatisticsTask', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateStatisticsTaskRequest $request
     *
     * @return CreateStatisticsTaskResponse
     */
    public function createStatisticsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStatisticsTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateTaskGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTaskGroupResponse
     */
    public function createTaskGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTaskGroupResponse::fromMap($this->doRPCRequest('CreateTaskGroup', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTaskGroupRequest $request
     *
     * @return CreateTaskGroupResponse
     */
    public function createTaskGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserDepartmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateUserDepartmentsResponse
     */
    public function createUserDepartmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserDepartmentsResponse::fromMap($this->doRPCRequest('CreateUserDepartments', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserDepartmentsRequest $request
     *
     * @return CreateUserDepartmentsResponse
     */
    public function createUserDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserDepartmentsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAppResponse::fromMap($this->doRPCRequest('DeleteApp', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDepartmentResponse::fromMap($this->doRPCRequest('DeleteDepartment', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDepartmentRequest $request
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDetectProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDetectProcessResponse
     */
    public function deleteDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDetectProcessResponse::fromMap($this->doRPCRequest('DeleteDetectProcess', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDetectProcessRequest $request
     *
     * @return DeleteDetectProcessResponse
     */
    public function deleteDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleResponse::fromMap($this->doRPCRequest('DeleteRule', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserDepartmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUserDepartmentsResponse
     */
    public function deleteUserDepartmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserDepartmentsResponse::fromMap($this->doRPCRequest('DeleteUserDepartments', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserDepartmentsRequest $request
     *
     * @return DeleteUserDepartmentsResponse
     */
    public function deleteUserDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserDepartmentsWithOptions($request, $runtime);
    }

    /**
     * @param ExitLiveRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ExitLiveResponse
     */
    public function exitLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExitLiveResponse::fromMap($this->doRPCRequest('ExitLive', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExitLiveRequest $request
     *
     * @return ExitLiveResponse
     */
    public function exitLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exitLiveWithOptions($request, $runtime);
    }

    /**
     * @param GetAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAppResponse::fromMap($this->doRPCRequest('GetApp', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @param GetBatchSignedUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBatchSignedUrlResponse
     */
    public function getBatchSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBatchSignedUrlResponse::fromMap($this->doRPCRequest('GetBatchSignedUrl', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBatchSignedUrlRequest $request
     *
     * @return GetBatchSignedUrlResponse
     */
    public function getBatchSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetDepartmentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDepartmentResponse
     */
    public function getDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDepartmentResponse::fromMap($this->doRPCRequest('GetDepartment', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDepartmentRequest $request
     *
     * @return GetDepartmentResponse
     */
    public function getDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectEvaluationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDetectEvaluationResponse
     */
    public function getDetectEvaluationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDetectEvaluationResponse::fromMap($this->doRPCRequest('GetDetectEvaluation', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDetectEvaluationRequest $request
     *
     * @return GetDetectEvaluationResponse
     */
    public function getDetectEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectEvaluationWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDetectionResponse
     */
    public function getDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDetectionResponse::fromMap($this->doRPCRequest('GetDetection', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDetectionRequest $request
     *
     * @return GetDetectionResponse
     */
    public function getDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectionWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectProcessRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDetectProcessResponse
     */
    public function getDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDetectProcessResponse::fromMap($this->doRPCRequest('GetDetectProcess', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDetectProcessRequest $request
     *
     * @return GetDetectProcessResponse
     */
    public function getDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectProcessJsonFileRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDetectProcessJsonFileResponse
     */
    public function getDetectProcessJsonFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDetectProcessJsonFileResponse::fromMap($this->doRPCRequest('GetDetectProcessJsonFile', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDetectProcessJsonFileRequest $request
     *
     * @return GetDetectProcessJsonFileResponse
     */
    public function getDetectProcessJsonFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectProcessJsonFileWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetDetectProcessTemplateResponse
     */
    public function getDetectProcessTemplateWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetDetectProcessTemplateResponse::fromMap($this->doRPCRequest('GetDetectProcessTemplate', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetDetectProcessTemplateResponse
     */
    public function getDetectProcessTemplate()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectProcessTemplateWithOptions($runtime);
    }

    /**
     * @param GetGlobalConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetGlobalConfigResponse
     */
    public function getGlobalConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGlobalConfigResponse::fromMap($this->doRPCRequest('GetGlobalConfig', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGlobalConfigRequest $request
     *
     * @return GetGlobalConfigResponse
     */
    public function getGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetModelSignedUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetModelSignedUrlResponse
     */
    public function getModelSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetModelSignedUrlResponse::fromMap($this->doRPCRequest('GetModelSignedUrl', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetModelSignedUrlRequest $request
     *
     * @return GetModelSignedUrlResponse
     */
    public function getModelSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetPreSignedUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPreSignedUrlResponse
     */
    public function getPreSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPreSignedUrlResponse::fromMap($this->doRPCRequest('GetPreSignedUrl', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPreSignedUrlRequest $request
     *
     * @return GetPreSignedUrlResponse
     */
    public function getPreSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPreSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleResponse::fromMap($this->doRPCRequest('GetRule', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRuleRequest $request
     *
     * @return GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceConfigurationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetServiceConfigurationResponse
     */
    public function getServiceConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceConfigurationResponse::fromMap($this->doRPCRequest('GetServiceConfiguration', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceConfigurationRequest $request
     *
     * @return GetServiceConfigurationResponse
     */
    public function getServiceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param GetSignedUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSignedUrlResponse
     */
    public function getSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSignedUrlResponse::fromMap($this->doRPCRequest('GetSignedUrl', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSignedUrlRequest $request
     *
     * @return GetSignedUrlResponse
     */
    public function getSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetSlrConfigurationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSlrConfigurationResponse
     */
    public function getSlrConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSlrConfigurationResponse::fromMap($this->doRPCRequest('GetSlrConfiguration', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSlrConfigurationRequest $request
     *
     * @return GetSlrConfigurationResponse
     */
    public function getSlrConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSlrConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param GetStatisticsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetStatisticsResponse
     */
    public function getStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetStatisticsResponse::fromMap($this->doRPCRequest('GetStatistics', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetStatisticsRequest $request
     *
     * @return GetStatisticsResponse
     */
    public function getStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskResponse::fromMap($this->doRPCRequest('GetTask', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTaskGroupResponse
     */
    public function getTaskGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskGroupResponse::fromMap($this->doRPCRequest('GetTaskGroup', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskGroupRequest $request
     *
     * @return GetTaskGroupResponse
     */
    public function getTaskGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserResponse::fromMap($this->doRPCRequest('GetUser', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param InitializeServiceLinkedRoleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return InitializeServiceLinkedRoleResponse
     */
    public function initializeServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitializeServiceLinkedRoleResponse::fromMap($this->doRPCRequest('InitializeServiceLinkedRole', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InitializeServiceLinkedRoleRequest $request
     *
     * @return InitializeServiceLinkedRoleResponse
     */
    public function initializeServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param JoinLiveRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return JoinLiveResponse
     */
    public function joinLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinLiveResponse::fromMap($this->doRPCRequest('JoinLive', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param JoinLiveRequest $request
     *
     * @return JoinLiveResponse
     */
    public function joinLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinLiveWithOptions($request, $runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAppsResponse::fromMap($this->doRPCRequest('ListApps', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListDepartmentsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDepartmentsResponse
     */
    public function listDepartmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDepartmentsResponse::fromMap($this->doRPCRequest('ListDepartments', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDepartmentsRequest $request
     *
     * @return ListDepartmentsResponse
     */
    public function listDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDepartmentsWithOptions($request, $runtime);
    }

    /**
     * @param ListDetectionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDetectionsResponse
     */
    public function listDetectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDetectionsResponse::fromMap($this->doRPCRequest('ListDetections', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDetectionsRequest $request
     *
     * @return ListDetectionsResponse
     */
    public function listDetections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListDetectProcessesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDetectProcessesResponse
     */
    public function listDetectProcessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDetectProcessesResponse::fromMap($this->doRPCRequest('ListDetectProcesses', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDetectProcessesRequest $request
     *
     * @return ListDetectProcessesResponse
     */
    public function listDetectProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetectProcessesWithOptions($request, $runtime);
    }

    /**
     * @param ListFilesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFilesResponse
     */
    public function listFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFilesResponse::fromMap($this->doRPCRequest('ListFiles', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFilesRequest $request
     *
     * @return ListFilesResponse
     */
    public function listFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListLivesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListLivesResponse
     */
    public function listLivesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLivesResponse::fromMap($this->doRPCRequest('ListLives', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLivesRequest $request
     *
     * @return ListLivesResponse
     */
    public function listLives($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLivesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListRolesResponse::fromMap($this->doRPCRequest('ListRoles', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListRolesResponse
     */
    public function listRoles()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($runtime);
    }

    /**
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRulesResponse::fromMap($this->doRPCRequest('ListRules', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListStatisticsTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStatisticsTaskResponse
     */
    public function listStatisticsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListStatisticsTaskResponse::fromMap($this->doRPCRequest('ListStatisticsTask', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListStatisticsTaskRequest $request
     *
     * @return ListStatisticsTaskResponse
     */
    public function listStatisticsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStatisticsTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTaskGroupsResponse
     */
    public function listTaskGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskGroupsResponse::fromMap($this->doRPCRequest('ListTaskGroups', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTaskGroupsRequest $request
     *
     * @return ListTaskGroupsResponse
     */
    public function listTaskGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskItemsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTaskItemsResponse
     */
    public function listTaskItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskItemsResponse::fromMap($this->doRPCRequest('ListTaskItems', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTaskItemsRequest $request
     *
     * @return ListTaskItemsResponse
     */
    public function listTaskItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskItemsWithOptions($request, $runtime);
    }

    /**
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTasksResponse::fromMap($this->doRPCRequest('ListTasks', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param RenameDetectProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RenameDetectProcessResponse
     */
    public function renameDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenameDetectProcessResponse::fromMap($this->doRPCRequest('RenameDetectProcess', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenameDetectProcessRequest $request
     *
     * @return RenameDetectProcessResponse
     */
    public function renameDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppResponse::fromMap($this->doRPCRequest('UpdateApp', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDepartmentResponse::fromMap($this->doRPCRequest('UpdateDepartment', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDepartmentRequest $request
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDetectProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDetectProcessResponse
     */
    public function updateDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDetectProcessResponse::fromMap($this->doRPCRequest('UpdateDetectProcess', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDetectProcessRequest $request
     *
     * @return UpdateDetectProcessResponse
     */
    public function updateDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateLiveResponse
     */
    public function updateLiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLiveResponse::fromMap($this->doRPCRequest('UpdateLive', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateLiveRequest $request
     *
     * @return UpdateLiveResponse
     */
    public function updateLive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRuleResponse::fromMap($this->doRPCRequest('UpdateRule', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRuleRequest $request
     *
     * @return UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceConfigurationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateServiceConfigurationResponse
     */
    public function updateServiceConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateServiceConfigurationResponse::fromMap($this->doRPCRequest('UpdateServiceConfiguration', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServiceConfigurationRequest $request
     *
     * @return UpdateServiceConfigurationResponse
     */
    public function updateServiceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSlrConfigurationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSlrConfigurationResponse
     */
    public function updateSlrConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSlrConfigurationResponse::fromMap($this->doRPCRequest('UpdateSlrConfiguration', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSlrConfigurationRequest $request
     *
     * @return UpdateSlrConfigurationResponse
     */
    public function updateSlrConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSlrConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserResponse::fromMap($this->doRPCRequest('UpdateUser', '2020-06-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
