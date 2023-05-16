<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetServiceEstimateCostRequest extends Model
{
    /**
     * @example mRdxWuW2ts
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example {\"PayType\":\"PostPaid\",\"InstancePassword\":\"xxxxxxxxxx\",\"EcsInstanceType\":\"ecs.g6.large\",\"VSwitchId\":\"vsw-0jlueyydpuekoxxxxxxxx\",\"VpcId\":\"vpc-0jlps6mjbgvpqxxxxxxxx\",\"ZoneId\":\"cn-wulanchabu-a\",\"Enable\":false,\"RegionId\":\"cn-wulanchabu\"}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example service-16fbd358d75e49xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example si-d6ab3a63ccbb4b17****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @example draft
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @example Custom_Image_Ecs
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'parameters'        => 'Parameters',
        'regionId'          => 'RegionId',
        'serviceId'         => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceVersion'    => 'ServiceVersion',
        'templateName'      => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceEstimateCostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
