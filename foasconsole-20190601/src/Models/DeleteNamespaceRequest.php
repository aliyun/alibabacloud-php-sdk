<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteNamespaceRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteNamespaceRequest\deleteNamespaceRequest
     */
    public $deleteNamespaceRequest;
    protected $_name = [
        'deleteNamespaceRequest' => 'DeleteNamespaceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteNamespaceRequest) {
            $res['DeleteNamespaceRequest'] = null !== $this->deleteNamespaceRequest ? $this->deleteNamespaceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteNamespaceRequest'])) {
            $model->deleteNamespaceRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteNamespaceRequest\deleteNamespaceRequest::fromMap($map['DeleteNamespaceRequest']);
        }

        return $model;
    }
}
