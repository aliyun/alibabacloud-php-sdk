<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody\data\elements;

use AlibabaCloud\Tea\Model;

class boxes extends Model
{
    /**
     * @var int
     */
    public $left;

    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $right;

    /**
     * @var int
     */
    public $bottom;
    protected $_name = [
        'left'   => 'Left',
        'top'    => 'Top',
        'right'  => 'Right',
        'bottom' => 'Bottom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->right) {
            $res['Right'] = $this->right;
        }
        if (null !== $this->bottom) {
            $res['Bottom'] = $this->bottom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return boxes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Right'])) {
            $model->right = $map['Right'];
        }
        if (isset($map['Bottom'])) {
            $model->bottom = $map['Bottom'];
        }

        return $model;
    }
}
