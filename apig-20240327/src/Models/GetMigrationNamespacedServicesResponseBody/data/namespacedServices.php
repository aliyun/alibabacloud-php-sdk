<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationNamespacedServicesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationNamespacedServicesResponseBody\data\namespacedServices\services;

class namespacedServices extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var services[]
     */
    public $services;
    protected $_name = [
        'namespace' => 'namespace',
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
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['services'] = [];
                $n1 = 0;
                foreach ($this->services as $item1) {
                    $res['services'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = [];
                $n1 = 0;
                foreach ($map['services'] as $item1) {
                    $model->services[$n1] = services::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
