<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDesktopsLiteRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var bool
     */
    public $enableInternetAccess;

    /**
     * @var string[]
     */
    public $endUserId;

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
    public $regionId;

    /**
     * @var string
     */
    public $userAssignMode;
    protected $_name = [
        'amount'               => 'Amount',
        'bandwidth'            => 'Bandwidth',
        'bundleId'             => 'BundleId',
        'enableInternetAccess' => 'EnableInternetAccess',
        'endUserId'            => 'EndUserId',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'regionId'             => 'RegionId',
        'userAssignMode'       => 'UserAssignMode',
    ];

    public function validate()
    {
        Model::validateRequired('endUserId', $this->endUserId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->enableInternetAccess) {
            $res['EnableInternetAccess'] = $this->enableInternetAccess;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userAssignMode) {
            $res['UserAssignMode'] = $this->userAssignMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDesktopsLiteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['EnableInternetAccess'])) {
            $model->enableInternetAccess = $map['EnableInternetAccess'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserAssignMode'])) {
            $model->userAssignMode = $map['UserAssignMode'];
        }

        return $model;
    }
}
