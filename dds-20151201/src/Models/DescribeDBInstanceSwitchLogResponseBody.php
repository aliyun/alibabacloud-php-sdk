<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSwitchLogResponseBody\logItems;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSwitchLogResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example dds-uf68f1b5a57exxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The primary/secondary switchover logs.
     *
     * @var logItems[]
     */
    public $logItems;

    /**
     * @description The page number returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example ECBCA991-XXXX-XXXX-834C-B3E8007F33AA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of primary/secondary switching entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'logItems'     => 'LogItems',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->logItems) {
            $res['LogItems'] = [];
            if (null !== $this->logItems && \is_array($this->logItems)) {
                $n = 0;
                foreach ($this->logItems as $item) {
                    $res['LogItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSwitchLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['LogItems'])) {
            if (!empty($map['LogItems'])) {
                $model->logItems = [];
                $n               = 0;
                foreach ($map['LogItems'] as $item) {
                    $model->logItems[$n++] = null !== $item ? logItems::fromMap($item) : $item;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
