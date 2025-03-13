<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class AskSessionPackagePriceRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $maxSessions;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 0
     *
     * @var string
     */
    public $sessionPackageType;

    /**
     * @description This parameter is required.
     *
     * @example appstreaming.general.entry
     *
     * @var string
     */
    public $sessionSpec;

    /**
     * @description This parameter is required.
     *
     * @example Windows
     *
     * @var string
     */
    public $sessionType;
    protected $_name = [
        'chargeType'         => 'ChargeType',
        'maxSessions'        => 'MaxSessions',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'region'             => 'Region',
        'sessionPackageType' => 'SessionPackageType',
        'sessionSpec'        => 'SessionSpec',
        'sessionType'        => 'SessionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->maxSessions) {
            $res['MaxSessions'] = $this->maxSessions;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sessionPackageType) {
            $res['SessionPackageType'] = $this->sessionPackageType;
        }
        if (null !== $this->sessionSpec) {
            $res['SessionSpec'] = $this->sessionSpec;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AskSessionPackagePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['MaxSessions'])) {
            $model->maxSessions = $map['MaxSessions'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SessionPackageType'])) {
            $model->sessionPackageType = $map['SessionPackageType'];
        }
        if (isset($map['SessionSpec'])) {
            $model->sessionSpec = $map['SessionSpec'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        return $model;
    }
}
