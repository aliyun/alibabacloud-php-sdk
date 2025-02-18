<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class ListJobMetricRequest extends Model
{
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $metric;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string[]
     */
    public $project;
    /**
     * @var string[]
     */
    public $quota;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'group'     => 'group',
        'metric'    => 'metric',
        'period'    => 'period',
        'project'   => 'project',
        'quota'     => 'quota',
        'type'      => 'type',
        'endTime'   => 'endTime',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->project)) {
            Model::validateArray($this->project);
        }
        if (\is_array($this->quota)) {
            Model::validateArray($this->quota);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->project) {
            if (\is_array($this->project)) {
                $res['project'] = [];
                $n1             = 0;
                foreach ($this->project as $item1) {
                    $res['project'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->quota) {
            if (\is_array($this->quota)) {
                $res['quota'] = [];
                $n1           = 0;
                foreach ($this->quota as $item1) {
                    $res['quota'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
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
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['project'])) {
            if (!empty($map['project'])) {
                $model->project = [];
                $n1             = 0;
                foreach ($map['project'] as $item1) {
                    $model->project[$n1++] = $item1;
                }
            }
        }

        if (isset($map['quota'])) {
            if (!empty($map['quota'])) {
                $model->quota = [];
                $n1           = 0;
                foreach ($map['quota'] as $item1) {
                    $model->quota[$n1++] = $item1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
