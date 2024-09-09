<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\deadLetterInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\records;
use AlibabaCloud\Tea\Model;

class consumerInfos extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $consumeStatus;

    /**
     * @example GID_inspector_group
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var deadLetterInfo
     */
    public $deadLetterInfo;

    /**
     * @example true
     *
     * @var bool
     */
    public $deadMessage;

    /**
     * @var records[]
     */
    public $records;
    protected $_name = [
        'consumeStatus'   => 'consumeStatus',
        'consumerGroupId' => 'consumerGroupId',
        'deadLetterInfo'  => 'deadLetterInfo',
        'deadMessage'     => 'deadMessage',
        'records'         => 'records',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeStatus) {
            $res['consumeStatus'] = $this->consumeStatus;
        }
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }
        if (null !== $this->deadLetterInfo) {
            $res['deadLetterInfo'] = null !== $this->deadLetterInfo ? $this->deadLetterInfo->toMap() : null;
        }
        if (null !== $this->deadMessage) {
            $res['deadMessage'] = $this->deadMessage;
        }
        if (null !== $this->records) {
            $res['records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumeStatus'])) {
            $model->consumeStatus = $map['consumeStatus'];
        }
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }
        if (isset($map['deadLetterInfo'])) {
            $model->deadLetterInfo = deadLetterInfo::fromMap($map['deadLetterInfo']);
        }
        if (isset($map['deadMessage'])) {
            $model->deadMessage = $map['deadMessage'];
        }
        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
