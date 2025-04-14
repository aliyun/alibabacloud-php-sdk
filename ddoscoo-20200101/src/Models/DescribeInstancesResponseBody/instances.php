<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $debtStatus;

    /**
     * @var int
     */
    public $edition;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $ipMode;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $isFirstOpenBw;

    /**
     * @var int
     */
    public $isFirstOpenQps;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'debtStatus' => 'DebtStatus',
        'edition' => 'Edition',
        'enabled' => 'Enabled',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'ipMode' => 'IpMode',
        'ipVersion' => 'IpVersion',
        'isFirstOpenBw' => 'IsFirstOpenBw',
        'isFirstOpenQps' => 'IsFirstOpenQps',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->debtStatus) {
            $res['DebtStatus'] = $this->debtStatus;
        }

        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipMode) {
            $res['IpMode'] = $this->ipMode;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->isFirstOpenBw) {
            $res['IsFirstOpenBw'] = $this->isFirstOpenBw;
        }

        if (null !== $this->isFirstOpenQps) {
            $res['IsFirstOpenQps'] = $this->isFirstOpenQps;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['DebtStatus'])) {
            $model->debtStatus = $map['DebtStatus'];
        }

        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IpMode'])) {
            $model->ipMode = $map['IpMode'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['IsFirstOpenBw'])) {
            $model->isFirstOpenBw = $map['IsFirstOpenBw'];
        }

        if (isset($map['IsFirstOpenQps'])) {
            $model->isFirstOpenQps = $map['IsFirstOpenQps'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
