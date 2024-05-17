<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class Credential extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $accessId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $dir;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $expire;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $host;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $policy;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'      => 'accessId',
        'dir'           => 'dir',
        'expire'        => 'expire',
        'host'          => 'host',
        'policy'        => 'policy',
        'securityToken' => 'securityToken',
        'signature'     => 'signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['accessId'] = $this->accessId;
        }
        if (null !== $this->dir) {
            $res['dir'] = $this->dir;
        }
        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
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

    /**
     * @param array $map
     *
     * @return Credential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessId'])) {
            $model->accessId = $map['accessId'];
        }
        if (isset($map['dir'])) {
            $model->dir = $map['dir'];
        }
        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
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
