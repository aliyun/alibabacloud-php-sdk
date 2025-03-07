<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class adbpgStatus extends Model
{
    /**
     * @description The health status of the instance. Valid values:
     *
     *   **critical**: The coordinator node or a compute node is unavailable. In this case, this metric is marked in red in the console.
     *   **healthy**: All nodes are available. In this case, this metric is marked in green in the console.
     *
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of instance health status. Valid values:
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
     * @return adbpgStatus
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
