<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\SDK\Multimediaai\V20190810\Models\RegisterFaceImageResponseBody\faceImages;
use AlibabaCloud\Tea\Model;

class RegisterFaceImageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var faceImages[]
     */
    public $faceImages;
    protected $_name = [
        'requestId'  => 'RequestId',
        'faceImages' => 'FaceImages',
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
        if (null !== $this->faceImages) {
            $res['FaceImages'] = [];
            if (null !== $this->faceImages && \is_array($this->faceImages)) {
                $n = 0;
                foreach ($this->faceImages as $item) {
                    $res['FaceImages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterFaceImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FaceImages'])) {
            if (!empty($map['FaceImages'])) {
                $model->faceImages = [];
                $n                 = 0;
                foreach ($map['FaceImages'] as $item) {
                    $model->faceImages[$n++] = null !== $item ? faceImages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
