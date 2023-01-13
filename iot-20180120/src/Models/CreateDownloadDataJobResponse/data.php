<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponse\data\header;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponse\data\querySetting;
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

    /**
     * @var header[]
     */
    public $header;

    /**
     * @var querySetting
     */
    public $querySetting;
    protected $_name = [
        'asyncExecute'       => 'AsyncExecute',
        'beginTime'          => 'BeginTime',
        'csvFileName'        => 'CsvFileName',
        'csvUrl'             => 'CsvUrl',
        'datasetId'          => 'DatasetId',
        'endTime'            => 'EndTime',
        'longJobId'          => 'LongJobId',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'previewSize'        => 'PreviewSize',
        'resultDataInString' => 'ResultDataInString',
        'status'             => 'Status',
        'totalCount'         => 'TotalCount',
        'header'             => 'Header',
        'querySetting'       => 'QuerySetting',
    ];

    public function validate()
    {
        Model::validateRequired('asyncExecute', $this->asyncExecute, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
        Model::validateRequired('csvFileName', $this->csvFileName, true);
        Model::validateRequired('csvUrl', $this->csvUrl, true);
        Model::validateRequired('datasetId', $this->datasetId, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('longJobId', $this->longJobId, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('previewSize', $this->previewSize, true);
        Model::validateRequired('resultDataInString', $this->resultDataInString, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('header', $this->header, true);
        Model::validateRequired('querySetting', $this->querySetting, true);
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
        if (null !== $this->resultDataInString) {
            $res['ResultDataInString'] = $this->resultDataInString;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (null !== $this->querySetting) {
            $res['QuerySetting'] = null !== $this->querySetting ? $this->querySetting->toMap() : null;
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
        if (isset($map['ResultDataInString'])) {
            $model->resultDataInString = $map['ResultDataInString'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['QuerySetting'])) {
            $model->querySetting = querySetting::fromMap($map['QuerySetting']);
        }

        return $model;
    }
}
