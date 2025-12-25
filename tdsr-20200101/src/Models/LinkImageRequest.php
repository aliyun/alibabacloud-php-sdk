<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;

class LinkImageRequest extends Model
{
    /**
     * @var int
     */
    public $cameraHeight;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $subSceneId;
    protected $_name = [
        'cameraHeight' => 'CameraHeight',
        'fileName' => 'FileName',
        'platform' => 'Platform',
        'subSceneId' => 'SubSceneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cameraHeight) {
            $res['CameraHeight'] = $this->cameraHeight;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
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
        if (isset($map['CameraHeight'])) {
            $model->cameraHeight = $map['CameraHeight'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }

        return $model;
    }
}
