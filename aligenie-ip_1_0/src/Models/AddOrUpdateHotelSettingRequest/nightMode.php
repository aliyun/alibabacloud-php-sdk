<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingRequest;

use AlibabaCloud\Dara\Model;

class nightMode extends Model
{
    /**
     * @var string
     */
    public $defaultBright;

    /**
     * @var string
     */
    public $defaultVolume;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $standbyAction;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'defaultBright' => 'DefaultBright',
        'defaultVolume' => 'DefaultVolume',
        'enable' => 'Enable',
        'end' => 'End',
        'standbyAction' => 'StandbyAction',
        'start' => 'Start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultBright) {
            $res['DefaultBright'] = $this->defaultBright;
        }

        if (null !== $this->defaultVolume) {
            $res['DefaultVolume'] = $this->defaultVolume;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->standbyAction) {
            $res['StandbyAction'] = $this->standbyAction;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['DefaultBright'])) {
            $model->defaultBright = $map['DefaultBright'];
        }

        if (isset($map['DefaultVolume'])) {
            $model->defaultVolume = $map['DefaultVolume'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['StandbyAction'])) {
            $model->standbyAction = $map['StandbyAction'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
