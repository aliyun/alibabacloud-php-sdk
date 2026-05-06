<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\SearchSampleResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

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
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
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
