<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceAuthsResponseBody;

use AlibabaCloud\Dara\Model;

class serviceAuths extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $ownerName;
    /**
     * @var string
     */
    public $ownerStaffId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'id'           => 'id',
        'ownerName'    => 'ownerName',
        'ownerStaffId' => 'ownerStaffId',
        'type'         => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->ownerName) {
            $res['ownerName'] = $this->ownerName;
        }

        if (null !== $this->ownerStaffId) {
            $res['ownerStaffId'] = $this->ownerStaffId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['ownerName'])) {
            $model->ownerName = $map['ownerName'];
        }

        if (isset($map['ownerStaffId'])) {
            $model->ownerStaffId = $map['ownerStaffId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
