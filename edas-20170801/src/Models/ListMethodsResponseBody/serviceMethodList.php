<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod;

class serviceMethodList extends Model
{
    /**
     * @var serviceMethod[]
     */
    public $serviceMethod;
    protected $_name = [
        'serviceMethod' => 'ServiceMethod',
    ];

    public function validate()
    {
        if (\is_array($this->serviceMethod)) {
            Model::validateArray($this->serviceMethod);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceMethod) {
            if (\is_array($this->serviceMethod)) {
                $res['ServiceMethod'] = [];
                $n1 = 0;
                foreach ($this->serviceMethod as $item1) {
                    $res['ServiceMethod'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServiceMethod'])) {
            if (!empty($map['ServiceMethod'])) {
                $model->serviceMethod = [];
                $n1 = 0;
                foreach ($map['ServiceMethod'] as $item1) {
                    $model->serviceMethod[$n1] = serviceMethod::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
