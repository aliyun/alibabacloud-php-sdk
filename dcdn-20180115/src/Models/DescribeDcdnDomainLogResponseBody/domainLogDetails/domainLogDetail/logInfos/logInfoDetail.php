<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogResponseBody\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Tea\Model;

class logInfoDetail extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2021-11-07T18:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the log file.
     *
     * @example example.com_2021_11_08_010000_020000.gz
     *
     * @var string
     */
    public $logName;

    /**
     * @description The path of the log file.
     *
     * Take note of the Expires field (expiration timestamp) in the response parameter LogPath. If the log download URL expires, you must obtain it again. For more information, see [LogPath field](~~31952~~).
     * @example example.aliyundoc.com /v1.l1cache/105252530/example.com/2021_11_08/example.com_2021_11_08_010000_020000.gz?Expires=1636963354&OSSAccessKeyId=LTAIviCc6zy8****&Signature=u0V6foRfZniHE8i%2BHUdxGOhZsK****
     *
     * @var string
     */
    public $logPath;

    /**
     * @description The size of the log file. Unit: bytes.
     *
     * @example 192
     *
     * @var int
     */
    public $logSize;

    /**
     * @description The start of the time range during which data was queried.
     *
     * @example 2021-11-07T17:00:00Z
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
