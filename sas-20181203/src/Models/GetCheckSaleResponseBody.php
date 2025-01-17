<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSaleResponseBody\checkSale;

class GetCheckSaleResponseBody extends Model
{
    /**
     * @var checkSale
     */
    public $checkSale;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkSale' => 'CheckSale',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->checkSale) {
            $this->checkSale->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkSale) {
            $res['CheckSale'] = null !== $this->checkSale ? $this->checkSale->toArray($noStream) : $this->checkSale;
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
        if (isset($map['CheckSale'])) {
            $model->checkSale = checkSale::fromMap($map['CheckSale']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
