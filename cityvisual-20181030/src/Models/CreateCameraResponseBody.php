<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class CreateCameraResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $cameraId;
    protected $_name = [
        'requestId' => 'RequestId',
        'cameraId'  => 'CameraId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCameraResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }

        return $model;
    }
}
