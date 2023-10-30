<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryRenewInstancePriceRequest\renewInstanceRequest;
use AlibabaCloud\Tea\Model;

class QueryRenewInstancePriceRequest extends Model
{
    /**
     * @var renewInstanceRequest
     */
    public $renewInstanceRequest;
    protected $_name = [
        'renewInstanceRequest' => 'RenewInstanceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->renewInstanceRequest) {
            $res['RenewInstanceRequest'] = null !== $this->renewInstanceRequest ? $this->renewInstanceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRenewInstancePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenewInstanceRequest'])) {
            $model->renewInstanceRequest = renewInstanceRequest::fromMap($map['RenewInstanceRequest']);
        }

        return $model;
    }
}
