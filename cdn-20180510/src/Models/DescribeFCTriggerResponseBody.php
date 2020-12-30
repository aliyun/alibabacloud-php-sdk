<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerResponseBody\FCTrigger;
use AlibabaCloud\Tea\Model;

class DescribeFCTriggerResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var FCTrigger
     */
    public $FCTrigger;
    protected $_name = [
        'requestId' => 'RequestId',
        'FCTrigger' => 'FCTrigger',
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
        if (null !== $this->FCTrigger) {
            $res['FCTrigger'] = null !== $this->FCTrigger ? $this->FCTrigger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFCTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FCTrigger'])) {
            $model->FCTrigger = FCTrigger::fromMap($map['FCTrigger']);
        }

        return $model;
    }
}
