<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartDIJobRequest\realtimeStartSettings;
use AlibabaCloud\Tea\Model;

class StartDIJobRequest extends Model
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
     * @description Deprecated
     *
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
     * @description The settings for starting real-time synchronization.
     *
     * @var realtimeStartSettings
     */
    public $realtimeStartSettings;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'forceToRerun' => 'ForceToRerun',
        'id' => 'Id',
        'realtimeStartSettings' => 'RealtimeStartSettings',
    ];

    public function validate() {}

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
        if (null !== $this->realtimeStartSettings) {
            $res['RealtimeStartSettings'] = null !== $this->realtimeStartSettings ? $this->realtimeStartSettings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDIJobRequest
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
            $model->realtimeStartSettings = realtimeStartSettings::fromMap($map['RealtimeStartSettings']);
        }

        return $model;
    }
}
