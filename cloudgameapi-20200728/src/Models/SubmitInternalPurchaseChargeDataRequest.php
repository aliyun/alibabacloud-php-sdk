<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class SubmitInternalPurchaseChargeDataRequest extends Model
{
    /**
     * @var float
     */
    public $activeUserRetentionRateOneDay;

    /**
     * @var float
     */
    public $activeUserRetentionRateSevenDay;

    /**
     * @var float
     */
    public $activeUserRetentionRateThirtyDay;

    /**
     * @var float
     */
    public $arpu;

    /**
     * @var string
     */
    public $chargeDate;

    /**
     * @var int
     */
    public $dau;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var int
     */
    public $mau;

    /**
     * @var float
     */
    public $newUserRetentionRateOneDay;

    /**
     * @var float
     */
    public $newUserRetentionRateSevenDay;

    /**
     * @var float
     */
    public $newUserRetentionRateThirtyDay;

    /**
     * @var float
     */
    public $paymentConversionRate;

    /**
     * @var float
     */
    public $playTimeAverageOneDay;

    /**
     * @var float
     */
    public $playTimeAverageThirtyDay;

    /**
     * @var float
     */
    public $playTimeNinetyPointsOneDay;

    /**
     * @var float
     */
    public $playTimeNinetyPointsThirtyDay;

    /**
     * @var string
     */
    public $playTimeRangeOneDay;

    /**
     * @var string
     */
    public $playTimeRangeThirtyDay;

    /**
     * @var float
     */
    public $userActivationRate;
    protected $_name = [
        'activeUserRetentionRateOneDay'    => 'ActiveUserRetentionRateOneDay',
        'activeUserRetentionRateSevenDay'  => 'ActiveUserRetentionRateSevenDay',
        'activeUserRetentionRateThirtyDay' => 'ActiveUserRetentionRateThirtyDay',
        'arpu'                             => 'Arpu',
        'chargeDate'                       => 'ChargeDate',
        'dau'                              => 'Dau',
        'gameId'                           => 'GameId',
        'mau'                              => 'Mau',
        'newUserRetentionRateOneDay'       => 'NewUserRetentionRateOneDay',
        'newUserRetentionRateSevenDay'     => 'NewUserRetentionRateSevenDay',
        'newUserRetentionRateThirtyDay'    => 'NewUserRetentionRateThirtyDay',
        'paymentConversionRate'            => 'PaymentConversionRate',
        'playTimeAverageOneDay'            => 'PlayTimeAverageOneDay',
        'playTimeAverageThirtyDay'         => 'PlayTimeAverageThirtyDay',
        'playTimeNinetyPointsOneDay'       => 'PlayTimeNinetyPointsOneDay',
        'playTimeNinetyPointsThirtyDay'    => 'PlayTimeNinetyPointsThirtyDay',
        'playTimeRangeOneDay'              => 'PlayTimeRangeOneDay',
        'playTimeRangeThirtyDay'           => 'PlayTimeRangeThirtyDay',
        'userActivationRate'               => 'UserActivationRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeUserRetentionRateOneDay) {
            $res['ActiveUserRetentionRateOneDay'] = $this->activeUserRetentionRateOneDay;
        }
        if (null !== $this->activeUserRetentionRateSevenDay) {
            $res['ActiveUserRetentionRateSevenDay'] = $this->activeUserRetentionRateSevenDay;
        }
        if (null !== $this->activeUserRetentionRateThirtyDay) {
            $res['ActiveUserRetentionRateThirtyDay'] = $this->activeUserRetentionRateThirtyDay;
        }
        if (null !== $this->arpu) {
            $res['Arpu'] = $this->arpu;
        }
        if (null !== $this->chargeDate) {
            $res['ChargeDate'] = $this->chargeDate;
        }
        if (null !== $this->dau) {
            $res['Dau'] = $this->dau;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->mau) {
            $res['Mau'] = $this->mau;
        }
        if (null !== $this->newUserRetentionRateOneDay) {
            $res['NewUserRetentionRateOneDay'] = $this->newUserRetentionRateOneDay;
        }
        if (null !== $this->newUserRetentionRateSevenDay) {
            $res['NewUserRetentionRateSevenDay'] = $this->newUserRetentionRateSevenDay;
        }
        if (null !== $this->newUserRetentionRateThirtyDay) {
            $res['NewUserRetentionRateThirtyDay'] = $this->newUserRetentionRateThirtyDay;
        }
        if (null !== $this->paymentConversionRate) {
            $res['PaymentConversionRate'] = $this->paymentConversionRate;
        }
        if (null !== $this->playTimeAverageOneDay) {
            $res['PlayTimeAverageOneDay'] = $this->playTimeAverageOneDay;
        }
        if (null !== $this->playTimeAverageThirtyDay) {
            $res['PlayTimeAverageThirtyDay'] = $this->playTimeAverageThirtyDay;
        }
        if (null !== $this->playTimeNinetyPointsOneDay) {
            $res['PlayTimeNinetyPointsOneDay'] = $this->playTimeNinetyPointsOneDay;
        }
        if (null !== $this->playTimeNinetyPointsThirtyDay) {
            $res['PlayTimeNinetyPointsThirtyDay'] = $this->playTimeNinetyPointsThirtyDay;
        }
        if (null !== $this->playTimeRangeOneDay) {
            $res['PlayTimeRangeOneDay'] = $this->playTimeRangeOneDay;
        }
        if (null !== $this->playTimeRangeThirtyDay) {
            $res['PlayTimeRangeThirtyDay'] = $this->playTimeRangeThirtyDay;
        }
        if (null !== $this->userActivationRate) {
            $res['UserActivationRate'] = $this->userActivationRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitInternalPurchaseChargeDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveUserRetentionRateOneDay'])) {
            $model->activeUserRetentionRateOneDay = $map['ActiveUserRetentionRateOneDay'];
        }
        if (isset($map['ActiveUserRetentionRateSevenDay'])) {
            $model->activeUserRetentionRateSevenDay = $map['ActiveUserRetentionRateSevenDay'];
        }
        if (isset($map['ActiveUserRetentionRateThirtyDay'])) {
            $model->activeUserRetentionRateThirtyDay = $map['ActiveUserRetentionRateThirtyDay'];
        }
        if (isset($map['Arpu'])) {
            $model->arpu = $map['Arpu'];
        }
        if (isset($map['ChargeDate'])) {
            $model->chargeDate = $map['ChargeDate'];
        }
        if (isset($map['Dau'])) {
            $model->dau = $map['Dau'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['Mau'])) {
            $model->mau = $map['Mau'];
        }
        if (isset($map['NewUserRetentionRateOneDay'])) {
            $model->newUserRetentionRateOneDay = $map['NewUserRetentionRateOneDay'];
        }
        if (isset($map['NewUserRetentionRateSevenDay'])) {
            $model->newUserRetentionRateSevenDay = $map['NewUserRetentionRateSevenDay'];
        }
        if (isset($map['NewUserRetentionRateThirtyDay'])) {
            $model->newUserRetentionRateThirtyDay = $map['NewUserRetentionRateThirtyDay'];
        }
        if (isset($map['PaymentConversionRate'])) {
            $model->paymentConversionRate = $map['PaymentConversionRate'];
        }
        if (isset($map['PlayTimeAverageOneDay'])) {
            $model->playTimeAverageOneDay = $map['PlayTimeAverageOneDay'];
        }
        if (isset($map['PlayTimeAverageThirtyDay'])) {
            $model->playTimeAverageThirtyDay = $map['PlayTimeAverageThirtyDay'];
        }
        if (isset($map['PlayTimeNinetyPointsOneDay'])) {
            $model->playTimeNinetyPointsOneDay = $map['PlayTimeNinetyPointsOneDay'];
        }
        if (isset($map['PlayTimeNinetyPointsThirtyDay'])) {
            $model->playTimeNinetyPointsThirtyDay = $map['PlayTimeNinetyPointsThirtyDay'];
        }
        if (isset($map['PlayTimeRangeOneDay'])) {
            $model->playTimeRangeOneDay = $map['PlayTimeRangeOneDay'];
        }
        if (isset($map['PlayTimeRangeThirtyDay'])) {
            $model->playTimeRangeThirtyDay = $map['PlayTimeRangeThirtyDay'];
        }
        if (isset($map['UserActivationRate'])) {
            $model->userActivationRate = $map['UserActivationRate'];
        }

        return $model;
    }
}
