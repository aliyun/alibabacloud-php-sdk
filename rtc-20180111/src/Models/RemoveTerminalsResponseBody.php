<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponseBody\terminals;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terminals) {
            $res['Terminals'] = null !== $this->terminals ? $this->terminals->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveTerminalsResponseBody
     */
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
