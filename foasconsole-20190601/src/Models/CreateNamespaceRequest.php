<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateNamespaceRequest\createNamespaceRequest;

class CreateNamespaceRequest extends Model
{
    /**
     * @var createNamespaceRequest
     */
    public $createNamespaceRequest;
    protected $_name = [
        'createNamespaceRequest' => 'CreateNamespaceRequest',
    ];

    public function validate()
    {
        if (null !== $this->createNamespaceRequest) {
            $this->createNamespaceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createNamespaceRequest) {
            $res['CreateNamespaceRequest'] = null !== $this->createNamespaceRequest ? $this->createNamespaceRequest->toArray($noStream) : $this->createNamespaceRequest;
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
        if (isset($map['CreateNamespaceRequest'])) {
            $model->createNamespaceRequest = self::fromMap($map['CreateNamespaceRequest']);
        }

        return $model;
    }
}
