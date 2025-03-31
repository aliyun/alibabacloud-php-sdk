<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateEdgeContainerAppResourceReserveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $durationTime;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $forever;

    /**
     * @var string
     */
    public $reserveSetShrink;
    protected $_name = [
        'appId' => 'AppId',
        'durationTime' => 'DurationTime',
        'enable' => 'Enable',
        'forever' => 'Forever',
        'reserveSetShrink' => 'ReserveSet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->durationTime) {
            $res['DurationTime'] = $this->durationTime;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->forever) {
            $res['Forever'] = $this->forever;
        }

        if (null !== $this->reserveSetShrink) {
            $res['ReserveSet'] = $this->reserveSetShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DurationTime'])) {
            $model->durationTime = $map['DurationTime'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Forever'])) {
            $model->forever = $map['Forever'];
        }

        if (isset($map['ReserveSet'])) {
            $model->reserveSetShrink = $map['ReserveSet'];
        }

        return $model;
    }
}
