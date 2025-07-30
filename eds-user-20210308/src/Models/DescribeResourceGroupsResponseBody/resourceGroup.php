<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup\appRules;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup\policies;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup\timers;
use AlibabaCloud\Tea\Model;

class resourceGroup extends Model
{
    /**
     * @var appRules[]
     */
    public $appRules;

    /**
     * @example 3
     *
     * @var string
     */
    public $authCount;

    /**
     * @example 2022-11-29T17:25:40.000000000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var policies[]
     */
    public $policies;

    /**
     * @example 119
     *
     * @var string
     */
    public $resourceCount;

    /**
     * @example rg-cyo0il2pzge1***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var timers[]
     */
    public $timers;
    protected $_name = [
        'appRules' => 'AppRules',
        'authCount' => 'AuthCount',
        'createTime' => 'CreateTime',
        'policies' => 'Policies',
        'resourceCount' => 'ResourceCount',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
        'timers' => 'Timers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appRules) {
            $res['AppRules'] = [];
            if (null !== $this->appRules && \is_array($this->appRules)) {
                $n = 0;
                foreach ($this->appRules as $item) {
                    $res['AppRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authCount) {
            $res['AuthCount'] = $this->authCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->timers) {
            $res['Timers'] = [];
            if (null !== $this->timers && \is_array($this->timers)) {
                $n = 0;
                foreach ($this->timers as $item) {
                    $res['Timers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppRules'])) {
            if (!empty($map['AppRules'])) {
                $model->appRules = [];
                $n = 0;
                foreach ($map['AppRules'] as $item) {
                    $model->appRules[$n++] = null !== $item ? appRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AuthCount'])) {
            $model->authCount = $map['AuthCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['Timers'])) {
            if (!empty($map['Timers'])) {
                $model->timers = [];
                $n = 0;
                foreach ($map['Timers'] as $item) {
                    $model->timers[$n++] = null !== $item ? timers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
