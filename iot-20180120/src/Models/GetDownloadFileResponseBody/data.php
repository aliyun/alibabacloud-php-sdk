<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody\data\header;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody\data\querySetting;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $asyncExecute;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $csvFileName;

    /**
     * @var string
     */
    public $csvUrl;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var header[]
     */
    public $header;

    /**
     * @var string
     */
    public $longJobId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $previewSize;

    /**
     * @var querySetting
     */
    public $querySetting;

    /**
     * @var mixed[][]
     */
    public $result;

    /**
     * @var string
     */
    public $resultDataInString;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'asyncExecute'       => 'AsyncExecute',
        'beginTime'          => 'BeginTime',
        'csvFileName'        => 'CsvFileName',
        'csvUrl'             => 'CsvUrl',
        'datasetId'          => 'DatasetId',
        'endTime'            => 'EndTime',
        'header'             => 'Header',
        'longJobId'          => 'LongJobId',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'previewSize'        => 'PreviewSize',
        'querySetting'       => 'QuerySetting',
        'result'             => 'Result',
        'resultDataInString' => 'ResultDataInString',
        'status'             => 'Status',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncExecute) {
            $res['AsyncExecute'] = $this->asyncExecute;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->csvFileName) {
            $res['CsvFileName'] = $this->csvFileName;
        }
        if (null !== $this->csvUrl) {
            $res['CsvUrl'] = $this->csvUrl;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->header) {
            $res['Header'] = [];
            if (null !== $this->header && \is_array($this->header)) {
                $n = 0;
                foreach ($this->header as $item) {
                    $res['Header'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->longJobId) {
            $res['LongJobId'] = $this->longJobId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->previewSize) {
            $res['PreviewSize'] = $this->previewSize;
        }
        if (null !== $this->querySetting) {
            $res['QuerySetting'] = null !== $this->querySetting ? $this->querySetting->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->resultDataInString) {
            $res['ResultDataInString'] = $this->resultDataInString;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncExecute'])) {
            $model->asyncExecute = $map['AsyncExecute'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CsvFileName'])) {
            $model->csvFileName = $map['CsvFileName'];
        }
        if (isset($map['CsvUrl'])) {
            $model->csvUrl = $map['CsvUrl'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Header'])) {
            if (!empty($map['Header'])) {
                $model->header = [];
                $n             = 0;
                foreach ($map['Header'] as $item) {
                    $model->header[$n++] = null !== $item ? header::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LongJobId'])) {
            $model->longJobId = $map['LongJobId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PreviewSize'])) {
            $model->previewSize = $map['PreviewSize'];
        }
        if (isset($map['QuerySetting'])) {
            $model->querySetting = querySetting::fromMap($map['QuerySetting']);
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = $map['Result'];
            }
        }
        if (isset($map['ResultDataInString'])) {
            $model->resultDataInString = $map['ResultDataInString'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
