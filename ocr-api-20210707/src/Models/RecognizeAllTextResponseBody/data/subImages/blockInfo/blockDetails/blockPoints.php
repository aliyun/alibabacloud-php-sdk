<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails;

use AlibabaCloud\Dara\Model;

class blockPoints extends Model
{
    /**
     * @var int
     */
    public $x;

    /**
     * @var int
     */
    public $y;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }

        if (null !== $this->y) {
            $res['Y'] = $this->y;
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
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
