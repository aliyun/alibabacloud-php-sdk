<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ResourceUsage\groups;

class ResourceUsage extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string[]
     */
    public $groupBy;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'endTime',
        'granularity' => 'granularity',
        'groupBy' => 'groupBy',
        'groups' => 'groups',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
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

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['groupBy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['groupBy'])) {
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['groupBy'] as $item1) {
                    $model->groupBy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
