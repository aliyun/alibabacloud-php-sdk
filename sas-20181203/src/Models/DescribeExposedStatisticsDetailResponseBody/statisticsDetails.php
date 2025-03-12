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
     * @description The system component that is exposed on the Internet.
     *
     * @example tomcat
     *
     * @var string
     */
    public $exposureComponent;

    /**
     * @description The public IP address that is exposed on the Internet.
     *
     * @example 123.57.XX.XX
     *
     * @var string
     */
    public $exposureIp;

    /**
     * @description The port that is exposed on the Internet.
     *
     * @example 22
     *
     * @var string
     */
    public $exposurePort;

    /**
     * @description The resource from which the asset is exposed. Valid values:
     *
     *   **INTERNET_IP**: the IP address of the Elastic Compute Service (ECS) instance
     *   **SLB**: the public IP address of the SLB instance
     *   **EIP**: the elastic IP address (EIP)
     *   **DNAT**: the NAT gateway that connects to the Internet by using the DNAT feature
     *
     * @example SLB
     *
     * @var string
     */
    public $exposureType;

    /**
     * @description The ID of the instance to which the resource belongs. The valid values of this parameter vary based on the value of the ExposureType parameter.
     *
     *   If the value of the **ExposureType** parameter is **INTERNET_IP**, the value of this parameter is an empty string.
     *   If the value of the **ExposureType** parameter is **SLB**, the value of this parameter is the ID of the Internet-facing SLB instance.
     *   If the value of the **ExposureType** parameter is **EIP**, the value of this parameter is the ID of the EIP.
     *   If the value of the **ExposureType** parameter is **DNAT**, the value of this parameter is the ID of the NAT gateway.
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
     * @description The region ID of the asset.
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
