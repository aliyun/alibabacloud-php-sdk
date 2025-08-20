<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageRequest\imageControl\logoVisibleControl;

use AlibabaCloud\Dara\Model;

class margin extends Model
{
    /**
     * @var float
     */
    public $bottom;

    /**
     * @var float
     */
    public $left;

    /**
     * @var float
     */
    public $right;

    /**
     * @var float
     */
    public $top;
    protected $_name = [
        'bottom' => 'Bottom',
        'left' => 'Left',
        'right' => 'Right',
        'top' => 'Top',
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
            $res['Top'] = $this->top;
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

        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }

        return $model;
    }
}
