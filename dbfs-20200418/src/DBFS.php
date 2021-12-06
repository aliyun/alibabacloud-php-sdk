<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AddTagsBatchRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AddTagsBatchResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AttachDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AttachDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateConstantsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateConstantsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteConstantsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteConstantsResponse;
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
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListConstantsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListConstantsResponse;
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
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTaskRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTaskResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\OpreateConstantsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\OpreateConstantsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\RenameDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\RenameDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResetDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResetDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResizeDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResizeDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\TagDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\TagDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\UpdateConstantsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\UpdateConstantsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\UpdateTaskRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\UpdateTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddTagsBatchResponse::fromMap($this->doRPCRequest('AddTagsBatch', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachDbfsResponse::fromMap($this->doRPCRequest('AttachDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateConstantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateConstantsResponse
     */
    public function createConstantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConstantsResponse::fromMap($this->doRPCRequest('CreateConstants', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateConstantsRequest $request
     *
     * @return CreateConstantsResponse
     */
    public function createConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConstantsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDbfsResponse::fromMap($this->doRPCRequest('CreateDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->doRPCRequest('CreateServiceLinkedRole', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSnapshotResponse::fromMap($this->doRPCRequest('CreateSnapshot', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteConstantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteConstantsResponse
     */
    public function deleteConstantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConstantsResponse::fromMap($this->doRPCRequest('DeleteConstants', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteConstantsRequest $request
     *
     * @return DeleteConstantsResponse
     */
    public function deleteConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConstantsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDbfsResponse::fromMap($this->doRPCRequest('DeleteDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSnapshotResponse::fromMap($this->doRPCRequest('DeleteSnapshot', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTagsBatchResponse::fromMap($this->doRPCRequest('DeleteTagsBatch', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDbfsSpecificationsResponse::fromMap($this->doRPCRequest('DescribeDbfsSpecifications', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceTypesResponse::fromMap($this->doRPCRequest('DescribeInstanceTypes', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachDbfsResponse::fromMap($this->doRPCRequest('DetachDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDbfsResponse::fromMap($this->doRPCRequest('GetDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceLinkedRoleResponse::fromMap($this->doRPCRequest('GetServiceLinkedRole', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListConstantsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListConstantsResponse
     */
    public function listConstantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConstantsResponse::fromMap($this->doRPCRequest('ListConstants', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConstantsRequest $request
     *
     * @return ListConstantsResponse
     */
    public function listConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConstantsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDbfsResponse::fromMap($this->doRPCRequest('ListDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDbfsAttachableEcsInstancesResponse::fromMap($this->doRPCRequest('ListDbfsAttachableEcsInstances', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDbfsAttachedEcsInstancesResponse::fromMap($this->doRPCRequest('ListDbfsAttachedEcsInstances', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSnapshotResponse::fromMap($this->doRPCRequest('ListSnapshot', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagValuesResponse::fromMap($this->doRPCRequest('ListTagValues', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTaskResponse
     */
    public function listTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskResponse::fromMap($this->doRPCRequest('ListTask', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTaskRequest $request
     *
     * @return ListTaskResponse
     */
    public function listTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskWithOptions($request, $runtime);
    }

    /**
     * @param OpreateConstantsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OpreateConstantsResponse
     */
    public function opreateConstantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpreateConstantsResponse::fromMap($this->doRPCRequest('OpreateConstants', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpreateConstantsRequest $request
     *
     * @return OpreateConstantsResponse
     */
    public function opreateConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->opreateConstantsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenameDbfsResponse::fromMap($this->doRPCRequest('RenameDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ResetDbfsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ResetDbfsResponse
     */
    public function resetDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetDbfsResponse::fromMap($this->doRPCRequest('ResetDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetDbfsRequest $request
     *
     * @return ResetDbfsResponse
     */
    public function resetDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDbfsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeDbfsResponse::fromMap($this->doRPCRequest('ResizeDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagDbfsResponse::fromMap($this->doRPCRequest('TagDbfs', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param UpdateConstantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateConstantsResponse
     */
    public function updateConstantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConstantsResponse::fromMap($this->doRPCRequest('UpdateConstants', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConstantsRequest $request
     *
     * @return UpdateConstantsResponse
     */
    public function updateConstants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConstantsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateTaskResponse
     */
    public function updateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTaskResponse::fromMap($this->doRPCRequest('UpdateTask', '2020-04-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTaskRequest $request
     *
     * @return UpdateTaskResponse
     */
    public function updateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskWithOptions($request, $runtime);
    }
}
