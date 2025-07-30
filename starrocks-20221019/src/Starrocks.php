<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Response;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesShrinkRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskNumberRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskNumberResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskPerformanceLevelRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskPerformanceLevelResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskSizeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskSizeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberPreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberPreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUpgradableVersionsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUpgradableVersionsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpgradeVersionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpgradeVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Starrocks extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('starrocks', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 资源转组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceGroup/change',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 资源转组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建StarRocks集群
     *  *
     * @param CreateInstanceV1Request $request CreateInstanceV1Request
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceV1Response CreateInstanceV1Response
     */
    public function createInstanceV1WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->adminPassword)) {
            $body['AdminPassword'] = $request->adminPassword;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->backendNodeGroups)) {
            $body['BackendNodeGroups'] = $request->backendNodeGroups;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->encrypted)) {
            $body['Encrypted'] = $request->encrypted;
        }
        if (!Utils::isUnset($request->frontendNodeGroups)) {
            $body['FrontendNodeGroups'] = $request->frontendNodeGroups;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->kmsKeyId)) {
            $body['KmsKeyId'] = $request->kmsKeyId;
        }
        if (!Utils::isUnset($request->observerNodeGroups)) {
            $body['ObserverNodeGroups'] = $request->observerNodeGroups;
        }
        if (!Utils::isUnset($request->ossAccessingRoleName)) {
            $body['OssAccessingRoleName'] = $request->ossAccessingRoleName;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->payType)) {
            $body['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $body['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->runMode)) {
            $body['RunMode'] = $request->runMode;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->vSwitches)) {
            $body['VSwitches'] = $request->vSwitches;
        }
        if (!Utils::isUnset($request->version)) {
            $body['Version'] = $request->version;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceV1',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/createV1',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceV1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建StarRocks集群
     *  *
     * @param CreateInstanceV1Request $request CreateInstanceV1Request
     *
     * @return CreateInstanceV1Response CreateInstanceV1Response
     */
    public function createInstanceV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceV1WithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 为用户创建AliyunServiceRoleForEMRStarRocks
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/user/create_default_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为用户创建AliyunServiceRoleForEMRStarRocks
     *  *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceLinkedRoleWithOptions($headers, $runtime);
    }

    /**
     * @summary 根据集群ID或者名称等信息过滤集群
     *  *
     * @param DescribeInstancesRequest $tmpReq  DescribeInstancesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/describeInstances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据集群ID或者名称等信息过滤集群
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the number of CUs for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the number of CUs for a warehouse of only StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you modify the number of CUs for a warehouse, the billing of CUs has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of CUs.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of CUs before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyCuRequest $request ModifyCuRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCuResponse ModifyCuResponse
     */
    public function modifyCuWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fastMode)) {
            $query['FastMode'] = $request->fastMode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCu',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyCu',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyCuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the number of CUs for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the number of CUs for a warehouse of only StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you modify the number of CUs for a warehouse, the billing of CUs has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of CUs.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of CUs before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyCuRequest $request ModifyCuRequest
     *
     * @return ModifyCuResponse ModifyCuResponse
     */
    public function modifyCu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyCuWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Performs a precheck before you modify the number of CUs for a warehouse.
     *  *
     * @param ModifyCuPreCheckRequest $request ModifyCuPreCheckRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCuPreCheckResponse ModifyCuPreCheckResponse
     */
    public function modifyCuPreCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCuPreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyCuPreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyCuPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a precheck before you modify the number of CUs for a warehouse.
     *  *
     * @param ModifyCuPreCheckRequest $request ModifyCuPreCheckRequest
     *
     * @return ModifyCuPreCheckResponse ModifyCuPreCheckResponse
     */
    public function modifyCuPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyCuPreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Increases the number of disks for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can increase the number of disks only for StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you increase the number of disks for a warehouse, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of disks before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyDiskNumberRequest $request ModifyDiskNumberRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDiskNumberResponse ModifyDiskNumberResponse
     */
    public function modifyDiskNumberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fastMode)) {
            $query['FastMode'] = $request->fastMode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskNumber',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Increases the number of disks for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can increase the number of disks only for StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you increase the number of disks for a warehouse, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of disks before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyDiskNumberRequest $request ModifyDiskNumberRequest
     *
     * @return ModifyDiskNumberResponse ModifyDiskNumberResponse
     */
    public function modifyDiskNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the disk performance level for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/en/product/ecs?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.47c9281fkIZGiB#pricing) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the disk performance level only for StarRocks instances of Standard Edition.
     * *   You can modify the disk performance level only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * *   You cannot downgrade the performance level to PL0.
     * *   The performance level of an Enterprise SSD (ESSD) is limited by the ESSD disk size. If you cannot upgrade the performance level of an ESSD, expand the ESSD and try again. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
     * After the disk performance level is changed, the billing of the disk has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk performance level before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyDiskPerformanceLevelRequest $request ModifyDiskPerformanceLevelRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDiskPerformanceLevelResponse ModifyDiskPerformanceLevelResponse
     */
    public function modifyDiskPerformanceLevelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskPerformanceLevel',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskPerformanceLevel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskPerformanceLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the disk performance level for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/en/product/ecs?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.47c9281fkIZGiB#pricing) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the disk performance level only for StarRocks instances of Standard Edition.
     * *   You can modify the disk performance level only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * *   You cannot downgrade the performance level to PL0.
     * *   The performance level of an Enterprise SSD (ESSD) is limited by the ESSD disk size. If you cannot upgrade the performance level of an ESSD, expand the ESSD and try again. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
     * After the disk performance level is changed, the billing of the disk has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk performance level before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyDiskPerformanceLevelRequest $request ModifyDiskPerformanceLevelRequest
     *
     * @return ModifyDiskPerformanceLevelResponse ModifyDiskPerformanceLevelResponse
     */
    public function modifyDiskPerformanceLevel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskPerformanceLevelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Expands the disk size for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can expand the disk size only for StarRocks instances of Standard Edition.
     * *   You can expand the disk size only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you expand the disk size, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk size.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk size before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyDiskSizeRequest $request ModifyDiskSizeRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDiskSizeResponse ModifyDiskSizeResponse
     */
    public function modifyDiskSizeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskSize',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskSize',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Expands the disk size for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can expand the disk size only for StarRocks instances of Standard Edition.
     * *   You can expand the disk size only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you expand the disk size, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk size.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk size before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyDiskSizeRequest $request ModifyDiskSizeRequest
     *
     * @return ModifyDiskSizeResponse ModifyDiskSizeResponse
     */
    public function modifyDiskSize($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskSizeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can modify the number of nodes in a warehouse of only StarRocks instances of Standard Edition.
     * *   The instance must be in the Running state.
     * *   The number of frontend nodes (FEs) cannot be an even number, and you cannot reduce the number of FE nodes.
     * After you modify the number of nodes in a warehouse, the billing of nodes has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of nodes.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of nodes before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyNodeNumberRequest $request ModifyNodeNumberRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNodeNumberResponse ModifyNodeNumberResponse
     */
    public function modifyNodeNumberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->promotionOptionNo)) {
            $query['PromotionOptionNo'] = $request->promotionOptionNo;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeNumber',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyNodeNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodeNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can modify the number of nodes in a warehouse of only StarRocks instances of Standard Edition.
     * *   The instance must be in the Running state.
     * *   The number of frontend nodes (FEs) cannot be an even number, and you cannot reduce the number of FE nodes.
     * After you modify the number of nodes in a warehouse, the billing of nodes has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of nodes.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of nodes before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *  *
     * @param ModifyNodeNumberRequest $request ModifyNodeNumberRequest
     *
     * @return ModifyNodeNumberResponse ModifyNodeNumberResponse
     */
    public function modifyNodeNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Performs a precheck before you modify the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @param ModifyNodeNumberPreCheckRequest $request ModifyNodeNumberPreCheckRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNodeNumberPreCheckResponse ModifyNodeNumberPreCheckResponse
     */
    public function modifyNodeNumberPreCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeNumberPreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyNodeNumberPreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodeNumberPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a precheck before you modify the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @param ModifyNodeNumberPreCheckRequest $request ModifyNodeNumberPreCheckRequest
     *
     * @return ModifyNodeNumberPreCheckResponse ModifyNodeNumberPreCheckResponse
     */
    public function modifyNodeNumberPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeNumberPreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the versions of an E-MapReduce (EMR) Serverless StarRocks instance that the versions that you can upgrade to. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. You can call this operation to query the minor versions or major versions that the versions that you can upgrade to.
     *  *
     * @param QueryUpgradableVersionsRequest $request QueryUpgradableVersionsRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUpgradableVersionsResponse QueryUpgradableVersionsResponse
     */
    public function queryUpgradableVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->minor)) {
            $query['Minor'] = $request->minor;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUpgradableVersions',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/queryUpgradableVersions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryUpgradableVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the versions of an E-MapReduce (EMR) Serverless StarRocks instance that the versions that you can upgrade to. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. You can call this operation to query the minor versions or major versions that the versions that you can upgrade to.
     *  *
     * @param QueryUpgradableVersionsRequest $request QueryUpgradableVersionsRequest
     *
     * @return QueryUpgradableVersionsResponse QueryUpgradableVersionsResponse
     */
    public function queryUpgradableVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryUpgradableVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Releases a pay-as-you-go E-MapReduce (EMR) Serverless StarRocks instance. To unsubscribe from a subscription instance, go to the Unsubscribe page of the Expenses and Costs console.
     *  *
     * @description **
     * **Warning:** After an instance is released, all physical resources used by the instance are recycled. Relevant data is erased and cannot be restored.
     *  *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/release',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a pay-as-you-go E-MapReduce (EMR) Serverless StarRocks instance. To unsubscribe from a subscription instance, go to the Unsubscribe page of the Expenses and Costs console.
     *  *
     * @description **
     * **Warning:** After an instance is released, all physical resources used by the instance are recycled. Relevant data is erased and cannot be restored.
     *  *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description This operation is an asynchronous operation. After you call this operation to restart a StarRocks instance, the operation sets the status of the instance to Restarting and begins the restart process. When the status of the instance changes to Running, the instance is restarted.
     *  *
     * @param RestartInstanceRequest $request RestartInstanceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartInstanceResponse RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fastMode)) {
            $query['FastMode'] = $request->fastMode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/restartCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @description This operation is an asynchronous operation. After you call this operation to restart a StarRocks instance, the operation sets the status of the instance to Restarting and begins the restart process. When the status of the instance changes to Running, the instance is restarted.
     *  *
     * @param RestartInstanceRequest $request RestartInstanceRequest
     *
     * @return RestartInstanceResponse RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 打标
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 打标
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除标签
     *  *
     * @param UnTagResourcesRequest $tmpReq  UnTagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnTagResourcesResponse UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UnTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceId)) {
            $request->resourceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagKey)) {
            $request->tagKeyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIdShrink)) {
            $query['ResourceId'] = $request->resourceIdShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeyShrink)) {
            $query['TagKey'] = $request->tagKeyShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除标签
     *  *
     * @param UnTagResourcesRequest $request UnTagResourcesRequest
     *
     * @return UnTagResourcesResponse UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the name of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @param UpdateInstanceNameRequest $request UpdateInstanceNameRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceNameResponse UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceName',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/update_name',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of an E-MapReduce (EMR) Serverless StarRocks instance.
     *  *
     * @param UpdateInstanceNameRequest $request UpdateInstanceNameRequest
     *
     * @return UpdateInstanceNameResponse UpdateInstanceNameResponse
     */
    public function updateInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Upgrades the version of an E-MapReduce (EMR) Serverless StarRocks instance. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. This operation can be used to upgrade the minor version or major version of a StarRocks instance. You can call the QueryUpgradableVersions operation to query the versions that you can upgrade to.
     *  *
     * @description The instance must be in the Running state when you call this operation.
     *  *
     * @param UpgradeVersionRequest $request UpgradeVersionRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeVersionResponse UpgradeVersionResponse
     */
    public function upgradeVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fastMode)) {
            $query['FastMode'] = $request->fastMode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->minor)) {
            $query['Minor'] = $request->minor;
        }
        if (!Utils::isUnset($request->targetVersion)) {
            $query['TargetVersion'] = $request->targetVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeVersion',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/upgradeVersion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrades the version of an E-MapReduce (EMR) Serverless StarRocks instance. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. This operation can be used to upgrade the minor version or major version of a StarRocks instance. You can call the QueryUpgradableVersions operation to query the versions that you can upgrade to.
     *  *
     * @description The instance must be in the Running state when you call this operation.
     *  *
     * @param UpgradeVersionRequest $request UpgradeVersionRequest
     *
     * @return UpgradeVersionResponse UpgradeVersionResponse
     */
    public function upgradeVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeVersionWithOptions($request, $headers, $runtime);
    }
}
