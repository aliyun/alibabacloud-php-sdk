<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveAppSnapshotConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
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
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

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
     * @description The naming format of snapshots that are stored in the overwrite mode, which means that a new snapshot overwrites the previous snapshot.
     *
     *   The name must be less than 256 bytes in length.
     *   Only JPG images are supported.
     *   The name can contain variables such as {AppName} and {StreamName}.
     *   A value of hyphen (-) indicates that this parameter is deleted.
     *
     * @example {liveApp****}/{liveStream****}.jpg
     *
     * @var string
     */
    public $overwriteOssObject;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The naming format of snapshots that are stored in sequence, which means that a new snapshot does not overwrite the previous snapshot. You can call the [DescribeLiveStreamSnapshotInfo](https://help.aliyun.com/document_detail/2847902.html) operation to query the snapshots that were captured within a specific time period.
     *
     *   The name must be less than 256 bytes in length.
     *   Only JPG images are supported.
     *   The name can contain variables such as {AppName}, {StreamName}, {UnixTimestamp}, and {Sequence}. The name must contain at least one of the {UnixTimestamp} and {Sequence} variables.
     *   A value of hyphen (-) indicates that this parameter is deleted.
     *
     * @example snapshot/{liveApp****}/{liveStream****}/{UnixTimestamp****}.jpg
     *
     * @var string
     */
    public $sequenceOssObject;

    /**
     * @description The interval at which snapshots are captured. Valid values: **5 to 3600**. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $timeInterval;
    protected $_name = [
        'appName' => 'AppName',
        'callback' => 'Callback',
        'domainName' => 'DomainName',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'overwriteOssObject' => 'OverwriteOssObject',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
     * @return UpdateLiveAppSnapshotConfigRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
