<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

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
        'memberIds' => 'MemberIds',
        'objectId' => 'ObjectId',
        'objectType' => 'ObjectType',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->memberIds)) {
            Model::validateArray($this->memberIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberIds) {
            if (\is_array($this->memberIds)) {
                $res['MemberIds'] = [];
                $n1 = 0;
                foreach ($this->memberIds as $item1) {
                    $res['MemberIds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberIds'])) {
            if (!empty($map['MemberIds'])) {
                $model->memberIds = [];
                $n1 = 0;
                foreach ($map['MemberIds'] as $item1) {
                    $model->memberIds[$n1++] = $item1;
                }
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
