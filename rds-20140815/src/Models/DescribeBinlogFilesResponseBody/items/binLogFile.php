<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class binLogFile extends Model
{
    /**
     * @description The checksum. The value of this parameter is calculated by using the CRC64 algorithm.
     *
     * @example 18358304393468701857
     *
     * @var string
     */
    public $checksum;

    /**
     * @description The HTTP-based download URL of the log file. If the return value of this parameter is NULL, ApsaraDB RDS does not provide a download URL for the log file.
     *
     * @example http://rdsxxxxx.oss.aliyuncs.com/xxxxxx
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @description The size of the log file.
     *
     * Unit: bytes.
     * @example 2269410
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The ID of the instance to which the log file belongs. This parameter helps determine whether the log file is generated on the primary instance or the secondary instance.
     *
     * >  You can log on to the ApsaraDB RDS console and go to the instance details page. In the left-side navigation pane, click **Service Availability** to view the values of **Primary Instance No.** and **Secondary Instance No.**.
     * @example 5841973
     *
     * @var string
     */
    public $hostInstanceID;

    /**
     * @description The URL that is used to download files over an internal network.
     *
     * @example http://rdslog-hz-v3.oss-cn-hangzhou-internal.aliyuncs.com/xxxxxx
     *
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @description The expiration time of the URL.
     *
     * The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     * @example 2013-06-09T18:00:00Z
     *
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @description The beginning of the time range to query.
     *
     * The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     * @example 2019-02-09T17:45:21Z
     *
     * @var string
     */
    public $logBeginTime;

    /**
     * @description The end of the time range to query.
     *
     * The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     * @example 2019-02-15T13:10:28Z
     *
     * @var string
     */
    public $logEndTime;

    /**
     * @description The log file name.
     *
     * @example 000000040000000000000019
     *
     * @var string
     */
    public $logFileName;

    /**
     * @description The status of the log file that is stored in the Object Storage Service (OSS) bucket.
     *
     * Valid values:
     *
     *   **Uploading**
     *   **Completed**
     *
     * @example Completed
     *
     * @var string
     */
    public $remoteStatus;
    protected $_name = [
        'checksum'             => 'Checksum',
        'downloadLink'         => 'DownloadLink',
        'fileSize'             => 'FileSize',
        'hostInstanceID'       => 'HostInstanceID',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
        'logBeginTime'         => 'LogBeginTime',
        'logEndTime'           => 'LogEndTime',
        'logFileName'          => 'LogFileName',
        'remoteStatus'         => 'RemoteStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
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
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }
        if (null !== $this->remoteStatus) {
            $res['RemoteStatus'] = $this->remoteStatus;
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
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
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
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }
        if (isset($map['RemoteStatus'])) {
            $model->remoteStatus = $map['RemoteStatus'];
        }

        return $model;
    }
}
