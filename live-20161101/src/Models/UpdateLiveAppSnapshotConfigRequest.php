<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class UpdateLiveAppSnapshotConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
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
     * @var string
     */
    public $sequenceOssObject;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
