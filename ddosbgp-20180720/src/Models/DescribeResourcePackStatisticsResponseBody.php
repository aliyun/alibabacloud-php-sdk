<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcePackStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalInitCapacity;

    /**
     * @var int
     */
    public $totalCurrCapacity;

    /**
     * @var int
     */
    public $availablePackNum;

    /**
     * @var int
     */
    public $totalUsedCapacity;
    protected $_name = [
        'requestId'         => 'RequestId',
        'totalInitCapacity' => 'TotalInitCapacity',
        'totalCurrCapacity' => 'TotalCurrCapacity',
        'availablePackNum'  => 'AvailablePackNum',
        'totalUsedCapacity' => 'TotalUsedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalInitCapacity) {
            $res['TotalInitCapacity'] = $this->totalInitCapacity;
        }
        if (null !== $this->totalCurrCapacity) {
            $res['TotalCurrCapacity'] = $this->totalCurrCapacity;
        }
        if (null !== $this->availablePackNum) {
            $res['AvailablePackNum'] = $this->availablePackNum;
        }
        if (null !== $this->totalUsedCapacity) {
            $res['TotalUsedCapacity'] = $this->totalUsedCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePackStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalInitCapacity'])) {
            $model->totalInitCapacity = $map['TotalInitCapacity'];
        }
        if (isset($map['TotalCurrCapacity'])) {
            $model->totalCurrCapacity = $map['TotalCurrCapacity'];
        }
        if (isset($map['AvailablePackNum'])) {
            $model->availablePackNum = $map['AvailablePackNum'];
        }
        if (isset($map['TotalUsedCapacity'])) {
            $model->totalUsedCapacity = $map['TotalUsedCapacity'];
        }

        return $model;
    }
}
