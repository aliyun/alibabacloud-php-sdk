<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetQualificationOssInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

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
    public $policy;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $startPath;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'expire' => 'Expire',
        'host' => 'Host',
        'policy' => 'Policy',
        'signature' => 'Signature',
        'startPath' => 'StartPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
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

        if (null !== $this->startPath) {
            $res['StartPath'] = $this->startPath;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
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

        if (isset($map['StartPath'])) {
            $model->startPath = $map['StartPath'];
        }

        return $model;
    }
}
