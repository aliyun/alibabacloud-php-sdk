<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle\center;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data\frontResult\faceRectangle\size;
use AlibabaCloud\Tea\Model;

class faceRectangle extends Model
{
    /**
     * @example -87.710586547851562
     *
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
        'angle'  => 'Angle',
        'center' => 'Center',
        'size'   => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->center) {
            $res['Center'] = null !== $this->center ? $this->center->toMap() : null;
        }
        if (null !== $this->size) {
            $res['Size'] = null !== $this->size ? $this->size->toMap() : null;
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
