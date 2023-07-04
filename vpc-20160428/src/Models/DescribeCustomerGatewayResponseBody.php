<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewayResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeCustomerGatewayResponseBody extends Model
{
    /**
     * @description The autonomous system number (ASN) of the gateway device in the data center.
     *
     * @example 65535
     *
     * @var int
     */
    public $asn;

    /**
     * @description The authentication key of the BGP routing protocol for the gateway device in the data center.
     *
     * @example AuthKey****
     *
     * @var string
     */
    public $authKey;

    /**
     * @description The timestamp generated when the customer gateway was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the customer gateway.
     *
     * @example cgw-bp1pvpl9r9adju6l5****
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
     * @example 139.32.XX.XX
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
     * @description The ID of the request.
     *
     * @example A0457BC9-6C0F-4437-AB9D-FB2EABC1D6A2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of tags added to the customer gateway.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'asn'               => 'Asn',
        'authKey'           => 'AuthKey',
        'createTime'        => 'CreateTime',
        'customerGatewayId' => 'CustomerGatewayId',
        'description'       => 'Description',
        'ipAddress'         => 'IpAddress',
        'name'              => 'Name',
        'requestId'         => 'RequestId',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asn) {
            $res['Asn'] = $this->asn;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomerGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asn'])) {
            $model->asn = $map['Asn'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
