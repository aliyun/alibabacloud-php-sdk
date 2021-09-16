<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansResponseBody\data\escalationPlanScopeObjects;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 升级计划id
     *
     * @var int
     */
    public $escalationPlanId;

    /**
     * @description 升级计划名称
     *
     * @var string
     */
    public $escalationPlanName;

    /**
     * @description 升级计划范围对象
     *
     * @var escalationPlanScopeObjects[]
     */
    public $escalationPlanScopeObjects;

    /**
     * @description 启用ENABLE 禁用DISABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'escalationPlanId'           => 'escalationPlanId',
        'escalationPlanName'         => 'escalationPlanName',
        'escalationPlanScopeObjects' => 'escalationPlanScopeObjects',
        'status'                     => 'status',
        'modifyTime'                 => 'modifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->escalationPlanScopeObjects) {
            $res['escalationPlanScopeObjects'] = [];
            if (null !== $this->escalationPlanScopeObjects && \is_array($this->escalationPlanScopeObjects)) {
                $n = 0;
                foreach ($this->escalationPlanScopeObjects as $item) {
                    $res['escalationPlanScopeObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['escalationPlanScopeObjects'])) {
            if (!empty($map['escalationPlanScopeObjects'])) {
                $model->escalationPlanScopeObjects = [];
                $n                                 = 0;
                foreach ($map['escalationPlanScopeObjects'] as $item) {
                    $model->escalationPlanScopeObjects[$n++] = null !== $item ? escalationPlanScopeObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }

        return $model;
    }
}
