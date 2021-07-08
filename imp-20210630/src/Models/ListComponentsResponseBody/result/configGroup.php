<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result;

use AlibabaCloud\Tea\Model;

class configGroup extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'key'      => 'Key',
        'value'    => 'Value',
        'category' => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
