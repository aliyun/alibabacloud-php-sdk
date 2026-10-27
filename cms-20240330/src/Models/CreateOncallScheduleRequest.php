<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateOncallScheduleRequest\rotations;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateOncallScheduleRequest\substitudes;

class CreateOncallScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $oncallScheduleId;

    /**
     * @var string
     */
    public $oncallScheduleName;

    /**
     * @var rotations[]
     */
    public $rotations;

    /**
     * @var string
     */
    public $shiftRobotId;

    /**
     * @var substitudes[]
     */
    public $substitudes;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'oncallScheduleId' => 'oncallScheduleId',
        'oncallScheduleName' => 'oncallScheduleName',
        'rotations' => 'rotations',
        'shiftRobotId' => 'shiftRobotId',
        'substitudes' => 'substitudes',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->rotations)) {
            Model::validateArray($this->rotations);
        }
        if (\is_array($this->substitudes)) {
            Model::validateArray($this->substitudes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oncallScheduleId) {
            $res['oncallScheduleId'] = $this->oncallScheduleId;
        }

        if (null !== $this->oncallScheduleName) {
            $res['oncallScheduleName'] = $this->oncallScheduleName;
        }

        if (null !== $this->rotations) {
            if (\is_array($this->rotations)) {
                $res['rotations'] = [];
                $n1 = 0;
                foreach ($this->rotations as $item1) {
                    $res['rotations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shiftRobotId) {
            $res['shiftRobotId'] = $this->shiftRobotId;
        }

        if (null !== $this->substitudes) {
            if (\is_array($this->substitudes)) {
                $res['substitudes'] = [];
                $n1 = 0;
                foreach ($this->substitudes as $item1) {
                    $res['substitudes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['oncallScheduleId'])) {
            $model->oncallScheduleId = $map['oncallScheduleId'];
        }

        if (isset($map['oncallScheduleName'])) {
            $model->oncallScheduleName = $map['oncallScheduleName'];
        }

        if (isset($map['rotations'])) {
            if (!empty($map['rotations'])) {
                $model->rotations = [];
                $n1 = 0;
                foreach ($map['rotations'] as $item1) {
                    $model->rotations[$n1] = rotations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['shiftRobotId'])) {
            $model->shiftRobotId = $map['shiftRobotId'];
        }

        if (isset($map['substitudes'])) {
            if (!empty($map['substitudes'])) {
                $model->substitudes = [];
                $n1 = 0;
                foreach ($map['substitudes'] as $item1) {
                    $model->substitudes[$n1] = substitudes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
