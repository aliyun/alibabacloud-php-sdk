<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeHandGestureRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $gestureType;
    protected $_name = [
        'appId'       => 'AppId',
        'imageURL'    => 'ImageURL',
        'gestureType' => 'GestureType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->gestureType) {
            $res['GestureType'] = $this->gestureType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeHandGestureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['GestureType'])) {
            $model->gestureType = $map['GestureType'];
        }

        return $model;
    }
}
