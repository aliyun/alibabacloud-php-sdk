<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\resourceSettings\offlineResourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\resourceSettings\realtimeResourceSettings;

class resourceSettings extends Model
{
    /**
     * @var offlineResourceSettings
     */
    public $offlineResourceSettings;
    /**
     * @var realtimeResourceSettings
     */
    public $realtimeResourceSettings;
    /**
     * @var float
     */
    public $requestedCu;
    protected $_name = [
        'offlineResourceSettings'  => 'OfflineResourceSettings',
        'realtimeResourceSettings' => 'RealtimeResourceSettings',
        'requestedCu'              => 'RequestedCu',
    ];

    public function validate()
    {
        if (null !== $this->offlineResourceSettings) {
            $this->offlineResourceSettings->validate();
        }
        if (null !== $this->realtimeResourceSettings) {
            $this->realtimeResourceSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offlineResourceSettings) {
            $res['OfflineResourceSettings'] = null !== $this->offlineResourceSettings ? $this->offlineResourceSettings->toArray($noStream) : $this->offlineResourceSettings;
        }

        if (null !== $this->realtimeResourceSettings) {
            $res['RealtimeResourceSettings'] = null !== $this->realtimeResourceSettings ? $this->realtimeResourceSettings->toArray($noStream) : $this->realtimeResourceSettings;
        }

        if (null !== $this->requestedCu) {
            $res['RequestedCu'] = $this->requestedCu;
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
        if (isset($map['OfflineResourceSettings'])) {
            $model->offlineResourceSettings = offlineResourceSettings::fromMap($map['OfflineResourceSettings']);
        }

        if (isset($map['RealtimeResourceSettings'])) {
            $model->realtimeResourceSettings = realtimeResourceSettings::fromMap($map['RealtimeResourceSettings']);
        }

        if (isset($map['RequestedCu'])) {
            $model->requestedCu = $map['RequestedCu'];
        }

        return $model;
    }
}
