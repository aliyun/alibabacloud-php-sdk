<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePriceTagDetectionResponseBody\data\result\priceTags;

use AlibabaCloud\Dara\Model;

class location extends Model
{
    /**
     * @var string
     */
    public $bottom;

    /**
     * @var string
     */
    public $left;

    /**
     * @var string
     */
    public $right;

    /**
     * @var string
     */
    public $top;
    protected $_name = [
        'bottom' => 'Bottom',
        'left' => 'Left',
        'right' => 'Right',
        'top' => 'top',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['top'] = $this->top;
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
        if (isset($map['Bottom'])) {
            $model->bottom = $map['Bottom'];
        }

        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }

        if (isset($map['Right'])) {
            $model->right = $map['Right'];
        }

        if (isset($map['top'])) {
            $model->top = $map['top'];
        }

        return $model;
    }
}
