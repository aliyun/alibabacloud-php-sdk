<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestResponseBody\newestStatisticItems;
use AlibabaCloud\Tea\Model;

class DescribePropertyUsageNewestResponseBody extends Model
{
    /**
     * @example 5
     *
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
     * @example user
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemCount) {
            $res['ItemCount'] = $this->itemCount;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ItemCount'])) {
            $model->itemCount = $map['ItemCount'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
