<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePushProxyLogResponseBody\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Tea\Model;

class logInfoDetail extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * The value is a UNIX timestamp.
     *
     * @example 1695189600
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the log file.
     *
     * @example example.com
     * _2023_09_20_160000_170000.****.gz
     *
     * @var string
     */
    public $logName;

    /**
     * @description The path of the log file.
     *
     * @var string
     */
    public $logPath;

    /**
     * @description The size of the log file.
     *
     * @example 512
     *
     * @var int
     */
    public $logSize;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * The value is a UNIX timestamp.
     *
     * @example 1695193200
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'logName' => 'LogName',
        'logPath' => 'LogPath',
        'logSize' => 'LogSize',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfoDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
