<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceRequest\convertPostpayInstanceRequest;
use AlibabaCloud\Tea\Model;

class QueryConvertInstancePriceRequest extends Model
{
    /**
     * @var convertPostpayInstanceRequest
     */
    public $convertPostpayInstanceRequest;
    protected $_name = [
        'convertPostpayInstanceRequest' => 'ConvertPostpayInstanceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convertPostpayInstanceRequest) {
            $res['ConvertPostpayInstanceRequest'] = null !== $this->convertPostpayInstanceRequest ? $this->convertPostpayInstanceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConvertInstancePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertPostpayInstanceRequest'])) {
            $model->convertPostpayInstanceRequest = convertPostpayInstanceRequest::fromMap($map['ConvertPostpayInstanceRequest']);
        }

        return $model;
    }
}
