<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogExTtlResponseBody\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Dara\Model;

class logInfoDetail extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $logName;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var int
     */
    public $logSize;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
