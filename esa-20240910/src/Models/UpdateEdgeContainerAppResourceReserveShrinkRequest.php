<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateEdgeContainerAppResourceReserveShrinkRequest extends Model
{
    /**
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2006-01-02T15:04:05Z
     *
     * @var string
     */
    public $durationTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example true
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateEdgeContainerAppResourceReserveShrinkRequest
     */
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
