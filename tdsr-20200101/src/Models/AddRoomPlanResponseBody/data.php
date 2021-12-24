<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRoomPlanResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description accessId
     *
     * @var string
     */
    public $accessId;

    /**
     * @description 上传回调
     *
     * @var string
     */
    public $callback;

    /**
     * @description 授权路径
     *
     * @var string
     */
    public $dir;

    /**
     * @description 授权失效时间(s)
     *
     * @var string
     */
    public $expire;

    /**
     * @description 上传地址
     *
     * @var string
     */
    public $host;

    /**
     * @description 授权
     *
     * @var string
     */
    public $policy;

    /**
     * @description 签名
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'  => 'AccessId',
        'callback'  => 'Callback',
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
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
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
