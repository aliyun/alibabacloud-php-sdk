<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class DepartmentSaveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $departListShrink;
    protected $_name = [
        'departListShrink' => 'depart_list',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departListShrink) {
            $res['depart_list'] = $this->departListShrink;
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
        if (isset($map['depart_list'])) {
            $model->departListShrink = $map['depart_list'];
        }

        return $model;
    }
}
