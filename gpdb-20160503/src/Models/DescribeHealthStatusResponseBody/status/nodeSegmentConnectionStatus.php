<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class nodeSegmentConnectionStatus extends Model
{
    /**
     * @description The connection health status of compute nodes. Valid values:
     *
     *   **critical**: The compute node connection usage is greater than or equal to 95%. In this case, this metric is marked in red in the console.
     *   **warning**: The compute node connection usage is greater than or equal to 90% and less than 95%. In this case, this metric is marked in yellow in the console.
     *   **healthy**: The compute node connection usage is less than 90%. In this case, this metric is marked in green in the console.
     *
     * >  The compute node connection usage is the maximum connection usage among all compute nodes.
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of maximum compute node connection usage.
     *
     * Unit: %.
     * @example 0.48
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
     * @return nodeSegmentConnectionStatus
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
