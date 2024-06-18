<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class CreateFixedPriceSelectedOrderRequest extends Model
{
    /**
     * @example DX123456
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @example 11935401
     *
     * @var string
     */
    public $contactId;

    /**
     * @description This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description This parameter is required.
     *
     * @example 20.00
     *
     * @var float
     */
    public $expectedPrice;

    /**
     * @example partnername
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'code'          => 'Code',
        'contactId'     => 'ContactId',
        'domainName'    => 'DomainName',
        'expectedPrice' => 'ExpectedPrice',
        'source'        => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->expectedPrice) {
            $res['ExpectedPrice'] = $this->expectedPrice;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFixedPriceSelectedOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ExpectedPrice'])) {
            $model->expectedPrice = $map['ExpectedPrice'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
