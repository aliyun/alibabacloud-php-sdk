<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup\appRules;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup\policies;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup\timers;

class resourceGroup extends Model
{
    /**
     * @var appRules[]
     */
    public $appRules;

    /**
     * @var string
     */
    public $authCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var policies[]
     */
    public $policies;

    /**
     * @var string
     */
    public $resourceCount;

    /**
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

    public function validate()
    {
        if (\is_array($this->appRules)) {
            Model::validateArray($this->appRules);
        }
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        if (\is_array($this->timers)) {
            Model::validateArray($this->timers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appRules) {
            if (\is_array($this->appRules)) {
                $res['AppRules'] = [];
                $n1 = 0;
                foreach ($this->appRules as $item1) {
                    $res['AppRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->policies)) {
                $res['Policies'] = [];
                $n1 = 0;
                foreach ($this->policies as $item1) {
                    $res['Policies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->timers)) {
                $res['Timers'] = [];
                $n1 = 0;
                foreach ($this->timers as $item1) {
                    $res['Timers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AppRules'])) {
            if (!empty($map['AppRules'])) {
                $model->appRules = [];
                $n1 = 0;
                foreach ($map['AppRules'] as $item1) {
                    $model->appRules[$n1++] = appRules::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Policies'] as $item1) {
                    $model->policies[$n1++] = policies::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Timers'] as $item1) {
                    $model->timers[$n1++] = timers::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
