<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigResponseBody\liveAppRecordList;

use AlibabaCloud\Tea\Model;

class liveAppRecord extends Model
{
    /**
     * @example xxxApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2016-05-15T07:30:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example http://test
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @example 2016-05-15T01:30:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example xxxStream
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName'    => 'AppName',
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'sourceUrl'  => 'SourceUrl',
        'startTime'  => 'StartTime',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAppRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
