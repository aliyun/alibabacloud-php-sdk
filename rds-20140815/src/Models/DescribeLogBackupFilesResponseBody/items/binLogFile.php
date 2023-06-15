<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class binLogFile extends Model
{
    /**
     * @description The HTTP-based download URL of the log file. If the log file cannot be downloaded, an empty string is returned.
     *
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @description The size of the log file. Unit: bytes.
     *
     * @example 788480
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The URL that is used to download the log file over an internal network. If the log file cannot be downloaded, an empty string is returned. This URL is valid for one hour.
     *
     * @example http://rdsbak-hz-v3.oss-cn-hangzhou.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @description The expiration time of the URL. The time follows the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-01T15:04:13Z
     *
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @description The start time of the log file. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2018-10-31T08:40Z
     *
     * @var string
     */
    public $logBeginTime;

    /**
     * @description The end time of the log file. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2018-10-31T08:40Z
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return binLogFile
     */
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
