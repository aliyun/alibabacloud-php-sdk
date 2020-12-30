<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class GetQualificationUploadPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $expire;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $accessid;

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
    public $prefix;

    /**
     * @var string
     */
    public $dir;
    protected $_name = [
        'policy'    => 'Policy',
        'expire'    => 'Expire',
        'requestId' => 'RequestId',
        'accessid'  => 'Accessid',
        'signature' => 'Signature',
        'host'      => 'Host',
        'prefix'    => 'Prefix',
        'dir'       => 'Dir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualificationUploadPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }

        return $model;
    }
}
