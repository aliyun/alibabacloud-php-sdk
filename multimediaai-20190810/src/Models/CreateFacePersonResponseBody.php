<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class CreateFacePersonResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $facePersonId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'facePersonId' => 'FacePersonId',
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
        if (null !== $this->facePersonId) {
            $res['FacePersonId'] = $this->facePersonId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFacePersonResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FacePersonId'])) {
            $model->facePersonId = $map['FacePersonId'];
        }

        return $model;
    }
}
