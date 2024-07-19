<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class GenerateServicePolicyRequest extends Model
{
    /**
     * @description The type of operation N for which you want to generate the policy information.
     *
     * Valid values:
     *
     *   CreateServiceInstance: creates a serviceInstance by calling the CreateServiceInstance operation.
     *   UpdateServiceInstance: updates a serviceInstance by calling the UpdateServiceInstance operation.
     *   DeleteServiceInstance: deletes a serviceInstance by calling the DeleteServiceInstance operation.
     *
     * >  The default value is the combination of all valid values.
     * @var string[]
     */
    public $operationTypes;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-b3e9ed878b0c4xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service version.
     *
     * @example draft
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The name of the template.
     *
     * @example GPU-单机版
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The trial policy. Valid values:
     *
     *   Trial: Trials are supported.
     *   NotTrial: Trials are not supported.
     *
     * @example NotTrial
     *
     * @var string
     */
    public $trialType;
    protected $_name = [
        'operationTypes' => 'OperationTypes',
        'regionId'       => 'RegionId',
        'serviceId'      => 'ServiceId',
        'serviceVersion' => 'ServiceVersion',
        'templateName'   => 'TemplateName',
        'trialType'      => 'TrialType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationTypes) {
            $res['OperationTypes'] = $this->operationTypes;
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->trialType) {
            $res['TrialType'] = $this->trialType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateServicePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationTypes'])) {
            if (!empty($map['OperationTypes'])) {
                $model->operationTypes = $map['OperationTypes'];
            }
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TrialType'])) {
            $model->trialType = $map['TrialType'];
        }

        return $model;
    }
}
