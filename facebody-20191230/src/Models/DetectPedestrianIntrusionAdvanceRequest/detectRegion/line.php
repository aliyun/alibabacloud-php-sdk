<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest\detectRegion;

use AlibabaCloud\Dara\Model;

class line extends Model
{
    /**
     * @var int
     */
    public $x1;

    /**
     * @var int
     */
    public $x2;

    /**
     * @var int
     */
    public $y1;

    /**
     * @var int
     */
    public $y2;
    protected $_name = [
        'x1' => 'X1',
        'x2' => 'X2',
        'y1' => 'Y1',
        'y2' => 'Y2',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->x1) {
            $res['X1'] = $this->x1;
        }

        if (null !== $this->x2) {
            $res['X2'] = $this->x2;
        }

        if (null !== $this->y1) {
            $res['Y1'] = $this->y1;
        }

        if (null !== $this->y2) {
            $res['Y2'] = $this->y2;
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
        if (isset($map['X1'])) {
            $model->x1 = $map['X1'];
        }

        if (isset($map['X2'])) {
            $model->x2 = $map['X2'];
        }

        if (isset($map['Y1'])) {
            $model->y1 = $map['Y1'];
        }

        if (isset($map['Y2'])) {
            $model->y2 = $map['Y2'];
        }

        return $model;
    }
}
