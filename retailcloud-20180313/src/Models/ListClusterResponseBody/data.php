<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListClusterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $businessCode;

    /**
     * @var string
     */
    public $clusterTitle;

    /**
     * @var string
     */
    public $createStatus;

    /**
     * @var string[]
     */
    public $ecsIds;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $keyPair;

    /**
     * @var string
     */
    public $netPlug;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $podCIDR;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $serviceCIDR;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @var string
     */
    public $workLoadCpu;

    /**
     * @var string
     */
    public $workLoadMem;
    protected $_name = [
        'businessCode' => 'BusinessCode',
        'clusterTitle' => 'ClusterTitle',
        'createStatus' => 'CreateStatus',
        'ecsIds'       => 'EcsIds',
        'envType'      => 'EnvType',
        'id'           => 'Id',
        'instanceId'   => 'InstanceId',
        'keyPair'      => 'KeyPair',
        'netPlug'      => 'NetPlug',
        'password'     => 'Password',
        'podCIDR'      => 'PodCIDR',
        'regionId'     => 'RegionId',
        'regionName'   => 'RegionName',
        'serviceCIDR'  => 'ServiceCIDR',
        'status'       => 'Status',
        'vpcId'        => 'VpcId',
        'vswitchIds'   => 'VswitchIds',
        'workLoadCpu'  => 'WorkLoadCpu',
        'workLoadMem'  => 'WorkLoadMem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCode) {
            $res['BusinessCode'] = $this->businessCode;
        }
        if (null !== $this->clusterTitle) {
            $res['ClusterTitle'] = $this->clusterTitle;
        }
        if (null !== $this->createStatus) {
            $res['CreateStatus'] = $this->createStatus;
        }
        if (null !== $this->ecsIds) {
            $res['EcsIds'] = $this->ecsIds;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keyPair) {
            $res['KeyPair'] = $this->keyPair;
        }
        if (null !== $this->netPlug) {
            $res['NetPlug'] = $this->netPlug;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->podCIDR) {
            $res['PodCIDR'] = $this->podCIDR;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->serviceCIDR) {
            $res['ServiceCIDR'] = $this->serviceCIDR;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchIds) {
            $res['VswitchIds'] = $this->vswitchIds;
        }
        if (null !== $this->workLoadCpu) {
            $res['WorkLoadCpu'] = $this->workLoadCpu;
        }
        if (null !== $this->workLoadMem) {
            $res['WorkLoadMem'] = $this->workLoadMem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessCode'])) {
            $model->businessCode = $map['BusinessCode'];
        }
        if (isset($map['ClusterTitle'])) {
            $model->clusterTitle = $map['ClusterTitle'];
        }
        if (isset($map['CreateStatus'])) {
            $model->createStatus = $map['CreateStatus'];
        }
        if (isset($map['EcsIds'])) {
            if (!empty($map['EcsIds'])) {
                $model->ecsIds = $map['EcsIds'];
            }
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KeyPair'])) {
            $model->keyPair = $map['KeyPair'];
        }
        if (isset($map['NetPlug'])) {
            $model->netPlug = $map['NetPlug'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PodCIDR'])) {
            $model->podCIDR = $map['PodCIDR'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ServiceCIDR'])) {
            $model->serviceCIDR = $map['ServiceCIDR'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchIds'])) {
            if (!empty($map['VswitchIds'])) {
                $model->vswitchIds = $map['VswitchIds'];
            }
        }
        if (isset($map['WorkLoadCpu'])) {
            $model->workLoadCpu = $map['WorkLoadCpu'];
        }
        if (isset($map['WorkLoadMem'])) {
            $model->workLoadMem = $map['WorkLoadMem'];
        }

        return $model;
    }
}
