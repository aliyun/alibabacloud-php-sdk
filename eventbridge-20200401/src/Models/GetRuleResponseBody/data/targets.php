<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data\targets\concurrentConfig;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data\targets\deadLetterQueue;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data\targets\paramList;

class targets extends Model
{
    /**
     * @var concurrentConfig
     */
    public $concurrentConfig;
    /**
     * @var deadLetterQueue
     */
    public $deadLetterQueue;
    /**
     * @var mixed[]
     */
    public $detailMap;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $errorsTolerance;
    /**
     * @var string
     */
    public $id;
    /**
     * @var paramList[]
     */
    public $paramList;
    /**
     * @var string
     */
    public $pushRetryStrategy;
    /**
     * @var string
     */
    public $pushSelector;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'concurrentConfig'  => 'ConcurrentConfig',
        'deadLetterQueue'   => 'DeadLetterQueue',
        'detailMap'         => 'DetailMap',
        'endpoint'          => 'Endpoint',
        'errorsTolerance'   => 'ErrorsTolerance',
        'id'                => 'Id',
        'paramList'         => 'ParamList',
        'pushRetryStrategy' => 'PushRetryStrategy',
        'pushSelector'      => 'PushSelector',
        'type'              => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->concurrentConfig) {
            $this->concurrentConfig->validate();
        }
        if (null !== $this->deadLetterQueue) {
            $this->deadLetterQueue->validate();
        }
        if (\is_array($this->detailMap)) {
            Model::validateArray($this->detailMap);
        }
        if (\is_array($this->paramList)) {
            Model::validateArray($this->paramList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrentConfig) {
            $res['ConcurrentConfig'] = null !== $this->concurrentConfig ? $this->concurrentConfig->toArray($noStream) : $this->concurrentConfig;
        }

        if (null !== $this->deadLetterQueue) {
            $res['DeadLetterQueue'] = null !== $this->deadLetterQueue ? $this->deadLetterQueue->toArray($noStream) : $this->deadLetterQueue;
        }

        if (null !== $this->detailMap) {
            if (\is_array($this->detailMap)) {
                $res['DetailMap'] = [];
                foreach ($this->detailMap as $key1 => $value1) {
                    $res['DetailMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->errorsTolerance) {
            $res['ErrorsTolerance'] = $this->errorsTolerance;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->paramList) {
            if (\is_array($this->paramList)) {
                $res['ParamList'] = [];
                $n1               = 0;
                foreach ($this->paramList as $item1) {
                    $res['ParamList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pushRetryStrategy) {
            $res['PushRetryStrategy'] = $this->pushRetryStrategy;
        }

        if (null !== $this->pushSelector) {
            $res['PushSelector'] = $this->pushSelector;
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
        if (isset($map['ConcurrentConfig'])) {
            $model->concurrentConfig = concurrentConfig::fromMap($map['ConcurrentConfig']);
        }

        if (isset($map['DeadLetterQueue'])) {
            $model->deadLetterQueue = deadLetterQueue::fromMap($map['DeadLetterQueue']);
        }

        if (isset($map['DetailMap'])) {
            if (!empty($map['DetailMap'])) {
                $model->detailMap = [];
                foreach ($map['DetailMap'] as $key1 => $value1) {
                    $model->detailMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ErrorsTolerance'])) {
            $model->errorsTolerance = $map['ErrorsTolerance'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n1               = 0;
                foreach ($map['ParamList'] as $item1) {
                    $model->paramList[$n1++] = paramList::fromMap($item1);
                }
            }
        }

        if (isset($map['PushRetryStrategy'])) {
            $model->pushRetryStrategy = $map['PushRetryStrategy'];
        }

        if (isset($map['PushSelector'])) {
            $model->pushSelector = $map['PushSelector'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
