<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateSecretShrinkRequest extends Model
{
    /**
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $secretDataShrink;

    /**
     * @example 16
     *
     * @var int
     */
    public $secretId;
    protected $_name = [
        'namespaceId'      => 'NamespaceId',
        'secretDataShrink' => 'SecretData',
        'secretId'         => 'SecretId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->secretDataShrink) {
            $res['SecretData'] = $this->secretDataShrink;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['SecretData'])) {
            $model->secretDataShrink = $map['SecretData'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        return $model;
    }
}
