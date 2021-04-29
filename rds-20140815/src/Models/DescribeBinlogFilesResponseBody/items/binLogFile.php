<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class binLogFile extends Model
{
    /**
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @var string
     */
    public $logBeginTime;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $downloadLink;

    /**
     * @var string
     */
    public $logFileName;

    /**
     * @var string
     */
    public $checksum;

    /**
     * @var string
     */
    public $logEndTime;

    /**
     * @var string
     */
    public $hostInstanceID;

    /**
     * @var int
     */
    public $fileSize;
    protected $_name = [
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'logBeginTime'         => 'LogBeginTime',
        'linkExpiredTime'      => 'LinkExpiredTime',
        'downloadLink'         => 'DownloadLink',
        'logFileName'          => 'LogFileName',
        'checksum'             => 'Checksum',
        'logEndTime'           => 'LogEndTime',
        'hostInstanceID'       => 'HostInstanceID',
        'fileSize'             => 'FileSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }
        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return binLogFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }
        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        return $model;
    }
}
