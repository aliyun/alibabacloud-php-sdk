<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogDownloadLinksResponseBody;

use AlibabaCloud\Dara\Model;

class backupLogDownloadLinkItem extends Model
{
    /**
     * @var string
     */
    public $backupLogId;

    /**
     * @var string
     */
    public $downloadLink;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'backupLogId' => 'BackupLogId',
        'downloadLink' => 'DownloadLink',
        'errorCode' => 'ErrorCode',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime' => 'LinkExpiredTime',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupLogId) {
            $res['BackupLogId'] = $this->backupLogId;
        }

        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }

        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['BackupLogId'])) {
            $model->backupLogId = $map['BackupLogId'];
        }

        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }

        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
