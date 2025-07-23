<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['contact'] = [];
            if (null !== $this->contact && \is_array($this->contact)) {
                $n = 0;
                foreach ($this->contact as $item) {
                    $res['contact'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return IncidentEscalationStageStruct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact'])) {
            if (!empty($map['contact'])) {
                $model->contact = [];
                $n = 0;
                foreach ($map['contact'] as $item) {
                    $model->contact[$n++] = null !== $item ? IncidentContactStruct::fromMap($item) : $item;
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
