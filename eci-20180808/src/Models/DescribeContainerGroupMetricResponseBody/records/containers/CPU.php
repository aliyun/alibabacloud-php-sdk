<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\containers;

use AlibabaCloud\Tea\Model;

class CPU extends Model
{
    /**
     * @var int
     */
    public $usageNanoCores;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $usageCoreNanoSeconds;

    /**
     * @var int
     */
    public $load;
    protected $_name = [
        'usageNanoCores'       => 'UsageNanoCores',
        'limit'                => 'Limit',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'load'                 => 'Load',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usageNanoCores) {
            $res['UsageNanoCores'] = $this->usageNanoCores;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->usageCoreNanoSeconds) {
            $res['UsageCoreNanoSeconds'] = $this->usageCoreNanoSeconds;
        }
        if (null !== $this->load) {
            $res['Load'] = $this->load;
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
        if (isset($map['UsageNanoCores'])) {
            $model->usageNanoCores = $map['UsageNanoCores'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['UsageCoreNanoSeconds'])) {
            $model->usageCoreNanoSeconds = $map['UsageCoreNanoSeconds'];
        }
        if (isset($map['Load'])) {
            $model->load = $map['Load'];
        }

        return $model;
    }
}
