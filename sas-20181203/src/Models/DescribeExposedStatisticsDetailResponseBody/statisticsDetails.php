<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponseBody;

use AlibabaCloud\Tea\Model;

class statisticsDetails extends Model
{
    /**
     * @var string
     */
    public $exposureIp;

    /**
     * @var string
     */
    public $exposurePort;

    /**
     * @var string
     */
    public $exposureTypeInstanceName;

    /**
     * @var int
     */
    public $exposedCount;

    /**
     * @var string
     */
    public $exposureType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $exposureComponent;

    /**
     * @var string
     */
    public $exposureTypeId;
    protected $_name = [
        'exposureIp'               => 'ExposureIp',
        'exposurePort'             => 'ExposurePort',
        'exposureTypeInstanceName' => 'ExposureTypeInstanceName',
        'exposedCount'             => 'ExposedCount',
        'exposureType'             => 'ExposureType',
        'regionId'                 => 'RegionId',
        'exposureComponent'        => 'ExposureComponent',
        'exposureTypeId'           => 'ExposureTypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposureIp) {
            $res['ExposureIp'] = $this->exposureIp;
        }
        if (null !== $this->exposurePort) {
            $res['ExposurePort'] = $this->exposurePort;
        }
        if (null !== $this->exposureTypeInstanceName) {
            $res['ExposureTypeInstanceName'] = $this->exposureTypeInstanceName;
        }
        if (null !== $this->exposedCount) {
            $res['ExposedCount'] = $this->exposedCount;
        }
        if (null !== $this->exposureType) {
            $res['ExposureType'] = $this->exposureType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->exposureComponent) {
            $res['ExposureComponent'] = $this->exposureComponent;
        }
        if (null !== $this->exposureTypeId) {
            $res['ExposureTypeId'] = $this->exposureTypeId;
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
        if (isset($map['ExposureIp'])) {
            $model->exposureIp = $map['ExposureIp'];
        }
        if (isset($map['ExposurePort'])) {
            $model->exposurePort = $map['ExposurePort'];
        }
        if (isset($map['ExposureTypeInstanceName'])) {
            $model->exposureTypeInstanceName = $map['ExposureTypeInstanceName'];
        }
        if (isset($map['ExposedCount'])) {
            $model->exposedCount = $map['ExposedCount'];
        }
        if (isset($map['ExposureType'])) {
            $model->exposureType = $map['ExposureType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExposureComponent'])) {
            $model->exposureComponent = $map['ExposureComponent'];
        }
        if (isset($map['ExposureTypeId'])) {
            $model->exposureTypeId = $map['ExposureTypeId'];
        }

        return $model;
    }
}
