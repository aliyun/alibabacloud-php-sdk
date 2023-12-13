<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\containers;

use AlibabaCloud\Tea\Model;

class CPU extends Model
{
    /**
     * @description The upper limit of vCPU usage. The calculation formula for this parameter: The number of vCPUs × 1000.
     *
     * @example 1024
     *
     * @var int
     */
    public $limit;

    /**
     * @description The average load in the last 10 seconds.
     *
     * @example 0
     *
     * @var int
     */
    public $load;

    /**
     * @description The cumulative usage of vCPUs.
     *
     * @example 40876694
     *
     * @var int
     */
    public $usageCoreNanoSeconds;

    /**
     * @description The vCPU usage in the sampling window. Unit for the sampling window: nanoseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $usageNanoCores;
    protected $_name = [
        'limit'                => 'Limit',
        'load'                 => 'Load',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'usageNanoCores'       => 'UsageNanoCores',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->load) {
            $res['Load'] = $this->load;
        }
        if (null !== $this->usageCoreNanoSeconds) {
            $res['UsageCoreNanoSeconds'] = $this->usageCoreNanoSeconds;
        }
        if (null !== $this->usageNanoCores) {
            $res['UsageNanoCores'] = $this->usageNanoCores;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CPU
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Load'])) {
            $model->load = $map['Load'];
        }
        if (isset($map['UsageCoreNanoSeconds'])) {
            $model->usageCoreNanoSeconds = $map['UsageCoreNanoSeconds'];
        }
        if (isset($map['UsageNanoCores'])) {
            $model->usageNanoCores = $map['UsageNanoCores'];
        }

        return $model;
    }
}
