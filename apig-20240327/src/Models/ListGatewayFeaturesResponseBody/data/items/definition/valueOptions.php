<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayFeaturesResponseBody\data\items\definition;

use AlibabaCloud\Dara\Model;

class valueOptions extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'key' => 'key',
        'label' => 'label',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
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
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        return $model;
    }
}
