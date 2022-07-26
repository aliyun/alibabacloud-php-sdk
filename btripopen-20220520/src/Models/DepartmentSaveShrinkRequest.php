<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class DepartmentSaveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $departListShrink;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'departListShrink' => 'depart_list',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departListShrink) {
            $res['depart_list'] = $this->departListShrink;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DepartmentSaveShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_list'])) {
            $model->departListShrink = $map['depart_list'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
