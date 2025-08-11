<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class QueryUserGroupListByParentIdRequest extends Model
{
    /**
     * @var string
     */
    public $parentUserGroupId;
    protected $_name = [
        'parentUserGroupId' => 'ParentUserGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parentUserGroupId) {
            $res['ParentUserGroupId'] = $this->parentUserGroupId;
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
        if (isset($map['ParentUserGroupId'])) {
            $model->parentUserGroupId = $map['ParentUserGroupId'];
        }

        return $model;
    }
}
