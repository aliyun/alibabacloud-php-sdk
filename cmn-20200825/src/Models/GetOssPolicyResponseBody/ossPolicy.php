<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetOssPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class ossPolicy extends Model
{
    /**
     * @description 通行id
     *
     * @example fasd44sdf
     *
     * @var string
     */
    public $accessId;

    /**
     * @description 目录
     *
     * @example /xxx/zzz
     *
     * @var string
     */
    public $directory;

    /**
     * @description 过期时间
     *
     * @example 120
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description 主机名
     *
     * @example https://zzzxxx
     *
     * @var string
     */
    public $host;

    /**
     * @description 通行规则
     *
     * @example gagfaf54we5
     *
     * @var string
     */
    public $policy;

    /**
     * @description 签名
     *
     * @example dfagweyghsfsa
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'   => 'AccessId',
        'directory'  => 'Directory',
        'expireTime' => 'ExpireTime',
        'host'       => 'Host',
        'policy'     => 'Policy',
        'signature'  => 'Signature',
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
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
     * @return ossPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
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
