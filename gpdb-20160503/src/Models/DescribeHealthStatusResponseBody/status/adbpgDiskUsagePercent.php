<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;

use AlibabaCloud\Tea\Model;

class adbpgDiskUsagePercent extends Model
{
    /**
     * @description The status corresponding to the storage usage of the instance. Valid values:
     *
     *   **critical**: The instance storage usage is greater than or equal to 90%. In this case, the instance is locked.
     *   **warning**: The instance storage usage is greater than or equal to 70% and less than 90%.
     *   **healthy**: The instance storage usage is less than 70%.
     *
     * >  The instance storage usage is the average storage usage of all compute nodes.
     * @example healthy
     *
     * @var string
     */
    public $status;

    /**
     * @description The metric value of instance storage usage.
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
     * @return adbpgDiskUsagePercent
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
