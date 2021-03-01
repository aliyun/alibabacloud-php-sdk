<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListMethodsResponseBody\serviceMethodList\serviceMethod;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMethod) {
            $res['ServiceMethod'] = [];
            if (null !== $this->serviceMethod && \is_array($this->serviceMethod)) {
                $n = 0;
                foreach ($this->serviceMethod as $item) {
                    $res['ServiceMethod'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceMethodList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMethod'])) {
            if (!empty($map['ServiceMethod'])) {
                $model->serviceMethod = [];
                $n                    = 0;
                foreach ($map['ServiceMethod'] as $item) {
                    $model->serviceMethod[$n++] = null !== $item ? serviceMethod::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
