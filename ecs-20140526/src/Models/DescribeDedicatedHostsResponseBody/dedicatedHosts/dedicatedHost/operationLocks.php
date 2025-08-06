<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\operationLocks\operationLock;

class operationLocks extends Model
{
    /**
     * @var operationLock[]
     */
    public $operationLock;
    protected $_name = [
        'operationLock' => 'OperationLock',
    ];

    public function validate()
    {
        if (\is_array($this->operationLock)) {
            Model::validateArray($this->operationLock);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationLock) {
            if (\is_array($this->operationLock)) {
                $res['OperationLock'] = [];
                $n1 = 0;
                foreach ($this->operationLock as $item1) {
                    $res['OperationLock'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperationLock'])) {
            if (!empty($map['OperationLock'])) {
                $model->operationLock = [];
                $n1 = 0;
                foreach ($map['OperationLock'] as $item1) {
                    $model->operationLock[$n1] = operationLock::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
