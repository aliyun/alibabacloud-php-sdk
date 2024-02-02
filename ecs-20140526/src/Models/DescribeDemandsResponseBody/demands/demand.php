<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand\supplyInfos;
use AlibabaCloud\Tea\Model;

class demand extends Model
{
    /**
     * @description The number of available instances.
     *
     * @example 10
     *
     * @var int
     */
    public $availableAmount;

    /**
     * @description The feedback on the rejected demands.
     *
     * @example test-for-comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The number of instances to be delivered.
     *
     * @example 20
     *
     * @var int
     */
    public $deliveringAmount;

    /**
     * @description The description of the demand.
     *
     * @example test-DemandDescription
     *
     * @var string
     */
    public $demandDescription;

    /**
     * @description The ID of the demand.
     *
     * @example ed-bp11n21kq00sl71p****
     *
     * @var string
     */
    public $demandId;

    /**
     * @description The name of the demand.
     *
     * @example k8s-node-demand
     *
     * @var string
     */
    public $demandName;

    /**
     * @description The status of the demand or filed resources. Valid values:
     *
     *   Creating: The demand is being created.
     *   Active: The filed resources are being supplied.
     *   Expired: The demand has expired.
     *   Finished: The filed resources are consumed.
     *   Refused: The demand is rejected. To view the reason for rejection, see the `Comment` parameter.
     *   Cancelled: The demand is canceled. After the demand is canceled, the delivery status of the resources becomes invalid.
     *
     * @example Active
     *
     * @var string
     */
    public $demandStatus;

    /**
     * @description The time when the demand was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-02-26T12:00:00Z
     *
     * @var string
     */
    public $demandTime;

    /**
     * @description The expected end time for the purchase of the filed resources. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-03-03T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The billing method of the filed resources. Valid values:
     *
     *   Prepaid: subscription.
     *   Postpaid: pay-as-you-go.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance type of the filed instance.
     *
     * @example ecs.g6.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance family of the filed instance.
     *
     * @example ecs.g6
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The usage duration of the filed resources.
     *
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the usage duration of the filed resources. Valid values:
     *
     *   Hour
     *   Day
     *
     *   Month
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The expected start time for the purchase of the filed resources. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-02-27T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The delivery status of the filed resources.
     *
     * @var supplyInfos
     */
    public $supplyInfos;

    /**
     * @description The number of filed instances.
     *
     * @example 50
     *
     * @var int
     */
    public $totalAmount;

    /**
     * @description The number of consumed instances.
     *
     * @example 20
     *
     * @var int
     */
    public $usedAmount;

    /**
     * @description The ID of the zone where the filed resource resides.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableAmount'    => 'AvailableAmount',
        'comment'            => 'Comment',
        'deliveringAmount'   => 'DeliveringAmount',
        'demandDescription'  => 'DemandDescription',
        'demandId'           => 'DemandId',
        'demandName'         => 'DemandName',
        'demandStatus'       => 'DemandStatus',
        'demandTime'         => 'DemandTime',
        'endTime'            => 'EndTime',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceType'       => 'InstanceType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'startTime'          => 'StartTime',
        'supplyInfos'        => 'SupplyInfos',
        'totalAmount'        => 'TotalAmount',
        'usedAmount'         => 'UsedAmount',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->deliveringAmount) {
            $res['DeliveringAmount'] = $this->deliveringAmount;
        }
        if (null !== $this->demandDescription) {
            $res['DemandDescription'] = $this->demandDescription;
        }
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }
        if (null !== $this->demandName) {
            $res['DemandName'] = $this->demandName;
        }
        if (null !== $this->demandStatus) {
            $res['DemandStatus'] = $this->demandStatus;
        }
        if (null !== $this->demandTime) {
            $res['DemandTime'] = $this->demandTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->supplyInfos) {
            $res['SupplyInfos'] = null !== $this->supplyInfos ? $this->supplyInfos->toMap() : null;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DeliveringAmount'])) {
            $model->deliveringAmount = $map['DeliveringAmount'];
        }
        if (isset($map['DemandDescription'])) {
            $model->demandDescription = $map['DemandDescription'];
        }
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }
        if (isset($map['DemandName'])) {
            $model->demandName = $map['DemandName'];
        }
        if (isset($map['DemandStatus'])) {
            $model->demandStatus = $map['DemandStatus'];
        }
        if (isset($map['DemandTime'])) {
            $model->demandTime = $map['DemandTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SupplyInfos'])) {
            $model->supplyInfos = supplyInfos::fromMap($map['SupplyInfos']);
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
