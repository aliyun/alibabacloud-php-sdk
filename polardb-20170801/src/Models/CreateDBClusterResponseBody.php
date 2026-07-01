<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateDBClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $agenticDbClusterDescription;

    /**
     * @var string
     */
    public $agenticDbClusterId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'agenticDbClusterDescription' => 'AgenticDbClusterDescription',
        'agenticDbClusterId' => 'AgenticDbClusterId',
        'DBClusterId' => 'DBClusterId',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticDbClusterDescription) {
            $res['AgenticDbClusterDescription'] = $this->agenticDbClusterDescription;
        }

        if (null !== $this->agenticDbClusterId) {
            $res['AgenticDbClusterId'] = $this->agenticDbClusterId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['AgenticDbClusterDescription'])) {
            $model->agenticDbClusterDescription = $map['AgenticDbClusterDescription'];
        }

        if (isset($map['AgenticDbClusterId'])) {
            $model->agenticDbClusterId = $map['AgenticDbClusterId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
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
