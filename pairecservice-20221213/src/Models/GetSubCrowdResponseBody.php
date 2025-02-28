<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GetSubCrowdResponseBody extends Model
{
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var string
     */
    public $quantity;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $source;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
