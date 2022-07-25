<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateSandboxInstanceRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\CreateSandboxInstanceResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DeleteSandboxInstanceRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DeleteSandboxInstanceResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxBackupSetsRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxBackupSetsResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxInstancesRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxInstancesResponse;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxRecoveryTimeRequest;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeSandboxRecoveryTimeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @param CreateSandboxInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSandboxInstanceResponse
     */
    public function createSandboxInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->sandboxInstanceName)) {
            $query['SandboxInstanceName'] = $request->sandboxInstanceName;
        }
        if (!Utils::isUnset($request->sandboxPassword)) {
            $query['SandboxPassword'] = $request->sandboxPassword;
        }
        if (!Utils::isUnset($request->sandboxSpecification)) {
            $query['SandboxSpecification'] = $request->sandboxSpecification;
        }
        if (!Utils::isUnset($request->sandboxType)) {
            $query['SandboxType'] = $request->sandboxType;
        }
        if (!Utils::isUnset($request->sandboxUser)) {
            $query['SandboxUser'] = $request->sandboxUser;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcSwitchId)) {
            $query['VpcSwitchId'] = $request->vpcSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSandboxInstance',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSandboxInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSandboxInstanceRequest $request
     *
     * @return CreateSandboxInstanceResponse
     */
    public function createSandboxInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSandboxInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSandboxInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSandboxInstanceResponse
     */
    public function deleteSandboxInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSandboxInstance',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSandboxInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSandboxInstanceRequest $request
     *
     * @return DeleteSandboxInstanceResponse
     */
    public function deleteSandboxInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSandboxInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSandboxBackupSetsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSandboxBackupSetsResponse
     */
    public function describeSandboxBackupSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSandboxBackupSets',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSandboxBackupSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSandboxBackupSetsRequest $request
     *
     * @return DescribeSandboxBackupSetsResponse
     */
    public function describeSandboxBackupSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxBackupSetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSandboxInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSandboxInstancesResponse
     */
    public function describeSandboxInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSandboxInstances',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSandboxInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSandboxInstancesRequest $request
     *
     * @return DescribeSandboxInstancesResponse
     */
    public function describeSandboxInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSandboxRecoveryTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSandboxRecoveryTimeResponse
     */
    public function describeSandboxRecoveryTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSandboxRecoveryTime',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSandboxRecoveryTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSandboxRecoveryTimeRequest $request
     *
     * @return DescribeSandboxRecoveryTimeResponse
     */
    public function describeSandboxRecoveryTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSandboxRecoveryTimeWithOptions($request, $runtime);
    }
}
