<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        'rect' => 'Rect',
    ];

    public function validate()
    {
        if (\is_array($this->rect)) {
            Model::validateArray($this->rect);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceConfidence) {
            $res['FaceConfidence'] = $this->faceConfidence;
        }

        if (null !== $this->liveConfidence) {
            $res['LiveConfidence'] = $this->liveConfidence;
        }

        if (null !== $this->rect) {
            if (\is_array($this->rect)) {
                $res['Rect'] = [];
                $n1 = 0;
                foreach ($this->rect as $item1) {
                    $res['Rect'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FaceConfidence'])) {
            $model->faceConfidence = $map['FaceConfidence'];
        }

        if (isset($map['LiveConfidence'])) {
            $model->liveConfidence = $map['LiveConfidence'];
        }

        if (isset($map['Rect'])) {
            if (!empty($map['Rect'])) {
                $model->rect = [];
                $n1 = 0;
                foreach ($map['Rect'] as $item1) {
                    $model->rect[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
