<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class BuySessionPackageRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

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
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $sessionPackageName;

    /**
     * @var string
     */
    public $sessionPackageType;

    /**
     * @var string
     */
    public $sessionSpec;

    /**
     * @var string
     */
    public $sessionType;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'chargeType' => 'ChargeType',
        'maxSessions' => 'MaxSessions',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'projectId' => 'ProjectId',
        'region' => 'Region',
        'sessionPackageName' => 'SessionPackageName',
        'sessionPackageType' => 'SessionPackageType',
        'sessionSpec' => 'SessionSpec',
        'sessionType' => 'SessionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

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

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->sessionPackageName) {
            $res['SessionPackageName'] = $this->sessionPackageName;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

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

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SessionPackageName'])) {
            $model->sessionPackageName = $map['SessionPackageName'];
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
