<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStandardGroupResponseBody;

use AlibabaCloud\Tea\Model;

class standardGroup extends Model
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
        'dbType'       => 'DbType',
        'description'  => 'Description',
        'groupMode'    => 'GroupMode',
        'groupName'    => 'GroupName',
        'lastMenderId' => 'LastMenderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

    /**
     * @param array $map
     *
     * @return standardGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
