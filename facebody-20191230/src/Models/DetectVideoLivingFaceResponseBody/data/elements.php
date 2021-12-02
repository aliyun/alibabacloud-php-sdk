<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var float
     */
    public $faceConfidence;

    /**
     * @var float
     */
    public $liveConfidence;

    /**
     * @var int[]
     */
    public $rect;
    protected $_name = [
        'faceConfidence' => 'FaceConfidence',
        'liveConfidence' => 'LiveConfidence',
        'rect'           => 'Rect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceConfidence) {
            $res['FaceConfidence'] = $this->faceConfidence;
        }
        if (null !== $this->liveConfidence) {
            $res['LiveConfidence'] = $this->liveConfidence;
        }
        if (null !== $this->rect) {
            $res['Rect'] = $this->rect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceConfidence'])) {
            $model->faceConfidence = $map['FaceConfidence'];
        }
        if (isset($map['LiveConfidence'])) {
            $model->liveConfidence = $map['LiveConfidence'];
        }
        if (isset($map['Rect'])) {
            if (!empty($map['Rect'])) {
                $model->rect = $map['Rect'];
            }
        }

        return $model;
    }
}
