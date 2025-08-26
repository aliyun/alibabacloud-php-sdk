<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle\center;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle\size;

class faceRectangle extends Model
{
    /**
     * @var float
     */
    public $angle;

    /**
     * @var center
     */
    public $center;

    /**
     * @var size
     */
    public $size;
    protected $_name = [
        'angle' => 'Angle',
        'center' => 'Center',
        'size' => 'Size',
    ];

    public function validate()
    {
        if (null !== $this->center) {
            $this->center->validate();
        }
        if (null !== $this->size) {
            $this->size->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }

        if (null !== $this->center) {
            $res['Center'] = null !== $this->center ? $this->center->toArray($noStream) : $this->center;
        }

        if (null !== $this->size) {
            $res['Size'] = null !== $this->size ? $this->size->toArray($noStream) : $this->size;
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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }

        if (isset($map['Center'])) {
            $model->center = center::fromMap($map['Center']);
        }

        if (isset($map['Size'])) {
            $model->size = size::fromMap($map['Size']);
        }

        return $model;
    }
}
