<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupResponseBody extends Model
{
    /**
     * @example group_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'groupId' => 'groupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        return $model;
    }
}
