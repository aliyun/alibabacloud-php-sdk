<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChaincodeUploadPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example accessId
     *
     * @var string
     */
    public $accessId;

    /**
     * @example test3/4bd1de21-2fff-4405-a8e9-f864c4bee24f
     *
     * @var string
     */
    public $dir;

    /**
     * @example 1533025590
     *
     * @var int
     */
    public $expire;

    /**
     * @example https://chaincode.oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example eyJleHBpcmF0aW9uIjoiMjAxOC0wNy0zMVQwODoyNjozMC40NzdaIiwiY29uZGl
     *
     * @var string
     */
    public $policy;

    /**
     * @example signature
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'  => 'AccessId',
        'dir'       => 'Dir',
        'expire'    => 'Expire',
        'host'      => 'Host',
        'policy'    => 'Policy',
        'signature' => 'Signature',
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
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
