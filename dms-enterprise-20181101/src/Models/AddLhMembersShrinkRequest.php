<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class AddLhMembersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $membersShrink;
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
        'membersShrink' => 'Members',
        'objectId'      => 'ObjectId',
        'objectType'    => 'ObjectType',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
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
            $model->membersShrink = $map['Members'];
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
