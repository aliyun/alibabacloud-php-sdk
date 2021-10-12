<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBinaryLogListResponseBody;

use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $uploadHost;

    /**
     * @var int
     */
    public $uploadStatus;

    /**
     * @var string
     */
    public $downloadLink;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $purgeStatus;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'endTime'      => 'EndTime',
        'modifiedTime' => 'ModifiedTime',
        'uploadHost'   => 'UploadHost',
        'uploadStatus' => 'UploadStatus',
        'downloadLink' => 'DownloadLink',
        'beginTime'    => 'BeginTime',
        'logSize'      => 'LogSize',
        'fileName'     => 'FileName',
        'createdTime'  => 'CreatedTime',
        'purgeStatus'  => 'PurgeStatus',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->uploadHost) {
            $res['UploadHost'] = $this->uploadHost;
        }
        if (null !== $this->uploadStatus) {
            $res['UploadStatus'] = $this->uploadStatus;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->purgeStatus) {
            $res['PurgeStatus'] = $this->purgeStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['UploadHost'])) {
            $model->uploadHost = $map['UploadHost'];
        }
        if (isset($map['UploadStatus'])) {
            $model->uploadStatus = $map['UploadStatus'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['PurgeStatus'])) {
            $model->purgeStatus = $map['PurgeStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
