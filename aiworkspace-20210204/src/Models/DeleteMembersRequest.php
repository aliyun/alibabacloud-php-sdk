<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class DeleteMembersRequest extends Model
{
    /**
     * @example 145883-21513926******88039,145883-2769726******87513
     *
     * @var string
     */
    public $memberIds;
    protected $_name = [
        'memberIds' => 'MemberIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberIds) {
            $res['MemberIds'] = $this->memberIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberIds'])) {
            $model->memberIds = $map['MemberIds'];
        }

        return $model;
    }
}
