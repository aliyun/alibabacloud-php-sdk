<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeExposedStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $exposedAsapVulCount;
    /**
     * @var int
     */
    public $exposedComponentCount;
    /**
     * @var int
     */
    public $exposedDdsCount;
    /**
     * @var int
     */
    public $exposedEcsCount;
    /**
     * @var int
     */
    public $exposedInstanceCount;
    /**
     * @var int
     */
    public $exposedIpCount;
    /**
     * @var int
     */
    public $exposedKvstoreCount;
    /**
     * @var int
     */
    public $exposedLaterVulCount;
    /**
     * @var int
     */
    public $exposedNntfVulCount;
    /**
     * @var int
     */
    public $exposedPortCount;
    /**
     * @var int
     */
    public $exposedRdsCount;
    /**
     * @var int
     */
    public $exposedWeekPasswordMachineCount;
    /**
     * @var int
     */
    public $gatewayAssetCount;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exposedAsapVulCount'             => 'ExposedAsapVulCount',
        'exposedComponentCount'           => 'ExposedComponentCount',
        'exposedDdsCount'                 => 'ExposedDdsCount',
        'exposedEcsCount'                 => 'ExposedEcsCount',
        'exposedInstanceCount'            => 'ExposedInstanceCount',
        'exposedIpCount'                  => 'ExposedIpCount',
        'exposedKvstoreCount'             => 'ExposedKvstoreCount',
        'exposedLaterVulCount'            => 'ExposedLaterVulCount',
        'exposedNntfVulCount'             => 'ExposedNntfVulCount',
        'exposedPortCount'                => 'ExposedPortCount',
        'exposedRdsCount'                 => 'ExposedRdsCount',
        'exposedWeekPasswordMachineCount' => 'ExposedWeekPasswordMachineCount',
        'gatewayAssetCount'               => 'GatewayAssetCount',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exposedAsapVulCount) {
            $res['ExposedAsapVulCount'] = $this->exposedAsapVulCount;
        }

        if (null !== $this->exposedComponentCount) {
            $res['ExposedComponentCount'] = $this->exposedComponentCount;
        }

        if (null !== $this->exposedDdsCount) {
            $res['ExposedDdsCount'] = $this->exposedDdsCount;
        }

        if (null !== $this->exposedEcsCount) {
            $res['ExposedEcsCount'] = $this->exposedEcsCount;
        }

        if (null !== $this->exposedInstanceCount) {
            $res['ExposedInstanceCount'] = $this->exposedInstanceCount;
        }

        if (null !== $this->exposedIpCount) {
            $res['ExposedIpCount'] = $this->exposedIpCount;
        }

        if (null !== $this->exposedKvstoreCount) {
            $res['ExposedKvstoreCount'] = $this->exposedKvstoreCount;
        }

        if (null !== $this->exposedLaterVulCount) {
            $res['ExposedLaterVulCount'] = $this->exposedLaterVulCount;
        }

        if (null !== $this->exposedNntfVulCount) {
            $res['ExposedNntfVulCount'] = $this->exposedNntfVulCount;
        }

        if (null !== $this->exposedPortCount) {
            $res['ExposedPortCount'] = $this->exposedPortCount;
        }

        if (null !== $this->exposedRdsCount) {
            $res['ExposedRdsCount'] = $this->exposedRdsCount;
        }

        if (null !== $this->exposedWeekPasswordMachineCount) {
            $res['ExposedWeekPasswordMachineCount'] = $this->exposedWeekPasswordMachineCount;
        }

        if (null !== $this->gatewayAssetCount) {
            $res['GatewayAssetCount'] = $this->gatewayAssetCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ExposedAsapVulCount'])) {
            $model->exposedAsapVulCount = $map['ExposedAsapVulCount'];
        }

        if (isset($map['ExposedComponentCount'])) {
            $model->exposedComponentCount = $map['ExposedComponentCount'];
        }

        if (isset($map['ExposedDdsCount'])) {
            $model->exposedDdsCount = $map['ExposedDdsCount'];
        }

        if (isset($map['ExposedEcsCount'])) {
            $model->exposedEcsCount = $map['ExposedEcsCount'];
        }

        if (isset($map['ExposedInstanceCount'])) {
            $model->exposedInstanceCount = $map['ExposedInstanceCount'];
        }

        if (isset($map['ExposedIpCount'])) {
            $model->exposedIpCount = $map['ExposedIpCount'];
        }

        if (isset($map['ExposedKvstoreCount'])) {
            $model->exposedKvstoreCount = $map['ExposedKvstoreCount'];
        }

        if (isset($map['ExposedLaterVulCount'])) {
            $model->exposedLaterVulCount = $map['ExposedLaterVulCount'];
        }

        if (isset($map['ExposedNntfVulCount'])) {
            $model->exposedNntfVulCount = $map['ExposedNntfVulCount'];
        }

        if (isset($map['ExposedPortCount'])) {
            $model->exposedPortCount = $map['ExposedPortCount'];
        }

        if (isset($map['ExposedRdsCount'])) {
            $model->exposedRdsCount = $map['ExposedRdsCount'];
        }

        if (isset($map['ExposedWeekPasswordMachineCount'])) {
            $model->exposedWeekPasswordMachineCount = $map['ExposedWeekPasswordMachineCount'];
        }

        if (isset($map['GatewayAssetCount'])) {
            $model->gatewayAssetCount = $map['GatewayAssetCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
