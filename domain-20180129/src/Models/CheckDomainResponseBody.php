<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckDomainResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $avail;

    /**
     * @example test**.xin
     *
     * @var string
     */
    public $domainName;

    /**
     * @example true
     *
     * @var bool
     */
    public $dynamicCheck;

    /**
     * @example true
     *
     * @var string
     */
    public $premium;

    /**
     * @example 1286
     *
     * @var int
     */
    public $price;

    /**
     * @example In use
     *
     * @var string
     */
    public $reason;

    /**
     * @example BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'avail'        => 'Avail',
        'domainName'   => 'DomainName',
        'dynamicCheck' => 'DynamicCheck',
        'premium'      => 'Premium',
        'price'        => 'Price',
        'reason'       => 'Reason',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDomainResponseBody
     */
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

        return $model;
    }
}
