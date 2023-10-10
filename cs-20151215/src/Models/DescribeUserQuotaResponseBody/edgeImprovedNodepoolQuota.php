<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class edgeImprovedNodepoolQuota extends Model
{
    /**
     * @description The maximum bandwidth of each enhanced node pool. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The quota of enhanced edge node pools that belong to an Alibaba Cloud account.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The maximum subscription duration of an enhanced edge node pool. Unit: months.
     *
     * > You can ignore this parameter because enhanced edge node pools are pay-as-you-go resources.
     * @example 3
     *
     * @var int
     */
    public $period;
    protected $_name = [
        'bandwidth' => 'bandwidth',
        'count'     => 'count',
        'period'    => 'period',
    ];

    public function validate()
    {
    }

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
