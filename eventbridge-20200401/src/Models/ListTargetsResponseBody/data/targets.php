<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody\data\targets\concurrentConfig;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody\data\targets\paramList;

class targets extends Model
{
    /**
     * @var concurrentConfig
     */
    public $concurrentConfig;

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
    public $eventBusName;

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
    public $ruleName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'concurrentConfig' => 'ConcurrentConfig',
        'endpoint' => 'Endpoint',
        'errorsTolerance' => 'ErrorsTolerance',
        'eventBusName' => 'EventBusName',
        'id' => 'Id',
        'paramList' => 'ParamList',
        'ruleName' => 'RuleName',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->concurrentConfig) {
            $this->concurrentConfig->validate();
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

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->errorsTolerance) {
            $res['ErrorsTolerance'] = $this->errorsTolerance;
        }

        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->paramList) {
            if (\is_array($this->paramList)) {
                $res['ParamList'] = [];
                $n1 = 0;
                foreach ($this->paramList as $item1) {
                    $res['ParamList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ErrorsTolerance'])) {
            $model->errorsTolerance = $map['ErrorsTolerance'];
        }

        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n1 = 0;
                foreach ($map['ParamList'] as $item1) {
                    $model->paramList[$n1++] = paramList::fromMap($item1);
                }
            }
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
