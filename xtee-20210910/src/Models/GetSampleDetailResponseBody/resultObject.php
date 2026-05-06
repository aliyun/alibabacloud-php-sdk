<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\GetSampleDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\GetSampleDetailResponseBody\resultObject\columnStats;
use AlibabaCloud\SDK\Xtee\V20210910\Models\GetSampleDetailResponseBody\resultObject\previewData;

class resultObject extends Model
{
    /**
     * @var columnStats[]
     */
    public $columnStats;

    /**
     * @var string
     */
    public $dateType;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var previewData
     */
    public $previewData;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var int
     */
    public $sampleId;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var string
     */
    public $uploadTime;

    /**
     * @var string
     */
    public $uploadUserName;
    protected $_name = [
        'columnStats' => 'ColumnStats',
        'dateType' => 'DateType',
        'downloadUrl' => 'DownloadUrl',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'previewData' => 'PreviewData',
        'remark' => 'Remark',
        'rowCount' => 'RowCount',
        'sampleId' => 'SampleId',
        'sampleName' => 'SampleName',
        'tab' => 'Tab',
        'uploadTime' => 'UploadTime',
        'uploadUserName' => 'UploadUserName',
    ];

    public function validate()
    {
        if (\is_array($this->columnStats)) {
            Model::validateArray($this->columnStats);
        }
        if (null !== $this->previewData) {
            $this->previewData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnStats) {
            if (\is_array($this->columnStats)) {
                $res['ColumnStats'] = [];
                $n1 = 0;
                foreach ($this->columnStats as $item1) {
                    $res['ColumnStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->previewData) {
            $res['PreviewData'] = null !== $this->previewData ? $this->previewData->toArray($noStream) : $this->previewData;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->sampleId) {
            $res['SampleId'] = $this->sampleId;
        }

        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        if (null !== $this->uploadUserName) {
            $res['UploadUserName'] = $this->uploadUserName;
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
        if (isset($map['ColumnStats'])) {
            if (!empty($map['ColumnStats'])) {
                $model->columnStats = [];
                $n1 = 0;
                foreach ($map['ColumnStats'] as $item1) {
                    $model->columnStats[$n1] = columnStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['PreviewData'])) {
            $model->previewData = previewData::fromMap($map['PreviewData']);
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        if (isset($map['SampleId'])) {
            $model->sampleId = $map['SampleId'];
        }

        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        if (isset($map['UploadUserName'])) {
            $model->uploadUserName = $map['UploadUserName'];
        }

        return $model;
    }
}
