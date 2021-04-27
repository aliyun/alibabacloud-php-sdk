<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody\clientConnectionStatusList\consumerGroupClientConnectionInfo;
use AlibabaCloud\Tea\Model;

class clientConnectionStatusList extends Model
{
    /**
     * @var consumerGroupClientConnectionInfo[]
     */
    public $consumerGroupClientConnectionInfo;
    protected $_name = [
        'consumerGroupClientConnectionInfo' => 'ConsumerGroupClientConnectionInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupClientConnectionInfo) {
            $res['ConsumerGroupClientConnectionInfo'] = [];
            if (null !== $this->consumerGroupClientConnectionInfo && \is_array($this->consumerGroupClientConnectionInfo)) {
                $n = 0;
                foreach ($this->consumerGroupClientConnectionInfo as $item) {
                    $res['ConsumerGroupClientConnectionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientConnectionStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupClientConnectionInfo'])) {
            if (!empty($map['ConsumerGroupClientConnectionInfo'])) {
                $model->consumerGroupClientConnectionInfo = [];
                $n                                        = 0;
                foreach ($map['ConsumerGroupClientConnectionInfo'] as $item) {
                    $model->consumerGroupClientConnectionInfo[$n++] = null !== $item ? consumerGroupClientConnectionInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
