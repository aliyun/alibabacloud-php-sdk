<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageGatewayRequest;

use AlibabaCloud\Tea\Model;

class orderDetails extends Model
{
    /**
     * @description The description of the gateway. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the node.
     *
     * This parameter is required.
     * @example cn-shenzhen-3
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the gateway. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (.), underscores (_), and hyphens (-).
     *
     * @example testGatewayName
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @description The type of the gateway. Set this parameter to **1**. **1** indicates iSCSI.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @description The ID of the VPC.
     *
     * This parameter is required.
     * @example n-123
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'gatewayName' => 'GatewayName',
        'gatewayType' => 'GatewayType',
        'vpcId'       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
