<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAuditFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class logFile extends Model
{
    /**
     * @var int
     */
    public $fileID;

    /**
     * @var string
     */
    public $logStartTime;

    /**
     * @var int
     */
    public $logSize;

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
    public $logStatus;
    protected $_name = [
        'fileID'         => 'FileID',
        'logStartTime'   => 'LogStartTime',
        'logSize'        => 'LogSize',
        'logDownloadURL' => 'LogDownloadURL',
        'logEndTime'     => 'LogEndTime',
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
        if (null !== $this->logStartTime) {
            $res['LogStartTime'] = $this->logStartTime;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->logDownloadURL) {
            $res['LogDownloadURL'] = $this->logDownloadURL;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
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
        if (isset($map['LogStartTime'])) {
            $model->logStartTime = $map['LogStartTime'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['LogDownloadURL'])) {
            $model->logDownloadURL = $map['LogDownloadURL'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }

        return $model;
    }
}
