<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateHotelSettingRequest;

use AlibabaCloud\Tea\Model;

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
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 22:00
     *
     * @var string
     */
    public $end;

    /**
     * @example screenoff
     *
     * @var string
     */
    public $standbyAction;

    /**
     * @example 7:00
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'defaultBright' => 'DefaultBright',
        'defaultVolume' => 'DefaultVolume',
        'enable'        => 'Enable',
        'end'           => 'End',
        'standbyAction' => 'StandbyAction',
        'start'         => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return nightMode
     */
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
