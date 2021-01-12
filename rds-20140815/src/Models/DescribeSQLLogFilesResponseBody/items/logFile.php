<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class logFile extends Model
{
    /**
     * @var string
     */
    public $fileID;

    /**
     * @var string
     */
    public $logStatus;

    /**
     * @var string
     */
    public $logDownloadURL;

    /**
     * @var string
     */
    public $logSize;

    /**
     * @var string
     */
    public $logStartTime;

    /**
     * @var string
     */
    public $logEndTime;
    protected $_name = [
        'fileID'         => 'FileID',
        'logStatus'      => 'LogStatus',
        'logDownloadURL' => 'LogDownloadURL',
        'logSize'        => 'LogSize',
        'logStartTime'   => 'LogStartTime',
        'logEndTime'     => 'LogEndTime',
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
        if (null !== $this->logStatus) {
            $res['LogStatus'] = $this->logStatus;
        }
        if (null !== $this->logDownloadURL) {
            $res['LogDownloadURL'] = $this->logDownloadURL;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->logStartTime) {
            $res['LogStartTime'] = $this->logStartTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
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
        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }
        if (isset($map['LogDownloadURL'])) {
            $model->logDownloadURL = $map['LogDownloadURL'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['LogStartTime'])) {
            $model->logStartTime = $map['LogStartTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }

        return $model;
    }
}
