<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceUserGroupRequest extends Model
{
    /**
     * @example ZheJiangHZ
     *
     * @var string
     */
    public $isolationId;

    /**
     * @example kvjy****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'isolationId' => 'IsolationId',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceUserGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
