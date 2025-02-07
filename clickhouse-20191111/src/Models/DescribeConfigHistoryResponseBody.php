<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigHistoryResponseBody\configHistoryItems;

class DescribeConfigHistoryResponseBody extends Model
{
    /**
     * @var configHistoryItems[]
     */
    public $configHistoryItems;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configHistoryItems' => 'ConfigHistoryItems',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->configHistoryItems)) {
            Model::validateArray($this->configHistoryItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configHistoryItems) {
            if (\is_array($this->configHistoryItems)) {
                $res['ConfigHistoryItems'] = [];
                $n1                        = 0;
                foreach ($this->configHistoryItems as $item1) {
                    $res['ConfigHistoryItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfigHistoryItems'])) {
            if (!empty($map['ConfigHistoryItems'])) {
                $model->configHistoryItems = [];
                $n1                        = 0;
                foreach ($map['ConfigHistoryItems'] as $item1) {
                    $model->configHistoryItems[$n1++] = configHistoryItems::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
