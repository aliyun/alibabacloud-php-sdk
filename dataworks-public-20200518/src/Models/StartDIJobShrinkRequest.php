<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class StartDIJobShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11743
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @example true
     *
     * @var bool
     */
    public $forceToRerun;

    /**
     * @var string
     */
    public $realtimeStartSettingsShrink;
    protected $_name = [
        'DIJobId'                     => 'DIJobId',
        'forceToRerun'                => 'ForceToRerun',
        'realtimeStartSettingsShrink' => 'RealtimeStartSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->forceToRerun) {
            $res['ForceToRerun'] = $this->forceToRerun;
        }
        if (null !== $this->realtimeStartSettingsShrink) {
            $res['RealtimeStartSettings'] = $this->realtimeStartSettingsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDIJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['ForceToRerun'])) {
            $model->forceToRerun = $map['ForceToRerun'];
        }
        if (isset($map['RealtimeStartSettings'])) {
            $model->realtimeStartSettingsShrink = $map['RealtimeStartSettings'];
        }

        return $model;
    }
}
