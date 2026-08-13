<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest\taskDetail\relatedObjects;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest\taskDetail\relatedSemantics;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest\taskDetail\relatedSkills;

class taskDetail extends Model
{
    /**
     * @var relatedObjects[]
     */
    public $relatedObjects;

    /**
     * @var relatedSemantics[]
     */
    public $relatedSemantics;

    /**
     * @var relatedSkills[]
     */
    public $relatedSkills;

    /**
     * @var string
     */
    public $taskUnderstand;
    protected $_name = [
        'relatedObjects' => 'relatedObjects',
        'relatedSemantics' => 'relatedSemantics',
        'relatedSkills' => 'relatedSkills',
        'taskUnderstand' => 'taskUnderstand',
    ];

    public function validate()
    {
        if (\is_array($this->relatedObjects)) {
            Model::validateArray($this->relatedObjects);
        }
        if (\is_array($this->relatedSemantics)) {
            Model::validateArray($this->relatedSemantics);
        }
        if (\is_array($this->relatedSkills)) {
            Model::validateArray($this->relatedSkills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedObjects) {
            if (\is_array($this->relatedObjects)) {
                $res['relatedObjects'] = [];
                $n1 = 0;
                foreach ($this->relatedObjects as $item1) {
                    $res['relatedObjects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relatedSemantics) {
            if (\is_array($this->relatedSemantics)) {
                $res['relatedSemantics'] = [];
                $n1 = 0;
                foreach ($this->relatedSemantics as $item1) {
                    $res['relatedSemantics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relatedSkills) {
            if (\is_array($this->relatedSkills)) {
                $res['relatedSkills'] = [];
                $n1 = 0;
                foreach ($this->relatedSkills as $item1) {
                    $res['relatedSkills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskUnderstand) {
            $res['taskUnderstand'] = $this->taskUnderstand;
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
        if (isset($map['relatedObjects'])) {
            if (!empty($map['relatedObjects'])) {
                $model->relatedObjects = [];
                $n1 = 0;
                foreach ($map['relatedObjects'] as $item1) {
                    $model->relatedObjects[$n1] = relatedObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['relatedSemantics'])) {
            if (!empty($map['relatedSemantics'])) {
                $model->relatedSemantics = [];
                $n1 = 0;
                foreach ($map['relatedSemantics'] as $item1) {
                    $model->relatedSemantics[$n1] = relatedSemantics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['relatedSkills'])) {
            if (!empty($map['relatedSkills'])) {
                $model->relatedSkills = [];
                $n1 = 0;
                foreach ($map['relatedSkills'] as $item1) {
                    $model->relatedSkills[$n1] = relatedSkills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskUnderstand'])) {
            $model->taskUnderstand = $map['taskUnderstand'];
        }

        return $model;
    }
}
