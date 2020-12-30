<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetCameraConfForCameraResponseBody\cameraConf;
use AlibabaCloud\Tea\Model;

class GetCameraConfForCameraResponseBody extends Model
{
    /**
     * @var cameraConf
     */
    public $cameraConf;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cameraConf' => 'CameraConf',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cameraConf) {
            $res['CameraConf'] = null !== $this->cameraConf ? $this->cameraConf->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCameraConfForCameraResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CameraConf'])) {
            $model->cameraConf = cameraConf::fromMap($map['CameraConf']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
