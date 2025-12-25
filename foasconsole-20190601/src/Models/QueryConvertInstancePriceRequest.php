<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceRequest\convertPostpayInstanceRequest;

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
        if (null !== $this->convertPostpayInstanceRequest) {
            $this->convertPostpayInstanceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->convertPostpayInstanceRequest) {
            $res['ConvertPostpayInstanceRequest'] = null !== $this->convertPostpayInstanceRequest ? $this->convertPostpayInstanceRequest->toArray($noStream) : $this->convertPostpayInstanceRequest;
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
        if (isset($map['ConvertPostpayInstanceRequest'])) {
            $model->convertPostpayInstanceRequest = convertPostpayInstanceRequest::fromMap($map['ConvertPostpayInstanceRequest']);
        }

        return $model;
    }
}
