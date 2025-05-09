<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsResponseBody\deductions;

class DescribePackageDeductionsResponseBody extends Model
{
    /**
     * @var deductions[]
     */
    public $deductions;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var float
     */
    public $totalUsedCoreTime;

    /**
     * @var int
     */
    public $totalUsedTime;
    protected $_name = [
        'deductions' => 'Deductions',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalUsedCoreTime' => 'TotalUsedCoreTime',
        'totalUsedTime' => 'TotalUsedTime',
    ];

    public function validate()
    {
        if (\is_array($this->deductions)) {
            Model::validateArray($this->deductions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deductions) {
            if (\is_array($this->deductions)) {
                $res['Deductions'] = [];
                $n1 = 0;
                foreach ($this->deductions as $item1) {
                    $res['Deductions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalUsedCoreTime) {
            $res['TotalUsedCoreTime'] = $this->totalUsedCoreTime;
        }

        if (null !== $this->totalUsedTime) {
            $res['TotalUsedTime'] = $this->totalUsedTime;
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
        if (isset($map['Deductions'])) {
            if (!empty($map['Deductions'])) {
                $model->deductions = [];
                $n1 = 0;
                foreach ($map['Deductions'] as $item1) {
                    $model->deductions[$n1++] = deductions::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalUsedCoreTime'])) {
            $model->totalUsedCoreTime = $map['TotalUsedCoreTime'];
        }

        if (isset($map['TotalUsedTime'])) {
            $model->totalUsedTime = $map['TotalUsedTime'];
        }

        return $model;
    }
}
