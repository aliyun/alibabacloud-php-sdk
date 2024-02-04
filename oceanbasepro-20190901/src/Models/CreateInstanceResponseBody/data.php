<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The result of the dry-run request.
     *
     * If the DryRun parameter is set to false, no dry run is performed and the DryRunResult parameter returns false.
     * @example true
     *
     * @var bool
     */
    public $dryRunResult;

    /**
     * @description Instance ID.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Order ID. The ID of the order that you have placed.
     * This parameter returns a value after you create a pre-paid or post-paid cluster.
     * @example 1234567890
     *
     * @var string
     */
    public $orderId;

    /**
     * @description Resource group ID.
     *
     * @example rg-***************
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'dryRunResult'    => 'DryRunResult',
        'instanceId'      => 'InstanceId',
        'orderId'         => 'OrderId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = $this->dryRunResult;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = $map['DryRunResult'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
