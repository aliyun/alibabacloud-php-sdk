<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class EnvironmentSnapshot extends Model
{
    /**
     * @var ServiceInstance[]
     */
    public $services;
    protected $_name = [
        'services' => 'services',
    ];

    public function validate()
    {
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['services'] = [];
                foreach ($this->services as $key1 => $value1) {
                    $res['services'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = [];
                foreach ($map['services'] as $key1 => $value1) {
                    $model->services[$key1] = ServiceInstance::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
