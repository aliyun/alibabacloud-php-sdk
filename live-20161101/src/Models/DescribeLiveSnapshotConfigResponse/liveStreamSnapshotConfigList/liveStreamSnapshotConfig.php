<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponse\liveStreamSnapshotConfigList;

use AlibabaCloud\Tea\Model;

class liveStreamSnapshotConfig extends Model
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
     * @var int
     */
    public $timeInterval;

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
    public $overwriteOssObject;

    /**
     * @var string
     */
    public $sequenceOssObject;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $callback;
    protected $_name = [
        'domainName'         => 'DomainName',
        'appName'            => 'AppName',
        'timeInterval'       => 'TimeInterval',
        'ossEndpoint'        => 'OssEndpoint',
        'ossBucket'          => 'OssBucket',
        'overwriteOssObject' => 'OverwriteOssObject',
        'sequenceOssObject'  => 'SequenceOssObject',
        'createTime'         => 'CreateTime',
        'callback'           => 'Callback',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('timeInterval', $this->timeInterval, true);
        Model::validateRequired('ossEndpoint', $this->ossEndpoint, true);
        Model::validateRequired('ossBucket', $this->ossBucket, true);
        Model::validateRequired('overwriteOssObject', $this->overwriteOssObject, true);
        Model::validateRequired('sequenceOssObject', $this->sequenceOssObject, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('callback', $this->callback, true);
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
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->overwriteOssObject) {
            $res['OverwriteOssObject'] = $this->overwriteOssObject;
        }
        if (null !== $this->sequenceOssObject) {
            $res['SequenceOssObject'] = $this->sequenceOssObject;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OverwriteOssObject'])) {
            $model->overwriteOssObject = $map['OverwriteOssObject'];
        }
        if (isset($map['SequenceOssObject'])) {
            $model->sequenceOssObject = $map['SequenceOssObject'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }

        return $model;
    }
}
