<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class GetPipelineStatsRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'endTime',
        'granularity' => 'granularity',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
