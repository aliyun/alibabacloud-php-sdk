<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveSnapshotDetectPornConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

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
     * @description The interval at which snapshots are captured from the live stream. Valid values: **5 to 3600**. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @description The name of the OSS bucket.
     *
     * After the review is complete, you can search for specific violations in the OSS console based on the callback information. You must create the OSS bucket in advance. For more information, see [Configure content moderation](https://help.aliyun.com/document_detail/199449.html).
     *
     * This parameter is required.
     *
     * @example livebucket
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The endpoint of the Object Storage Service (OSS) bucket.
     *
     * After the review is complete, you can search for specific violations in the OSS console based on the callback information. You must configure the OSS endpoint in advance. For more information, see [Configure content moderation](https://help.aliyun.com/document_detail/199449.html).
     *
     * This parameter is required.
     *
     * @example cn-oss-****.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description The name of the snapshot that stores violations such as pornographic content and politically sensitive content.
     *
     * @example record/{AppName}/{StreamName}/{Sequence}.jpg
     *
     * @var string
     */
    public $ossObject;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Scene list detection.
     *
     * @example live
     *
     * @var string[]
     */
    public $scene;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'interval' => 'Interval',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObject' => 'OssObject',
        'ownerId' => 'OwnerId',
        'scene' => 'Scene',
        'securityToken' => 'SecurityToken',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveSnapshotDetectPornConfigRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Scene'])) {
            if (!empty($map['Scene'])) {
                $model->scene = $map['Scene'];
            }
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
