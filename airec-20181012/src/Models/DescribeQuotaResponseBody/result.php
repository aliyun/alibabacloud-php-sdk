<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $qps;

    /**
     * @var int
     */
    public $itemCount;

    /**
     * @var int
     */
    public $currentQps;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var int
     */
    public $userCountUsed;

    /**
     * @var int
     */
    public $itemCountUsed;
    protected $_name = [
        'qps'           => 'Qps',
        'itemCount'     => 'ItemCount',
        'currentQps'    => 'CurrentQps',
        'userCount'     => 'UserCount',
        'userCountUsed' => 'UserCountUsed',
        'itemCountUsed' => 'ItemCountUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->itemCount) {
            $res['ItemCount'] = $this->itemCount;
        }
        if (null !== $this->currentQps) {
            $res['CurrentQps'] = $this->currentQps;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->userCountUsed) {
            $res['UserCountUsed'] = $this->userCountUsed;
        }
        if (null !== $this->itemCountUsed) {
            $res['ItemCountUsed'] = $this->itemCountUsed;
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
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['ItemCount'])) {
            $model->itemCount = $map['ItemCount'];
        }
        if (isset($map['CurrentQps'])) {
            $model->currentQps = $map['CurrentQps'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['UserCountUsed'])) {
            $model->userCountUsed = $map['UserCountUsed'];
        }
        if (isset($map['ItemCountUsed'])) {
            $model->itemCountUsed = $map['ItemCountUsed'];
        }

        return $model;
    }
}
