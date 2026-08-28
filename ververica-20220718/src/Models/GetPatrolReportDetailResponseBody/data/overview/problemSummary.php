<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data\overview;

use AlibabaCloud\Dara\Model;

class problemSummary extends Model
{
    /**
     * @var int
     */
    public $delayAndBackpressure;

    /**
     * @var int
     */
    public $unhealthy;

    /**
     * @var int
     */
    public $unhealthyCheckpoints;
    protected $_name = [
        'delayAndBackpressure' => 'delayAndBackpressure',
        'unhealthy' => 'unhealthy',
        'unhealthyCheckpoints' => 'unhealthyCheckpoints',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delayAndBackpressure) {
            $res['delayAndBackpressure'] = $this->delayAndBackpressure;
        }

        if (null !== $this->unhealthy) {
            $res['unhealthy'] = $this->unhealthy;
        }

        if (null !== $this->unhealthyCheckpoints) {
            $res['unhealthyCheckpoints'] = $this->unhealthyCheckpoints;
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
        if (isset($map['delayAndBackpressure'])) {
            $model->delayAndBackpressure = $map['delayAndBackpressure'];
        }

        if (isset($map['unhealthy'])) {
            $model->unhealthy = $map['unhealthy'];
        }

        if (isset($map['unhealthyCheckpoints'])) {
            $model->unhealthyCheckpoints = $map['unhealthyCheckpoints'];
        }

        return $model;
    }
}
