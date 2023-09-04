<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateGroupResponseBody;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The time when the group was created.
     *
     * @example 2021-11-01T02:38:27Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the group.
     *
     * @example This is a group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the group.
     *
     * @example g-00jqzghi2n3o5hkh****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group.
     *
     * @example TestGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the group. The value is fixed as Manual, which indicates that the group is manually created.
     *
     * @example Manual
     *
     * @var string
     */
    public $provisionType;

    /**
     * @description The time when the information about the group was modified.
     *
     * @example 2021-11-01T02:38:27Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'provisionType' => 'ProvisionType',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->provisionType) {
            $res['ProvisionType'] = $this->provisionType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ProvisionType'])) {
            $model->provisionType = $map['ProvisionType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
