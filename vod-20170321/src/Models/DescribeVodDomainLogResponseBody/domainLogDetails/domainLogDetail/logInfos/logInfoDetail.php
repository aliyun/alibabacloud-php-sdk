<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Tea\Model;

class logInfoDetail extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @example 2018-05-31T05:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Queries the information about the raw access logs for a specific domain name, including the log path.
     *
     * @example example.com_2018_03_25_180000_19****.gz
     *
     * @var string
     */
    public $logName;

    /**
     * @example example.com/2018_03_25/example.com_2018_03_25_180000_19****.gz?Expires=1522659931&OSSAccessKeyId=****&Signature=****
     *
     * @var string
     */
    public $logPath;

    /**
     * @description The ID of the request.
     *
     * @example 2645401
     *
     * @var int
     */
    public $logSize;

    /**
     * @description The pagination settings of Alibaba Cloud CDN logs.
     *
     * @example 2018-05-31T04:00:00Z
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
