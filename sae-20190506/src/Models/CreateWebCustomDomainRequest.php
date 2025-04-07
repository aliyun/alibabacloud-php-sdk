<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateWebCustomDomainRequest extends Model
{
    /**
     * @description The namespace ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The information about custom domain name.
     *
     * This parameter is required.
     *
     * @var CreateWebCustomDomainInput
     */
    public $body;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'body' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWebCustomDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['body'])) {
            $model->body = CreateWebCustomDomainInput::fromMap($map['body']);
        }

        return $model;
    }
}
