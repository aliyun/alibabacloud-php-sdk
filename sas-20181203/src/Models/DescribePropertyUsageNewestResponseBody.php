<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestResponseBody\newestStatisticItems;
use AlibabaCloud\Tea\Model;

class DescribePropertyUsageNewestResponseBody extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $itemCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var newestStatisticItems[]
     */
    public $newestStatisticItems;
    protected $_name = [
        'type'                 => 'Type',
        'itemCount'            => 'ItemCount',
        'requestId'            => 'RequestId',
        'newestStatisticItems' => 'NewestStatisticItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->itemCount) {
            $res['ItemCount'] = $this->itemCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->newestStatisticItems) {
            $res['NewestStatisticItems'] = [];
            if (null !== $this->newestStatisticItems && \is_array($this->newestStatisticItems)) {
                $n = 0;
                foreach ($this->newestStatisticItems as $item) {
                    $res['NewestStatisticItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyUsageNewestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ItemCount'])) {
            $model->itemCount = $map['ItemCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NewestStatisticItems'])) {
            if (!empty($map['NewestStatisticItems'])) {
                $model->newestStatisticItems = [];
                $n                           = 0;
                foreach ($map['NewestStatisticItems'] as $item) {
                    $model->newestStatisticItems[$n++] = null !== $item ? newestStatisticItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
