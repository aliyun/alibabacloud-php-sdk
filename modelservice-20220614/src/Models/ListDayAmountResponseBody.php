<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelService\V20220614\Models\ListDayAmountResponseBody\dayAmounts;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dayAmounts)) {
            Model::validateArray($this->dayAmounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dayAmounts) {
            if (\is_array($this->dayAmounts)) {
                $res['DayAmounts'] = [];
                $n1 = 0;
                foreach ($this->dayAmounts as $item1) {
                    $res['DayAmounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DayAmounts'])) {
            if (!empty($map['DayAmounts'])) {
                $model->dayAmounts = [];
                $n1 = 0;
                foreach ($map['DayAmounts'] as $item1) {
                    $model->dayAmounts[$n1] = dayAmounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
