<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageEventOperationConditionResponseBody\data\operations;

class data extends Model
{
    /**
     * @var string
     */
    public $eventType;

    /**
     * @var operations[]
     */
    public $operations;

    /**
     * @var string[]
     */
    public $scenarios;
    protected $_name = [
        'eventType' => 'EventType',
        'operations' => 'Operations',
        'scenarios' => 'Scenarios',
    ];

    public function validate()
    {
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        if (\is_array($this->scenarios)) {
            Model::validateArray($this->scenarios);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['Operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    $res['Operations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scenarios) {
            if (\is_array($this->scenarios)) {
                $res['Scenarios'] = [];
                $n1 = 0;
                foreach ($this->scenarios as $item1) {
                    $res['Scenarios'][$n1] = $item1;
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
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['Operations'])) {
            if (!empty($map['Operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['Operations'] as $item1) {
                    $model->operations[$n1] = operations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Scenarios'])) {
            if (!empty($map['Scenarios'])) {
                $model->scenarios = [];
                $n1 = 0;
                foreach ($map['Scenarios'] as $item1) {
                    $model->scenarios[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
