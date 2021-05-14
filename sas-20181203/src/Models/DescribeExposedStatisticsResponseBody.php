<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $exposedLaterVulCount;

    /**
     * @var int
     */
    public $exposedComponentCount;

    /**
     * @var int
     */
    public $exposedPortCount;

    /**
     * @var int
     */
    public $exposedInstanceCount;

    /**
     * @var int
     */
    public $exposedWeekPasswordMachineCount;

    /**
     * @var int
     */
    public $exposedNntfVulCount;

    /**
     * @var int
     */
    public $gatewayAssetCount;

    /**
     * @var int
     */
    public $exposedIpCount;

    /**
     * @var int
     */
    public $exposedAsapVulCount;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'exposedLaterVulCount'            => 'ExposedLaterVulCount',
        'exposedComponentCount'           => 'ExposedComponentCount',
        'exposedPortCount'                => 'ExposedPortCount',
        'exposedInstanceCount'            => 'ExposedInstanceCount',
        'exposedWeekPasswordMachineCount' => 'ExposedWeekPasswordMachineCount',
        'exposedNntfVulCount'             => 'ExposedNntfVulCount',
        'gatewayAssetCount'               => 'GatewayAssetCount',
        'exposedIpCount'                  => 'ExposedIpCount',
        'exposedAsapVulCount'             => 'ExposedAsapVulCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->exposedLaterVulCount) {
            $res['ExposedLaterVulCount'] = $this->exposedLaterVulCount;
        }
        if (null !== $this->exposedComponentCount) {
            $res['ExposedComponentCount'] = $this->exposedComponentCount;
        }
        if (null !== $this->exposedPortCount) {
            $res['ExposedPortCount'] = $this->exposedPortCount;
        }
        if (null !== $this->exposedInstanceCount) {
            $res['ExposedInstanceCount'] = $this->exposedInstanceCount;
        }
        if (null !== $this->exposedWeekPasswordMachineCount) {
            $res['ExposedWeekPasswordMachineCount'] = $this->exposedWeekPasswordMachineCount;
        }
        if (null !== $this->exposedNntfVulCount) {
            $res['ExposedNntfVulCount'] = $this->exposedNntfVulCount;
        }
        if (null !== $this->gatewayAssetCount) {
            $res['GatewayAssetCount'] = $this->gatewayAssetCount;
        }
        if (null !== $this->exposedIpCount) {
            $res['ExposedIpCount'] = $this->exposedIpCount;
        }
        if (null !== $this->exposedAsapVulCount) {
            $res['ExposedAsapVulCount'] = $this->exposedAsapVulCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExposedLaterVulCount'])) {
            $model->exposedLaterVulCount = $map['ExposedLaterVulCount'];
        }
        if (isset($map['ExposedComponentCount'])) {
            $model->exposedComponentCount = $map['ExposedComponentCount'];
        }
        if (isset($map['ExposedPortCount'])) {
            $model->exposedPortCount = $map['ExposedPortCount'];
        }
        if (isset($map['ExposedInstanceCount'])) {
            $model->exposedInstanceCount = $map['ExposedInstanceCount'];
        }
        if (isset($map['ExposedWeekPasswordMachineCount'])) {
            $model->exposedWeekPasswordMachineCount = $map['ExposedWeekPasswordMachineCount'];
        }
        if (isset($map['ExposedNntfVulCount'])) {
            $model->exposedNntfVulCount = $map['ExposedNntfVulCount'];
        }
        if (isset($map['GatewayAssetCount'])) {
            $model->gatewayAssetCount = $map['GatewayAssetCount'];
        }
        if (isset($map['ExposedIpCount'])) {
            $model->exposedIpCount = $map['ExposedIpCount'];
        }
        if (isset($map['ExposedAsapVulCount'])) {
            $model->exposedAsapVulCount = $map['ExposedAsapVulCount'];
        }

        return $model;
    }
}
