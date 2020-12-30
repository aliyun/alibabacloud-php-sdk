<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstancesResponseBody;

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
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'status'     => 'Status',
        'debtStatus' => 'DebtStatus',
        'edition'    => 'Edition',
        'remark'     => 'Remark',
        'expireTime' => 'ExpireTime',
        'enabled'    => 'Enabled',
        'gmtCreate'  => 'GmtCreate',
        'instanceId' => 'InstanceId',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
