<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\vcrConfig\equipment;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\vcrConfig\headMotion;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\vcrConfig\invalidFrameMotion;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\vcrConfig\lookAway;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\vcrConfig\peopleCount;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\vcrConfig\stillFrameMotion;

class vcrConfig extends Model
{
    /**
     * @var equipment
     */
    public $equipment;

    /**
     * @var headMotion
     */
    public $headMotion;

    /**
     * @var invalidFrameMotion
     */
    public $invalidFrameMotion;

    /**
     * @var lookAway
     */
    public $lookAway;

    /**
     * @var peopleCount
     */
    public $peopleCount;

    /**
     * @var stillFrameMotion
     */
    public $stillFrameMotion;
    protected $_name = [
        'equipment' => 'Equipment',
        'headMotion' => 'HeadMotion',
        'invalidFrameMotion' => 'InvalidFrameMotion',
        'lookAway' => 'LookAway',
        'peopleCount' => 'PeopleCount',
        'stillFrameMotion' => 'StillFrameMotion',
    ];

    public function validate()
    {
        if (null !== $this->equipment) {
            $this->equipment->validate();
        }
        if (null !== $this->headMotion) {
            $this->headMotion->validate();
        }
        if (null !== $this->invalidFrameMotion) {
            $this->invalidFrameMotion->validate();
        }
        if (null !== $this->lookAway) {
            $this->lookAway->validate();
        }
        if (null !== $this->peopleCount) {
            $this->peopleCount->validate();
        }
        if (null !== $this->stillFrameMotion) {
            $this->stillFrameMotion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->equipment) {
            $res['Equipment'] = null !== $this->equipment ? $this->equipment->toArray($noStream) : $this->equipment;
        }

        if (null !== $this->headMotion) {
            $res['HeadMotion'] = null !== $this->headMotion ? $this->headMotion->toArray($noStream) : $this->headMotion;
        }

        if (null !== $this->invalidFrameMotion) {
            $res['InvalidFrameMotion'] = null !== $this->invalidFrameMotion ? $this->invalidFrameMotion->toArray($noStream) : $this->invalidFrameMotion;
        }

        if (null !== $this->lookAway) {
            $res['LookAway'] = null !== $this->lookAway ? $this->lookAway->toArray($noStream) : $this->lookAway;
        }

        if (null !== $this->peopleCount) {
            $res['PeopleCount'] = null !== $this->peopleCount ? $this->peopleCount->toArray($noStream) : $this->peopleCount;
        }

        if (null !== $this->stillFrameMotion) {
            $res['StillFrameMotion'] = null !== $this->stillFrameMotion ? $this->stillFrameMotion->toArray($noStream) : $this->stillFrameMotion;
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
        if (isset($map['Equipment'])) {
            $model->equipment = equipment::fromMap($map['Equipment']);
        }

        if (isset($map['HeadMotion'])) {
            $model->headMotion = headMotion::fromMap($map['HeadMotion']);
        }

        if (isset($map['InvalidFrameMotion'])) {
            $model->invalidFrameMotion = invalidFrameMotion::fromMap($map['InvalidFrameMotion']);
        }

        if (isset($map['LookAway'])) {
            $model->lookAway = lookAway::fromMap($map['LookAway']);
        }

        if (isset($map['PeopleCount'])) {
            $model->peopleCount = peopleCount::fromMap($map['PeopleCount']);
        }

        if (isset($map['StillFrameMotion'])) {
            $model->stillFrameMotion = stillFrameMotion::fromMap($map['StillFrameMotion']);
        }

        return $model;
    }
}
