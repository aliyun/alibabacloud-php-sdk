<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponseBody\liveSnapshotDetectPornConfigList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponseBody\liveSnapshotDetectPornConfigList\liveSnapshotDetectPornConfig\scenes;
use AlibabaCloud\Tea\Model;

class liveSnapshotDetectPornConfig extends Model
{
    /**
     * @var string
     */
    public $ossObject;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var scenes
     */
    public $scenes;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'ossObject'   => 'OssObject',
        'appName'     => 'AppName',
        'interval'    => 'Interval',
        'scenes'      => 'Scenes',
        'ossBucket'   => 'OssBucket',
        'domainName'  => 'DomainName',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->scenes) {
            $res['Scenes'] = null !== $this->scenes ? $this->scenes->toMap() : null;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
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
     * @return liveSnapshotDetectPornConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Scenes'])) {
            $model->scenes = scenes::fromMap($map['Scenes']);
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
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
