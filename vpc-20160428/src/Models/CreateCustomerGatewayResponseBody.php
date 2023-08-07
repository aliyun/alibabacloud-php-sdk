<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomerGatewayResponseBody extends Model
{
    /**
     * @description The timestamp generated when the customer gateway was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1493363486000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the customer gateway.
     *
     * @example cgw-bp1jrawp82av6bws9****
     *
     * @var string
     */
    public $customerGatewayId;

    /**
     * @description The description of the customer gateway.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The public IP address of the gateway device in the data center.
     *
     * @example 101.12.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The name of the customer gateway.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example D32B3C26-6C6C-4988-93E9-D2A6444CE6AE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'customerGatewayId' => 'CustomerGatewayId',
        'description'       => 'Description',
        'ipAddress'         => 'IpAddress',
        'name'              => 'Name',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomerGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
