<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow;

use AlibabaCloud\Tea\Model;

class autoRefresh extends Model
{
    /**
     * @var \AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow\autoRefresh\autoRefresh[]
     */
    public $autoRefresh;
    protected $_name = [
        'autoRefresh' => 'AutoRefresh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRefresh) {
            $res['AutoRefresh'] = [];
            if (null !== $this->autoRefresh && \is_array($this->autoRefresh)) {
                $n = 0;
                foreach ($this->autoRefresh as $item) {
                    $res['AutoRefresh'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoRefresh
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRefresh'])) {
            if (!empty($map['AutoRefresh'])) {
                $model->autoRefresh = [];
                $n                  = 0;
                foreach ($map['AutoRefresh'] as $item) {
                    $model->autoRefresh[$n++] = null !== $item ? \AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow\autoRefresh\autoRefresh::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
