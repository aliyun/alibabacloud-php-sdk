<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow;

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
        if (\is_array($this->dataFlow)) {
            Model::validateArray($this->dataFlow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataFlow) {
            if (\is_array($this->dataFlow)) {
                $res['DataFlow'] = [];
                $n1 = 0;
                foreach ($this->dataFlow as $item1) {
                    $res['DataFlow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataFlow'])) {
            if (!empty($map['DataFlow'])) {
                $model->dataFlow = [];
                $n1 = 0;
                foreach ($map['DataFlow'] as $item1) {
                    $model->dataFlow[$n1] = dataFlow::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
