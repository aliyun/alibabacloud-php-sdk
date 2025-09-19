<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageTopResponseBody\topStatisticItems;

class DescribePropertyUsageTopResponseBody extends Model
{
    /**
     * @var int
     */
    public $itemCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topStatisticItems[]
     */
    public $topStatisticItems;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'itemCount' => 'ItemCount',
        'requestId' => 'RequestId',
        'topStatisticItems' => 'TopStatisticItems',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->topStatisticItems)) {
            Model::validateArray($this->topStatisticItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemCount) {
            $res['ItemCount'] = $this->itemCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topStatisticItems) {
            if (\is_array($this->topStatisticItems)) {
                $res['TopStatisticItems'] = [];
                $n1 = 0;
                foreach ($this->topStatisticItems as $item1) {
                    $res['TopStatisticItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ItemCount'])) {
            $model->itemCount = $map['ItemCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TopStatisticItems'])) {
            if (!empty($map['TopStatisticItems'])) {
                $model->topStatisticItems = [];
                $n1 = 0;
                foreach ($map['TopStatisticItems'] as $item1) {
                    $model->topStatisticItems[$n1] = topStatisticItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
