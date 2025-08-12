<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\RemoveTerminalsResponseBody\terminals;

class RemoveTerminalsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var terminals[]
     */
    public $terminals;
    protected $_name = [
        'requestId' => 'RequestId',
        'terminals' => 'Terminals',
    ];

    public function validate()
    {
        if (\is_array($this->terminals)) {
            Model::validateArray($this->terminals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->terminals) {
            if (\is_array($this->terminals)) {
                $res['Terminals'] = [];
                $n1 = 0;
                foreach ($this->terminals as $item1) {
                    $res['Terminals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Terminals'])) {
            if (!empty($map['Terminals'])) {
                $model->terminals = [];
                $n1 = 0;
                foreach ($map['Terminals'] as $item1) {
                    $model->terminals[$n1] = terminals::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
