<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ConfigureBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ConfigureBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateFullBackupSetDownloadRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateFullBackupSetDownloadResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateGetDBListFromAgentTaskRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateGetDBListFromAgentTaskResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateIncrementBackupSetDownloadRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateIncrementBackupSetDownloadResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateRestoreTaskRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateRestoreTaskResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanBillingRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanBillingResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeJobErrorCodeRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeJobErrorCodeResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DisableBackupLogRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DisableBackupLogResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\EnableBackupLogRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\EnableBackupLogResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\GetDBListFromAgentRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\GetDBListFromAgentResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupObjectsRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupObjectsResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupPlanNameRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupPlanNameResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSetDownloadRulesRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSetDownloadRulesResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSourceEndpointRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSourceEndpointResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupStrategyRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupStrategyResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyStorageStrategyRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyStorageStrategyResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ReleaseBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ReleaseBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\RenewBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\RenewBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartRestoreTaskRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartRestoreTaskResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartTaskRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartTaskResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StopBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StopBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\UpgradeBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\UpgradeBackupPlanResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dbs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-beijing'            => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-chengdu'            => 'dbs-api.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou'        => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote'          => 'dbs-api.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-southeast-1'        => 'dbs-api.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dbs-api.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dbs-api.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dbs-api.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1'        => 'dbs-api.ap-northeast-1.aliyuncs.com',
            'us-west-1'             => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'us-east-1'             => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'eu-central-1'          => 'dbs-api.eu-central-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-south-1'            => 'dbs-api.ap-south-1.aliyuncs.com',
            'eu-west-1'             => 'dbs-api.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dbs-api.me-east-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dbs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ConfigureBackupPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigureBackupPlanResponse
     */
    public function configureBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigureBackupPlanResponse::fromMap($this->doRPCRequest('ConfigureBackupPlan', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigureBackupPlanRequest $request
     *
     * @return ConfigureBackupPlanResponse
     */
    public function configureBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupPlanResponse::fromMap($this->doRPCRequest('CreateBackupPlan', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBackupPlanRequest $request
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateFullBackupSetDownloadRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateFullBackupSetDownloadResponse
     */
    public function createFullBackupSetDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFullBackupSetDownloadResponse::fromMap($this->doRPCRequest('CreateFullBackupSetDownload', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFullBackupSetDownloadRequest $request
     *
     * @return CreateFullBackupSetDownloadResponse
     */
    public function createFullBackupSetDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFullBackupSetDownloadWithOptions($request, $runtime);
    }

    /**
     * @param CreateGetDBListFromAgentTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateGetDBListFromAgentTaskResponse
     */
    public function createGetDBListFromAgentTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGetDBListFromAgentTaskResponse::fromMap($this->doRPCRequest('CreateGetDBListFromAgentTask', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGetDBListFromAgentTaskRequest $request
     *
     * @return CreateGetDBListFromAgentTaskResponse
     */
    public function createGetDBListFromAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGetDBListFromAgentTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateIncrementBackupSetDownloadRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateIncrementBackupSetDownloadResponse
     */
    public function createIncrementBackupSetDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIncrementBackupSetDownloadResponse::fromMap($this->doRPCRequest('CreateIncrementBackupSetDownload', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateIncrementBackupSetDownloadRequest $request
     *
     * @return CreateIncrementBackupSetDownloadResponse
     */
    public function createIncrementBackupSetDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIncrementBackupSetDownloadWithOptions($request, $runtime);
    }

    /**
     * @param CreateRestoreTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRestoreTaskResponse
     */
    public function createRestoreTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRestoreTaskResponse::fromMap($this->doRPCRequest('CreateRestoreTask', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRestoreTaskRequest $request
     *
     * @return CreateRestoreTaskResponse
     */
    public function createRestoreTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRestoreTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupGatewayListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBackupGatewayListResponse
     */
    public function describeBackupGatewayListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupGatewayListResponse::fromMap($this->doRPCRequest('DescribeBackupGatewayList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupGatewayListRequest $request
     *
     * @return DescribeBackupGatewayListResponse
     */
    public function describeBackupGatewayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupGatewayListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPlanBillingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBackupPlanBillingResponse
     */
    public function describeBackupPlanBillingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPlanBillingResponse::fromMap($this->doRPCRequest('DescribeBackupPlanBilling', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupPlanBillingRequest $request
     *
     * @return DescribeBackupPlanBillingResponse
     */
    public function describeBackupPlanBilling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlanBillingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPlanListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackupPlanListResponse
     */
    public function describeBackupPlanListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPlanListResponse::fromMap($this->doRPCRequest('DescribeBackupPlanList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupPlanListRequest $request
     *
     * @return DescribeBackupPlanListResponse
     */
    public function describeBackupPlanList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlanListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupSetDownloadTaskListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeBackupSetDownloadTaskListResponse
     */
    public function describeBackupSetDownloadTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupSetDownloadTaskListResponse::fromMap($this->doRPCRequest('DescribeBackupSetDownloadTaskList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupSetDownloadTaskListRequest $request
     *
     * @return DescribeBackupSetDownloadTaskListResponse
     */
    public function describeBackupSetDownloadTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetDownloadTaskListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFullBackupListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeFullBackupListResponse
     */
    public function describeFullBackupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFullBackupListResponse::fromMap($this->doRPCRequest('DescribeFullBackupList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFullBackupListRequest $request
     *
     * @return DescribeFullBackupListResponse
     */
    public function describeFullBackupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFullBackupListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIncrementBackupListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeIncrementBackupListResponse
     */
    public function describeIncrementBackupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIncrementBackupListResponse::fromMap($this->doRPCRequest('DescribeIncrementBackupList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIncrementBackupListRequest $request
     *
     * @return DescribeIncrementBackupListResponse
     */
    public function describeIncrementBackupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIncrementBackupListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJobErrorCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeJobErrorCodeResponse
     */
    public function describeJobErrorCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeJobErrorCodeResponse::fromMap($this->doRPCRequest('DescribeJobErrorCode', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeJobErrorCodeRequest $request
     *
     * @return DescribeJobErrorCodeResponse
     */
    public function describeJobErrorCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobErrorCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNodeCidrListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNodeCidrListResponse
     */
    public function describeNodeCidrListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNodeCidrListResponse::fromMap($this->doRPCRequest('DescribeNodeCidrList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNodeCidrListRequest $request
     *
     * @return DescribeNodeCidrListResponse
     */
    public function describeNodeCidrList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeCidrListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePreCheckProgressListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePreCheckProgressListResponse
     */
    public function describePreCheckProgressListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePreCheckProgressListResponse::fromMap($this->doRPCRequest('DescribePreCheckProgressList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePreCheckProgressListRequest $request
     *
     * @return DescribePreCheckProgressListResponse
     */
    public function describePreCheckProgressList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckProgressListWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRestoreRangeInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRestoreRangeInfoResponse
     */
    public function describeRestoreRangeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreRangeInfoResponse::fromMap($this->doRPCRequest('DescribeRestoreRangeInfo', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRestoreRangeInfoRequest $request
     *
     * @return DescribeRestoreRangeInfoResponse
     */
    public function describeRestoreRangeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreRangeInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRestoreTaskListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRestoreTaskListResponse
     */
    public function describeRestoreTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreTaskListResponse::fromMap($this->doRPCRequest('DescribeRestoreTaskList', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRestoreTaskListRequest $request
     *
     * @return DescribeRestoreTaskListResponse
     */
    public function describeRestoreTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreTaskListWithOptions($request, $runtime);
    }

    /**
     * @param DisableBackupLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisableBackupLogResponse
     */
    public function disableBackupLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableBackupLogResponse::fromMap($this->doRPCRequest('DisableBackupLog', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableBackupLogRequest $request
     *
     * @return DisableBackupLogResponse
     */
    public function disableBackupLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableBackupLogWithOptions($request, $runtime);
    }

    /**
     * @param EnableBackupLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableBackupLogResponse
     */
    public function enableBackupLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableBackupLogResponse::fromMap($this->doRPCRequest('EnableBackupLog', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableBackupLogRequest $request
     *
     * @return EnableBackupLogResponse
     */
    public function enableBackupLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBackupLogWithOptions($request, $runtime);
    }

    /**
     * @param GetDBListFromAgentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDBListFromAgentResponse
     */
    public function getDBListFromAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDBListFromAgentResponse::fromMap($this->doRPCRequest('GetDBListFromAgent', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDBListFromAgentRequest $request
     *
     * @return GetDBListFromAgentResponse
     */
    public function getDBListFromAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBListFromAgentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupObjectsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyBackupObjectsResponse
     */
    public function modifyBackupObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupObjectsResponse::fromMap($this->doRPCRequest('ModifyBackupObjects', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupObjectsRequest $request
     *
     * @return ModifyBackupObjectsResponse
     */
    public function modifyBackupObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupObjectsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupPlanNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyBackupPlanNameResponse
     */
    public function modifyBackupPlanNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPlanNameResponse::fromMap($this->doRPCRequest('ModifyBackupPlanName', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupPlanNameRequest $request
     *
     * @return ModifyBackupPlanNameResponse
     */
    public function modifyBackupPlanName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPlanNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupSetDownloadRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyBackupSetDownloadRulesResponse
     */
    public function modifyBackupSetDownloadRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupSetDownloadRulesResponse::fromMap($this->doRPCRequest('ModifyBackupSetDownloadRules', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupSetDownloadRulesRequest $request
     *
     * @return ModifyBackupSetDownloadRulesResponse
     */
    public function modifyBackupSetDownloadRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupSetDownloadRulesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupSourceEndpointRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyBackupSourceEndpointResponse
     */
    public function modifyBackupSourceEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupSourceEndpointResponse::fromMap($this->doRPCRequest('ModifyBackupSourceEndpoint', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupSourceEndpointRequest $request
     *
     * @return ModifyBackupSourceEndpointResponse
     */
    public function modifyBackupSourceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupSourceEndpointWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupStrategyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyBackupStrategyResponse
     */
    public function modifyBackupStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupStrategyResponse::fromMap($this->doRPCRequest('ModifyBackupStrategy', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupStrategyRequest $request
     *
     * @return ModifyBackupStrategyResponse
     */
    public function modifyBackupStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupStrategyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStorageStrategyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyStorageStrategyResponse
     */
    public function modifyStorageStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyStorageStrategyResponse::fromMap($this->doRPCRequest('ModifyStorageStrategy', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyStorageStrategyRequest $request
     *
     * @return ModifyStorageStrategyResponse
     */
    public function modifyStorageStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageStrategyWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseBackupPlanResponse
     */
    public function releaseBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseBackupPlanResponse::fromMap($this->doRPCRequest('ReleaseBackupPlan', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseBackupPlanRequest $request
     *
     * @return ReleaseBackupPlanResponse
     */
    public function releaseBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param RenewBackupPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RenewBackupPlanResponse
     */
    public function renewBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewBackupPlanResponse::fromMap($this->doRPCRequest('RenewBackupPlan', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenewBackupPlanRequest $request
     *
     * @return RenewBackupPlanResponse
     */
    public function renewBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param StartBackupPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartBackupPlanResponse
     */
    public function startBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartBackupPlanResponse::fromMap($this->doRPCRequest('StartBackupPlan', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartBackupPlanRequest $request
     *
     * @return StartBackupPlanResponse
     */
    public function startBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param StartRestoreTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartRestoreTaskResponse
     */
    public function startRestoreTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartRestoreTaskResponse::fromMap($this->doRPCRequest('StartRestoreTask', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartRestoreTaskRequest $request
     *
     * @return StartRestoreTaskResponse
     */
    public function startRestoreTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRestoreTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartTaskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartTaskResponse
     */
    public function startTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartTaskResponse::fromMap($this->doRPCRequest('StartTask', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartTaskRequest $request
     *
     * @return StartTaskResponse
     */
    public function startTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopBackupPlanRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopBackupPlanResponse
     */
    public function stopBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopBackupPlanResponse::fromMap($this->doRPCRequest('StopBackupPlan', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopBackupPlanRequest $request
     *
     * @return StopBackupPlanResponse
     */
    public function stopBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeBackupPlanResponse
     */
    public function upgradeBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeBackupPlanResponse::fromMap($this->doRPCRequest('UpgradeBackupPlan', '2019-03-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeBackupPlanRequest $request
     *
     * @return UpgradeBackupPlanResponse
     */
    public function upgradeBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeBackupPlanWithOptions($request, $runtime);
    }
}
