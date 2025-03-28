<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ServiceBaseline extends Model
{
    /**
     * @var ServiceInstance
     */
    public $serviceInstance;
    protected $_name = [
        'serviceInstance' => 'serviceInstance',
    ];

    public function validate()
    {
        if (null !== $this->serviceInstance) {
            $this->serviceInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceInstance) {
            $res['serviceInstance'] = null !== $this->serviceInstance ? $this->serviceInstance->toArray($noStream) : $this->serviceInstance;
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
        if (isset($map['serviceInstance'])) {
            $model->serviceInstance = ServiceInstance::fromMap($map['serviceInstance']);
        }

        return $model;
    }
}
