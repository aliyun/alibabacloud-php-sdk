<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class CheckServiceDeployableRequest extends Model
{
    /**
     * @var string
     */
    public $postPaidAmount;
    /**
     * @var string
     */
    public $prePaidAmount;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $serviceVersion;
    /**
     * @var string
     */
    public $trialType;
    protected $_name = [
        'postPaidAmount' => 'PostPaidAmount',
        'prePaidAmount'  => 'PrePaidAmount',
        'regionId'       => 'RegionId',
        'serviceId'      => 'ServiceId',
        'serviceVersion' => 'ServiceVersion',
        'trialType'      => 'TrialType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postPaidAmount) {
            $res['PostPaidAmount'] = $this->postPaidAmount;
        }

        if (null !== $this->prePaidAmount) {
            $res['PrePaidAmount'] = $this->prePaidAmount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
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
        if (isset($map['PostPaidAmount'])) {
            $model->postPaidAmount = $map['PostPaidAmount'];
        }

        if (isset($map['PrePaidAmount'])) {
            $model->prePaidAmount = $map['PrePaidAmount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        return $model;
    }
}
