<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceDeployableRequest extends Model
{
    /**
     * @description Total amount of postpaid.
     *
     * @example 1.29
     *
     * @var string
     */
    public $postPaidAmount;

    /**
     * @description Total amount of prepayment.
     *
     * @example 0.0
     *
     * @var string
     */
    public $prePaidAmount;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     *
     * @example service-0e6fca6a51a544xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service version.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The trial type of the service instance. Valid values:
     *
     *   **Trial**: Trials are supported.
     *   **NotTrial**: Trials are not supported.
     *
     * @example NotTrial
     *
     * @var string
     */
    public $trialType;
    protected $_name = [
        'postPaidAmount' => 'PostPaidAmount',
        'prePaidAmount' => 'PrePaidAmount',
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'serviceVersion' => 'ServiceVersion',
        'trialType' => 'TrialType',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CheckServiceDeployableRequest
     */
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
