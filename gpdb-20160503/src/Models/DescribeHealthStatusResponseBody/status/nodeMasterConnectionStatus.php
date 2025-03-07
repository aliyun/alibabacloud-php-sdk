<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class nodeMasterConnectionStatus extends Model
{
    /**
     * @description The connection health status of the coordinator node. Valid values:
     *
     *   **critical**: The coordinator node connection usage is greater than 95%. In this case, this metric is marked in red in the console.
     *   **warning**: The coordinator node connection usage is greater than or equal to 90% and less than 95%. In this case, this metric is marked in yellow in the console.
     *   **healthy**: The coordinator node connection usage is less than 90%. In this case, this metric is marked in green in the console.
     *
     * >  The coordinator node connection usage is the maximum connection usage of the coordinator node.
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of coordinator node connection usage.
     *
     * Unit: %.
     * @example 1.71
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
     * @return nodeMasterConnectionStatus
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
