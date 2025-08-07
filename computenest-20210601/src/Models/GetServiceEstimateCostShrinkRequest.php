<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class GetServiceEstimateCostShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commodityShrink;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @var string
     */
    public $parametersShrink;

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
    public $serviceInstanceId;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $specificationName;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $trialType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'commodityShrink' => 'Commodity',
        'operationName' => 'OperationName',
        'parametersShrink' => 'Parameters',
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceVersion' => 'ServiceVersion',
        'specificationName' => 'SpecificationName',
        'templateName' => 'TemplateName',
        'trialType' => 'TrialType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->commodityShrink) {
            $res['Commodity'] = $this->commodityShrink;
        }

        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Commodity'])) {
            $model->commodityShrink = $map['Commodity'];
        }

        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }

        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        return $model;
    }
}
