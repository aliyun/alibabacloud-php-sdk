<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponseBody\terminals;

class RemoveTerminalsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var terminals
     */
    public $terminals;
    protected $_name = [
        'requestId' => 'RequestId',
        'terminals' => 'Terminals',
    ];

    public function validate()
    {
        if (null !== $this->terminals) {
            $this->terminals->validate();
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
            $res['Terminals'] = null !== $this->terminals ? $this->terminals->toArray($noStream) : $this->terminals;
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
            $model->terminals = terminals::fromMap($map['Terminals']);
        }

        return $model;
    }
}
