<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListNamespacesResponseBody\namespaces;
use AlibabaCloud\Tea\Model;

class ListNamespacesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var namespaces[]
     */
    public $namespaces;
    protected $_name = [
        'requestId'  => 'RequestId',
        'namespaces' => 'Namespaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->namespaces) {
            $res['Namespaces'] = [];
            if (null !== $this->namespaces && \is_array($this->namespaces)) {
                $n = 0;
                foreach ($this->namespaces as $item) {
                    $res['Namespaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNamespacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n                 = 0;
                foreach ($map['Namespaces'] as $item) {
                    $model->namespaces[$n++] = null !== $item ? namespaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
