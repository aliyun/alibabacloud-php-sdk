<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSQLLogTemplatesResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeSQLLogTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $itemsNumbers;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @var int
     */
    public $DBInstanceID;

    /**
     * @var int
     */
    public $totalRecords;

    /**
     * @var items
     */
    public $items;

    /**
     * @var int
     */
    public $pageNumbers;

    /**
     * @var string
     */
    public $finish;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $pagingID;
    protected $_name = [
        'itemsNumbers'      => 'ItemsNumbers',
        'endTime'           => 'EndTime',
        'requestId'         => 'RequestId',
        'startTime'         => 'StartTime',
        'maxRecordsPerPage' => 'MaxRecordsPerPage',
        'DBInstanceID'      => 'DBInstanceID',
        'totalRecords'      => 'TotalRecords',
        'items'             => 'Items',
        'pageNumbers'       => 'PageNumbers',
        'finish'            => 'Finish',
        'jobId'             => 'JobId',
        'DBInstanceName'    => 'DBInstanceName',
        'pagingID'          => 'PagingID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemsNumbers) {
            $res['ItemsNumbers'] = $this->itemsNumbers;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->pagingID) {
            $res['PagingID'] = $this->pagingID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLLogTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemsNumbers'])) {
            $model->itemsNumbers = $map['ItemsNumbers'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['PagingID'])) {
            $model->pagingID = $map['PagingID'];
        }

        return $model;
    }
}
