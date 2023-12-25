<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigHistoryResponseBody\configHistoryItems;
use AlibabaCloud\Tea\Model;

class DescribeConfigHistoryResponseBody extends Model
{
    /**
     * @description The change records of the configuration parameters.
     *
     * @var configHistoryItems[]
     */
    public $configHistoryItems;

    /**
     * @description The request ID.
     *
     * @example D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configHistoryItems' => 'ConfigHistoryItems',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configHistoryItems) {
            $res['ConfigHistoryItems'] = [];
            if (null !== $this->configHistoryItems && \is_array($this->configHistoryItems)) {
                $n = 0;
                foreach ($this->configHistoryItems as $item) {
                    $res['ConfigHistoryItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeConfigHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigHistoryItems'])) {
            if (!empty($map['ConfigHistoryItems'])) {
                $model->configHistoryItems = [];
                $n                         = 0;
                foreach ($map['ConfigHistoryItems'] as $item) {
                    $model->configHistoryItems[$n++] = null !== $item ? configHistoryItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
