<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class DownloadRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $channel;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'fileName'   => 'FileName',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        return $model;
    }
}
