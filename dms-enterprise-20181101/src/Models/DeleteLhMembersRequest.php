<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLhMembersRequest extends Model
{
    /**
     * @var int[]
     */
    public $memberIds;

    /**
     * @var int
     */
    public $objectId;

    /**
     * @var int
     */
    public $objectType;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'memberIds'  => 'MemberIds',
        'objectId'   => 'ObjectId',
        'objectType' => 'ObjectType',
        'tid'        => 'Tid',
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
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLhMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberIds'])) {
            if (!empty($map['MemberIds'])) {
                $model->memberIds = $map['MemberIds'];
            }
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
