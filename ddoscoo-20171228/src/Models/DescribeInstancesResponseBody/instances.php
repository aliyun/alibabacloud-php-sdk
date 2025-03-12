<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $debtStatus;

    /**
     * @example 9
     *
     * @var int
     */
    public $edition;

    /**
     * @example 1
     *
     * @var int
     */
    public $enabled;

    /**
     * @example 2308402384
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 2308402384
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example testRemark
     *
     * @var string
     */
    public $remark;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'debtStatus' => 'DebtStatus',
        'edition'    => 'Edition',
        'enabled'    => 'Enabled',
        'expireTime' => 'ExpireTime',
        'gmtCreate'  => 'GmtCreate',
        'instanceId' => 'InstanceId',
        'remark'     => 'Remark',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
