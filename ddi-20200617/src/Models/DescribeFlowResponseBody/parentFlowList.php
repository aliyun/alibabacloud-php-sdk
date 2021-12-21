<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowResponseBody\parentFlowList\parentFlow;
use AlibabaCloud\Tea\Model;

class parentFlowList extends Model
{
    /**
     * @var parentFlow[]
     */
    public $parentFlow;
    protected $_name = [
        'parentFlow' => 'ParentFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentFlow) {
            $res['ParentFlow'] = [];
            if (null !== $this->parentFlow && \is_array($this->parentFlow)) {
                $n = 0;
                foreach ($this->parentFlow as $item) {
                    $res['ParentFlow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parentFlowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentFlow'])) {
            if (!empty($map['ParentFlow'])) {
                $model->parentFlow = [];
                $n                 = 0;
                foreach ($map['ParentFlow'] as $item) {
                    $model->parentFlow[$n++] = null !== $item ? parentFlow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
