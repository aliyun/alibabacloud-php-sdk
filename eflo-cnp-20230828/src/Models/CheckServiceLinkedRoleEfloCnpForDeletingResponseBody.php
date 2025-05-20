<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CheckServiceLinkedRoleEfloCnpForDeletingResponseBody\resources;

class CheckServiceLinkedRoleEfloCnpForDeletingResponseBody extends Model
{
    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'deletable' => 'Deletable',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1++] = resources::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
