<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody\liveStreamSnapshotConfigList;

use AlibabaCloud\Tea\Model;

class liveStreamSnapshotConfig extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The callback URL that is used to receive notifications about snapshot capture.
     *
     * @example https://learn.aliyundoc.com
     *
     * @var string
     */
    public $callback;

    /**
     * @description The time when the configuration was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-05-20T01:33:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The name of the Object Storage Service (OSS) bucket.
     *
     * @example liveBucket****
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The endpoint of the OSS bucket.
     *
     * @example cn-oss-****.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description The naming format of snapshots that are stored in the overwrite mode, which means that a new snapshot overwrites the previous snapshot.
     *
     * @example {liveApp****}/{liveStream****}.jpg
     *
     * @var string
     */
    public $overwriteOssObject;

    /**
     * @description The naming format of snapshots that are stored in sequence, which means that a new snapshot does not overwrite the previous snapshot.
     *
     * @example snapshot/{liveApp****}/{liveStream****}/{UnixTimestamp}.jpg
     *
     * @var string
     */
    public $sequenceOssObject;

    /**
     * @description The interval at which snapshots are captured. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $timeInterval;
    protected $_name = [
        'appName' => 'AppName',
        'callback' => 'Callback',
        'createTime' => 'CreateTime',
        'domainName' => 'DomainName',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'overwriteOssObject' => 'OverwriteOssObject',
        'sequenceOssObject' => 'SequenceOssObject',
        'timeInterval' => 'TimeInterval',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->overwriteOssObject) {
            $res['OverwriteOssObject'] = $this->overwriteOssObject;
        }
        if (null !== $this->sequenceOssObject) {
            $res['SequenceOssObject'] = $this->sequenceOssObject;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamSnapshotConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OverwriteOssObject'])) {
            $model->overwriteOssObject = $map['OverwriteOssObject'];
        }
        if (isset($map['SequenceOssObject'])) {
            $model->sequenceOssObject = $map['SequenceOssObject'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }

        return $model;
    }
}
