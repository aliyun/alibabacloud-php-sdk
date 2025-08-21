<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerResponseBody\FCTrigger;

class DescribeFCTriggerResponseBody extends Model
{
    /**
     * @var FCTrigger
     */
    public $FCTrigger;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'FCTrigger' => 'FCTrigger',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->FCTrigger) {
            $this->FCTrigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->FCTrigger) {
            $res['FCTrigger'] = null !== $this->FCTrigger ? $this->FCTrigger->toArray($noStream) : $this->FCTrigger;
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
        if (isset($map['FCTrigger'])) {
            $model->FCTrigger = FCTrigger::fromMap($map['FCTrigger']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
