<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLogResponseBody\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Tea\Model;

class logInfoDetail extends Model
{
    /**
     * @description The end of the time range for which the logs were queried.
     *
     * @example 2016-10-20T05:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the log file.
     *
     * @example developer.aliyundoc.com_2016_10_20_040000_050000.gz
     *
     * @var string
     */
    public $logName;

    /**
     * @description The path of the log file.
     *
     * @example learn.aliyundoc.com/developer.aliyundoc.com/2016_10_20/example.aliyundoc.com_2016_10_20_040000_050000.gz?Expires=1522659931&amp;OSSAccessKeyId=LTAI******eo4ZEuA&amp;Signature=C01p%2BtA%******KP9Sru2Oxwy7Do0%3D
     *
     * @var string
     */
    public $logPath;

    /**
     * @description The size of the log file.
     *
     * @example 10
     *
     * @var int
     */
    public $logSize;

    /**
     * @description The beginning of the time range for which the logs were queried.
     *
     * @example 2016-10-20T04:00:00Z
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
