<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretRequest extends Model
{
    /**
     * @description The ID of the namespace in which the Secret resides. By default, the namespace ID is the same as the region ID.
     *
     * This parameter is required.
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The ID of the Secret to be deleted. You can call the [ListSecrets](https://help.aliyun.com/document_detail/466929.html) operation to view the Secret IDs.
     *
     * This parameter is required.
     * @example 16
     *
     * @var int
     */
    public $secretId;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'secretId'    => 'SecretId',
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
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        return $model;
    }
}
