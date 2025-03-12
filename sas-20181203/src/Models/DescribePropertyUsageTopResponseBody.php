<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageTopResponseBody\topStatisticItems;
use AlibabaCloud\Tea\Model;

class DescribePropertyUsageTopResponseBody extends Model
{
    /**
     * @description The number of fingerprints.
     *
     * @example 5
     *
     * @var int
     */
    public $itemCount;

    /**
     * @description The request ID.
     *
     * @example 16AA5B62-A3C1-520B-B289-4BD971CC17AB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistical results.
     *
     * @var topStatisticItems[]
     */
    public $topStatisticItems;

    /**
     * @description The type of the asset fingerprint. Valid value:
     *
     *   **port**: port
     *   **process**: process
     *   **software**: software
     *   **user**: account
     *   **sca**: middleware
     *
     * @example sca
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'itemCount'         => 'ItemCount',
        'requestId'         => 'RequestId',
        'topStatisticItems' => 'TopStatisticItems',
        'type'              => 'Type',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->topStatisticItems) {
            $res['TopStatisticItems'] = [];
            if (null !== $this->topStatisticItems && \is_array($this->topStatisticItems)) {
                $n = 0;
                foreach ($this->topStatisticItems as $item) {
                    $res['TopStatisticItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyUsageTopResponseBody
     */
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
                $n                        = 0;
                foreach ($map['TopStatisticItems'] as $item) {
                    $model->topStatisticItems[$n++] = null !== $item ? topStatisticItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
