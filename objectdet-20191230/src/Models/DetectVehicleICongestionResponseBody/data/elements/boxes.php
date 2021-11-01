<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\elements;

use AlibabaCloud\Tea\Model;

class boxes extends Model
{
    /**
     * @var int
     */
    public $bottom;

    /**
     * @var int
     */
    public $left;

    /**
     * @var int
     */
    public $right;

    /**
     * @var int
     */
    public $top;
    protected $_name = [
        'bottom' => 'Bottom',
        'left'   => 'Left',
        'right'  => 'Right',
        'top'    => 'Top',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bottom) {
            $res['Bottom'] = $this->bottom;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->right) {
            $res['Right'] = $this->right;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
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
        if (isset($map['Bottom'])) {
            $model->bottom = $map['Bottom'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Right'])) {
            $model->right = $map['Right'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }

        return $model;
    }
}
