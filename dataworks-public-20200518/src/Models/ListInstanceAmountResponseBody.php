<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstanceAmountResponseBody\instanceCounts;

class ListInstanceAmountResponseBody extends Model
{
    /**
     * @var instanceCounts[]
     */
    public $instanceCounts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceCounts' => 'InstanceCounts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceCounts)) {
            Model::validateArray($this->instanceCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCounts) {
            if (\is_array($this->instanceCounts)) {
                $res['InstanceCounts'] = [];
                $n1 = 0;
                foreach ($this->instanceCounts as $item1) {
                    $res['InstanceCounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceCounts'])) {
            if (!empty($map['InstanceCounts'])) {
                $model->instanceCounts = [];
                $n1 = 0;
                foreach ($map['InstanceCounts'] as $item1) {
                    $model->instanceCounts[$n1++] = instanceCounts::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
