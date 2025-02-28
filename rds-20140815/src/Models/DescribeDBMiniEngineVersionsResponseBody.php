<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBMiniEngineVersionsResponseBody\minorVersionItems;

class DescribeDBMiniEngineVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var int
     */
    public $maxRecordsPerPage;
    /**
     * @var minorVersionItems[]
     */
    public $minorVersionItems;
    /**
     * @var int
     */
    public $pageNumbers;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'minorVersionItems' => 'MinorVersionItems',
        'pageNumbers'       => 'PageNumbers',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->minorVersionItems)) {
            Model::validateArray($this->minorVersionItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }

        if (null !== $this->minorVersionItems) {
            if (\is_array($this->minorVersionItems)) {
                $res['MinorVersionItems'] = [];
                $n1                       = 0;
                foreach ($this->minorVersionItems as $item1) {
                    $res['MinorVersionItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }

        if (isset($map['MinorVersionItems'])) {
            if (!empty($map['MinorVersionItems'])) {
                $model->minorVersionItems = [];
                $n1                       = 0;
                foreach ($map['MinorVersionItems'] as $item1) {
                    $model->minorVersionItems[$n1++] = minorVersionItems::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
