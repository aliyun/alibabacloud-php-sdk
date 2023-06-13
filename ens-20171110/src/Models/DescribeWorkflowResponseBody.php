<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowResponseBody\workFlowInfo;
use AlibabaCloud\Tea\Model;

class DescribeWorkflowResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var workFlowInfo[]
     */
    public $workFlowInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'workFlowInfo' => 'WorkFlowInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workFlowInfo) {
            $res['WorkFlowInfo'] = [];
            if (null !== $this->workFlowInfo && \is_array($this->workFlowInfo)) {
                $n = 0;
                foreach ($this->workFlowInfo as $item) {
                    $res['WorkFlowInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkflowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WorkFlowInfo'])) {
            if (!empty($map['WorkFlowInfo'])) {
                $model->workFlowInfo = [];
                $n                   = 0;
                foreach ($map['WorkFlowInfo'] as $item) {
                    $model->workFlowInfo[$n++] = null !== $item ? workFlowInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
