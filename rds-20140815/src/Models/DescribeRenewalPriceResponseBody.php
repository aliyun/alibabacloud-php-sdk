<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\priceInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponseBody\rules;

class DescribeRenewalPriceResponseBody extends Model
{
    /**
     * @var priceInfo
     */
    public $priceInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->priceInfo) {
            $this->priceInfo->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toArray($noStream) : $this->priceInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
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
