<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainResponseBody\staticPriceInfo;

class CheckDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $avail;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $dynamicCheck;

    /**
     * @var string
     */
    public $premium;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var staticPriceInfo
     */
    public $staticPriceInfo;
    protected $_name = [
        'avail' => 'Avail',
        'domainName' => 'DomainName',
        'dynamicCheck' => 'DynamicCheck',
        'premium' => 'Premium',
        'price' => 'Price',
        'reason' => 'Reason',
        'requestId' => 'RequestId',
        'staticPriceInfo' => 'StaticPriceInfo',
    ];

    public function validate()
    {
        if (null !== $this->staticPriceInfo) {
            $this->staticPriceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avail) {
            $res['Avail'] = $this->avail;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->dynamicCheck) {
            $res['DynamicCheck'] = $this->dynamicCheck;
        }

        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->staticPriceInfo) {
            $res['StaticPriceInfo'] = null !== $this->staticPriceInfo ? $this->staticPriceInfo->toArray($noStream) : $this->staticPriceInfo;
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
        if (isset($map['Avail'])) {
            $model->avail = $map['Avail'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DynamicCheck'])) {
            $model->dynamicCheck = $map['DynamicCheck'];
        }

        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StaticPriceInfo'])) {
            $model->staticPriceInfo = staticPriceInfo::fromMap($map['StaticPriceInfo']);
        }

        return $model;
    }
}
