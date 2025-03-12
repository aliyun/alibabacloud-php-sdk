<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults\launchResult\instanceIds;
use AlibabaCloud\Tea\Model;

class launchResult extends Model
{
    /**
     * @description The number of created instances.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The error code returned when the instance cannot be created.
     *
     * @example InvalidParameter
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned when the instance cannot be created.
     *
     * @example Specific parameter is not valid.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The IDs of created instances.
     *
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The bidding policy for the pay-as-you-go instance. Valid values:
     *
     *   NoSpot: The instance is a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance for which you specify the maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'amount'       => 'Amount',
        'errorCode'    => 'ErrorCode',
        'errorMsg'     => 'ErrorMsg',
        'instanceIds'  => 'InstanceIds',
        'instanceType' => 'InstanceType',
        'spotStrategy' => 'SpotStrategy',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
