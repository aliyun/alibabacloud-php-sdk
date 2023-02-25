<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails;

use AlibabaCloud\Tea\Model;

class logInfos extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2015-05-23T14:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the log file.
     *
     * @example demo.aliyundoc.com_2015_05_23_2100_2200.xxxxxx.gz
     *
     * @var string
     */
    public $logName;

    /**
     * @description The path of the log file.
     *
     * @example guide.aliyundoc.com-hangzhou.xxx
     *
     * @var string
     */
    public $logPath;

    /**
     * @description The size of the log file. Unit: bytes.
     *
     * @example 258
     *
     * @var int
     */
    public $logSize;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2015-05-23T13:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'logName'   => 'LogName',
        'logPath'   => 'LogPath',
        'logSize'   => 'LogSize',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

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
     * @return logInfos
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
