<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class TimedPoolConfig extends Model
{
    /**
     * @var string
     */
    public $effectiveEndDate;

    /**
     * @var string
     */
    public $effectiveStartDate;

    /**
     * @var ElasticInterval[]
     */
    public $elasticIntervals;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'effectiveEndDate' => 'effectiveEndDate',
        'effectiveStartDate' => 'effectiveStartDate',
        'elasticIntervals' => 'elasticIntervals',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        if (\is_array($this->elasticIntervals)) {
            Model::validateArray($this->elasticIntervals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveEndDate) {
            $res['effectiveEndDate'] = $this->effectiveEndDate;
        }

        if (null !== $this->effectiveStartDate) {
            $res['effectiveStartDate'] = $this->effectiveStartDate;
        }

        if (null !== $this->elasticIntervals) {
            if (\is_array($this->elasticIntervals)) {
                $res['elasticIntervals'] = [];
                $n1 = 0;
                foreach ($this->elasticIntervals as $item1) {
                    $res['elasticIntervals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['effectiveEndDate'])) {
            $model->effectiveEndDate = $map['effectiveEndDate'];
        }

        if (isset($map['effectiveStartDate'])) {
            $model->effectiveStartDate = $map['effectiveStartDate'];
        }

        if (isset($map['elasticIntervals'])) {
            if (!empty($map['elasticIntervals'])) {
                $model->elasticIntervals = [];
                $n1 = 0;
                foreach ($map['elasticIntervals'] as $item1) {
                    $model->elasticIntervals[$n1] = ElasticInterval::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
