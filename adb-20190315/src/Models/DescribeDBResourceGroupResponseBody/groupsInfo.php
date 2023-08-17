<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class groupsInfo extends Model
{
    /**
     * @description The time when the resource group was created.
     *
     * @example 2022-10-09 16:57:35.241
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the resource group.
     *
     * @example USER_DEFAULT
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The query execution mode. Valid values:
     *
     *   **interactive**
     *   **batch**
     *
     * >  For more information, see [Query execution modes](~~189502~~).
     * @example interactive
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The database accounts that are associated with the resource group.
     *
     * @example testb,testc
     *
     * @var string
     */
    public $groupUsers;

    /**
     * @description The number of nodes. Each node consumes 16 cores and 64 GB memory.
     *
     * @example 2
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The time when the resource group was updated.
     *
     * @example 2022-11-09 16:57:35.241
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'groupName'  => 'GroupName',
        'groupType'  => 'GroupType',
        'groupUsers' => 'GroupUsers',
        'nodeNum'    => 'NodeNum',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->groupUsers) {
            $res['GroupUsers'] = $this->groupUsers;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['GroupUsers'])) {
            $model->groupUsers = $map['GroupUsers'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
