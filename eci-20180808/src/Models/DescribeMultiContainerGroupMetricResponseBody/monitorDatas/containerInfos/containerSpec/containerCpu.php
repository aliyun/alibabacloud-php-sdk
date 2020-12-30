<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerSpec;

use AlibabaCloud\Tea\Model;

class containerCpu extends Model
{
    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $maxLimit;

    /**
     * @var int
     */
    public $period;
    protected $_name = [
        'quota'    => 'Quota',
        'mask'     => 'Mask',
        'limit'    => 'Limit',
        'maxLimit' => 'MaxLimit',
        'period'   => 'Period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->maxLimit) {
            $res['MaxLimit'] = $this->maxLimit;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerCpu
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['MaxLimit'])) {
            $model->maxLimit = $map['MaxLimit'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
