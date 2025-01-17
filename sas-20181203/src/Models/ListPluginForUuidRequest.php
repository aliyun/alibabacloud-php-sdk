<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListPluginForUuidRequest extends Model
{
    /**
     * @var string[]
     */
    public $types;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'types' => 'Types',
        'uuid'  => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1           = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1           = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
