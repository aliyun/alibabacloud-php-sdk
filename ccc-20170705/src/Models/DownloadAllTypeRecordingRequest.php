<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class DownloadAllTypeRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $channel;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'contactId'  => 'ContactId',
        'channel'    => 'Channel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadAllTypeRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        return $model;
    }
}
