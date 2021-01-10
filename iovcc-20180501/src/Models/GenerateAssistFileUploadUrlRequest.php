<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GenerateAssistFileUploadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'filename'  => 'Filename',
        'projectId' => 'ProjectId',
        'deviceId'  => 'DeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAssistFileUploadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}
