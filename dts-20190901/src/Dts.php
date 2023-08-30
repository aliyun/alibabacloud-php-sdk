<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20190901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dts\V20190901\Models\ConfigureSynchronizationJobAlertRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\ConfigureSynchronizationJobAlertResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\ConfigureSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\ConfigureSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\CreateSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\CreateSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\DeleteSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\DeleteSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeEndpointSwitchStatusRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeEndpointSwitchStatusResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationJobAlertRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationJobAlertResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationJobsRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationJobsResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationJobStatusRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationJobStatusResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationObjectModifyStatusRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\DescribeSynchronizationObjectModifyStatusResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\ModifySynchronizationObjectRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\ModifySynchronizationObjectResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\ResetSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\ResetSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\StartSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\StartSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\SuspendSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\SuspendSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20190901\Models\SwitchSynchronizationEndpointRequest;
use AlibabaCloud\SDK\Dts\V20190901\Models\SwitchSynchronizationEndpointResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'dts.aliyuncs.com',
            'cn-beijing'                  => 'dts.aliyuncs.com',
            'cn-zhangjiakou'              => 'dts.aliyuncs.com',
            'cn-huhehaote'                => 'dts.aliyuncs.com',
            'cn-hangzhou'                 => 'dts.aliyuncs.com',
            'cn-shanghai'                 => 'dts.aliyuncs.com',
            'cn-shenzhen'                 => 'dts.aliyuncs.com',
            'cn-hongkong'                 => 'dts.aliyuncs.com',
            'ap-southeast-1'              => 'dts.aliyuncs.com',
            'ap-southeast-2'              => 'dts.aliyuncs.com',
            'ap-southeast-3'              => 'dts.aliyuncs.com',
            'ap-southeast-5'              => 'dts.aliyuncs.com',
            'eu-west-1'                   => 'dts.aliyuncs.com',
            'us-west-1'                   => 'dts.aliyuncs.com',
            'us-east-1'                   => 'dts.aliyuncs.com',
            'eu-central-1'                => 'dts.aliyuncs.com',
            'me-east-1'                   => 'dts.aliyuncs.com',
            'ap-south-1'                  => 'dts.aliyuncs.com',
            'cn-hangzhou-finance'         => 'dts.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'dts.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'dts.aliyuncs.com',
            'cn-north-2-gov-1'            => 'dts.aliyuncs.com',
            'ap-northeast-2-pop'          => 'dts.aliyuncs.com',
            'cn-beijing-finance-1'        => 'dts.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'dts.aliyuncs.com',
            'cn-beijing-gov-1'            => 'dts.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'dts.aliyuncs.com',
            'cn-chengdu'                  => 'dts.aliyuncs.com',
            'cn-edge-1'                   => 'dts.aliyuncs.com',
            'cn-fujian'                   => 'dts.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'dts.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dts.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'dts.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'dts.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'dts.aliyuncs.com',
            'cn-qingdao-nebula'           => 'dts.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'dts.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'dts.aliyuncs.com',
            'cn-shanghai-inner'           => 'dts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dts.aliyuncs.com',
            'cn-shenzhen-inner'           => 'dts.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'dts.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'dts.aliyuncs.com',
            'cn-wuhan'                    => 'dts.aliyuncs.com',
            'cn-wulanchabu'               => 'dts.aliyuncs.com',
            'cn-yushanfang'               => 'dts.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'dts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'dts.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'dts.aliyuncs.com',
            'eu-west-1-oxs'               => 'dts.aliyuncs.com',
            'rus-west-1-pop'              => 'dts.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ConfigureSynchronizationJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ConfigureSynchronizationJobResponse
     */
    public function configureSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkpoint)) {
            $query['Checkpoint'] = $request->checkpoint;
        }
        if (!Utils::isUnset($request->dataInitialization)) {
            $query['DataInitialization'] = $request->dataInitialization;
        }
        if (!Utils::isUnset($request->migrationReserved)) {
            $query['MigrationReserved'] = $request->migrationReserved;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->structureInitialization)) {
            $query['StructureInitialization'] = $request->structureInitialization;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        if (!Utils::isUnset($request->synchronizationJobName)) {
            $query['SynchronizationJobName'] = $request->synchronizationJobName;
        }
        if (!Utils::isUnset($request->synchronizationObjects)) {
            $query['SynchronizationObjects'] = $request->synchronizationObjects;
        }
        if (!Utils::isUnset($request->destinationEndpoint)) {
            $query['DestinationEndpoint'] = $request->destinationEndpoint;
        }
        if (!Utils::isUnset($request->partitionKey)) {
            $query['PartitionKey'] = $request->partitionKey;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSynchronizationJob',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigureSynchronizationJobRequest $request
     *
     * @return ConfigureSynchronizationJobResponse
     */
    public function configureSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @param ConfigureSynchronizationJobAlertRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ConfigureSynchronizationJobAlertResponse
     */
    public function configureSynchronizationJobAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delayAlertPhone)) {
            $query['DelayAlertPhone'] = $request->delayAlertPhone;
        }
        if (!Utils::isUnset($request->delayAlertStatus)) {
            $query['DelayAlertStatus'] = $request->delayAlertStatus;
        }
        if (!Utils::isUnset($request->delayOverSeconds)) {
            $query['DelayOverSeconds'] = $request->delayOverSeconds;
        }
        if (!Utils::isUnset($request->errorAlertPhone)) {
            $query['ErrorAlertPhone'] = $request->errorAlertPhone;
        }
        if (!Utils::isUnset($request->errorAlertStatus)) {
            $query['ErrorAlertStatus'] = $request->errorAlertStatus;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSynchronizationJobAlert',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSynchronizationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigureSynchronizationJobAlertRequest $request
     *
     * @return ConfigureSynchronizationJobAlertResponse
     */
    public function configureSynchronizationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobAlertWithOptions($request, $runtime);
    }

    /**
     * @param CreateSynchronizationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSynchronizationJobResponse
     */
    public function createSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destRegion)) {
            $query['DestRegion'] = $request->destRegion;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->sourceRegion)) {
            $query['SourceRegion'] = $request->sourceRegion;
        }
        if (!Utils::isUnset($request->synchronizationJobClass)) {
            $query['SynchronizationJobClass'] = $request->synchronizationJobClass;
        }
        if (!Utils::isUnset($request->topology)) {
            $query['Topology'] = $request->topology;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->destinationEndpoint)) {
            $query['DestinationEndpoint'] = $request->destinationEndpoint;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSynchronizationJob',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSynchronizationJobRequest $request
     *
     * @return CreateSynchronizationJobResponse
     */
    public function createSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSynchronizationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSynchronizationJobResponse
     */
    public function deleteSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSynchronizationJob',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSynchronizationJobRequest $request
     *
     * @return DeleteSynchronizationJobResponse
     */
    public function deleteSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEndpointSwitchStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeEndpointSwitchStatusResponse
     */
    public function describeEndpointSwitchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndpointSwitchStatus',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEndpointSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEndpointSwitchStatusRequest $request
     *
     * @return DescribeEndpointSwitchStatusResponse
     */
    public function describeEndpointSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSynchronizationJobAlertRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSynchronizationJobAlertResponse
     */
    public function describeSynchronizationJobAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobAlert',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSynchronizationJobAlertRequest $request
     *
     * @return DescribeSynchronizationJobAlertResponse
     */
    public function describeSynchronizationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobAlertWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSynchronizationJobStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSynchronizationJobStatusResponse
     */
    public function describeSynchronizationJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobStatus',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSynchronizationJobStatusRequest $request
     *
     * @return DescribeSynchronizationJobStatusResponse
     */
    public function describeSynchronizationJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSynchronizationJobsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSynchronizationJobsResponse
     */
    public function describeSynchronizationJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->synchronizationJobName)) {
            $query['SynchronizationJobName'] = $request->synchronizationJobName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobs',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSynchronizationJobsRequest $request
     *
     * @return DescribeSynchronizationJobsResponse
     */
    public function describeSynchronizationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSynchronizationObjectModifyStatusRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeSynchronizationObjectModifyStatusResponse
     */
    public function describeSynchronizationObjectModifyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationObjectModifyStatus',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationObjectModifyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSynchronizationObjectModifyStatusRequest $request
     *
     * @return DescribeSynchronizationObjectModifyStatusResponse
     */
    public function describeSynchronizationObjectModifyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationObjectModifyStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifySynchronizationObjectRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifySynchronizationObjectResponse
     */
    public function modifySynchronizationObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        if (!Utils::isUnset($request->synchronizationObjects)) {
            $query['SynchronizationObjects'] = $request->synchronizationObjects;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySynchronizationObject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySynchronizationObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySynchronizationObjectRequest $request
     *
     * @return ModifySynchronizationObjectResponse
     */
    public function modifySynchronizationObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySynchronizationObjectWithOptions($request, $runtime);
    }

    /**
     * @param ResetSynchronizationJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ResetSynchronizationJobResponse
     */
    public function resetSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetSynchronizationJob',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetSynchronizationJobRequest $request
     *
     * @return ResetSynchronizationJobResponse
     */
    public function resetSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @param StartSynchronizationJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StartSynchronizationJobResponse
     */
    public function startSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartSynchronizationJob',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartSynchronizationJobRequest $request
     *
     * @return StartSynchronizationJobResponse
     */
    public function startSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @param SuspendSynchronizationJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SuspendSynchronizationJobResponse
     */
    public function suspendSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendSynchronizationJob',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendSynchronizationJobRequest $request
     *
     * @return SuspendSynchronizationJobResponse
     */
    public function suspendSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @param SwitchSynchronizationEndpointRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SwitchSynchronizationEndpointResponse
     */
    public function switchSynchronizationEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchSynchronizationEndpoint',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchSynchronizationEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchSynchronizationEndpointRequest $request
     *
     * @return SwitchSynchronizationEndpointResponse
     */
    public function switchSynchronizationEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSynchronizationEndpointWithOptions($request, $runtime);
    }
}
