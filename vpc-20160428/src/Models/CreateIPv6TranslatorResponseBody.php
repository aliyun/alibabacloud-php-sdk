<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIPv6TranslatorResponseBody extends Model
{
    /**
     * @example ipv6trans-bp1i8ahxut1xxxx
     *
     * @var string
     */
    public $ipv6TranslatorId;

    /**
     * @example test_nat64gw
     *
     * @var string
     */
    public $name;

    /**
     * @example 202303300940739
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 1AE05898-06E5-4782-xxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example small
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'ipv6TranslatorId' => 'Ipv6TranslatorId',
        'name'             => 'Name',
        'orderId'          => 'OrderId',
        'requestId'        => 'RequestId',
        'spec'             => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6TranslatorId) {
            $res['Ipv6TranslatorId'] = $this->ipv6TranslatorId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIPv6TranslatorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6TranslatorId'])) {
            $model->ipv6TranslatorId = $map['Ipv6TranslatorId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
