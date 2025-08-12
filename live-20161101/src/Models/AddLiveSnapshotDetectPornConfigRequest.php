<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class AddLiveSnapshotDetectPornConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $interval;

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
    public $ossObject;

    /**
     * @var int
     */
    public $ownerId;

    /**
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

    public function validate()
    {
        if (\is_array($this->scene)) {
            Model::validateArray($this->scene);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scene)) {
                $res['Scene'] = [];
                $n1 = 0;
                foreach ($this->scene as $item1) {
                    $res['Scene'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
                $model->scene = [];
                $n1 = 0;
                foreach ($map['Scene'] as $item1) {
                    $model->scene[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
