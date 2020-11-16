<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponse\liveSnapshotDetectPornConfigList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponse\liveSnapshotDetectPornConfigList\liveSnapshotDetectPornConfig\scenes;
use AlibabaCloud\Tea\Model;

class liveSnapshotDetectPornConfig extends Model
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
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossObject;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var scenes
     */
    public $scenes;
    protected $_name = [
        'domainName'  => 'DomainName',
        'appName'     => 'AppName',
        'ossEndpoint' => 'OssEndpoint',
        'ossBucket'   => 'OssBucket',
        'ossObject'   => 'OssObject',
        'interval'    => 'Interval',
        'scenes'      => 'Scenes',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('ossEndpoint', $this->ossEndpoint, true);
        Model::validateRequired('ossBucket', $this->ossBucket, true);
        Model::validateRequired('ossObject', $this->ossObject, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('scenes', $this->scenes, true);
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
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Scenes'])) {
            $model->scenes = scenes::fromMap($map['Scenes']);
        }

        return $model;
    }
}
