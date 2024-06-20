<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\SDK\ModelService\V20220614\Models\ListDayAmountResponseBody\dayAmounts;
use AlibabaCloud\Tea\Model;

class ListDayAmountResponseBody extends Model
{
    /**
     * @var dayAmounts[]
     */
    public $dayAmounts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dayAmounts' => 'DayAmounts',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayAmounts) {
            $res['DayAmounts'] = [];
            if (null !== $this->dayAmounts && \is_array($this->dayAmounts)) {
                $n = 0;
                foreach ($this->dayAmounts as $item) {
                    $res['DayAmounts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDayAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayAmounts'])) {
            if (!empty($map['DayAmounts'])) {
                $model->dayAmounts = [];
                $n                 = 0;
                foreach ($map['DayAmounts'] as $item) {
                    $model->dayAmounts[$n++] = null !== $item ? dayAmounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
