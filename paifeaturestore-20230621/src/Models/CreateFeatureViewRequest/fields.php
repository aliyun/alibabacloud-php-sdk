<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureViewRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureViewRequest\fields\transform;

class fields extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var int
     */
    public $dimension;

    /**
     * @var string
     */
    public $name;

    /**
     * @var transform[]
     */
    public $transform;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attributes' => 'Attributes',
        'dimension' => 'Dimension',
        'name' => 'Name',
        'transform' => 'Transform',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->transform)) {
            Model::validateArray($this->transform);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                $n1 = 0;
                foreach ($this->attributes as $item1) {
                    $res['Attributes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->transform) {
            if (\is_array($this->transform)) {
                $res['Transform'] = [];
                $n1 = 0;
                foreach ($this->transform as $item1) {
                    $res['Transform'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n1 = 0;
                foreach ($map['Attributes'] as $item1) {
                    $model->attributes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Transform'])) {
            if (!empty($map['Transform'])) {
                $model->transform = [];
                $n1 = 0;
                foreach ($map['Transform'] as $item1) {
                    $model->transform[$n1] = transform::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
