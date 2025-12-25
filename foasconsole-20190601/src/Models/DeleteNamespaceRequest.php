<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteNamespaceRequest\deleteNamespaceRequest;

class DeleteNamespaceRequest extends Model
{
    /**
     * @var deleteNamespaceRequest
     */
    public $deleteNamespaceRequest;
    protected $_name = [
        'deleteNamespaceRequest' => 'DeleteNamespaceRequest',
    ];

    public function validate()
    {
        if (null !== $this->deleteNamespaceRequest) {
            $this->deleteNamespaceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteNamespaceRequest) {
            $res['DeleteNamespaceRequest'] = null !== $this->deleteNamespaceRequest ? $this->deleteNamespaceRequest->toArray($noStream) : $this->deleteNamespaceRequest;
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
        if (isset($map['DeleteNamespaceRequest'])) {
            $model->deleteNamespaceRequest = self::fromMap($map['DeleteNamespaceRequest']);
        }

        return $model;
    }
}
