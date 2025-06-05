<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records;

use AlibabaCloud\Dara\Model;

class CPU extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $load;

    /**
     * @var int
     */
    public $usageCoreNanoSeconds;

    /**
     * @var int
     */
    public $usageNanoCores;
    protected $_name = [
        'limit' => 'Limit',
        'load' => 'Load',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'usageNanoCores' => 'UsageNanoCores',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
