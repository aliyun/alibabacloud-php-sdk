<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListFunctionRestrictionsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $meta;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'meta' => 'meta',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['meta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                foreach ($map['meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
