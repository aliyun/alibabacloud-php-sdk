<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AddTagsBatchRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AddTagsBatchResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ApplyAutoSnapshotPolicyShrinkRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AttachDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\AttachDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CancelAutoSnapshotPolicyShrinkRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateAutoSnapshotPolicyShrinkRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\DeleteAutoSnapshotPolicyResponse;
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
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetServiceLinkedRoleRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetServiceLinkedRoleResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetSnapshotLinkRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetSnapshotLinkResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPoliciesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPoliciesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPolicyAppliedDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPolicyAppliedDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPolicyUnappliedDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPolicyUnappliedDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachableEcsInstancesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachableEcsInstancesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachedEcsInstancesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachedEcsInstancesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotLinksRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotLinksResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ModifyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ModifyAutoSnapshotPolicyShrinkRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ModifySnapshotAttributeRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ModifySnapshotAttributeResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\RenameDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\RenameDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResizeDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ResizeDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\TagDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\TagDbfsResponse;
use AlibabaCloud\SDK\DBFS\V20200418\Models\UpdateDbfsRequest;
use AlibabaCloud\SDK\DBFS\V20200418\Models\UpdateDbfsResponse;
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
     * @param AddTagsBatchRequest $request AddTagsBatchRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTagsBatchResponse AddTagsBatchResponse
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
     * @param AddTagsBatchRequest $request AddTagsBatchRequest
     *
     * @return AddTagsBatchResponse AddTagsBatchResponse
     */
    public function addTagsBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 设置自动快照策略
     *  *
     * @param ApplyAutoSnapshotPolicyRequest $tmpReq  ApplyAutoSnapshotPolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyAutoSnapshotPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dbfsIds)) {
            $request->dbfsIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dbfsIds, 'DbfsIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dbfsIdsShrink)) {
            $query['DbfsIds'] = $request->dbfsIdsShrink;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyAutoSnapshotPolicy',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置自动快照策略
     *  *
     * @param ApplyAutoSnapshotPolicyRequest $request ApplyAutoSnapshotPolicyRequest
     *
     * @return ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param AttachDbfsRequest $request AttachDbfsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachDbfsResponse AttachDbfsResponse
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
     * @param AttachDbfsRequest $request AttachDbfsRequest
     *
     * @return AttachDbfsResponse AttachDbfsResponse
     */
    public function attachDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDbfsWithOptions($request, $runtime);
    }

    /**
     * @summary 取消自动快照策略
     *  *
     * @param CancelAutoSnapshotPolicyRequest $tmpReq  CancelAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CancelAutoSnapshotPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dbfsIds)) {
            $request->dbfsIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dbfsIds, 'DbfsIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dbfsIdsShrink)) {
            $query['DbfsIds'] = $request->dbfsIdsShrink;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelAutoSnapshotPolicy',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消自动快照策略
     *  *
     * @param CancelAutoSnapshotPolicyRequest $request CancelAutoSnapshotPolicyRequest
     *
     * @return CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建自动快照策略
     *  *
     * @param CreateAutoSnapshotPolicyRequest $tmpReq  CreateAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAutoSnapshotPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->repeatWeekdays)) {
            $request->repeatWeekdaysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->repeatWeekdays, 'RepeatWeekdays', 'json');
        }
        if (!Utils::isUnset($tmpReq->timePoints)) {
            $request->timePointsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timePoints, 'TimePoints', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->repeatWeekdaysShrink)) {
            $query['RepeatWeekdays'] = $request->repeatWeekdaysShrink;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->timePointsShrink)) {
            $query['TimePoints'] = $request->timePointsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAutoSnapshotPolicy',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自动快照策略
     *  *
     * @param CreateAutoSnapshotPolicyRequest $request CreateAutoSnapshotPolicyRequest
     *
     * @return CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateDbfsRequest $request CreateDbfsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDbfsResponse CreateDbfsResponse
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
     * @param CreateDbfsRequest $request CreateDbfsRequest
     *
     * @return CreateDbfsResponse CreateDbfsResponse
     */
    public function createDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDbfsWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
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
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
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
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @summary 删除自动快照策略
     *  *
     * @param DeleteAutoSnapshotPolicyRequest $request DeleteAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAutoSnapshotPolicy',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自动快照策略
     *  *
     * @param DeleteAutoSnapshotPolicyRequest $request DeleteAutoSnapshotPolicyRequest
     *
     * @return DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDbfsRequest $request DeleteDbfsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDbfsResponse DeleteDbfsResponse
     */
    public function deleteDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
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
     * @param DeleteDbfsRequest $request DeleteDbfsRequest
     *
     * @return DeleteDbfsResponse DeleteDbfsResponse
     */
    public function deleteDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDbfsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
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
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagsBatchRequest $request DeleteTagsBatchRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTagsBatchResponse DeleteTagsBatchResponse
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
     * @param DeleteTagsBatchRequest $request DeleteTagsBatchRequest
     *
     * @return DeleteTagsBatchResponse DeleteTagsBatchResponse
     */
    public function deleteTagsBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagsBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 查询DBFS支持的ECS实例类型，根据ECS实例规格返回ECS可挂载的最大DBFS数量
     *  *
     * @param DescribeDbfsSpecificationsRequest $request DescribeDbfsSpecificationsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDbfsSpecificationsResponse DescribeDbfsSpecificationsResponse
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
     * @summary 查询DBFS支持的ECS实例类型，根据ECS实例规格返回ECS可挂载的最大DBFS数量
     *  *
     * @param DescribeDbfsSpecificationsRequest $request DescribeDbfsSpecificationsRequest
     *
     * @return DescribeDbfsSpecificationsResponse DescribeDbfsSpecificationsResponse
     */
    public function describeDbfsSpecifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbfsSpecificationsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询DBFS实例规格
     *  *
     * @param DescribeInstanceTypesRequest $request DescribeInstanceTypesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceTypesResponse DescribeInstanceTypesResponse
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
     * @summary 查询DBFS实例规格
     *  *
     * @param DescribeInstanceTypesRequest $request DescribeInstanceTypesRequest
     *
     * @return DescribeInstanceTypesResponse DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param DetachDbfsRequest $request DetachDbfsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachDbfsResponse DetachDbfsResponse
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
     * @param DetachDbfsRequest $request DetachDbfsRequest
     *
     * @return DetachDbfsResponse DetachDbfsResponse
     */
    public function detachDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDbfsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询某条自动快照策略
     *  *
     * @param GetAutoSnapshotPolicyRequest $request GetAutoSnapshotPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutoSnapshotPolicyResponse GetAutoSnapshotPolicyResponse
     */
    public function getAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoSnapshotPolicy',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询某条自动快照策略
     *  *
     * @param GetAutoSnapshotPolicyRequest $request GetAutoSnapshotPolicyRequest
     *
     * @return GetAutoSnapshotPolicyResponse GetAutoSnapshotPolicyResponse
     */
    public function getAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetDbfsRequest $request GetDbfsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDbfsResponse GetDbfsResponse
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
     * @param GetDbfsRequest $request GetDbfsRequest
     *
     * @return GetDbfsResponse GetDbfsResponse
     */
    public function getDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDbfsWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceLinkedRoleRequest $request GetServiceLinkedRoleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceLinkedRoleResponse GetServiceLinkedRoleResponse
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
     * @param GetServiceLinkedRoleRequest $request GetServiceLinkedRoleRequest
     *
     * @return GetServiceLinkedRoleResponse GetServiceLinkedRoleResponse
     */
    public function getServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @summary 获取快照链
     *  *
     * @param GetSnapshotLinkRequest $request GetSnapshotLinkRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSnapshotLinkResponse GetSnapshotLinkResponse
     */
    public function getSnapshotLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSnapshotLink',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSnapshotLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取快照链
     *  *
     * @param GetSnapshotLinkRequest $request GetSnapshotLinkRequest
     *
     * @return GetSnapshotLinkResponse GetSnapshotLinkResponse
     */
    public function getSnapshotLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotLinkWithOptions($request, $runtime);
    }

    /**
     * @summary 列出自动快照策略
     *  *
     * @param ListAutoSnapshotPoliciesRequest $request ListAutoSnapshotPoliciesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAutoSnapshotPoliciesResponse ListAutoSnapshotPoliciesResponse
     */
    public function listAutoSnapshotPoliciesWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAutoSnapshotPolicies',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAutoSnapshotPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出自动快照策略
     *  *
     * @param ListAutoSnapshotPoliciesRequest $request ListAutoSnapshotPoliciesRequest
     *
     * @return ListAutoSnapshotPoliciesResponse ListAutoSnapshotPoliciesResponse
     */
    public function listAutoSnapshotPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoSnapshotPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary 列出已设置自动快照策略的DBFS
     *  *
     * @param ListAutoSnapshotPolicyAppliedDbfsRequest $request ListAutoSnapshotPolicyAppliedDbfsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAutoSnapshotPolicyAppliedDbfsResponse ListAutoSnapshotPolicyAppliedDbfsResponse
     */
    public function listAutoSnapshotPolicyAppliedDbfsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAutoSnapshotPolicyAppliedDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAutoSnapshotPolicyAppliedDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出已设置自动快照策略的DBFS
     *  *
     * @param ListAutoSnapshotPolicyAppliedDbfsRequest $request ListAutoSnapshotPolicyAppliedDbfsRequest
     *
     * @return ListAutoSnapshotPolicyAppliedDbfsResponse ListAutoSnapshotPolicyAppliedDbfsResponse
     */
    public function listAutoSnapshotPolicyAppliedDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoSnapshotPolicyAppliedDbfsWithOptions($request, $runtime);
    }

    /**
     * @summary 列出未设置自动快照策略的DBFS
     *  *
     * @param ListAutoSnapshotPolicyUnappliedDbfsRequest $request ListAutoSnapshotPolicyUnappliedDbfsRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAutoSnapshotPolicyUnappliedDbfsResponse ListAutoSnapshotPolicyUnappliedDbfsResponse
     */
    public function listAutoSnapshotPolicyUnappliedDbfsWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAutoSnapshotPolicyUnappliedDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAutoSnapshotPolicyUnappliedDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出未设置自动快照策略的DBFS
     *  *
     * @param ListAutoSnapshotPolicyUnappliedDbfsRequest $request ListAutoSnapshotPolicyUnappliedDbfsRequest
     *
     * @return ListAutoSnapshotPolicyUnappliedDbfsResponse ListAutoSnapshotPolicyUnappliedDbfsResponse
     */
    public function listAutoSnapshotPolicyUnappliedDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoSnapshotPolicyUnappliedDbfsWithOptions($request, $runtime);
    }

    /**
     * @param ListDbfsRequest $request ListDbfsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDbfsResponse ListDbfsResponse
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
     * @param ListDbfsRequest $request ListDbfsRequest
     *
     * @return ListDbfsResponse ListDbfsResponse
     */
    public function listDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDbfsWithOptions($request, $runtime);
    }

    /**
     * @param ListDbfsAttachableEcsInstancesRequest $request ListDbfsAttachableEcsInstancesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDbfsAttachableEcsInstancesResponse ListDbfsAttachableEcsInstancesResponse
     */
    public function listDbfsAttachableEcsInstancesWithOptions($request, $runtime)
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
     * @param ListDbfsAttachableEcsInstancesRequest $request ListDbfsAttachableEcsInstancesRequest
     *
     * @return ListDbfsAttachableEcsInstancesResponse ListDbfsAttachableEcsInstancesResponse
     */
    public function listDbfsAttachableEcsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDbfsAttachableEcsInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询数据库文件系统被挂载的ECS实例列表
     *  *
     * @param ListDbfsAttachedEcsInstancesRequest $request ListDbfsAttachedEcsInstancesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDbfsAttachedEcsInstancesResponse ListDbfsAttachedEcsInstancesResponse
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
     * @summary 查询数据库文件系统被挂载的ECS实例列表
     *  *
     * @param ListDbfsAttachedEcsInstancesRequest $request ListDbfsAttachedEcsInstancesRequest
     *
     * @return ListDbfsAttachedEcsInstancesResponse ListDbfsAttachedEcsInstancesResponse
     */
    public function listDbfsAttachedEcsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDbfsAttachedEcsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListSnapshotRequest $request ListSnapshotRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotResponse ListSnapshotResponse
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
     * @param ListSnapshotRequest $request ListSnapshotRequest
     *
     * @return ListSnapshotResponse ListSnapshotResponse
     */
    public function listSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotWithOptions($request, $runtime);
    }

    /**
     * @summary 列出快照链
     *  *
     * @param ListSnapshotLinksRequest $request ListSnapshotLinksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotLinksResponse ListSnapshotLinksResponse
     */
    public function listSnapshotLinksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterKey)) {
            $query['FilterKey'] = $request->filterKey;
        }
        if (!Utils::isUnset($request->filterValue)) {
            $query['FilterValue'] = $request->filterValue;
        }
        if (!Utils::isUnset($request->fsIds)) {
            $query['FsIds'] = $request->fsIds;
        }
        if (!Utils::isUnset($request->linkIds)) {
            $query['LinkIds'] = $request->linkIds;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshotLinks',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotLinksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出快照链
     *  *
     * @param ListSnapshotLinksRequest $request ListSnapshotLinksRequest
     *
     * @return ListSnapshotLinksResponse ListSnapshotLinksResponse
     */
    public function listSnapshotLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotLinksWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
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
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagValuesRequest $request ListTagValuesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagValuesResponse ListTagValuesResponse
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
     * @param ListTagValuesRequest $request ListTagValuesRequest
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary 修改自动快照策略
     *  *
     * @param ModifyAutoSnapshotPolicyRequest $tmpReq  ModifyAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAutoSnapshotPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->repeatWeekdays)) {
            $request->repeatWeekdaysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->repeatWeekdays, 'RepeatWeekdays', 'json');
        }
        if (!Utils::isUnset($tmpReq->timePoints)) {
            $request->timePointsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timePoints, 'TimePoints', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->repeatWeekdaysShrink)) {
            $query['RepeatWeekdays'] = $request->repeatWeekdaysShrink;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        if (!Utils::isUnset($request->timePointsShrink)) {
            $query['TimePoints'] = $request->timePointsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAutoSnapshotPolicy',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改自动快照策略
     *  *
     * @param ModifyAutoSnapshotPolicyRequest $request ModifyAutoSnapshotPolicyRequest
     *
     * @return ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 修改快照属性
     *  *
     * @param ModifySnapshotAttributeRequest $request ModifySnapshotAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySnapshotAttributeResponse ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySnapshotAttribute',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySnapshotAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改快照属性
     *  *
     * @param ModifySnapshotAttributeRequest $request ModifySnapshotAttributeRequest
     *
     * @return ModifySnapshotAttributeResponse ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySnapshotAttributeWithOptions($request, $runtime);
    }

    /**
     * @param RenameDbfsRequest $request RenameDbfsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameDbfsResponse RenameDbfsResponse
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
     * @param RenameDbfsRequest $request RenameDbfsRequest
     *
     * @return RenameDbfsResponse RenameDbfsResponse
     */
    public function renameDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameDbfsWithOptions($request, $runtime);
    }

    /**
     * @param ResizeDbfsRequest $request ResizeDbfsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResizeDbfsResponse ResizeDbfsResponse
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
     * @param ResizeDbfsRequest $request ResizeDbfsRequest
     *
     * @return ResizeDbfsResponse ResizeDbfsResponse
     */
    public function resizeDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeDbfsWithOptions($request, $runtime);
    }

    /**
     * @param TagDbfsRequest $request TagDbfsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return TagDbfsResponse TagDbfsResponse
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
     * @param TagDbfsRequest $request TagDbfsRequest
     *
     * @return TagDbfsResponse TagDbfsResponse
     */
    public function tagDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagDbfsWithOptions($request, $runtime);
    }

    /**
     * @summary 修改DBFS实例，包括使用场景、实例规格等。
     *  *
     * @param UpdateDbfsRequest $request UpdateDbfsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDbfsResponse UpdateDbfsResponse
     */
    public function updateDbfsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->advancedFeatures)) {
            $query['AdvancedFeatures'] = $request->advancedFeatures;
        }
        if (!Utils::isUnset($request->fsId)) {
            $query['FsId'] = $request->fsId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->usedScene)) {
            $query['UsedScene'] = $request->usedScene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDbfs',
            'version'     => '2020-04-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDbfsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改DBFS实例，包括使用场景、实例规格等。
     *  *
     * @param UpdateDbfsRequest $request UpdateDbfsRequest
     *
     * @return UpdateDbfsResponse UpdateDbfsResponse
     */
    public function updateDbfs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDbfsWithOptions($request, $runtime);
    }
}
