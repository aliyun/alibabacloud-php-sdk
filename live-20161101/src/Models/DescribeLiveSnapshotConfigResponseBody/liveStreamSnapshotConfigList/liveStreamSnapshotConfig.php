<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody\liveStreamSnapshotConfigList;

use AlibabaCloud\Tea\Model;

class liveStreamSnapshotConfig extends Model
{
    /**
     * @var string
     */
    public $overwriteOssObject;

    /**
     * @var int
     */
    public $timeInterval;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $createTime;

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
    public $callback;

    /**
     * @var string
     */
    public $sequenceOssObject;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'overwriteOssObject' => 'OverwriteOssObject',
        'timeInterval'       => 'TimeInterval',
        'appName'            => 'AppName',
        'createTime'         => 'CreateTime',
        'ossBucket'          => 'OssBucket',
        'domainName'         => 'DomainName',
        'callback'           => 'Callback',
        'sequenceOssObject'  => 'SequenceOssObject',
        'ossEndpoint'        => 'OssEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overwriteOssObject) {
            $res['OverwriteOssObject'] = $this->overwriteOssObject;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->sequenceOssObject) {
            $res['SequenceOssObject'] = $this->sequenceOssObject;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
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
        if (isset($map['OverwriteOssObject'])) {
            $model->overwriteOssObject = $map['OverwriteOssObject'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['SequenceOssObject'])) {
            $model->sequenceOssObject = $map['SequenceOssObject'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
