<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSaleResponseBody\checkSale;
use AlibabaCloud\Tea\Model;

class GetCheckSaleResponseBody extends Model
{
    /**
     * @var checkSale
     */
    public $checkSale;

    /**
     * @example F5CF78A7-30AA-59DB-847F-13EE3AE7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkSale' => 'CheckSale',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkSale) {
            $res['CheckSale'] = null !== $this->checkSale ? $this->checkSale->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckSaleResponseBody
     */
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
