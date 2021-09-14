<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeListUserBackupFileRecordResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ossFilePath;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var int
     */
    public $ossFileSize;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $binlogInfo;

    /**
     * @var string
     */
    public $custinsId;

    /**
     * @var string
     */
    public $ossFileMetaData;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'status'          => 'Status',
        'ossFilePath'     => 'OssFilePath',
        'ossBucket'       => 'OssBucket',
        'gmtModified'     => 'GmtModified',
        'bid'             => 'Bid',
        'engineVersion'   => 'EngineVersion',
        'ossFileName'     => 'OssFileName',
        'ossFileSize'     => 'OssFileSize',
        'gmtCreated'      => 'GmtCreated',
        'backupSetId'     => 'BackupSetId',
        'instanceName'    => 'InstanceName',
        'dbInstanceName'  => 'DbInstanceName',
        'engine'          => 'Engine',
        'binlogInfo'      => 'BinlogInfo',
        'custinsId'       => 'CustinsId',
        'ossFileMetaData' => 'OssFileMetaData',
        'ossUrl'          => 'OssUrl',
        'taskId'          => 'TaskId',
        'id'              => 'Id',
        'reason'          => 'Reason',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }
        if (null !== $this->ossFileSize) {
            $res['OssFileSize'] = $this->ossFileSize;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->binlogInfo) {
            $res['BinlogInfo'] = $this->binlogInfo;
        }
        if (null !== $this->custinsId) {
            $res['CustinsId'] = $this->custinsId;
        }
        if (null !== $this->ossFileMetaData) {
            $res['OssFileMetaData'] = $this->ossFileMetaData;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }
        if (isset($map['OssFileSize'])) {
            $model->ossFileSize = $map['OssFileSize'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['BinlogInfo'])) {
            $model->binlogInfo = $map['BinlogInfo'];
        }
        if (isset($map['CustinsId'])) {
            $model->custinsId = $map['CustinsId'];
        }
        if (isset($map['OssFileMetaData'])) {
            $model->ossFileMetaData = $map['OssFileMetaData'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
