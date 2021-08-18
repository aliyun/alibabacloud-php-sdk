<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserDetailResponseBody\factorList\relatedMetricDatas\nodes;
use AlibabaCloud\Tea\Model;

class relatedMetricDatas extends Model
{
    /**
     * @description 来源角色： SENDER：发布端，即上行 RECEIVER：订阅端，即下行
     *
     * @var string
     */
    public $role;

    /**
     * @description 数据来自对应发布端的用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 指标类型，参照端到端指标接口的指标类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 坐标数据列表
     *
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'role'   => 'Role',
        'userId' => 'UserId',
        'type'   => 'Type',
        'nodes'  => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedMetricDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
