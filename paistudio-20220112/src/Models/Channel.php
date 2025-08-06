<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class Channel extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string[]
     */
    public $supportedChannelTypes;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'properties' => 'Properties',
        'required' => 'Required',
        'supportedChannelTypes' => 'SupportedChannelTypes',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->supportedChannelTypes)) {
            Model::validateArray($this->supportedChannelTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->supportedChannelTypes) {
            if (\is_array($this->supportedChannelTypes)) {
                $res['SupportedChannelTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedChannelTypes as $item1) {
                    $res['SupportedChannelTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['SupportedChannelTypes'])) {
            if (!empty($map['SupportedChannelTypes'])) {
                $model->supportedChannelTypes = [];
                $n1 = 0;
                foreach ($map['SupportedChannelTypes'] as $item1) {
                    $model->supportedChannelTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
