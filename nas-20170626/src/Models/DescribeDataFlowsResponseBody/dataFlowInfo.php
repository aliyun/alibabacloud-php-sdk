<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow;
use AlibabaCloud\Tea\Model;

class dataFlowInfo extends Model
{
    /**
     * @var dataFlow[]
     */
    public $dataFlow;
    protected $_name = [
        'dataFlow' => 'DataFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFlow) {
            $res['DataFlow'] = [];
            if (null !== $this->dataFlow && \is_array($this->dataFlow)) {
                $n = 0;
                foreach ($this->dataFlow as $item) {
                    $res['DataFlow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataFlowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFlow'])) {
            if (!empty($map['DataFlow'])) {
                $model->dataFlow = [];
                $n               = 0;
                foreach ($map['DataFlow'] as $item) {
                    $model->dataFlow[$n++] = null !== $item ? dataFlow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
