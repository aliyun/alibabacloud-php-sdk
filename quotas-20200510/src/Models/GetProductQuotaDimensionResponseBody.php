<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionResponseBody\quotaDimension;

class GetProductQuotaDimensionResponseBody extends Model
{
    /**
     * @var quotaDimension
     */
    public $quotaDimension;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaDimension' => 'QuotaDimension',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->quotaDimension) {
            $this->quotaDimension->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaDimension) {
            $res['QuotaDimension'] = null !== $this->quotaDimension ? $this->quotaDimension->toArray($noStream) : $this->quotaDimension;
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
        if (isset($map['QuotaDimension'])) {
            $model->quotaDimension = quotaDimension::fromMap($map['QuotaDimension']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
