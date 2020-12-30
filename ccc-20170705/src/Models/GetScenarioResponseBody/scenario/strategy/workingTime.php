<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetScenarioResponseBody\scenario\strategy;

use AlibabaCloud\Tea\Model;

class workingTime extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $beginTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'beginTime' => 'BeginTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workingTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        return $model;
    }
}
