<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class logFile extends Model
{
    /**
     * @description The file name.
     *
     * @example custinsxxxxx.csv
     *
     * @var string
     */
    public $fileID;

    /**
     * @description The download URL of the file. If the audit log file cannot be downloaded, this parameter is null.
     *
     * @example http://rdslog-hz-v3.oss-cn-hangzhou.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $logDownloadURL;

    /**
     * @description The time at which the last SQL statement recorded in the audit log file was executed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-05-24T07:00:00Z
     *
     * @var string
     */
    public $logEndTime;

    /**
     * @description The size of the audit log file. Unit: bytes.
     *
     * @example 3000
     *
     * @var string
     */
    public $logSize;

    /**
     * @description The time at which the first SQL statement recorded in the audit log file was executed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-05-23T07:00:00Z
     *
     * @var string
     */
    public $logStartTime;

    /**
     * @description The status of the audit log file. Valid values:
     *
     *   **Success**
     *   **Failed**
     *   **Generating**
     *
     * @example Success
     *
     * @var string
     */
    public $logStatus;
    protected $_name = [
        'fileID'         => 'FileID',
        'logDownloadURL' => 'LogDownloadURL',
        'logEndTime'     => 'LogEndTime',
        'logSize'        => 'LogSize',
        'logStartTime'   => 'LogStartTime',
        'logStatus'      => 'LogStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileID) {
            $res['FileID'] = $this->fileID;
        }
        if (null !== $this->logDownloadURL) {
            $res['LogDownloadURL'] = $this->logDownloadURL;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->logStartTime) {
            $res['LogStartTime'] = $this->logStartTime;
        }
        if (null !== $this->logStatus) {
            $res['LogStatus'] = $this->logStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileID'])) {
            $model->fileID = $map['FileID'];
        }
        if (isset($map['LogDownloadURL'])) {
            $model->logDownloadURL = $map['LogDownloadURL'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['LogStartTime'])) {
            $model->logStartTime = $map['LogStartTime'];
        }
        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }

        return $model;
    }
}
