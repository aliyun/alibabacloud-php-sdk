<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponseBody\nodes\totalResources;

class nodes extends Model
{
    /**
     * @var string
     */
    public $addTime;
    /**
     * @var string
     */
    public $deploymentSetId;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var bool
     */
    public $htEnabled;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string
     */
    public $ipAddress;
    /**
     * @var bool
     */
    public $keepAlive;
    /**
     * @var string
     */
    public $publicIpAddress;
    /**
     * @var string
     */
    public $queueName;
    /**
     * @var string
     */
    public $spotStrategy;
    /**
     * @var string
     */
    public $stateInSched;
    /**
     * @var string
     */
    public $status;
    /**
     * @var totalResources
     */
    public $totalResources;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addTime'         => 'AddTime',
        'deploymentSetId' => 'DeploymentSetId',
        'expiredTime'     => 'ExpiredTime',
        'hostname'        => 'Hostname',
        'htEnabled'       => 'HtEnabled',
        'id'              => 'Id',
        'imageId'         => 'ImageId',
        'instanceType'    => 'InstanceType',
        'ipAddress'       => 'IpAddress',
        'keepAlive'       => 'KeepAlive',
        'publicIpAddress' => 'PublicIpAddress',
        'queueName'       => 'QueueName',
        'spotStrategy'    => 'SpotStrategy',
        'stateInSched'    => 'StateInSched',
        'status'          => 'Status',
        'totalResources'  => 'TotalResources',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->totalResources) {
            $this->totalResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }

        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->htEnabled) {
            $res['HtEnabled'] = $this->htEnabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }

        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->stateInSched) {
            $res['StateInSched'] = $this->stateInSched;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toArray($noStream) : $this->totalResources;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }

        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['HtEnabled'])) {
            $model->htEnabled = $map['HtEnabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }

        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['StateInSched'])) {
            $model->stateInSched = $map['StateInSched'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
