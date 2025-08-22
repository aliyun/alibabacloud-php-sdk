<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDispatchRuleResponseBody\dispatchRules;

class ListDispatchRuleResponseBody extends Model
{
    /**
     * @var dispatchRules[]
     */
    public $dispatchRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dispatchRules' => 'DispatchRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dispatchRules)) {
            Model::validateArray($this->dispatchRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dispatchRules) {
            if (\is_array($this->dispatchRules)) {
                $res['DispatchRules'] = [];
                $n1 = 0;
                foreach ($this->dispatchRules as $item1) {
                    $res['DispatchRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DispatchRules'])) {
            if (!empty($map['DispatchRules'])) {
                $model->dispatchRules = [];
                $n1 = 0;
                foreach ($map['DispatchRules'] as $item1) {
                    $model->dispatchRules[$n1] = dispatchRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
