<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponse\liveAppRecordList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponse\liveAppRecordList\liveAppRecord\recordFormatList;
use AlibabaCloud\Tea\Model;

class liveAppRecord extends Model
{
    /**
     * @var string
     */
    public $domainName;

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
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $onDemond;

    /**
     * @var recordFormatList
     */
    public $recordFormatList;
    protected $_name = [
        'domainName'       => 'DomainName',
        'appName'          => 'AppName',
        'streamName'       => 'StreamName',
        'ossEndpoint'      => 'OssEndpoint',
        'ossBucket'        => 'OssBucket',
        'createTime'       => 'CreateTime',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'onDemond'         => 'OnDemond',
        'recordFormatList' => 'RecordFormatList',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('ossEndpoint', $this->ossEndpoint, true);
        Model::validateRequired('ossBucket', $this->ossBucket, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('onDemond', $this->onDemond, true);
        Model::validateRequired('recordFormatList', $this->recordFormatList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->onDemond) {
            $res['OnDemond'] = $this->onDemond;
        }
        if (null !== $this->recordFormatList) {
            $res['RecordFormatList'] = null !== $this->recordFormatList ? $this->recordFormatList->toMap() : null;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OnDemond'])) {
            $model->onDemond = $map['OnDemond'];
        }
        if (isset($map['RecordFormatList'])) {
            $model->recordFormatList = recordFormatList::fromMap($map['RecordFormatList']);
        }

        return $model;
    }
}
