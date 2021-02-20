<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var int
     */
    public $status;

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
    public $expireTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $connInstanceId;
    protected $_name = [
        'status'         => 'Status',
        'debtStatus'     => 'DebtStatus',
        'edition'        => 'Edition',
        'expireTime'     => 'ExpireTime',
        'remark'         => 'Remark',
        'createTime'     => 'CreateTime',
        'enabled'        => 'Enabled',
        'instanceId'     => 'InstanceId',
        'connInstanceId' => 'ConnInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->debtStatus) {
            $res['DebtStatus'] = $this->debtStatus;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->connInstanceId) {
            $res['ConnInstanceId'] = $this->connInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DebtStatus'])) {
            $model->debtStatus = $map['DebtStatus'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ConnInstanceId'])) {
            $model->connInstanceId = $map['ConnInstanceId'];
        }

        return $model;
    }
}
