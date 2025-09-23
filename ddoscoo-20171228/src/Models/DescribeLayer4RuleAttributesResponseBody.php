<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponseBody\listeners;

class DescribeLayer4RuleAttributesResponseBody extends Model
{
    /**
     * @var listeners[]
     */
    public $listeners;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'listeners' => 'Listeners',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->listeners)) {
            Model::validateArray($this->listeners);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listeners) {
            if (\is_array($this->listeners)) {
                $res['Listeners'] = [];
                $n1 = 0;
                foreach ($this->listeners as $item1) {
                    $res['Listeners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Listeners'])) {
            if (!empty($map['Listeners'])) {
                $model->listeners = [];
                $n1 = 0;
                foreach ($map['Listeners'] as $item1) {
                    $model->listeners[$n1] = listeners::fromMap($item1);
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
