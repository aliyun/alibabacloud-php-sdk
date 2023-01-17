<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainLogResponseBody\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Tea\Model;

class logInfoDetail extends Model
{
    /**
     * @example 1521975600
     *
     * @var string
     */
    public $endTime;

    /**
     * @example example.com_2018_03_25_180000_190000.gz
     *
     * @var string
     */
    public $logName;

    /**
     * @example cdnlog2.aliyuncs.com/example.com/2018_03_25/example.com_2018_03_25_180000_190000.gz?
     *
     * @var string
     */
    public $logPath;

    /**
     * @example 2645401
     *
     * @var int
     */
    public $logSize;

    /**
     * @example 1521972000
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
