<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvStatusResponseBody\envStatus;

use AlibabaCloud\Tea\Model;

class instanceAppStatus extends Model
{
    /**
     * @var int
     */
    public $healthyInstances;

    /**
     * @var int
     */
    public $stoppedInstances;

    /**
     * @var int
     */
    public $unhealthyInstances;

    /**
     * @var int
     */
    public $unknownInstances;
    protected $_name = [
        'healthyInstances'   => 'HealthyInstances',
        'stoppedInstances'   => 'StoppedInstances',
        'unhealthyInstances' => 'UnhealthyInstances',
        'unknownInstances'   => 'UnknownInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthyInstances) {
            $res['HealthyInstances'] = $this->healthyInstances;
        }
        if (null !== $this->stoppedInstances) {
            $res['StoppedInstances'] = $this->stoppedInstances;
        }
        if (null !== $this->unhealthyInstances) {
            $res['UnhealthyInstances'] = $this->unhealthyInstances;
        }
        if (null !== $this->unknownInstances) {
            $res['UnknownInstances'] = $this->unknownInstances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAppStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthyInstances'])) {
            $model->healthyInstances = $map['HealthyInstances'];
        }
        if (isset($map['StoppedInstances'])) {
            $model->stoppedInstances = $map['StoppedInstances'];
        }
        if (isset($map['UnhealthyInstances'])) {
            $model->unhealthyInstances = $map['UnhealthyInstances'];
        }
        if (isset($map['UnknownInstances'])) {
            $model->unknownInstances = $map['UnknownInstances'];
        }

        return $model;
    }
}
