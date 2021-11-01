<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateNamespaceRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateNamespaceRequest\createNamespaceRequest
     */
    public $createNamespaceRequest;
    protected $_name = [
        'createNamespaceRequest' => 'CreateNamespaceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createNamespaceRequest) {
            $res['CreateNamespaceRequest'] = null !== $this->createNamespaceRequest ? $this->createNamespaceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateNamespaceRequest'])) {
            $model->createNamespaceRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateNamespaceRequest\createNamespaceRequest::fromMap($map['CreateNamespaceRequest']);
        }

        return $model;
    }
}
