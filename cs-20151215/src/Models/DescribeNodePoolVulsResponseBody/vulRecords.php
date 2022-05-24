<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords\vulList;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var vulList[]
     */
    public $vulList;
    protected $_name = [
        'instanceId' => 'instance_id',
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
