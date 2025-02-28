<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesResponseBody\items;

use AlibabaCloud\Dara\Model;

class binLogFile extends Model
{
    /**
     * @var string
     */
    public $downloadLink;
    /**
     * @var int
     */
    public $fileSize;
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
    public $logBeginTime;
    /**
     * @var string
     */
    public $logEndTime;
    protected $_name = [
        'downloadLink'         => 'DownloadLink',
        'fileSize'             => 'FileSize',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
        'logBeginTime'         => 'LogBeginTime',
        'logEndTime'           => 'LogEndTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
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

        return $model;
    }
}
