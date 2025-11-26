<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteHaVipsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $haVipIdsShrink;
    protected $_name = [
        'haVipIdsShrink' => 'HaVipIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->haVipIdsShrink) {
            $res['HaVipIds'] = $this->haVipIdsShrink;
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
        if (isset($map['HaVipIds'])) {
            $model->haVipIdsShrink = $map['HaVipIds'];
        }

        return $model;
    }
}
