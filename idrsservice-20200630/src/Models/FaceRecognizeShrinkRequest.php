<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class FaceRecognizeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $faceRequestShrink;
    protected $_name = [
        'faceRequestShrink' => 'FaceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceRequestShrink) {
            $res['FaceRequest'] = $this->faceRequestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceRecognizeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceRequest'])) {
            $model->faceRequestShrink = $map['FaceRequest'];
        }

        return $model;
    }
}
