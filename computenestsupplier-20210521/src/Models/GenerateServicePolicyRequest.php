<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class GenerateServicePolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $operationTypes;
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
    public $templateName;
    /**
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
        if (\is_array($this->operationTypes)) {
            Model::validateArray($this->operationTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationTypes) {
            if (\is_array($this->operationTypes)) {
                $res['OperationTypes'] = [];
                $n1                    = 0;
                foreach ($this->operationTypes as $item1) {
                    $res['OperationTypes'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationTypes'])) {
            if (!empty($map['OperationTypes'])) {
                $model->operationTypes = [];
                $n1                    = 0;
                foreach ($map['OperationTypes'] as $item1) {
                    $model->operationTypes[$n1++] = $item1;
                }
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
