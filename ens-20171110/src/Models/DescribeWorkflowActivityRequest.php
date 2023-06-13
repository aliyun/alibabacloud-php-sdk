<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeWorkflowActivityRequest extends Model
{
    /**
     * @var string
     */
    public $workFlowId;
    protected $_name = [
        'workFlowId' => 'WorkFlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workFlowId) {
            $res['WorkFlowId'] = $this->workFlowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkflowActivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkFlowId'])) {
            $model->workFlowId = $map['WorkFlowId'];
        }

        return $model;
    }
}
