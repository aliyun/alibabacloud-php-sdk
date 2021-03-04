<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeHandGestureAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $gestureType;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'appId'          => 'AppId',
        'gestureType'    => 'GestureType',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->gestureType) {
            $res['GestureType'] = $this->gestureType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeHandGestureAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GestureType'])) {
            $model->gestureType = $map['GestureType'];
        }

        return $model;
    }
}
