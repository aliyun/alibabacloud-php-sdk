<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryUserGroupListByParentIdRequest extends Model
{
    /**
     * @description The ID of the parent user group.
     *
     *   If you enter the ID of the parent user group, you can obtain the information of the child user group under this ID.
     *   If you enter -1, you can obtain the sub-user group information under the root directory.
     *
     * @example 3d2c23d4-2b41-4af8-a1f5-f6390f32****
     *
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
