<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddLhMembersRequest\members;

class AddLhMembersRequest extends Model
{
    /**
     * @var members[]
     */
    public $members;
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
        'members'    => 'Members',
        'objectId'   => 'ObjectId',
        'objectType' => 'ObjectType',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1             = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n1             = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1++] = members::fromMap($item1);
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
