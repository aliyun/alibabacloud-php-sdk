<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class DeleteAgentInstanceConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $attributes;
    protected $_name = [
        'attributes' => 'attributes',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['attributes'][$key1] = $value1;
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
        if (isset($map['attributes'])) {
            if (!empty($map['attributes'])) {
                $model->attributes = [];
                foreach ($map['attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
