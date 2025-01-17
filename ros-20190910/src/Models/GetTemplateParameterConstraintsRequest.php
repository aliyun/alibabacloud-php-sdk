<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsRequest\parameters;

class GetTemplateParameterConstraintsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var parameters[]
     */
    public $parameters;
    /**
     * @var string[]
     */
    public $parametersKeyFilter;
    /**
     * @var string[]
     */
    public $parametersOrder;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $stackId;
    /**
     * @var string
     */
    public $templateBody;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $templateURL;
    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'clientToken'         => 'ClientToken',
        'parameters'          => 'Parameters',
        'parametersKeyFilter' => 'ParametersKeyFilter',
        'parametersOrder'     => 'ParametersOrder',
        'regionId'            => 'RegionId',
        'stackId'             => 'StackId',
        'templateBody'        => 'TemplateBody',
        'templateId'          => 'TemplateId',
        'templateURL'         => 'TemplateURL',
        'templateVersion'     => 'TemplateVersion',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->parametersKeyFilter)) {
            Model::validateArray($this->parametersKeyFilter);
        }
        if (\is_array($this->parametersOrder)) {
            Model::validateArray($this->parametersOrder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1                = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->parametersKeyFilter) {
            if (\is_array($this->parametersKeyFilter)) {
                $res['ParametersKeyFilter'] = [];
                $n1                         = 0;
                foreach ($this->parametersKeyFilter as $item1) {
                    $res['ParametersKeyFilter'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parametersOrder) {
            if (\is_array($this->parametersOrder)) {
                $res['ParametersOrder'] = [];
                $n1                     = 0;
                foreach ($this->parametersOrder as $item1) {
                    $res['ParametersOrder'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1                = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
                }
            }
        }

        if (isset($map['ParametersKeyFilter'])) {
            if (!empty($map['ParametersKeyFilter'])) {
                $model->parametersKeyFilter = [];
                $n1                         = 0;
                foreach ($map['ParametersKeyFilter'] as $item1) {
                    $model->parametersKeyFilter[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParametersOrder'])) {
            if (!empty($map['ParametersOrder'])) {
                $model->parametersOrder = [];
                $n1                     = 0;
                foreach ($map['ParametersOrder'] as $item1) {
                    $model->parametersOrder[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
