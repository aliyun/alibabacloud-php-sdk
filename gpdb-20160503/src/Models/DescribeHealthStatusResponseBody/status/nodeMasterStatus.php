<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class nodeMasterStatus extends Model
{
    /**
     * @description The health status of the coordinator node. Valid values:
     *
     *   **critical**: The primary or standby coordinator node is unavailable. In this case, this metric is marked in red in the console.
     *   **healthy**: Both the primary and standby coordinator nodes are available. In this case, this metric is marked in green in the console.
     *
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of coordinator node health status. Valid values:
     *
     *   **1**: healthy
     *   **0**: critical
     *
     * @example 1
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'status' => 'Status',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeMasterStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
