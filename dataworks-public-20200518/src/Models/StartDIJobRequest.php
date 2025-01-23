<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDIJobRequest\realtimeStartSettings;

class StartDIJobRequest extends Model
{
    /**
     * @var int
     */
    public $DIJobId;
    /**
     * @var bool
     */
    public $forceToRerun;
    /**
     * @var realtimeStartSettings
     */
    public $realtimeStartSettings;
    protected $_name = [
        'DIJobId'               => 'DIJobId',
        'forceToRerun'          => 'ForceToRerun',
        'realtimeStartSettings' => 'RealtimeStartSettings',
    ];

    public function validate()
    {
        if (null !== $this->realtimeStartSettings) {
            $this->realtimeStartSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        if (null !== $this->forceToRerun) {
            $res['ForceToRerun'] = $this->forceToRerun;
        }

        if (null !== $this->realtimeStartSettings) {
            $res['RealtimeStartSettings'] = null !== $this->realtimeStartSettings ? $this->realtimeStartSettings->toArray($noStream) : $this->realtimeStartSettings;
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
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        if (isset($map['ForceToRerun'])) {
            $model->forceToRerun = $map['ForceToRerun'];
        }

        if (isset($map['RealtimeStartSettings'])) {
            $model->realtimeStartSettings = realtimeStartSettings::fromMap($map['RealtimeStartSettings']);
        }

        return $model;
    }
}
