<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class nodeSegmentDiskStatus extends Model
{
    /**
     * @description The storage status of compute nodes. Valid values:
     *
     *   **critical**: The compute node storage usage is greater than or equal to 90%. In this case, this metric is marked in red in the console and the instance is locked.
     *   **warning**: The compute node storage usage is greater than or equal to 80% and less than 90%. In this case, this metric is marked in yellow in the console.
     *   **healthy**: The compute node storage usage is less than 80%. In this case, this metric is marked in green in the console.
     *
     * >  The compute node storage usage is the maximum storage usage among all compute nodes.
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of maximum compute node storage usage.
     *
     * Unit: %.
     * @example 1.52
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
     * @return nodeSegmentDiskStatus
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
