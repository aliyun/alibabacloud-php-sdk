<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\deadLetterInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\records;

class consumerInfos extends Model
{
    /**
     * @var string
     */
    public $consumeStatus;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var deadLetterInfo
     */
    public $deadLetterInfo;

    /**
     * @var bool
     */
    public $deadMessage;

    /**
     * @var records[]
     */
    public $records;
    protected $_name = [
        'consumeStatus' => 'consumeStatus',
        'consumerGroupId' => 'consumerGroupId',
        'deadLetterInfo' => 'deadLetterInfo',
        'deadMessage' => 'deadMessage',
        'records' => 'records',
    ];

    public function validate()
    {
        if (null !== $this->deadLetterInfo) {
            $this->deadLetterInfo->validate();
        }
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeStatus) {
            $res['consumeStatus'] = $this->consumeStatus;
        }

        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->deadLetterInfo) {
            $res['deadLetterInfo'] = null !== $this->deadLetterInfo ? $this->deadLetterInfo->toArray($noStream) : $this->deadLetterInfo;
        }

        if (null !== $this->deadMessage) {
            $res['deadMessage'] = $this->deadMessage;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['records'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['records'] as $item1) {
                    $model->records[$n1++] = records::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
