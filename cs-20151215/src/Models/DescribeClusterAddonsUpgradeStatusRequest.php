<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAddonsUpgradeStatusRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 组件列表。
     *
     * @var string[]
     */
    public $componentIds;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'componentIds' => 'componentIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentIds) {
            $res['componentIds'] = $this->componentIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAddonsUpgradeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['componentIds'])) {
            if (!empty($map['componentIds'])) {
                $model->componentIds = $map['componentIds'];
            }
        }

        return $model;
    }
}
