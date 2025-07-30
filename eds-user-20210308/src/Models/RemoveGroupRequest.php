<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class RemoveGroupRequest extends Model
{
    /**
     * @example ug-12341234****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $groupIds;
    protected $_name = [
        'groupId' => 'GroupId',
        'groupIds' => 'GroupIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }

        return $model;
    }
}
