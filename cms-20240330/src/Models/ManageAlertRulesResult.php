<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ManageAlertRulesResult extends Model
{
    /**
     * @var AlertRuleV2
     */
    public $alertRule;

    /**
     * @var int
     */
    public $deletedCount;

    /**
     * @var string[]
     */
    public $deletedUuidList;
    protected $_name = [
        'alertRule' => 'alertRule',
        'deletedCount' => 'deletedCount',
        'deletedUuidList' => 'deletedUuidList',
    ];

    public function validate()
    {
        if (null !== $this->alertRule) {
            $this->alertRule->validate();
        }
        if (\is_array($this->deletedUuidList)) {
            Model::validateArray($this->deletedUuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRule) {
            $res['alertRule'] = null !== $this->alertRule ? $this->alertRule->toArray($noStream) : $this->alertRule;
        }

        if (null !== $this->deletedCount) {
            $res['deletedCount'] = $this->deletedCount;
        }

        if (null !== $this->deletedUuidList) {
            if (\is_array($this->deletedUuidList)) {
                $res['deletedUuidList'] = [];
                $n1 = 0;
                foreach ($this->deletedUuidList as $item1) {
                    $res['deletedUuidList'][$n1] = $item1;
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
        if (isset($map['alertRule'])) {
            $model->alertRule = AlertRuleV2::fromMap($map['alertRule']);
        }

        if (isset($map['deletedCount'])) {
            $model->deletedCount = $map['deletedCount'];
        }

        if (isset($map['deletedUuidList'])) {
            if (!empty($map['deletedUuidList'])) {
                $model->deletedUuidList = [];
                $n1 = 0;
                foreach ($map['deletedUuidList'] as $item1) {
                    $model->deletedUuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
