<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\forwardGroupConfig\serverGroupStickySession;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\forwardGroupConfig\serverGroupTuples;

class forwardGroupConfig extends Model
{
    /**
     * @var serverGroupStickySession
     */
    public $serverGroupStickySession;

    /**
     * @var serverGroupTuples[]
     */
    public $serverGroupTuples;
    protected $_name = [
        'serverGroupStickySession' => 'ServerGroupStickySession',
        'serverGroupTuples' => 'ServerGroupTuples',
    ];

    public function validate()
    {
        if (null !== $this->serverGroupStickySession) {
            $this->serverGroupStickySession->validate();
        }
        if (\is_array($this->serverGroupTuples)) {
            Model::validateArray($this->serverGroupTuples);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serverGroupStickySession) {
            $res['ServerGroupStickySession'] = null !== $this->serverGroupStickySession ? $this->serverGroupStickySession->toArray($noStream) : $this->serverGroupStickySession;
        }

        if (null !== $this->serverGroupTuples) {
            if (\is_array($this->serverGroupTuples)) {
                $res['ServerGroupTuples'] = [];
                $n1 = 0;
                foreach ($this->serverGroupTuples as $item1) {
                    $res['ServerGroupTuples'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServerGroupStickySession'])) {
            $model->serverGroupStickySession = serverGroupStickySession::fromMap($map['ServerGroupStickySession']);
        }

        if (isset($map['ServerGroupTuples'])) {
            if (!empty($map['ServerGroupTuples'])) {
                $model->serverGroupTuples = [];
                $n1 = 0;
                foreach ($map['ServerGroupTuples'] as $item1) {
                    $model->serverGroupTuples[$n1] = serverGroupTuples::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
