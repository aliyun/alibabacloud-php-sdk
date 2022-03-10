<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentUserGroupId) {
            $res['ParentUserGroupId'] = $this->parentUserGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserGroupListByParentIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentUserGroupId'])) {
            $model->parentUserGroupId = $map['ParentUserGroupId'];
        }

        return $model;
    }
}
