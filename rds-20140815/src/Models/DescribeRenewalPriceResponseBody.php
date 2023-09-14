<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\priceInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\rules;
use AlibabaCloud\Tea\Model;

class DescribeRenewalPriceResponseBody extends Model
{
    /**
     * @description Details of price information.
     *
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @description The ID of the request.
     *
     * @example DC9F4EF6-D038-4405-B497-1F48E722C9F2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the details of the promotion rule.
     *
     * @var rules
     */
    public $rules;
    protected $_name = [
        'priceInfo' => 'PriceInfo',
        'requestId' => 'RequestId',
        'rules'     => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRenewalPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceInfo'])) {
            $model->priceInfo = priceInfo::fromMap($map['PriceInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
