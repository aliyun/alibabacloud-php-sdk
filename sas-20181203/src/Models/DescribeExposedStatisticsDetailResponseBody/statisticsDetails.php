<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponseBody;

use AlibabaCloud\Dara\Model;

class statisticsDetails extends Model
{
    /**
     * @var int
     */
    public $exposedCount;

    /**
     * @var string
     */
    public $exposureComponent;

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
    public $exposureType;

    /**
     * @var string
     */
    public $exposureTypeId;

    /**
     * @var string
     */
    public $exposureTypeInstanceName;

    /**
     * @var string
     */
    public $forwardPort;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'exposedCount' => 'ExposedCount',
        'exposureComponent' => 'ExposureComponent',
        'exposureIp' => 'ExposureIp',
        'exposurePort' => 'ExposurePort',
        'exposureType' => 'ExposureType',
        'exposureTypeId' => 'ExposureTypeId',
        'exposureTypeInstanceName' => 'ExposureTypeInstanceName',
        'forwardPort' => 'ForwardPort',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
