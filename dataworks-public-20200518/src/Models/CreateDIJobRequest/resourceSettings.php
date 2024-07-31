<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\resourceSettings\offlineResourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\resourceSettings\realtimeResourceSettings;
use AlibabaCloud\Tea\Model;

class resourceSettings extends Model
{
    /**
     * @description The resource used for batch synchronization.
     *
     * @var offlineResourceSettings
     */
    public $offlineResourceSettings;

    /**
     * @description The resource used for real-time synchronization.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offlineResourceSettings) {
            $res['OfflineResourceSettings'] = null !== $this->offlineResourceSettings ? $this->offlineResourceSettings->toMap() : null;
        }
        if (null !== $this->realtimeResourceSettings) {
            $res['RealtimeResourceSettings'] = null !== $this->realtimeResourceSettings ? $this->realtimeResourceSettings->toMap() : null;
        }
        if (null !== $this->requestedCu) {
            $res['RequestedCu'] = $this->requestedCu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSettings
     */
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
