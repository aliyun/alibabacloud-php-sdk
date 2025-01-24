<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupScaleTimerRequest;

use AlibabaCloud\Dara\Model;

class scaleTimerInfos extends Model
{
    /**
     * @var int
     */
    public $buyResAmount;
    /**
     * @var string
     */
    public $cron;
    /**
     * @var int
     */
    public $keepDuration;
    /**
     * @var int
     */
    public $loadPolicy;
    /**
     * @var int
     */
    public $maxResAmount;
    /**
     * @var int
     */
    public $minResAmount;
    /**
     * @var float
     */
    public $ratioThreshold;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'buyResAmount'   => 'BuyResAmount',
        'cron'           => 'Cron',
        'keepDuration'   => 'KeepDuration',
        'loadPolicy'     => 'LoadPolicy',
        'maxResAmount'   => 'MaxResAmount',
        'minResAmount'   => 'MinResAmount',
        'ratioThreshold' => 'RatioThreshold',
        'type'           => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyResAmount) {
            $res['BuyResAmount'] = $this->buyResAmount;
        }

        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }

        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }

        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }

        if (null !== $this->maxResAmount) {
            $res['MaxResAmount'] = $this->maxResAmount;
        }

        if (null !== $this->minResAmount) {
            $res['MinResAmount'] = $this->minResAmount;
        }

        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BuyResAmount'])) {
            $model->buyResAmount = $map['BuyResAmount'];
        }

        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }

        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }

        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }

        if (isset($map['MaxResAmount'])) {
            $model->maxResAmount = $map['MaxResAmount'];
        }

        if (isset($map['MinResAmount'])) {
            $model->minResAmount = $map['MinResAmount'];
        }

        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
