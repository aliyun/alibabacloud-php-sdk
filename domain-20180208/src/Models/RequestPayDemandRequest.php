<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class RequestPayDemandRequest extends Model
{
    /**
     * @example SE20183A0Q7C5556
     *
     * @var string
     */
    public $bizId;

    /**
     * @example test.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example some message
     *
     * @var string
     */
    public $message;

    /**
     * @example 100
     *
     * @var float
     */
    public $price;

    /**
     * @example 1
     *
     * @var int
     */
    public $produceType;
    protected $_name = [
        'bizId'       => 'BizId',
        'domainName'  => 'DomainName',
        'message'     => 'Message',
        'price'       => 'Price',
        'produceType' => 'ProduceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->produceType) {
            $res['ProduceType'] = $this->produceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestPayDemandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['ProduceType'])) {
            $model->produceType = $map['ProduceType'];
        }

        return $model;
    }
}
