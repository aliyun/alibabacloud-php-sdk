<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCustomizedDictUploadInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessid;
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
    public $key;
    /**
     * @var string
     */
    public $policy;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid'  => 'Accessid',
        'expire'    => 'Expire',
        'host'      => 'Host',
        'key'       => 'Key',
        'policy'    => 'Policy',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
