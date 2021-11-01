<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteInstanceRequest\deleteInstanceRequest
     */
    public $deleteInstanceRequest;
    protected $_name = [
        'deleteInstanceRequest' => 'DeleteInstanceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteInstanceRequest) {
            $res['DeleteInstanceRequest'] = null !== $this->deleteInstanceRequest ? $this->deleteInstanceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteInstanceRequest'])) {
            $model->deleteInstanceRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteInstanceRequest\deleteInstanceRequest::fromMap($map['DeleteInstanceRequest']);
        }

        return $model;
    }
}
