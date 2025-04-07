<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class PublishWebApplicationRevisionRequest extends Model
{
    /**
     * @description The namespace ID.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The configurations of the version.
     *
     * This parameter is required.
     *
     * @var PublishWebApplicationRevisionInput
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
     * @return PublishWebApplicationRevisionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['body'])) {
            $model->body = PublishWebApplicationRevisionInput::fromMap($map['body']);
        }

        return $model;
    }
}
