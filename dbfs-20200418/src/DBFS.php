<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AddTagsBatchRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AddTagsBatchResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AttachDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AttachDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteTagsBatchRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteTagsBatchResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DescribeDbfsSpecificationsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DescribeDbfsSpecificationsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DescribeInstanceTypesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DescribeInstanceTypesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DetachDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DetachDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetServiceLinkedRoleRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetServiceLinkedRoleResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachableEcsInstancesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachableEcsInstancesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachedEcsInstancesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachedEcsInstancesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\RenameDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\RenameDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResizeDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResizeDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\TagDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\TagDbfsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class DBFS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'dbfs.aliyuncs.com',
            'cn-beijing-finance-1'        => 'dbfs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'dbfs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'dbfs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'dbfs.aliyuncs.com',
            'cn-edge-1'                   => 'dbfs.aliyuncs.com',
            'cn-fujian'                   => 'dbfs.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'dbfs.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'dbfs.aliyuncs.com',
            'cn-hangzhou-finance'         => 'dbfs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dbfs.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dbfs.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dbfs.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dbfs.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'dbfs.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'dbfs.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'dbfs.aliyuncs.com',
            'cn-north-2-gov-1'            => 'dbfs.aliyuncs.com',
            'cn-qingdao-nebula'           => 'dbfs.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'dbfs.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'dbfs.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'dbfs.aliyuncs.com',
            'cn-shanghai-inner'           => 'dbfs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dbfs.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'dbfs.aliyuncs.com',
            'cn-shenzhen-inner'           => 'dbfs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'dbfs.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'dbfs.aliyuncs.com',
            'cn-wuhan'                    => 'dbfs.aliyuncs.com',
            'cn-wulanchabu'               => 'dbfs.aliyuncs.com',
            'cn-yushanfang'               => 'dbfs.aliyuncs.com',
            'cn-zhangbei'                 => 'dbfs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'dbfs.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'dbfs.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'dbfs.aliyuncs.com',
            'eu-west-1-oxs'               => 'dbfs.aliyuncs.com',
            'rus-west-1-pop'              => 'dbfs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dbfs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddTagsBatchRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddTagsBatchResponse
     */
    public function addTagsBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbfsList)) {
            $query['DbfsList'] = $request->dbfsList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTagsBatch',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTagsBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTagsBatchRequest $request
     *
     * @return AddTagsBatchResponse
     */
    public function addTagsBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsBatchWithOptions($request, $runtime);
    }

    /**
     * @param AttachDbfsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AttachDbfsResponse
     */
    public function attachDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachMode)) {
            $query['AttachMode'] = $request->attachMode;
        }
        if (!Utils::isUnset($request->attachPoint)) {
            $query['AttachPoint'] = $request->attachPoint;
        }
        if (!Utils::isUnset($request->ECSInstanceId)) {
            $query['ECSInstanceId'] = $request->ECSInstanceId;
        }
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serverUrl)) {
            $query['ServerUrl'] = $request->serverUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachDbfsRequest $request
     *
     * @return AttachDbfsResponse
     */
    public function attachDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDbfsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDbfsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateDbfsResponse
     */
    public function createDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->advancedFeatures)) {
            $query['AdvancedFeatures'] = $request->advancedFeatures;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteSnapshot)) {
            $query['DeleteSnapshot'] = $request->deleteSnapshot;
        }
        if (!Utils::isUnset($request->enableRaid)) {
            $query['EnableRaid'] = $request->enableRaid;
        }
        if (!Utils::isUnset($request->encryption)) {
            $query['Encryption'] = $request->encryption;
        }
        if (!Utils::isUnset($request->fsName)) {
            $query['FsName'] = $request->fsName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->KMSKeyId)) {
            $query['KMSKeyId'] = $request->KMSKeyId;
        }
        if (!Utils::isUnset($request->performanceLevel)) {
            $query['PerformanceLevel'] = $request->performanceLevel;
        }
        if (!Utils::isUnset($request->raidStripeUnitNumber)) {
            $query['RaidStripeUnitNumber'] = $request->raidStripeUnitNumber;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sizeG)) {
            $query['SizeG'] = $request->sizeG;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->usedScene)) {
            $query['UsedScene'] = $request->usedScene;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDbfsRequest $request
     *
     * @return CreateDbfsResponse
     */
    public function createDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDbfsWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSnapshot',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDbfsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteDbfsResponse
     */
    public function deleteDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDbfsRequest $request
     *
     * @return DeleteDbfsResponse
     */
    public function deleteDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDbfsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshot',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagsBatchRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTagsBatchResponse
     */
    public function deleteTagsBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbfsList)) {
            $query['DbfsList'] = $request->dbfsList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTagsBatch',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagsBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTagsBatchRequest $request
     *
     * @return DeleteTagsBatchResponse
     */
    public function deleteTagsBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagsBatchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDbfsSpecificationsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDbfsSpecificationsResponse
     */
    public function describeDbfsSpecificationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->ecsInstanceType)) {
            $query['EcsInstanceType'] = $request->ecsInstanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDbfsSpecifications',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDbfsSpecificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDbfsSpecificationsRequest $request
     *
     * @return DescribeDbfsSpecificationsResponse
     */
    public function describeDbfsSpecifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbfsSpecificationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTypes',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param DetachDbfsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetachDbfsResponse
     */
    public function detachDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ECSInstanceId)) {
            $query['ECSInstanceId'] = $request->ECSInstanceId;
        }
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachDbfsRequest $request
     *
     * @return DetachDbfsResponse
     */
    public function detachDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDbfsWithOptions($request, $runtime);
    }

    /**
     * @param GetDbfsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetDbfsResponse
     */
    public function getDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDbfsRequest $request
     *
     * @return GetDbfsResponse
     */
    public function getDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDbfsWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceLinkedRoleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetServiceLinkedRoleResponse
     */
    public function getServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceLinkedRole',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceLinkedRoleRequest $request
     *
     * @return GetServiceLinkedRoleResponse
     */
    public function getServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param ListDbfsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListDbfsResponse
     */
    public function listDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterKey)) {
            $query['FilterKey'] = $request->filterKey;
        }
        if (!Utils::isUnset($request->filterValue)) {
            $query['FilterValue'] = $request->filterValue;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDbfsRequest $request
     *
     * @return ListDbfsResponse
     */
    public function listDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDbfsWithOptions($request, $runtime);
    }

    /**
     * @param ListDbfsAttachableEcsInstancesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListDbfsAttachableEcsInstancesResponse
     */
    public function listDbfsAttachableEcsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDbfsAttachableEcsInstances',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDbfsAttachableEcsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDbfsAttachableEcsInstancesRequest $request
     *
     * @return ListDbfsAttachableEcsInstancesResponse
     */
    public function listDbfsAttachableEcsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDbfsAttachableEcsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListDbfsAttachedEcsInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDbfsAttachedEcsInstancesResponse
     */
    public function listDbfsAttachedEcsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDbfsAttachedEcsInstances',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDbfsAttachedEcsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDbfsAttachedEcsInstancesRequest $request
     *
     * @return ListDbfsAttachedEcsInstancesResponse
     */
    public function listDbfsAttachedEcsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDbfsAttachedEcsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListSnapshotRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSnapshotResponse
     */
    public function listSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterKey)) {
            $query['FilterKey'] = $request->filterKey;
        }
        if (!Utils::isUnset($request->filterValue)) {
            $query['FilterValue'] = $request->filterValue;
        }
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotIds)) {
            $query['SnapshotIds'] = $request->snapshotIds;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        if (!Utils::isUnset($request->snapshotType)) {
            $query['SnapshotType'] = $request->snapshotType;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshot',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSnapshotRequest $request
     *
     * @return ListSnapshotResponse
     */
    public function listSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @param RenameDbfsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RenameDbfsResponse
     */
    public function renameDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->fsName)) {
            $query['FsName'] = $request->fsName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenameDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenameDbfsRequest $request
     *
     * @return RenameDbfsResponse
     */
    public function renameDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameDbfsWithOptions($request, $runtime);
    }

    /**
     * @param ResizeDbfsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResizeDbfsResponse
     */
    public function resizeDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->newSizeG)) {
            $query['NewSizeG'] = $request->newSizeG;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResizeDbfsRequest $request
     *
     * @return ResizeDbfsResponse
     */
    public function resizeDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeDbfsWithOptions($request, $runtime);
    }

    /**
     * @param TagDbfsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return TagDbfsResponse
     */
    public function tagDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbfsId)) {
            $query['DbfsId'] = $request->dbfsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagDbfsRequest $request
     *
     * @return TagDbfsResponse
     */
    public function tagDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagDbfsWithOptions($request, $runtime);
    }
}
