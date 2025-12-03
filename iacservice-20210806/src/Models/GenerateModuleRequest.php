<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GenerateModuleRequest extends Model
{
    /**
     * @var string
     */
    public $generateSource;

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
    public $syntax;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string
     */
    public $terraformResourceType;
    protected $_name = [
        'generateSource' => 'generateSource',
        'parameters' => 'parameters',
        'regionId' => 'regionId',
        'syntax' => 'syntax',
        'template' => 'template',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'terraformResourceType' => 'terraformResourceType',
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
        if (null !== $this->generateSource) {
            $res['generateSource'] = $this->generateSource;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->syntax) {
            $res['syntax'] = $this->syntax;
        }

        if (null !== $this->template) {
            $res['template'] = $this->template;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->terraformResourceType) {
            $res['terraformResourceType'] = $this->terraformResourceType;
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
        if (isset($map['generateSource'])) {
            $model->generateSource = $map['generateSource'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['syntax'])) {
            $model->syntax = $map['syntax'];
        }

        if (isset($map['template'])) {
            $model->template = $map['template'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['terraformResourceType'])) {
            $model->terraformResourceType = $map['terraformResourceType'];
        }

        return $model;
    }
}
