<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class StartDIJobShrinkRequest extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 10000
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceToRerun;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 10000
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $realtimeStartSettingsShrink;
    protected $_name = [
        'DIJobId'                     => 'DIJobId',
        'forceToRerun'                => 'ForceToRerun',
        'id'                          => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RealtimeStartSettings'])) {
            $model->realtimeStartSettingsShrink = $map['RealtimeStartSettings'];
        }

        return $model;
    }
}
