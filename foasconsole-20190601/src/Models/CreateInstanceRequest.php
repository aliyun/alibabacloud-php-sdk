<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest\createInstanceRequest
     */
    public $createInstanceRequest;
    protected $_name = [
        'createInstanceRequest' => 'CreateInstanceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createInstanceRequest) {
            $res['CreateInstanceRequest'] = null !== $this->createInstanceRequest ? $this->createInstanceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateInstanceRequest'])) {
            $model->createInstanceRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest\createInstanceRequest::fromMap($map['CreateInstanceRequest']);
        }

        return $model;
    }
}
