<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateAppEnvResponseBody\envChangeDetail;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\CreateAppEnvResponseBody\envChangeDetail\operations\operation;
use AlibabaCloud\Tea\Model;

class operations extends Model
{
    /**
     * @var operation[]
     */
    public $operation;
    protected $_name = [
        'operation' => 'Operation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = [];
            if (null !== $this->operation && \is_array($this->operation)) {
                $n = 0;
                foreach ($this->operation as $item) {
                    $res['Operation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            if (!empty($map['Operation'])) {
                $model->operation = [];
                $n                = 0;
                foreach ($map['Operation'] as $item) {
                    $model->operation[$n++] = null !== $item ? operation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
