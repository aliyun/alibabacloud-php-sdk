<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyCustomerGatewayAttributeResponseBody extends Model
{
    /**
     * @description The timestamp generated when the customer gateway was created.
     *
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
     * @description The request ID.
     *
     * @example 8AA5CE21-2E6A-4530-BDF5-F055849476E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the customer gateway belongs.
     *
     * You can call the [ListResourceGroups](~~158855~~) operation to query the resource group information.
     * @example rg-acfmzs372yg****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'customerGatewayId' => 'CustomerGatewayId',
        'description'       => 'Description',
        'ipAddress'         => 'IpAddress',
        'name'              => 'Name',
        'requestId'         => 'RequestId',
        'resourceGroupId'   => 'ResourceGroupId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCustomerGatewayAttributeResponseBody
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
