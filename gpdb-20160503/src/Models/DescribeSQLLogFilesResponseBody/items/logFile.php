<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class logFile extends Model
{
    /**
     * @example 1023423423
     *
     * @var string
     */
    public $fileID;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $logDownloadURL;

    /**
     * @example 2019-02-24T14:10Z
     *
     * @var string
     */
    public $logEndTime;

    /**
     * @example 100210
     *
     * @var string
     */
    public $logSize;

    /**
     * @example 2019-02-24T12:10Z
     *
     * @var string
     */
    public $logStartTime;

    /**
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
