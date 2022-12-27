<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponseBody\domainLogDetails;

use AlibabaCloud\Tea\Model;

class logInfos extends Model
{
    /**
     * @example 2015-05-23T14:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example demo.aliyundoc.com_2015_05_23_2100_2200.xxxxxx.gz
     *
     * @var string
     */
    public $logName;

    /**
     * @example guide.aliyundoc.com-hangzhou.xxx
     *
     * @var string
     */
    public $logPath;

    /**
     * @example 258
     *
     * @var int
     */
    public $logSize;

    /**
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
