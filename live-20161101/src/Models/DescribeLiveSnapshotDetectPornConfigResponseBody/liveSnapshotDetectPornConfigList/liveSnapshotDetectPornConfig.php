<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponseBody\liveSnapshotDetectPornConfigList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponseBody\liveSnapshotDetectPornConfigList\liveSnapshotDetectPornConfig\scenes;
use AlibabaCloud\Tea\Model;

class liveSnapshotDetectPornConfig extends Model
{
    /**
     * @description The application name.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The interval at which snapshots are captured from the live stream. Unit: seconds.
     *
     * @example 80
     *
     * @var int
     */
    public $interval;

    /**
     * @description The name of the OSS bucket.
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
     * @description The name of the storage file in Object Storage Service (OSS).
     *
     * @example {liveApp****}/{liveStream****}/{Date}/{Hour}/{Minute}_{Second}.jpg
     *
     * @var string
     */
    public $ossObject;

    /**
     * @description The moderation scenario array.
     *
     * @var scenes
     */
    public $scenes;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'interval' => 'Interval',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObject' => 'OssObject',
        'scenes' => 'Scenes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->scenes) {
            $res['Scenes'] = null !== $this->scenes ? $this->scenes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveSnapshotDetectPornConfig
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
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['Scenes'])) {
            $model->scenes = scenes::fromMap($map['Scenes']);
        }

        return $model;
    }
}
