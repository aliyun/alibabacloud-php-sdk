<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle\center;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle\size;
use AlibabaCloud\Tea\Model;

class faceRectangle extends Model
{
    /**
     * @var size
     */
    public $size;

    /**
     * @var float
     */
    public $angle;

    /**
     * @var center
     */
    public $center;
    protected $_name = [
        'size'   => 'Size',
        'angle'  => 'Angle',
        'center' => 'Center',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = null !== $this->size ? $this->size->toMap() : null;
        }
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->center) {
            $res['Center'] = null !== $this->center ? $this->center->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceRectangle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = size::fromMap($map['Size']);
        }
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['Center'])) {
            $model->center = center::fromMap($map['Center']);
        }

        return $model;
    }
}
