<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ModifyPolicyInstanceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instances;
    protected $_name = [
        'instances' => 'instances',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1               = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1++] = $item1;
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
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1               = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
