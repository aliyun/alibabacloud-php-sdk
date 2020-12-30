<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $avail;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $premium;

    /**
     * @var bool
     */
    public $dynamicCheck;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'requestId'    => 'RequestId',
        'avail'        => 'Avail',
        'price'        => 'Price',
        'domainName'   => 'DomainName',
        'premium'      => 'Premium',
        'dynamicCheck' => 'DynamicCheck',
        'reason'       => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->avail) {
            $res['Avail'] = $this->avail;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }
        if (null !== $this->dynamicCheck) {
            $res['DynamicCheck'] = $this->dynamicCheck;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Avail'])) {
            $model->avail = $map['Avail'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }
        if (isset($map['DynamicCheck'])) {
            $model->dynamicCheck = $map['DynamicCheck'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
