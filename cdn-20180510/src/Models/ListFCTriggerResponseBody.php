<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListFCTriggerResponseBody\FCTriggers;
use AlibabaCloud\Tea\Model;

class ListFCTriggerResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var FCTriggers[]
     */
    public $FCTriggers;
    protected $_name = [
        'requestId'  => 'RequestId',
        'FCTriggers' => 'FCTriggers',
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
        if (null !== $this->FCTriggers) {
            $res['FCTriggers'] = [];
            if (null !== $this->FCTriggers && \is_array($this->FCTriggers)) {
                $n = 0;
                foreach ($this->FCTriggers as $item) {
                    $res['FCTriggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFCTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FCTriggers'])) {
            if (!empty($map['FCTriggers'])) {
                $model->FCTriggers = [];
                $n                 = 0;
                foreach ($map['FCTriggers'] as $item) {
                    $model->FCTriggers[$n++] = null !== $item ? FCTriggers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
