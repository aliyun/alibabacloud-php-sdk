<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmEmbedTaskRequest\videoControl\textVisibleControl;

use AlibabaCloud\Dara\Model;

class margin extends Model
{
    /**
     * @var int
     */
    public $bottom;

    /**
     * @var int
     */
    public $right;
    protected $_name = [
        'bottom' => 'Bottom',
        'right' => 'Right',
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

        if (null !== $this->right) {
            $res['Right'] = $this->right;
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

        if (isset($map['Right'])) {
            $model->right = $map['Right'];
        }

        return $model;
    }
}
