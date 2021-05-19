<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class UpdateRingStatusRequest extends Model
{
    /**
     * @var string
     */
    public $uniqueBizId;

    /**
     * @var string
     */
    public $callOutStatus;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'uniqueBizId'   => 'UniqueBizId',
        'callOutStatus' => 'CallOutStatus',
        'extra'         => 'Extra',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uniqueBizId) {
            $res['UniqueBizId'] = $this->uniqueBizId;
        }
        if (null !== $this->callOutStatus) {
            $res['CallOutStatus'] = $this->callOutStatus;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRingStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UniqueBizId'])) {
            $model->uniqueBizId = $map['UniqueBizId'];
        }
        if (isset($map['CallOutStatus'])) {
            $model->callOutStatus = $map['CallOutStatus'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
