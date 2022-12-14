<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeHandGestureAdvanceRequest extends Model
{
    /**
     * @example gesture_app
     *
     * @var string
     */
    public $appId;

    /**
     * @example gesture_recognition
     *
     * @var string
     */
    public $gestureType;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/cc/RecognizeHandGesture1.jpg
     *
     * @var Stream
     */
    public $imageURLObject;
    protected $_name = [
        'appId'          => 'AppId',
        'gestureType'    => 'GestureType',
        'imageURLObject' => 'ImageURL',
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
        if (null !== $this->gestureType) {
            $res['GestureType'] = $this->gestureType;
        }
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GestureType'])) {
            $model->gestureType = $map['GestureType'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        return $model;
    }
}
