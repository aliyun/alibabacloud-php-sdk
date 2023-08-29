<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeFileTokenResponseBody\getFileTokenResult;

use AlibabaCloud\Tea\Model;

class fileToken extends Model
{
    /**
     * @var string
     */
    public $accessid;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $expire;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid'  => 'Accessid',
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
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
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
     * @return fileToken
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
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
