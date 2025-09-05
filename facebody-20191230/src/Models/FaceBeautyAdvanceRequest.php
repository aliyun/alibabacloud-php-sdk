<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class FaceBeautyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var float
     */
    public $sharp;

    /**
     * @var float
     */
    public $smooth;

    /**
     * @var float
     */
    public $white;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'sharp' => 'Sharp',
        'smooth' => 'Smooth',
        'white' => 'White',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->sharp) {
            $res['Sharp'] = $this->sharp;
        }

        if (null !== $this->smooth) {
            $res['Smooth'] = $this->smooth;
        }

        if (null !== $this->white) {
            $res['White'] = $this->white;
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
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['Sharp'])) {
            $model->sharp = $map['Sharp'];
        }

        if (isset($map['Smooth'])) {
            $model->smooth = $map['Smooth'];
        }

        if (isset($map['White'])) {
            $model->white = $map['White'];
        }

        return $model;
    }
}
