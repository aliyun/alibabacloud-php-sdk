<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerResponseBody\FCTrigger;
use AlibabaCloud\Tea\Model;

class DescribeFCTriggerResponseBody extends Model
{
    /**
     * @description The Function Compute trigger that you want to query.
     *
     * @var FCTrigger
     */
    public $FCTrigger;

    /**
     * @description The ID of the request.
     *
     * @example EC046C5D-8CB4-4B6B-B7F8-B335E51EF90E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'FCTrigger' => 'FCTrigger',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FCTrigger) {
            $res['FCTrigger'] = null !== $this->FCTrigger ? $this->FCTrigger->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FCTrigger'])) {
            $model->FCTrigger = FCTrigger::fromMap($map['FCTrigger']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
