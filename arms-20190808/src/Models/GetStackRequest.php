<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetStackRequest extends Model
{
    /**
     * @var string
     */
    public $traceID;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rpcID;

    /**
     * @var string
     */
    public $pid;
    protected $_name = [
        'traceID'  => 'TraceID',
        'regionId' => 'RegionId',
        'rpcID'    => 'RpcID',
        'pid'      => 'Pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rpcID) {
            $res['RpcID'] = $this->rpcID;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RpcID'])) {
            $model->rpcID = $map['RpcID'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
