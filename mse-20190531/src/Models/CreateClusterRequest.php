<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterRequest\tag;

class CreateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $clusterSpecification;
    /**
     * @var string
     */
    public $clusterType;
    /**
     * @var string
     */
    public $clusterVersion;
    /**
     * @var string
     */
    public $connectionType;
    /**
     * @var string
     */
    public $diskType;
    /**
     * @var bool
     */
    public $eipEnabled;
    /**
     * @var int
     */
    public $instanceCount;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $mseVersion;
    /**
     * @var string
     */
    public $netType;
    /**
     * @var string
     */
    public $privateSlbSpecification;
    /**
     * @var string
     */
    public $pubNetworkFlow;
    /**
     * @var string
     */
    public $pubSlbSpecification;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $requestPars;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $securityGroupType;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
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
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
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
