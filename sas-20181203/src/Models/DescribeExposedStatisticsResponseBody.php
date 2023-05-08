<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeExposedStatisticsResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $exposedAsapVulCount;

    /**
     * @description The total number of low-risk vulnerabilities that are exposed on the Internet and can be exploited by attackers.
     *
     * @example 7
     *
     * @var int
     */
    public $exposedComponentCount;

    /**
     * @description DescribeExposedStatistics
     *
     * @example 100
     *
     * @var int
     */
    public $exposedInstanceCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $exposedIpCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5
     *
     * @var int
     */
    public $exposedLaterVulCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $exposedNntfVulCount;

    /**
     * @description Queries the exposure statistics of the assets on the Internet.
     *
     * @example 6
     *
     * @var int
     */
    public $exposedPortCount;

    /**
     * @example 20
     *
     * @var int
     */
    public $exposedWeekPasswordMachineCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $gatewayAssetCount;

    /**
     * @description The total number of servers that are exposed on the Internet.
     *
     * @example 4B897D10-B3CD-4A93-A5FA-591F3ED12A86
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exposedAsapVulCount'             => 'ExposedAsapVulCount',
        'exposedComponentCount'           => 'ExposedComponentCount',
        'exposedInstanceCount'            => 'ExposedInstanceCount',
        'exposedIpCount'                  => 'ExposedIpCount',
        'exposedLaterVulCount'            => 'ExposedLaterVulCount',
        'exposedNntfVulCount'             => 'ExposedNntfVulCount',
        'exposedPortCount'                => 'ExposedPortCount',
        'exposedWeekPasswordMachineCount' => 'ExposedWeekPasswordMachineCount',
        'gatewayAssetCount'               => 'GatewayAssetCount',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposedAsapVulCount) {
            $res['ExposedAsapVulCount'] = $this->exposedAsapVulCount;
        }
        if (null !== $this->exposedComponentCount) {
            $res['ExposedComponentCount'] = $this->exposedComponentCount;
        }
        if (null !== $this->exposedInstanceCount) {
            $res['ExposedInstanceCount'] = $this->exposedInstanceCount;
        }
        if (null !== $this->exposedIpCount) {
            $res['ExposedIpCount'] = $this->exposedIpCount;
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

    /**
     * @param array $map
     *
     * @return DescribeExposedStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExposedAsapVulCount'])) {
            $model->exposedAsapVulCount = $map['ExposedAsapVulCount'];
        }
        if (isset($map['ExposedComponentCount'])) {
            $model->exposedComponentCount = $map['ExposedComponentCount'];
        }
        if (isset($map['ExposedInstanceCount'])) {
            $model->exposedInstanceCount = $map['ExposedInstanceCount'];
        }
        if (isset($map['ExposedIpCount'])) {
            $model->exposedIpCount = $map['ExposedIpCount'];
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
