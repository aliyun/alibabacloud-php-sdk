<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetOssUploadMetaResponseBody;

use AlibabaCloud\Tea\Model;

class ossUploadMeta extends Model
{
    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $accessKey;

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
    public $securityToken;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'objectKey'     => 'ObjectKey',
        'accessKey'     => 'AccessKey',
        'policy'        => 'Policy',
        'signature'     => 'Signature',
        'securityToken' => 'SecurityToken',
        'host'          => 'Host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossUploadMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        return $model;
    }
}
