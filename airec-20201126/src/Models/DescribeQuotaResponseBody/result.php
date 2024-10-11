<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The current QPS.
     *
     * @example 8
     *
     * @var int
     */
    public $currentQps;

    /**
     * @description The number of documents in the item table. Valid values:
     *
     * 1000000 to 10000000.
     * @example 1000000
     *
     * @var int
     */
    public $itemCount;

    /**
     * @description The number of items that are used in the item table.
     *
     * @example 100
     *
     * @var int
     */
    public $itemCountUsed;

    /**
     * @description The queries per second (QPS). Valid values:
     *
     * 10 to 500.
     * @example 10
     *
     * @var int
     */
    public $qps;

    /**
     * @description The number of documents in the user table. Valid values:
     *
     * 1000000 to 10000000.
     * @example 1000000
     *
     * @var int
     */
    public $userCount;

    /**
     * @description The number of users that are used in the user table.
     *
     * @example 100
     *
     * @var int
     */
    public $userCountUsed;
    protected $_name = [
        'currentQps'    => 'currentQps',
        'itemCount'     => 'itemCount',
        'itemCountUsed' => 'itemCountUsed',
        'qps'           => 'qps',
        'userCount'     => 'userCount',
        'userCountUsed' => 'userCountUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentQps) {
            $res['currentQps'] = $this->currentQps;
        }
        if (null !== $this->itemCount) {
            $res['itemCount'] = $this->itemCount;
        }
        if (null !== $this->itemCountUsed) {
            $res['itemCountUsed'] = $this->itemCountUsed;
        }
        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
        }
        if (null !== $this->userCount) {
            $res['userCount'] = $this->userCount;
        }
        if (null !== $this->userCountUsed) {
            $res['userCountUsed'] = $this->userCountUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentQps'])) {
            $model->currentQps = $map['currentQps'];
        }
        if (isset($map['itemCount'])) {
            $model->itemCount = $map['itemCount'];
        }
        if (isset($map['itemCountUsed'])) {
            $model->itemCountUsed = $map['itemCountUsed'];
        }
        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }
        if (isset($map['userCount'])) {
            $model->userCount = $map['userCount'];
        }
        if (isset($map['userCountUsed'])) {
            $model->userCountUsed = $map['userCountUsed'];
        }

        return $model;
    }
}
