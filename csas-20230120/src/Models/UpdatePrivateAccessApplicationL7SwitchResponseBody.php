<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdatePrivateAccessApplicationL7SwitchResponseBody\l7Switch;

class UpdatePrivateAccessApplicationL7SwitchResponseBody extends Model
{
    /**
     * @var l7Switch
     */
    public $l7Switch;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'l7Switch' => 'L7Switch',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->l7Switch) {
            $this->l7Switch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->l7Switch) {
            $res['L7Switch'] = null !== $this->l7Switch ? $this->l7Switch->toArray($noStream) : $this->l7Switch;
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
        if (isset($map['L7Switch'])) {
            $model->l7Switch = l7Switch::fromMap($map['L7Switch']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
