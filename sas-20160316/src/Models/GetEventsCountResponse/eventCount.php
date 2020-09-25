<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20160316\Models\GetEventsCountResponse;

use AlibabaCloud\Tea\Model;

class eventCount extends Model
{
    /**
     * @var int
     */
    public $event;

    /**
     * @var int
     */
    public $attack;

    /**
     * @var int
     */
    public $vul;
    protected $_name = [
        'event'  => 'event',
        'attack' => 'attack',
        'vul'    => 'vul',
    ];

    public function validate()
    {
        Model::validateRequired('event', $this->event, true);
        Model::validateRequired('attack', $this->attack, true);
        Model::validateRequired('vul', $this->vul, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }
        if (null !== $this->attack) {
            $res['attack'] = $this->attack;
        }
        if (null !== $this->vul) {
            $res['vul'] = $this->vul;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['event'])) {
            $model->event = $map['event'];
        }
        if (isset($map['attack'])) {
            $model->attack = $map['attack'];
        }
        if (isset($map['vul'])) {
            $model->vul = $map['vul'];
        }

        return $model;
    }
}
