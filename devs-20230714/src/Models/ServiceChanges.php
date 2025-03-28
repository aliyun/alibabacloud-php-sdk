<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ServiceChanges extends Model
{
    /**
     * @var mixed[]
     */
    public $merge;
    protected $_name = [
        'merge' => 'merge',
    ];

    public function validate()
    {
        if (\is_array($this->merge)) {
            Model::validateArray($this->merge);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->merge) {
            if (\is_array($this->merge)) {
                $res['merge'] = [];
                foreach ($this->merge as $key1 => $value1) {
                    $res['merge'][$key1] = $value1;
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
        if (isset($map['merge'])) {
            if (!empty($map['merge'])) {
                $model->merge = [];
                foreach ($map['merge'] as $key1 => $value1) {
                    $model->merge[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
