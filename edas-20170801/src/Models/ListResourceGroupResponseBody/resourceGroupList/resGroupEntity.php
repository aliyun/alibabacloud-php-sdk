<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\ecsList;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListResourceGroupResponseBody\resourceGroupList\resGroupEntity\slbList;
use AlibabaCloud\Tea\Model;

class resGroupEntity extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $adminUserId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var ecsList
     */
    public $ecsList;

    /**
     * @var slbList
     */
    public $slbList;
    protected $_name = [
        'id'          => 'Id',
        'name'        => 'Name',
        'description' => 'Description',
        'adminUserId' => 'AdminUserId',
        'createTime'  => 'CreateTime',
        'updateTime'  => 'UpdateTime',
        'regionId'    => 'RegionId',
        'ecsList'     => 'ecsList',
        'slbList'     => 'SlbList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->adminUserId) {
            $res['AdminUserId'] = $this->adminUserId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ecsList) {
            $res['ecsList'] = null !== $this->ecsList ? $this->ecsList->toMap() : null;
        }
        if (null !== $this->slbList) {
            $res['SlbList'] = null !== $this->slbList ? $this->slbList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resGroupEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AdminUserId'])) {
            $model->adminUserId = $map['AdminUserId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ecsList'])) {
            $model->ecsList = ecsList::fromMap($map['ecsList']);
        }
        if (isset($map['SlbList'])) {
            $model->slbList = slbList::fromMap($map['SlbList']);
        }

        return $model;
    }
}
