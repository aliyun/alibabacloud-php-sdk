<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesResponseBody\forwardingRules;

class DeleteForwardingRulesResponseBody extends Model
{
    /**
     * @var forwardingRules[]
     */
    public $forwardingRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forwardingRules' => 'ForwardingRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->forwardingRules)) {
            Model::validateArray($this->forwardingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardingRules) {
            if (\is_array($this->forwardingRules)) {
                $res['ForwardingRules'] = [];
                $n1 = 0;
                foreach ($this->forwardingRules as $item1) {
                    $res['ForwardingRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ForwardingRules'])) {
            if (!empty($map['ForwardingRules'])) {
                $model->forwardingRules = [];
                $n1 = 0;
                foreach ($map['ForwardingRules'] as $item1) {
                    $model->forwardingRules[$n1] = forwardingRules::fromMap($item1);
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
