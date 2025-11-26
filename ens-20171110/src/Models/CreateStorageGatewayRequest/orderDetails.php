<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageGatewayRequest;

use AlibabaCloud\Dara\Model;

class orderDetails extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'gatewayName' => 'GatewayName',
        'gatewayType' => 'GatewayType',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
