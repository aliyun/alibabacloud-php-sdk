<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssPostPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class ossPostPolicy extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $expire;
    protected $_name = [
        'accessId'  => 'AccessId',
        'policy'    => 'Policy',
        'signature' => 'Signature',
        'host'      => 'Host',
        'expire'    => 'Expire',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossPostPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        return $model;
    }
}
