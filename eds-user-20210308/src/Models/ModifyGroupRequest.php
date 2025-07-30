<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class ModifyGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example ug-12341234****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $newGroupName;
    protected $_name = [
        'description' => 'Description',
        'groupId' => 'GroupId',
        'newGroupName' => 'NewGroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->newGroupName) {
            $res['NewGroupName'] = $this->newGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['NewGroupName'])) {
            $model->newGroupName = $map['NewGroupName'];
        }

        return $model;
    }
}
