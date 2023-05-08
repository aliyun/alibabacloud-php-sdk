<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponseBody;

use AlibabaCloud\Tea\Model;

class statisticsDetails extends Model
{
    /**
     * @description The total number of system vulnerabilities that are detected on your server and are exposed on the Internet.
     *
     * @example 0
     *
     * @var int
     */
    public $exposedCount;

    /**
     * @description Queries the gateway assets, ports, system components, or public IP addresses that are exposed on the Internet.
     *
     * @example tomcat
     *
     * @var string
     */
    public $exposureComponent;

    /**
     * @description The type of the gateway asset. This parameter is required when the **StatisticsType** parameter is set to **exposureType**. Valid values:
     *
     *   **SLB**: the public IP address of a Server Load Balancer (SLB) instance
     *   **DNAT**: the NAT gateway that connects to the Internet by using the DNAT feature
     *
     * @example 123.57.XX.XX
     *
     * @var string
     */
    public $exposureIp;

    /**
     * @description The number of entries returned per page.
     *
     * @example 22
     *
     * @var string
     */
    public $exposurePort;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example SLB
     *
     * @var string
     */
    public $exposureType;

    /**
     * @description DescribeExposedStatisticsDetail
     *
     * @example lb-2ze4rso39h4nczcqs****
     *
     * @var string
     */
    public $exposureTypeId;

    /**
     * @description The name of the gateway asset that is exposed on the Internet.
     *
     * @example ngw-bp1vkbju8f3w87c9v****
     *
     * @var string
     */
    public $exposureTypeInstanceName;

    /**
     * @description 20
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'exposedCount'             => 'ExposedCount',
        'exposureComponent'        => 'ExposureComponent',
        'exposureIp'               => 'ExposureIp',
        'exposurePort'             => 'ExposurePort',
        'exposureType'             => 'ExposureType',
        'exposureTypeId'           => 'ExposureTypeId',
        'exposureTypeInstanceName' => 'ExposureTypeInstanceName',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposedCount) {
            $res['ExposedCount'] = $this->exposedCount;
        }
        if (null !== $this->exposureComponent) {
            $res['ExposureComponent'] = $this->exposureComponent;
        }
        if (null !== $this->exposureIp) {
            $res['ExposureIp'] = $this->exposureIp;
        }
        if (null !== $this->exposurePort) {
            $res['ExposurePort'] = $this->exposurePort;
        }
        if (null !== $this->exposureType) {
            $res['ExposureType'] = $this->exposureType;
        }
        if (null !== $this->exposureTypeId) {
            $res['ExposureTypeId'] = $this->exposureTypeId;
        }
        if (null !== $this->exposureTypeInstanceName) {
            $res['ExposureTypeInstanceName'] = $this->exposureTypeInstanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statisticsDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExposedCount'])) {
            $model->exposedCount = $map['ExposedCount'];
        }
        if (isset($map['ExposureComponent'])) {
            $model->exposureComponent = $map['ExposureComponent'];
        }
        if (isset($map['ExposureIp'])) {
            $model->exposureIp = $map['ExposureIp'];
        }
        if (isset($map['ExposurePort'])) {
            $model->exposurePort = $map['ExposurePort'];
        }
        if (isset($map['ExposureType'])) {
            $model->exposureType = $map['ExposureType'];
        }
        if (isset($map['ExposureTypeId'])) {
            $model->exposureTypeId = $map['ExposureTypeId'];
        }
        if (isset($map['ExposureTypeInstanceName'])) {
            $model->exposureTypeInstanceName = $map['ExposureTypeInstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
