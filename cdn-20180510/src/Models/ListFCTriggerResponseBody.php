<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\ListFCTriggerResponseBody\FCTriggers;
use AlibabaCloud\Tea\Model;

class ListFCTriggerResponseBody extends Model
{
    /**
     * @var FCTriggers[]
     */
    public $FCTriggers;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'FCTriggers' => 'FCTriggers',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FCTriggers) {
            $res['FCTriggers'] = [];
            if (null !== $this->FCTriggers && \is_array($this->FCTriggers)) {
                $n = 0;
                foreach ($this->FCTriggers as $item) {
                    $res['FCTriggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FCTriggers'])) {
            if (!empty($map['FCTriggers'])) {
                $model->FCTriggers = [];
                $n                 = 0;
                foreach ($map['FCTriggers'] as $item) {
                    $model->FCTriggers[$n++] = null !== $item ? FCTriggers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
