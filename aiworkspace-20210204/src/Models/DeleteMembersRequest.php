<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DeleteMembersRequest extends Model
{
    /**
     * @var string
     */
    public $memberIds;
    protected $_name = [
        'memberIds' => 'MemberIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberIds) {
            $res['MemberIds'] = $this->memberIds;
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
        if (isset($map['MemberIds'])) {
            $model->memberIds = $map['MemberIds'];
        }

        return $model;
    }
}
