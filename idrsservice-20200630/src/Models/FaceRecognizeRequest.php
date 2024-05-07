<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceRecognizeRequest\faceRequest;
use AlibabaCloud\Tea\Model;

class FaceRecognizeRequest extends Model
{
    /**
     * @var faceRequest
     */
    public $faceRequest;
    protected $_name = [
        'faceRequest' => 'FaceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRequest) {
            $res['FaceRequest'] = null !== $this->faceRequest ? $this->faceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceRecognizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceRequest'])) {
            $model->faceRequest = faceRequest::fromMap($map['FaceRequest']);
        }

        return $model;
    }
}
