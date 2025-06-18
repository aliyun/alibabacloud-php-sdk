<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutTargetsRequest\targets;

class PutTargetsRequest extends Model
{
    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'ruleName' => 'RuleName',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1] = targets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
