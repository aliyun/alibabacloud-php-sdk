<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\RegisterFaceResponseBody;

use AlibabaCloud\SDK\Ivision\V20190308\Models\RegisterFaceResponseBody\faces\rect;
use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @var string
     */
    public $faceToken;

    /**
     * @var rect
     */
    public $rect;
    protected $_name = [
        'faceToken' => 'FaceToken',
        'rect'      => 'Rect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceToken) {
            $res['FaceToken'] = $this->faceToken;
        }
        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceToken'])) {
            $model->faceToken = $map['FaceToken'];
        }
        if (isset($map['Rect'])) {
            $model->rect = rect::fromMap($map['Rect']);
        }

        return $model;
    }
}
