<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponseBody\flowControlsMap;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponseBody\flowControlsMap\interfaceMethods\interfaceMethod;
use AlibabaCloud\Tea\Model;

class interfaceMethods extends Model
{
    /**
     * @var interfaceMethod[]
     */
    public $interfaceMethod;
    protected $_name = [
        'interfaceMethod' => 'InterfaceMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interfaceMethod) {
            $res['InterfaceMethod'] = [];
            if (null !== $this->interfaceMethod && \is_array($this->interfaceMethod)) {
                $n = 0;
                foreach ($this->interfaceMethod as $item) {
                    $res['InterfaceMethod'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaceMethods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InterfaceMethod'])) {
            if (!empty($map['InterfaceMethod'])) {
                $model->interfaceMethod = [];
                $n                      = 0;
                foreach ($map['InterfaceMethod'] as $item) {
                    $model->interfaceMethod[$n++] = null !== $item ? interfaceMethod::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
