<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListResponseBody\items;

use AlibabaCloud\Tea\Model;

class backupSetDownloadTaskDetail extends Model
{
    /**
     * @var string
     */
    public $backupSetDownloadStatus;

    /**
     * @var int
     */
    public $backupSetDataSize;

    /**
     * @var string
     */
    public $backupSetDownloadDir;

    /**
     * @var string
     */
    public $backupSetDownloadTargetType;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var int
     */
    public $backupSetDownloadCreateTime;

    /**
     * @var string
     */
    public $backupSetDbType;

    /**
     * @var string
     */
    public $backupSetDownloadInternetUrl;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $backupSetDownloadIntranetUrl;

    /**
     * @var string
     */
    public $backupSetDownloadWay;

    /**
     * @var int
     */
    public $backupSetDownloadFinishTime;

    /**
     * @var string
     */
    public $backupSetJobType;

    /**
     * @var string
     */
    public $backupSetDownloadTaskId;

    /**
     * @var string
     */
    public $backupSetDownloadTaskName;

    /**
     * @var string
     */
    public $backupSetDataFormat;

    /**
     * @var string
     */
    public $backupSetCode;
    protected $_name = [
        'backupSetDownloadStatus'      => 'BackupSetDownloadStatus',
        'backupSetDataSize'            => 'BackupSetDataSize',
        'backupSetDownloadDir'         => 'BackupSetDownloadDir',
        'backupSetDownloadTargetType'  => 'BackupSetDownloadTargetType',
        'errMessage'                   => 'ErrMessage',
        'backupPlanId'                 => 'BackupPlanId',
        'backupSetDownloadCreateTime'  => 'BackupSetDownloadCreateTime',
        'backupSetDbType'              => 'BackupSetDbType',
        'backupSetDownloadInternetUrl' => 'BackupSetDownloadInternetUrl',
        'backupSetId'                  => 'BackupSetId',
        'backupGatewayId'              => 'BackupGatewayId',
        'backupSetDownloadIntranetUrl' => 'BackupSetDownloadIntranetUrl',
        'backupSetDownloadWay'         => 'BackupSetDownloadWay',
        'backupSetDownloadFinishTime'  => 'BackupSetDownloadFinishTime',
        'backupSetJobType'             => 'BackupSetJobType',
        'backupSetDownloadTaskId'      => 'BackupSetDownloadTaskId',
        'backupSetDownloadTaskName'    => 'BackupSetDownloadTaskName',
        'backupSetDataFormat'          => 'BackupSetDataFormat',
        'backupSetCode'                => 'BackupSetCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetDownloadStatus) {
            $res['BackupSetDownloadStatus'] = $this->backupSetDownloadStatus;
        }
        if (null !== $this->backupSetDataSize) {
            $res['BackupSetDataSize'] = $this->backupSetDataSize;
        }
        if (null !== $this->backupSetDownloadDir) {
            $res['BackupSetDownloadDir'] = $this->backupSetDownloadDir;
        }
        if (null !== $this->backupSetDownloadTargetType) {
            $res['BackupSetDownloadTargetType'] = $this->backupSetDownloadTargetType;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupSetDownloadCreateTime) {
            $res['BackupSetDownloadCreateTime'] = $this->backupSetDownloadCreateTime;
        }
        if (null !== $this->backupSetDbType) {
            $res['BackupSetDbType'] = $this->backupSetDbType;
        }
        if (null !== $this->backupSetDownloadInternetUrl) {
            $res['BackupSetDownloadInternetUrl'] = $this->backupSetDownloadInternetUrl;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->backupSetDownloadIntranetUrl) {
            $res['BackupSetDownloadIntranetUrl'] = $this->backupSetDownloadIntranetUrl;
        }
        if (null !== $this->backupSetDownloadWay) {
            $res['BackupSetDownloadWay'] = $this->backupSetDownloadWay;
        }
        if (null !== $this->backupSetDownloadFinishTime) {
            $res['BackupSetDownloadFinishTime'] = $this->backupSetDownloadFinishTime;
        }
        if (null !== $this->backupSetJobType) {
            $res['BackupSetJobType'] = $this->backupSetJobType;
        }
        if (null !== $this->backupSetDownloadTaskId) {
            $res['BackupSetDownloadTaskId'] = $this->backupSetDownloadTaskId;
        }
        if (null !== $this->backupSetDownloadTaskName) {
            $res['BackupSetDownloadTaskName'] = $this->backupSetDownloadTaskName;
        }
        if (null !== $this->backupSetDataFormat) {
            $res['BackupSetDataFormat'] = $this->backupSetDataFormat;
        }
        if (null !== $this->backupSetCode) {
            $res['BackupSetCode'] = $this->backupSetCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupSetDownloadTaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetDownloadStatus'])) {
            $model->backupSetDownloadStatus = $map['BackupSetDownloadStatus'];
        }
        if (isset($map['BackupSetDataSize'])) {
            $model->backupSetDataSize = $map['BackupSetDataSize'];
        }
        if (isset($map['BackupSetDownloadDir'])) {
            $model->backupSetDownloadDir = $map['BackupSetDownloadDir'];
        }
        if (isset($map['BackupSetDownloadTargetType'])) {
            $model->backupSetDownloadTargetType = $map['BackupSetDownloadTargetType'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupSetDownloadCreateTime'])) {
            $model->backupSetDownloadCreateTime = $map['BackupSetDownloadCreateTime'];
        }
        if (isset($map['BackupSetDbType'])) {
            $model->backupSetDbType = $map['BackupSetDbType'];
        }
        if (isset($map['BackupSetDownloadInternetUrl'])) {
            $model->backupSetDownloadInternetUrl = $map['BackupSetDownloadInternetUrl'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['BackupSetDownloadIntranetUrl'])) {
            $model->backupSetDownloadIntranetUrl = $map['BackupSetDownloadIntranetUrl'];
        }
        if (isset($map['BackupSetDownloadWay'])) {
            $model->backupSetDownloadWay = $map['BackupSetDownloadWay'];
        }
        if (isset($map['BackupSetDownloadFinishTime'])) {
            $model->backupSetDownloadFinishTime = $map['BackupSetDownloadFinishTime'];
        }
        if (isset($map['BackupSetJobType'])) {
            $model->backupSetJobType = $map['BackupSetJobType'];
        }
        if (isset($map['BackupSetDownloadTaskId'])) {
            $model->backupSetDownloadTaskId = $map['BackupSetDownloadTaskId'];
        }
        if (isset($map['BackupSetDownloadTaskName'])) {
            $model->backupSetDownloadTaskName = $map['BackupSetDownloadTaskName'];
        }
        if (isset($map['BackupSetDataFormat'])) {
            $model->backupSetDataFormat = $map['BackupSetDataFormat'];
        }
        if (isset($map['BackupSetCode'])) {
            $model->backupSetCode = $map['BackupSetCode'];
        }

        return $model;
    }
}
