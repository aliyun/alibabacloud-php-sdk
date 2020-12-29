<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeFlowgraphResponseBody\flowgraphs;
use AlibabaCloud\Tea\Model;

class DescribeFlowgraphResponseBody extends Model
{
    /**
     * @var flowgraphs[]
     */
    public $flowgraphs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowgraphs' => 'Flowgraphs',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowgraphs) {
            $res['Flowgraphs'] = [];
            if (null !== $this->flowgraphs && \is_array($this->flowgraphs)) {
                $n = 0;
                foreach ($this->flowgraphs as $item) {
                    $res['Flowgraphs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowgraphResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flowgraphs'])) {
            if (!empty($map['Flowgraphs'])) {
                $model->flowgraphs = [];
                $n                 = 0;
                foreach ($map['Flowgraphs'] as $item) {
                    $model->flowgraphs[$n++] = null !== $item ? flowgraphs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
