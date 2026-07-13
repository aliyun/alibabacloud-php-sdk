<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceResponseBody\data\zones;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceSpec' => 'InstanceSpec',
        'networkType' => 'NetworkType',
        'ossBucketName' => 'OssBucketName',
        'paymentType' => 'PaymentType',
        'regionId' => 'RegionId',
        'securityGroup' => 'SecurityGroup',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'vpcId' => 'VpcId',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
