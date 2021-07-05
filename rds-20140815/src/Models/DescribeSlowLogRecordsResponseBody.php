<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeSlowLogRecordsResponseBody extends Model
{
    /**
     * @var int
     */
    public $rowsAffectedCount;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var int
     */
    public $writesIOCount;

    /**
     * @var string
     */
    public $SQLHash;

    /**
     * @var int
     */
    public $logicalIORead;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $physicalIORead;

    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $CPUTime;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $lastRowsAffectedCount;

    /**
     * @var items
     */
    public $items;
    protected $_name = [
        'rowsAffectedCount'     => 'RowsAffectedCount',
        'pageRecordCount'       => 'PageRecordCount',
        'writesIOCount'         => 'WritesIOCount',
        'SQLHash'               => 'SQLHash',
        'logicalIORead'         => 'LogicalIORead',
        'requestId'             => 'RequestId',
        'physicalIORead'        => 'PhysicalIORead',
        'totalRecordCount'      => 'TotalRecordCount',
        'DBInstanceId'          => 'DBInstanceId',
        'engine'                => 'Engine',
        'pageNumber'            => 'PageNumber',
        'CPUTime'               => 'CPUTime',
        'userName'              => 'UserName',
        'lastRowsAffectedCount' => 'LastRowsAffectedCount',
        'items'                 => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowsAffectedCount) {
            $res['RowsAffectedCount'] = $this->rowsAffectedCount;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->writesIOCount) {
            $res['WritesIOCount'] = $this->writesIOCount;
        }
        if (null !== $this->SQLHash) {
            $res['SQLHash'] = $this->SQLHash;
        }
        if (null !== $this->logicalIORead) {
            $res['LogicalIORead'] = $this->logicalIORead;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->physicalIORead) {
            $res['PhysicalIORead'] = $this->physicalIORead;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->CPUTime) {
            $res['CPUTime'] = $this->CPUTime;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->lastRowsAffectedCount) {
            $res['LastRowsAffectedCount'] = $this->lastRowsAffectedCount;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowLogRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowsAffectedCount'])) {
            $model->rowsAffectedCount = $map['RowsAffectedCount'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['WritesIOCount'])) {
            $model->writesIOCount = $map['WritesIOCount'];
        }
        if (isset($map['SQLHash'])) {
            $model->SQLHash = $map['SQLHash'];
        }
        if (isset($map['LogicalIORead'])) {
            $model->logicalIORead = $map['LogicalIORead'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PhysicalIORead'])) {
            $model->physicalIORead = $map['PhysicalIORead'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['CPUTime'])) {
            $model->CPUTime = $map['CPUTime'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['LastRowsAffectedCount'])) {
            $model->lastRowsAffectedCount = $map['LastRowsAffectedCount'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}
