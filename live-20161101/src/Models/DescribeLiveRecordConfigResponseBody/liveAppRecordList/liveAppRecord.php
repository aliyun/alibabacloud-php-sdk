<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord\recordFormatList;
use AlibabaCloud\Tea\Model;

class liveAppRecord extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $onDemond;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var recordFormatList
     */
    public $recordFormatList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'endTime'          => 'EndTime',
        'startTime'        => 'StartTime',
        'appName'          => 'AppName',
        'streamName'       => 'StreamName',
        'createTime'       => 'CreateTime',
        'onDemond'         => 'OnDemond',
        'ossBucket'        => 'OssBucket',
        'recordFormatList' => 'RecordFormatList',
        'domainName'       => 'DomainName',
        'ossEndpoint'      => 'OssEndpoint',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->onDemond) {
            $res['OnDemond'] = $this->onDemond;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->recordFormatList) {
            $res['RecordFormatList'] = null !== $this->recordFormatList ? $this->recordFormatList->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['OnDemond'])) {
            $model->onDemond = $map['OnDemond'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['RecordFormatList'])) {
            $model->recordFormatList = recordFormatList::fromMap($map['RecordFormatList']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
