<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetMetaOssTempKeyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ak;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $expire;

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
        'ak' => 'ak',
        'bucket' => 'bucket',
        'dir' => 'dir',
        'endpoint' => 'endpoint',
        'expire' => 'expire',
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
        if (null !== $this->ak) {
            $res['ak'] = $this->ak;
        }

        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->dir) {
            $res['dir'] = $this->dir;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
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
        if (isset($map['ak'])) {
            $model->ak = $map['ak'];
        }

        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['dir'])) {
            $model->dir = $map['dir'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
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
