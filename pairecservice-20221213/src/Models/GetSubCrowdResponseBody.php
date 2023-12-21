<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetSubCrowdResponseBody extends Model
{
    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $quantity;

    /**
     * @description Id of the request
     *
     * @example 01D22D08-BA20-5F35-8302-99115F288220
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ManualInput
     *
     * @var string
     */
    public $source;

    /**
     * @example user1,user2
     *
     * @var string
     */
    public $users;
    protected $_name = [
        'gmtCreateTime' => 'GmtCreateTime',
        'quantity'      => 'Quantity',
        'requestId'     => 'RequestId',
        'source'        => 'Source',
        'users'         => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubCrowdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
