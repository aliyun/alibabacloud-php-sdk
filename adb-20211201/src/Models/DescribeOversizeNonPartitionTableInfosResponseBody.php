<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeOversizeNonPartitionTableInfosResponseBody\detectionItems;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeOversizeNonPartitionTableInfosResponseBody\tables;

class DescribeOversizeNonPartitionTableInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var detectionItems[]
     */
    public $detectionItems;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var tables[]
     */
    public $tables;
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'DBClusterId'    => 'DBClusterId',
        'detectionItems' => 'DetectionItems',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'tables'         => 'Tables',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->detectionItems)) {
            Model::validateArray($this->detectionItems);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->detectionItems) {
            if (\is_array($this->detectionItems)) {
                $res['DetectionItems'] = [];
                $n1                    = 0;
                foreach ($this->detectionItems as $item1) {
                    $res['DetectionItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1            = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DetectionItems'])) {
            if (!empty($map['DetectionItems'])) {
                $model->detectionItems = [];
                $n1                    = 0;
                foreach ($map['DetectionItems'] as $item1) {
                    $model->detectionItems[$n1++] = detectionItems::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1            = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = tables::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
