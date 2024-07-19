<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class GetServiceProvisionsRequest extends Model
{
    /**
     * @description The parameters configured for the service instance.
     *
     * @example {\\"RegionId\\":\\"cn-hangzhou\\",\\"ZoneId\\":\\"cn-hangzhou-g\\",\\"EcsInstanceType\\":\\"ecs.g5.large\\",\\"InstancePassword\\":\\"xxxxxxxx\\",\\"PayType\\":\\"PostPaid\\",\\"PayPeriodUnit\\":\\"Month\\",\\"PayPeriod\\":1}
     *
     * @var mixed[]
     */
    public $parameters;

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
     * @example service-0efc0db451794bxxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The version of the service.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The template name.
     *
     * @example ECS
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
     * @example Trial
     *
     * @var string
     */
    public $trialType;
    protected $_name = [
        'parameters'     => 'Parameters',
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
     * @return GetServiceProvisionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
