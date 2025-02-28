<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponseBody\items;

use AlibabaCloud\Dara\Model;

class logFile extends Model
{
    /**
     * @var string
     */
    public $fileID;
    /**
     * @var string
     */
    public $logDownloadURL;
    /**
     * @var string
     */
    public $logEndTime;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
