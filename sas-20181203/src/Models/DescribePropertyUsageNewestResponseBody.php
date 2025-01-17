<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestResponseBody\newestStatisticItems;

class DescribePropertyUsageNewestResponseBody extends Model
{
    /**
     * @var int
     */
    public $itemCount;
    /**
     * @var newestStatisticItems[]
     */
    public $newestStatisticItems;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'itemCount'            => 'ItemCount',
        'newestStatisticItems' => 'NewestStatisticItems',
        'requestId'            => 'RequestId',
        'type'                 => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->newestStatisticItems)) {
            Model::validateArray($this->newestStatisticItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemCount) {
            $res['ItemCount'] = $this->itemCount;
        }

        if (null !== $this->newestStatisticItems) {
            if (\is_array($this->newestStatisticItems)) {
                $res['NewestStatisticItems'] = [];
                $n1                          = 0;
                foreach ($this->newestStatisticItems as $item1) {
                    $res['NewestStatisticItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['NewestStatisticItems'])) {
            if (!empty($map['NewestStatisticItems'])) {
                $model->newestStatisticItems = [];
                $n1                          = 0;
                foreach ($map['NewestStatisticItems'] as $item1) {
                    $model->newestStatisticItems[$n1++] = newestStatisticItems::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
