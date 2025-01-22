<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems\resourceGroupItem\roleList;

class resourceGroupItem extends Model
{
    /**
     * @var string
     */
    public $resourceGroupConfig;
    /**
     * @var string
     */
    public $resourceGroupName;
    /**
     * @var roleList
     */
    public $roleList;
    protected $_name = [
        'resourceGroupConfig' => 'ResourceGroupConfig',
        'resourceGroupName'   => 'ResourceGroupName',
        'roleList'            => 'RoleList',
    ];

    public function validate()
    {
        if (null !== $this->roleList) {
            $this->roleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroupConfig) {
            $res['ResourceGroupConfig'] = $this->resourceGroupConfig;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->roleList) {
            $res['RoleList'] = null !== $this->roleList ? $this->roleList->toArray($noStream) : $this->roleList;
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
        if (isset($map['ResourceGroupConfig'])) {
            $model->resourceGroupConfig = $map['ResourceGroupConfig'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['RoleList'])) {
            $model->roleList = roleList::fromMap($map['RoleList']);
        }

        return $model;
    }
}
