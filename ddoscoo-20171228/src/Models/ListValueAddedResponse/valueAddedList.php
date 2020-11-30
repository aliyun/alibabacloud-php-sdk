<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListValueAddedResponse;

use AlibabaCloud\Tea\Model;

class valueAddedList extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $logSize;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'status'     => 'Status',
        'expireTime' => 'ExpireTime',
        'gmtCreate'  => 'GmtCreate',
        'logSize'    => 'LogSize',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('logSize', $this->logSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueAddedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }

        return $model;
    }
}
