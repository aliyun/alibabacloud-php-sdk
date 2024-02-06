<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example i-56789acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The renewal duration of the subscription instance.
     *
     * Valid values:
     *
     *   1
     *   2
     *   3
     *   4
     *   5
     *   6
     *   7
     *   8
     *   9
     *   12
     *
     * @example 1
     *
     * @var int
     */
    public $period;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'period'     => 'Period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
