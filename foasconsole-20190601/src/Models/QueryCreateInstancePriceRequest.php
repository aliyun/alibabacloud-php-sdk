<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest\createInstanceRequest;
use AlibabaCloud\Tea\Model;

class QueryCreateInstancePriceRequest extends Model
{
    /**
     * @var createInstanceRequest
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
     * @return QueryCreateInstancePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateInstanceRequest'])) {
            $model->createInstanceRequest = createInstanceRequest::fromMap($map['CreateInstanceRequest']);
        }

        return $model;
    }
}
