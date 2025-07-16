<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody\instanceMetas;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody\types;
use AlibabaCloud\Tea\Model;

class DescribeMachineSpecResponseBody extends Model
{
    /**
     * @description The instance types when the resources are specified.
     *
     * @var instanceMetas[]
     */
    public $instanceMetas;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The values that can be supported when the number of CPUs and memory size are specified for deployment.
     *
     * @var types[]
     */
    public $types;
    protected $_name = [
        'instanceMetas' => 'InstanceMetas',
        'requestId' => 'RequestId',
        'types' => 'Types',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceMetas) {
            $res['InstanceMetas'] = [];
            if (null !== $this->instanceMetas && \is_array($this->instanceMetas)) {
                $n = 0;
                foreach ($this->instanceMetas as $item) {
                    $res['InstanceMetas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->types) {
            $res['Types'] = [];
            if (null !== $this->types && \is_array($this->types)) {
                $n = 0;
                foreach ($this->types as $item) {
                    $res['Types'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMachineSpecResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceMetas'])) {
            if (!empty($map['InstanceMetas'])) {
                $model->instanceMetas = [];
                $n = 0;
                foreach ($map['InstanceMetas'] as $item) {
                    $model->instanceMetas[$n++] = null !== $item ? instanceMetas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n = 0;
                foreach ($map['Types'] as $item) {
                    $model->types[$n++] = null !== $item ? types::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
