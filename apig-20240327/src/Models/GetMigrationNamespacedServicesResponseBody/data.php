<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationNamespacedServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationNamespacedServicesResponseBody\data\namespacedServices;

class data extends Model
{
    /**
     * @var namespacedServices[]
     */
    public $namespacedServices;
    protected $_name = [
        'namespacedServices' => 'namespacedServices',
    ];

    public function validate()
    {
        if (\is_array($this->namespacedServices)) {
            Model::validateArray($this->namespacedServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespacedServices) {
            if (\is_array($this->namespacedServices)) {
                $res['namespacedServices'] = [];
                $n1 = 0;
                foreach ($this->namespacedServices as $item1) {
                    $res['namespacedServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['namespacedServices'])) {
            if (!empty($map['namespacedServices'])) {
                $model->namespacedServices = [];
                $n1 = 0;
                foreach ($map['namespacedServices'] as $item1) {
                    $model->namespacedServices[$n1] = namespacedServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
