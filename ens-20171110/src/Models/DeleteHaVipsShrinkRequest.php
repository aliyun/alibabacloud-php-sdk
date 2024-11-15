<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteHaVipsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $haVipIdsShrink;
    protected $_name = [
        'haVipIdsShrink' => 'HaVipIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipIdsShrink) {
            $res['HaVipIds'] = $this->haVipIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHaVipsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipIds'])) {
            $model->haVipIdsShrink = $map['HaVipIds'];
        }

        return $model;
    }
}
