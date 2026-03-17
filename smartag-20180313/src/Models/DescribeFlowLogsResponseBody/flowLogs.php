<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsResponseBody\flowLogs\flowLogSetType;

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
        if (\is_array($this->flowLogSetType)) {
            Model::validateArray($this->flowLogSetType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowLogSetType) {
            if (\is_array($this->flowLogSetType)) {
                $res['FlowLogSetType'] = [];
                $n1 = 0;
                foreach ($this->flowLogSetType as $item1) {
                    $res['FlowLogSetType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['FlowLogSetType'])) {
            if (!empty($map['FlowLogSetType'])) {
                $model->flowLogSetType = [];
                $n1 = 0;
                foreach ($map['FlowLogSetType'] as $item1) {
                    $model->flowLogSetType[$n1] = flowLogSetType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
