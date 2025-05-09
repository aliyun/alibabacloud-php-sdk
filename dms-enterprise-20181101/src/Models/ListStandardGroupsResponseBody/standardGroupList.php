<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListStandardGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class standardGroupList extends Model
{
    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupMode;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $lastMenderId;
    protected $_name = [
        'dbType' => 'DbType',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupMode' => 'GroupMode',
        'groupName' => 'GroupName',
        'lastMenderId' => 'LastMenderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->lastMenderId) {
            $res['LastMenderId'] = $this->lastMenderId;
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['LastMenderId'])) {
            $model->lastMenderId = $map['LastMenderId'];
        }

        return $model;
    }
}
