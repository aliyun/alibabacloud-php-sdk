<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description The language type of the returned information:
     *
     * - zh: Chinese
     * - en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Billing method, including PREPAY (Subscription) and POSTPAY (Pay-As-You-Go).
     *
     * This parameter is ignored for the Serverless edition.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Engine specifications, with the following values:
     *
     * [Professional Edition]
     *
     * - `MSE_SC_2_4_60_c`: 2 cores, 4GB
     * - `MSE_SC_1_2_60_c`: 1 core, 2GB
     * - `MSE_SC_4_8_60_c`: 4 cores, 8GB
     * - `MSE_SC_8_16_60_c`: 8 cores, 16GB
     * - `MSE_SC_16_32_60_c`: 16 cores, 32GB
     *
     * [Developer Edition]
     *
     * - `MSE_SC_1_2_60_c`: 1 core, 2GB
     * - `MSE_SC_2_4_60_c`: 2 cores, 4GB
     *
     * [Serverless Edition]
     *
     * Ignore this parameter, or you can fill in `MSE_SC_SERVERLESS`.
     *
     * This parameter is required.
     *
     * @example MSE_SC_2_4_60_c
     *
     * @var string
     */
    public $clusterSpecification;

    /**
     * @description Cluster type, including ZooKeeper, Nacos-Ans.
     *
     * This parameter is required.
     *
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Cluster version, with the following values:
     *
     * [Professional Edition]
     *
     * - `NACOS_2_0_0`: indicates Nacos 2.x.x version.
     * - `ZooKeeper_3_8_0`: indicates ZooKeeper 3.8.x version.
     *
     * [Developer Edition]
     *
     * - `NACOS_2_0_0`: indicates Nacos 2.x version.
     * - `ZooKeeper_3_8_0`: indicates ZooKeeper 3.8.x version.
     *
     * [Serverless Edition]
     *
     * - `NACOS_2_0_0`: indicates Nacos 2.x version.
     * - `ZooKeeper_3_8_0`: indicates ZooKeeper 3.8.x version.
     *
     * This parameter is required.
     *
     * @example NACOS_2_0_0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description Network access type, `slb` or `single_eni`; some regions\\" Developer Edition only support the `single_eni` type.
     *
     * @example slb
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description No longer in use
     *
     * @example alicloud-disk-ssd
     *
     * @deprecated
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Valid when `ConnectionType` is `single_eni`, indicating whether to enable public network access (Elastic IP).
     *
     * @var bool
     */
    public $eipEnabled;

    /**
     * @description Number of instance nodes, with a range limit of 1 to 9.
     *
     * [Professional Edition]
     * - The number of instances must be 3 or more and must be an odd number.
     *
     * [Developer Edition]
     * - The number of instances can only be 1.
     *
     * [Serverless Edition]
     *
     * Ignore this parameter.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description Custom instance name
     *
     * @example tanshuyingtest001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Required unless under special circumstances, with the following values:
     *
     * - `mse_pro`: indicates Professional Edition.
     * - `mse_dev`: indicates Developer Edition.
     * - `mse_serverless`: indicates Serverless Edition.
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description Network type, with the following values:
     * - `privatenet`: indicates a private network.
     * - `pubnet`: indicates a public network.
     *
     * This parameter is required.
     *
     * @example privatenet
     *
     * @var string
     */
    public $netType;

    /**
     * @description No longer in use
     *
     * @example slb.s1.small
     *
     * @deprecated
     *
     * @var string
     */
    public $privateSlbSpecification;

    /**
     * @description Valid when `ConnectionType` is `slb`. 0 indicates no public network access SLB creation, and values above 1 indicate a fixed bandwidth for public network access SLB; unit: Mbps.
     *
     * Value range: 0~5000.
     *
     * @example 0
     *
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @description No longer in use
     *
     * @example slb.s1.small
     *
     * @deprecated
     *
     * @var string
     */
    public $pubSlbSpecification;

    /**
     * @description The region where the cluster is located, including but not limited to the following regions:
     * - `cn-hangzhou`: Hangzhou
     * - `cn-beijing`: Beijing
     * - `cn-shanghai`: Shanghai
     * - `cn-zhangjiakou`: Zhangjiakou
     * - `cn-shenzhen`: Shenzhen
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description Extended request parameters, in JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description Resource group ID. For more details about the resource group, see [Basic Information of Resource Group](https://help.aliyun.com/document_detail/457230.html).
     *
     * @example rg-aekzcqmoay3dlyq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Valid when `ConnectionType` is `single_eni`, indicating the security group type of the instance.
     *
     * @example enterprise
     *
     * @var string
     */
    public $securityGroupType;

    /**
     * @description List of tags to be added. Contains up to 20 items.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Switch ID.
     *
     * @example vsw-bp17opt4v18sto39k****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID.
     *
     * @example vpc-bp1t50e045b5g7i3p****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'chargeType' => 'ChargeType',
        'clusterSpecification' => 'ClusterSpecification',
        'clusterType' => 'ClusterType',
        'clusterVersion' => 'ClusterVersion',
        'connectionType' => 'ConnectionType',
        'diskType' => 'DiskType',
        'eipEnabled' => 'EipEnabled',
        'instanceCount' => 'InstanceCount',
        'instanceName' => 'InstanceName',
        'mseVersion' => 'MseVersion',
        'netType' => 'NetType',
        'privateSlbSpecification' => 'PrivateSlbSpecification',
        'pubNetworkFlow' => 'PubNetworkFlow',
        'pubSlbSpecification' => 'PubSlbSpecification',
        'region' => 'Region',
        'requestPars' => 'RequestPars',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupType' => 'SecurityGroupType',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterSpecification) {
            $res['ClusterSpecification'] = $this->clusterSpecification;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->eipEnabled) {
            $res['EipEnabled'] = $this->eipEnabled;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->privateSlbSpecification) {
            $res['PrivateSlbSpecification'] = $this->privateSlbSpecification;
        }
        if (null !== $this->pubNetworkFlow) {
            $res['PubNetworkFlow'] = $this->pubNetworkFlow;
        }
        if (null !== $this->pubSlbSpecification) {
            $res['PubSlbSpecification'] = $this->pubSlbSpecification;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupType) {
            $res['SecurityGroupType'] = $this->securityGroupType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterSpecification'])) {
            $model->clusterSpecification = $map['ClusterSpecification'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EipEnabled'])) {
            $model->eipEnabled = $map['EipEnabled'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['PrivateSlbSpecification'])) {
            $model->privateSlbSpecification = $map['PrivateSlbSpecification'];
        }
        if (isset($map['PubNetworkFlow'])) {
            $model->pubNetworkFlow = $map['PubNetworkFlow'];
        }
        if (isset($map['PubSlbSpecification'])) {
            $model->pubSlbSpecification = $map['PubSlbSpecification'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupType'])) {
            $model->securityGroupType = $map['SecurityGroupType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
