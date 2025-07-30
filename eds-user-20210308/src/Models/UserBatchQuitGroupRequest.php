<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class UserBatchQuitGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @example ug-lkuvalovhnlxvv****
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'endUserIds' => 'EndUserIds',
        'groupId' => 'GroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserBatchQuitGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
