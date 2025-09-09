<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances\dbInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances\dbInstance\readOnlyInstances\readOnlyInstance;

class readOnlyInstances extends Model
{
    /**
     * @var readOnlyInstance[]
     */
    public $readOnlyInstance;
    protected $_name = [
        'readOnlyInstance' => 'ReadOnlyInstance',
    ];

    public function validate()
    {
        if (\is_array($this->readOnlyInstance)) {
            Model::validateArray($this->readOnlyInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readOnlyInstance) {
            if (\is_array($this->readOnlyInstance)) {
                $res['ReadOnlyInstance'] = [];
                $n1 = 0;
                foreach ($this->readOnlyInstance as $item1) {
                    $res['ReadOnlyInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReadOnlyInstance'])) {
            if (!empty($map['ReadOnlyInstance'])) {
                $model->readOnlyInstance = [];
                $n1 = 0;
                foreach ($map['ReadOnlyInstance'] as $item1) {
                    $model->readOnlyInstance[$n1] = readOnlyInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
