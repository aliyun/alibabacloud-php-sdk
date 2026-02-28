<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupStatusResponseBody\clientConnectionStatusList\consumerGroupClientConnectionInfo;

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
        if (\is_array($this->consumerGroupClientConnectionInfo)) {
            Model::validateArray($this->consumerGroupClientConnectionInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroupClientConnectionInfo) {
            if (\is_array($this->consumerGroupClientConnectionInfo)) {
                $res['ConsumerGroupClientConnectionInfo'] = [];
                $n1 = 0;
                foreach ($this->consumerGroupClientConnectionInfo as $item1) {
                    $res['ConsumerGroupClientConnectionInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ConsumerGroupClientConnectionInfo'])) {
            if (!empty($map['ConsumerGroupClientConnectionInfo'])) {
                $model->consumerGroupClientConnectionInfo = [];
                $n1 = 0;
                foreach ($map['ConsumerGroupClientConnectionInfo'] as $item1) {
                    $model->consumerGroupClientConnectionInfo[$n1] = consumerGroupClientConnectionInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
