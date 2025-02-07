<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetProblemPercentageRequest extends Model
{
    /**
     * @var string
     */
    public $cluster;
    /**
     * @var float
     */
    public $end;
    /**
     * @var string
     */
    public $instance;
    /**
     * @var float
     */
    public $start;
    protected $_name = [
        'cluster'  => 'cluster',
        'end'      => 'end',
        'instance' => 'instance',
        'start'    => 'start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }

        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
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
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }

        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
