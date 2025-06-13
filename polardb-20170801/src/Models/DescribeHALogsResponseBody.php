<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeHALogsResponseBody\haLogItems;

class DescribeHALogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var haLogItems[]
     */
    public $haLogItems;

    /**
     * @var int
     */
    public $haStatus;

    /**
     * @var int
     */
    public $itemsNumbers;

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
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'DBInstanceType' => 'DBInstanceType',
        'haLogItems' => 'HaLogItems',
        'haStatus' => 'HaStatus',
        'itemsNumbers' => 'ItemsNumbers',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalRecords' => 'TotalRecords',
    ];

    public function validate()
    {
        if (\is_array($this->haLogItems)) {
            Model::validateArray($this->haLogItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }

        if (null !== $this->haLogItems) {
            if (\is_array($this->haLogItems)) {
                $res['HaLogItems'] = [];
                $n1 = 0;
                foreach ($this->haLogItems as $item1) {
                    $res['HaLogItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->haStatus) {
            $res['HaStatus'] = $this->haStatus;
        }

        if (null !== $this->itemsNumbers) {
            $res['ItemsNumbers'] = $this->itemsNumbers;
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

        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }

        if (isset($map['HaLogItems'])) {
            if (!empty($map['HaLogItems'])) {
                $model->haLogItems = [];
                $n1 = 0;
                foreach ($map['HaLogItems'] as $item1) {
                    $model->haLogItems[$n1] = haLogItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HaStatus'])) {
            $model->haStatus = $map['HaStatus'];
        }

        if (isset($map['ItemsNumbers'])) {
            $model->itemsNumbers = $map['ItemsNumbers'];
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

        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }

        return $model;
    }
}
