<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords\vulList;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @description The node ID.
     *
     * @example i-t4n2qolb0wtzt0pz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The node name. This name is the identifier of the node in the cluster.
     *
     * @example cn-hangzhou.192.168.x.x
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description A list of vulnerabilities.
     *
     * @var vulList[]
     */
    public $vulList;
    protected $_name = [
        'instanceId' => 'instance_id',
        'nodeName'   => 'node_name',
        'vulList'    => 'vul_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->nodeName) {
            $res['node_name'] = $this->nodeName;
        }
        if (null !== $this->vulList) {
            $res['vul_list'] = [];
            if (null !== $this->vulList && \is_array($this->vulList)) {
                $n = 0;
                foreach ($this->vulList as $item) {
                    $res['vul_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['node_name'])) {
            $model->nodeName = $map['node_name'];
        }
        if (isset($map['vul_list'])) {
            if (!empty($map['vul_list'])) {
                $model->vulList = [];
                $n              = 0;
                foreach ($map['vul_list'] as $item) {
                    $model->vulList[$n++] = null !== $item ? vulList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
