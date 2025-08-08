<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\TemplateParameterSchema;

use AlibabaCloud\Dara\Model;

class roleExtension extends Model
{
    /**
     * @var string[]
     */
    public $authorities;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'authorities' => 'authorities',
        'name' => 'name',
        'service' => 'service',
    ];

    public function validate()
    {
        if (\is_array($this->authorities)) {
            Model::validateArray($this->authorities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorities) {
            if (\is_array($this->authorities)) {
                $res['authorities'] = [];
                $n1 = 0;
                foreach ($this->authorities as $item1) {
                    $res['authorities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->service) {
            $res['service'] = $this->service;
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
        if (isset($map['authorities'])) {
            if (!empty($map['authorities'])) {
                $model->authorities = [];
                $n1 = 0;
                foreach ($map['authorities'] as $item1) {
                    $model->authorities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['service'])) {
            $model->service = $map['service'];
        }

        return $model;
    }
}
