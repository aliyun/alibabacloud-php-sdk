<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StopLiveStreamMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $monitorId;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'monitorId' => 'MonitorId',
        'ownerId'   => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorId) {
            $res['MonitorId'] = $this->monitorId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopLiveStreamMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorId'])) {
            $model->monitorId = $map['MonitorId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
