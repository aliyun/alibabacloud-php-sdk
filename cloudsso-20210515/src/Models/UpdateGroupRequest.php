<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class UpdateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $newDescription;

    /**
     * @var string
     */
    public $newGroupName;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'groupId' => 'GroupId',
        'newDescription' => 'NewDescription',
        'newGroupName' => 'NewGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }

        if (null !== $this->newGroupName) {
            $res['NewGroupName'] = $this->newGroupName;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }

        if (isset($map['NewGroupName'])) {
            $model->newGroupName = $map['NewGroupName'];
        }

        return $model;
    }
}
