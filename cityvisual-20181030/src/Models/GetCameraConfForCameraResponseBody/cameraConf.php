<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetCameraConfForCameraResponseBody;

use AlibabaCloud\Tea\Model;

class cameraConf extends Model
{
    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var string
     */
    public $cameraName;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'context'    => 'Context',
        'cameraId'   => 'CameraId',
        'cameraName' => 'CameraName',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }
        if (null !== $this->cameraName) {
            $res['CameraName'] = $this->cameraName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cameraConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }
        if (isset($map['CameraName'])) {
            $model->cameraName = $map['CameraName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
