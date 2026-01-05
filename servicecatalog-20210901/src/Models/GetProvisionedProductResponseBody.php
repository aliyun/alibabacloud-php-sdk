<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductResponseBody\provisionedProductDetail;

class GetProvisionedProductResponseBody extends Model
{
    /**
     * @var provisionedProductDetail
     */
    public $provisionedProductDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'provisionedProductDetail' => 'ProvisionedProductDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->provisionedProductDetail) {
            $this->provisionedProductDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->provisionedProductDetail) {
            $res['ProvisionedProductDetail'] = null !== $this->provisionedProductDetail ? $this->provisionedProductDetail->toArray($noStream) : $this->provisionedProductDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProvisionedProductDetail'])) {
            $model->provisionedProductDetail = provisionedProductDetail::fromMap($map['ProvisionedProductDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
