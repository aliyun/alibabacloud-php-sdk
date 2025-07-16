<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody\fields\transform;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @example user
     *
     * @var string
     */
    public $name;

    /**
     * @var transform[]
     */
    public $transform;

    /**
     * @example int
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'attributes' => 'Attributes',
        'name' => 'Name',
        'transform' => 'Transform',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->transform) {
            $res['Transform'] = [];
            if (null !== $this->transform && \is_array($this->transform)) {
                $n = 0;
                foreach ($this->transform as $item) {
                    $res['Transform'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = $map['Attributes'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Transform'])) {
            if (!empty($map['Transform'])) {
                $model->transform = [];
                $n = 0;
                foreach ($map['Transform'] as $item) {
                    $model->transform[$n++] = null !== $item ? transform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
