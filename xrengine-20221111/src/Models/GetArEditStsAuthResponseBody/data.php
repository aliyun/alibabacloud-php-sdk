<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\GetArEditStsAuthResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $editPath;

    /**
     * @var int
     */
    public $expiration;

    /**
     * @var string
     */
    public $map3DPath;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossRegion;

    /**
     * @var string
     */
    public $publishPath;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'editPath' => 'EditPath',
        'expiration' => 'Expiration',
        'map3DPath' => 'Map3DPath',
        'ossBucket' => 'OssBucket',
        'ossRegion' => 'OssRegion',
        'publishPath' => 'PublishPath',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->editPath) {
            $res['EditPath'] = $this->editPath;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->map3DPath) {
            $res['Map3DPath'] = $this->map3DPath;
        }

        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossRegion) {
            $res['OssRegion'] = $this->ossRegion;
        }

        if (null !== $this->publishPath) {
            $res['PublishPath'] = $this->publishPath;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }

        if (isset($map['EditPath'])) {
            $model->editPath = $map['EditPath'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['Map3DPath'])) {
            $model->map3DPath = $map['Map3DPath'];
        }

        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['OssRegion'])) {
            $model->ossRegion = $map['OssRegion'];
        }

        if (isset($map['PublishPath'])) {
            $model->publishPath = $map['PublishPath'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
