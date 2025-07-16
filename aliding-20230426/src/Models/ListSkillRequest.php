<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListSkillRequest extends Model
{
    /**
     * @example qweq-1231-jbarr-9940-asdf
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
     * @return ListSkillRequest
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
