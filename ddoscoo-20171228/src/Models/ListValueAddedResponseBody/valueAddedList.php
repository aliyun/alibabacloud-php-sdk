<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListValueAddedResponseBody;

use AlibabaCloud\Dara\Model;

class valueAddedList extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $storeRegion;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'gmtCreate' => 'GmtCreate',
        'instanceId' => 'InstanceId',
        'logSize' => 'LogSize',
        'status' => 'Status',
        'storeRegion' => 'StoreRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storeRegion) {
            $res['StoreRegion'] = $this->storeRegion;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StoreRegion'])) {
            $model->storeRegion = $map['StoreRegion'];
        }

        return $model;
    }
}
