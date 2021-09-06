<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest\operationMetadata;
use AlibabaCloud\Tea\Model;

class CreateServiceInstanceShrinkRequest extends Model
{
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
    public $parametersShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $enableInstanceOps;

    /**
     * @var bool
     */
    public $enableAccountOps;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var operationMetadata
     */
    public $operationMetadata;
    protected $_name = [
        'regionId'          => 'RegionId',
        'serviceId'         => 'ServiceId',
        'serviceVersion'    => 'ServiceVersion',
        'parametersShrink'  => 'Parameters',
        'clientToken'       => 'ClientToken',
        'enableInstanceOps' => 'EnableInstanceOps',
        'enableAccountOps'  => 'EnableAccountOps',
        'templateName'      => 'TemplateName',
        'operationMetadata' => 'OperationMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableInstanceOps) {
            $res['EnableInstanceOps'] = $this->enableInstanceOps;
        }
        if (null !== $this->enableAccountOps) {
            $res['EnableAccountOps'] = $this->enableAccountOps;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->operationMetadata) {
            $res['OperationMetadata'] = null !== $this->operationMetadata ? $this->operationMetadata->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableInstanceOps'])) {
            $model->enableInstanceOps = $map['EnableInstanceOps'];
        }
        if (isset($map['EnableAccountOps'])) {
            $model->enableAccountOps = $map['EnableAccountOps'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['OperationMetadata'])) {
            $model->operationMetadata = operationMetadata::fromMap($map['OperationMetadata']);
        }

        return $model;
    }
}
