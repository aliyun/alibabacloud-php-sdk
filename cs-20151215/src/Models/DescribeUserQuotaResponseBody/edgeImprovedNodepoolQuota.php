<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class edgeImprovedNodepoolQuota extends Model
{
    /**
     * @description This parameter is discontinued.
     *
     * The maximum bandwidth of each enhanced edge node pool. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description This parameter is discontinued.
     *
     * The maximum number of enhanced edge node pools that you can create within an Alibaba Cloud account.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description This parameter is discontinued.
     *
     * The maximum subscription duration of an enhanced edge node pool. Unit: months.
     *
     * >  You are charged for enhanced edge node pools based on the pay-as-you-go billing method. Therefore, you can ignore this parameter.
     *
     * @example 3
     *
     * @var int
     */
    public $period;
    protected $_name = [
        'bandwidth' => 'bandwidth',
        'count' => 'count',
        'period' => 'period',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edgeImprovedNodepoolQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        return $model;
    }
}
