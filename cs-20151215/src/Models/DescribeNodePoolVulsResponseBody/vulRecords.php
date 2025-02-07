<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords\vulList;

class vulRecords extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $nodeName;
    /**
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
        if (\is_array($this->vulList)) {
            Model::validateArray($this->vulList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }

        if (null !== $this->nodeName) {
            $res['node_name'] = $this->nodeName;
        }

        if (null !== $this->vulList) {
            if (\is_array($this->vulList)) {
                $res['vul_list'] = [];
                $n1              = 0;
                foreach ($this->vulList as $item1) {
                    $res['vul_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }

        if (isset($map['node_name'])) {
            $model->nodeName = $map['node_name'];
        }

        if (isset($map['vul_list'])) {
            if (!empty($map['vul_list'])) {
                $model->vulList = [];
                $n1             = 0;
                foreach ($map['vul_list'] as $item1) {
                    $model->vulList[$n1++] = vulList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
