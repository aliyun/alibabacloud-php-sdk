<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The billing method. Valid values: PREPAY and POSTPAY.
     *
     * Ignore this parameter for serverless instances.
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The engine specifications. Valid values:
     *
     * \[Professional Edition]
     *
     *   `MSE_SC_2_4_60_c`: 2 vCPUs and 4 GB of memory
     *   `MSE_SC_1_2_60_c`: 1 vCPU and 2 GB of memory
     *   `MSE_SC_4_8_60_c`: 4 vCPUs and 8 GB of memory
     *   `MSE_SC_8_16_60_c`: 8 vCPUs and 16 GB of memory
     *   `MSE_SC_16_32_60_c`: 16 vCPUs and 32 GB of memory
     *
     * \[Developer Edition]
     *
     *   `MSE_SC_1_2_60_c`: 1 vCPU and 2 GB of memory
     *   `MSE_SC_2_4_60_c`: 2 vCPUs and 4 GB of memory
     *
     * Ignore this parameter or set this parameter to `MSE_SC_SERVERLESS`.
     * @example MSE_SC_2_4_60_c
     *
     * @var string
     */
    public $clusterSpecification;

    /**
     * @description The type of the instance. Valid values: ZooKeeper and Nacos-Ans.
     *
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The engine version of the instance. Valid values:
     *
     * \[Professional Edition]
     *
     *   `NACOS_2_0_0`
     *   `ZooKeeper_3_8_0`
     *
     * \[Developer Edition]
     *
     *   `NACOS_2_0_0`
     *   `ZooKeeper_3_8_0`
     *
     * \[Serverless Edition]
     *
     *   `NACOS_2_0_0`
     *   `ZooKeeper_3_8_0`
     *
     * @example NACOS_2_0_0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description The network connection type. Valid values: `slb` or `single_eni`. For instances of the Developer Edition in some regions, only the value `single_eni` is supported.
     *
     * @example slb
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description This parameter is obsolete.
     *
     * @example alicloud-disk-ssd
     *
     * @deprecated
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Specifies whether to enable Internet access (Elastic IP Address) if ConnectionType is set to `single_eni`.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @var bool
     */
    public $eipEnabled;

    /**
     * @description The number of nodes in the instance. Valid values: 1 to 9.
     *
     * \[Professional Edition]
     *
     *   The value must be greater than or equal to 3 and must be an odd number.
     *
     * \[Developer Edition]
     *
     *   The value must be 1.
     *
     * Ignore this parameter.
     * @example 3
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The custom name of the instance.
     *
     * @example tanshuyingtest001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Configure this parameter unless otherwise specified. Valid values:
     *
     *   `mse_pro`: Professional Edition
     *   `mse_dev`: Developer Edition
     *   `mse_dev`: Serverless Edition
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mseVersion;

    /**
     * @description The network type of the MSE instance. Valid values:
     *
     *   `privatenet`: VPC
     *   `pubnet`: Internet
     *
     * @example privatenet
     *
     * @var string
     */
    public $netType;

    /**
     * @description This parameter is obsolete.
     *
     * @example slb.s1.small
     *
     * @deprecated
     *
     * @var string
     */
    public $privateSlbSpecification;

    /**
     * @description This parameter is valid only if the ConnectionType parameter is set to `slb`. The value 0 indicates that the Server Load Balancer (SLB) instance is not connected over the Internet. A value greater than 1 indicates the fixed bandwidth that is used to access the SLB instance over the Internet. Unit: Mbit/s.
     *
     * Valid values: 0 to 5000.
     * @example 0
     *
     * @var string
     */
    public $pubNetworkFlow;

    /**
     * @description This parameter is obsolete.
     *
     * @example slb.s1.small
     *
     * @deprecated
     *
     * @var string
     */
    public $pubSlbSpecification;

    /**
     * @description The region where the instance resides. Examples:
     *
     *   `cn-hangzhou`: China (Hangzhou)
     *   `cn-beijing`: China (Beijing)
     *   `cn-shanghai`: China (Shanghai)
     *   `cn-zhangjiakou`: China (Zhangjiakou)
     *   `cn-shenzhen`: China (Shenzhen)
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The extended request parameters in the JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description The ID of the resource group. For the details of resource groups, see [View basic information of a resource group](~~457230~~).
     *
     * @example rg-aekzcqmoay3dlyq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the security group to which the instance belongs. This parameter is valid only if the ConnectionType parameter is set to `single_eni`.
     *
     * Valid values:
     *
     *   enterprise
     *   normal
     *
     * @example enterprise
     *
     * @var string
     */
    public $securityGroupType;

    /**
     * @description The tags to add to the resource. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp17opt4v18sto39k****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1t50e045b5g7i3p****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'acceptLanguage'          => 'AcceptLanguage',
        'chargeType'              => 'ChargeType',
        'clusterSpecification'    => 'ClusterSpecification',
        'clusterType'             => 'ClusterType',
        'clusterVersion'          => 'ClusterVersion',
        'connectionType'          => 'ConnectionType',
        'diskType'                => 'DiskType',
        'eipEnabled'              => 'EipEnabled',
        'instanceCount'           => 'InstanceCount',
        'instanceName'            => 'InstanceName',
        'mseVersion'              => 'MseVersion',
        'netType'                 => 'NetType',
        'privateSlbSpecification' => 'PrivateSlbSpecification',
        'pubNetworkFlow'          => 'PubNetworkFlow',
        'pubSlbSpecification'     => 'PubSlbSpecification',
        'region'                  => 'Region',
        'requestPars'             => 'RequestPars',
        'resourceGroupId'         => 'ResourceGroupId',
        'securityGroupType'       => 'SecurityGroupType',
        'tag'                     => 'Tag',
        'vSwitchId'               => 'VSwitchId',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

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
                $n          = 0;
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
