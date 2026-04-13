<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBinlogFilesResponseBody\items;

use AlibabaCloud\Dara\Model;

class logFile extends Model
{
    /**
     * @var string
     */
    public $binLogId;

    /**
     * @var string
     */
    public $downloadLink;

    /**
     * @var string
     */
    public $dumpBucket;

    /**
     * @var string
     */
    public $dumpDownloadURL;

    /**
     * @var int
     */
    public $dumpState;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileSize;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $logBeginTime;

    /**
     * @var string
     */
    public $logEndTime;

    /**
     * @var string
     */
    public $logFileName;

    /**
     * @var string
     */
    public $logStatus;

    /**
     * @var string
     */
    public $OSSEndpoint;
    protected $_name = [
        'binLogId' => 'BinLogId',
        'downloadLink' => 'DownloadLink',
        'dumpBucket' => 'DumpBucket',
        'dumpDownloadURL' => 'DumpDownloadURL',
        'dumpState' => 'DumpState',
        'fileId' => 'FileId',
        'fileSize' => 'FileSize',
        'linkExpiredTime' => 'LinkExpiredTime',
        'logBeginTime' => 'LogBeginTime',
        'logEndTime' => 'LogEndTime',
        'logFileName' => 'LogFileName',
        'logStatus' => 'LogStatus',
        'OSSEndpoint' => 'OSSEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->binLogId) {
            $res['BinLogId'] = $this->binLogId;
        }

        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }

        if (null !== $this->dumpBucket) {
            $res['DumpBucket'] = $this->dumpBucket;
        }

        if (null !== $this->dumpDownloadURL) {
            $res['DumpDownloadURL'] = $this->dumpDownloadURL;
        }

        if (null !== $this->dumpState) {
            $res['DumpState'] = $this->dumpState;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }

        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }

        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }

        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }

        if (null !== $this->logStatus) {
            $res['LogStatus'] = $this->logStatus;
        }

        if (null !== $this->OSSEndpoint) {
            $res['OSSEndpoint'] = $this->OSSEndpoint;
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
        if (isset($map['BinLogId'])) {
            $model->binLogId = $map['BinLogId'];
        }

        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }

        if (isset($map['DumpBucket'])) {
            $model->dumpBucket = $map['DumpBucket'];
        }

        if (isset($map['DumpDownloadURL'])) {
            $model->dumpDownloadURL = $map['DumpDownloadURL'];
        }

        if (isset($map['DumpState'])) {
            $model->dumpState = $map['DumpState'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }

        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }

        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }

        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }

        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }

        if (isset($map['OSSEndpoint'])) {
            $model->OSSEndpoint = $map['OSSEndpoint'];
        }

        return $model;
    }
}
