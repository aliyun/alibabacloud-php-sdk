<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ProjectStatus extends Model
{
    /**
     * @var ServiceMeta[]
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
                $n1 = 0;
                foreach ($this->services as $item1) {
                    $res['services'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['services'] as $item1) {
                    $model->services[$n1++] = ServiceMeta::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
