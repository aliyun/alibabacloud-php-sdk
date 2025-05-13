<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentEscalationStageStruct extends Model
{
    /**
     * @var IncidentContactStruct[]
     */
    public $contact;

    /**
     * @var int
     */
    public $cycleNotifyCount;

    /**
     * @var int
     */
    public $cycleNotifyTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $effectTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $stageIndex;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var int
     */
    public $waitToNextStageTime;
    protected $_name = [
        'contact' => 'contact',
        'cycleNotifyCount' => 'cycleNotifyCount',
        'cycleNotifyTime' => 'cycleNotifyTime',
        'description' => 'description',
        'effectTime' => 'effectTime',
        'name' => 'name',
        'stageIndex' => 'stageIndex',
        'timeZone' => 'timeZone',
        'waitToNextStageTime' => 'waitToNextStageTime',
    ];

    public function validate()
    {
        if (\is_array($this->contact)) {
            Model::validateArray($this->contact);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contact) {
            if (\is_array($this->contact)) {
                $res['contact'] = [];
                $n1 = 0;
                foreach ($this->contact as $item1) {
                    $res['contact'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cycleNotifyCount) {
            $res['cycleNotifyCount'] = $this->cycleNotifyCount;
        }

        if (null !== $this->cycleNotifyTime) {
            $res['cycleNotifyTime'] = $this->cycleNotifyTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->effectTime) {
            $res['effectTime'] = $this->effectTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->stageIndex) {
            $res['stageIndex'] = $this->stageIndex;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        if (null !== $this->waitToNextStageTime) {
            $res['waitToNextStageTime'] = $this->waitToNextStageTime;
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
        if (isset($map['contact'])) {
            if (!empty($map['contact'])) {
                $model->contact = [];
                $n1 = 0;
                foreach ($map['contact'] as $item1) {
                    $model->contact[$n1++] = IncidentContactStruct::fromMap($item1);
                }
            }
        }

        if (isset($map['cycleNotifyCount'])) {
            $model->cycleNotifyCount = $map['cycleNotifyCount'];
        }

        if (isset($map['cycleNotifyTime'])) {
            $model->cycleNotifyTime = $map['cycleNotifyTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['effectTime'])) {
            $model->effectTime = $map['effectTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['stageIndex'])) {
            $model->stageIndex = $map['stageIndex'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        if (isset($map['waitToNextStageTime'])) {
            $model->waitToNextStageTime = $map['waitToNextStageTime'];
        }

        return $model;
    }
}
