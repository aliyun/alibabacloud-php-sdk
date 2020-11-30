<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcePackStatisticsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $availablePackNum;

    /**
     * @var int
     */
    public $totalCurrCapacity;

    /**
     * @var int
     */
    public $totalUsedCapacity;

    /**
     * @var int
     */
    public $totalInitCapacity;
    protected $_name = [
        'requestId'         => 'RequestId',
        'availablePackNum'  => 'AvailablePackNum',
        'totalCurrCapacity' => 'TotalCurrCapacity',
        'totalUsedCapacity' => 'TotalUsedCapacity',
        'totalInitCapacity' => 'TotalInitCapacity',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('availablePackNum', $this->availablePackNum, true);
        Model::validateRequired('totalCurrCapacity', $this->totalCurrCapacity, true);
        Model::validateRequired('totalUsedCapacity', $this->totalUsedCapacity, true);
        Model::validateRequired('totalInitCapacity', $this->totalInitCapacity, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->availablePackNum) {
            $res['AvailablePackNum'] = $this->availablePackNum;
        }
        if (null !== $this->totalCurrCapacity) {
            $res['TotalCurrCapacity'] = $this->totalCurrCapacity;
        }
        if (null !== $this->totalUsedCapacity) {
            $res['TotalUsedCapacity'] = $this->totalUsedCapacity;
        }
        if (null !== $this->totalInitCapacity) {
            $res['TotalInitCapacity'] = $this->totalInitCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePackStatisticsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AvailablePackNum'])) {
            $model->availablePackNum = $map['AvailablePackNum'];
        }
        if (isset($map['TotalCurrCapacity'])) {
            $model->totalCurrCapacity = $map['TotalCurrCapacity'];
        }
        if (isset($map['TotalUsedCapacity'])) {
            $model->totalUsedCapacity = $map['TotalUsedCapacity'];
        }
        if (isset($map['TotalInitCapacity'])) {
            $model->totalInitCapacity = $map['TotalInitCapacity'];
        }

        return $model;
    }
}
