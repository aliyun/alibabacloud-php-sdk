<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsResponseBody\flowLogs\flowLogSetType;
use AlibabaCloud\Tea\Model;

class flowLogs extends Model
{
    /**
     * @var flowLogSetType[]
     */
    public $flowLogSetType;
    protected $_name = [
        'flowLogSetType' => 'FlowLogSetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowLogSetType) {
            $res['FlowLogSetType'] = [];
            if (null !== $this->flowLogSetType && \is_array($this->flowLogSetType)) {
                $n = 0;
                foreach ($this->flowLogSetType as $item) {
                    $res['FlowLogSetType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowLogSetType'])) {
            if (!empty($map['FlowLogSetType'])) {
                $model->flowLogSetType = [];
                $n                     = 0;
                foreach ($map['FlowLogSetType'] as $item) {
                    $model->flowLogSetType[$n++] = null !== $item ? flowLogSetType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
