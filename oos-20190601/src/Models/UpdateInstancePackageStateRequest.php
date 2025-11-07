<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstancePackageStateRequest extends Model
{
    /**
     * @var string
     */
    public $configurationInfo;

    /**
     * @var string
     */
    public $configureAction;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'configurationInfo' => 'ConfigurationInfo',
        'configureAction' => 'ConfigureAction',
        'instanceId' => 'InstanceId',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'templateName' => 'TemplateName',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationInfo) {
            $res['ConfigurationInfo'] = $this->configurationInfo;
        }

        if (null !== $this->configureAction) {
            $res['ConfigureAction'] = $this->configureAction;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['ConfigurationInfo'])) {
            $model->configurationInfo = $map['ConfigurationInfo'];
        }

        if (isset($map['ConfigureAction'])) {
            $model->configureAction = $map['ConfigureAction'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
