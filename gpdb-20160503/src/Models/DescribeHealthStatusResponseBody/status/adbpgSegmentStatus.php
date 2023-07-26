<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class adbpgSegmentStatus extends Model
{
    /**
     * @description The availability status of compute nodes. Valid values:
     *
     *   **critical**: All the primary and secondary compute nodes are unavailable. In this case, this metric is marked in red in the console.
     *   **warning**: Fifty percent or more than fifty percent of compute nodes are unavailable. In this case, this metric is marked in yellow in the console.
     *   **healthy**: All compute nodes are available. In this case, this metric is marked in green in the console.
     *
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of compute node availability status.
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
     * @return adbpgSegmentStatus
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
