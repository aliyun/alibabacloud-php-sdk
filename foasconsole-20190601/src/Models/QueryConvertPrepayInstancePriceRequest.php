<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertPrepayInstancePriceRequest\convertPrepayInstanceRequest;
use AlibabaCloud\Tea\Model;

class QueryConvertPrepayInstancePriceRequest extends Model
{
    /**
     * @var convertPrepayInstanceRequest
     */
    public $convertPrepayInstanceRequest;
    protected $_name = [
        'convertPrepayInstanceRequest' => 'ConvertPrepayInstanceRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convertPrepayInstanceRequest) {
            $res['ConvertPrepayInstanceRequest'] = null !== $this->convertPrepayInstanceRequest ? $this->convertPrepayInstanceRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConvertPrepayInstancePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertPrepayInstanceRequest'])) {
            $model->convertPrepayInstanceRequest = convertPrepayInstanceRequest::fromMap($map['ConvertPrepayInstanceRequest']);
        }

        return $model;
    }
}
