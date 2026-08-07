<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCrawlerTypeCapabilitiesResponseBody\crawlerTypes;

use AlibabaCloud\Dara\Model;

class supportedOptionKeys extends Model
{
    /**
     * @var string[]
     */
    public $allowedValues;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'allowedValues' => 'AllowedValues',
        'defaultValue' => 'DefaultValue',
        'key' => 'Key',
        'required' => 'Required',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
        if (\is_array($this->allowedValues)) {
            Model::validateArray($this->allowedValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedValues) {
            if (\is_array($this->allowedValues)) {
                $res['AllowedValues'] = [];
                $n1 = 0;
                foreach ($this->allowedValues as $item1) {
                    $res['AllowedValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
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
        if (isset($map['AllowedValues'])) {
            if (!empty($map['AllowedValues'])) {
                $model->allowedValues = [];
                $n1 = 0;
                foreach ($map['AllowedValues'] as $item1) {
                    $model->allowedValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
