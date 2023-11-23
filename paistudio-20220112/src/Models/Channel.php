<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
        'description'           => 'Description',
        'name'                  => 'Name',
        'properties'            => 'Properties',
        'required'              => 'Required',
        'supportedChannelTypes' => 'SupportedChannelTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->supportedChannelTypes) {
            $res['SupportedChannelTypes'] = $this->supportedChannelTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Channel
     */
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
            $model->properties = $map['Properties'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['SupportedChannelTypes'])) {
            if (!empty($map['SupportedChannelTypes'])) {
                $model->supportedChannelTypes = $map['SupportedChannelTypes'];
            }
        }

        return $model;
    }
}
