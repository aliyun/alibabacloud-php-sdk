<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody\instanceMetas;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody\types;

class DescribeMachineSpecResponseBody extends Model
{
    /**
     * @var instanceMetas[]
     */
    public $instanceMetas;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var types[]
     */
    public $types;
    protected $_name = [
        'instanceMetas' => 'InstanceMetas',
        'requestId' => 'RequestId',
        'types' => 'Types',
    ];

    public function validate()
    {
        if (\is_array($this->instanceMetas)) {
            Model::validateArray($this->instanceMetas);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceMetas) {
            if (\is_array($this->instanceMetas)) {
                $res['InstanceMetas'] = [];
                $n1 = 0;
                foreach ($this->instanceMetas as $item1) {
                    $res['InstanceMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceMetas'])) {
            if (!empty($map['InstanceMetas'])) {
                $model->instanceMetas = [];
                $n1 = 0;
                foreach ($map['InstanceMetas'] as $item1) {
                    $model->instanceMetas[$n1] = instanceMetas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1] = types::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
