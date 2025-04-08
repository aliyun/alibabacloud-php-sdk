<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Task;

use AlibabaCloud\Dara\Model;

class credential extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $accessUrl;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId' => 'accessId',
        'accessUrl' => 'accessUrl',
        'expire' => 'expire',
        'host' => 'host',
        'path' => 'path',
        'policy' => 'policy',
        'securityToken' => 'securityToken',
        'signature' => 'signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['accessId'] = $this->accessId;
        }

        if (null !== $this->accessUrl) {
            $res['accessUrl'] = $this->accessUrl;
        }

        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }

        if (null !== $this->securityToken) {
            $res['securityToken'] = $this->securityToken;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
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
        if (isset($map['accessId'])) {
            $model->accessId = $map['accessId'];
        }

        if (isset($map['accessUrl'])) {
            $model->accessUrl = $map['accessUrl'];
        }

        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }

        if (isset($map['securityToken'])) {
            $model->securityToken = $map['securityToken'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        return $model;
    }
}
