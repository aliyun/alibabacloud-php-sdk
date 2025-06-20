<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponseBody\data\checkDetailList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponseBody\data\checkDetailList\blockRule\scopeNodeList;

class blockRule extends Model
{
    /**
     * @var string
     */
    public $blockHarm;

    /**
     * @var int
     */
    public $blockId;

    /**
     * @var string
     */
    public $express;

    /**
     * @var int
     */
    public $scopeEndTime;

    /**
     * @var scopeNodeList[]
     */
    public $scopeNodeList;

    /**
     * @var int
     */
    public $scopeRuleId;

    /**
     * @var int
     */
    public $scopeStartTime;
    protected $_name = [
        'blockHarm' => 'BlockHarm',
        'blockId' => 'BlockId',
        'express' => 'Express',
        'scopeEndTime' => 'ScopeEndTime',
        'scopeNodeList' => 'ScopeNodeList',
        'scopeRuleId' => 'ScopeRuleId',
        'scopeStartTime' => 'ScopeStartTime',
    ];

    public function validate()
    {
        if (\is_array($this->scopeNodeList)) {
            Model::validateArray($this->scopeNodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockHarm) {
            $res['BlockHarm'] = $this->blockHarm;
        }

        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }

        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }

        if (null !== $this->scopeEndTime) {
            $res['ScopeEndTime'] = $this->scopeEndTime;
        }

        if (null !== $this->scopeNodeList) {
            if (\is_array($this->scopeNodeList)) {
                $res['ScopeNodeList'] = [];
                $n1 = 0;
                foreach ($this->scopeNodeList as $item1) {
                    $res['ScopeNodeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scopeRuleId) {
            $res['ScopeRuleId'] = $this->scopeRuleId;
        }

        if (null !== $this->scopeStartTime) {
            $res['ScopeStartTime'] = $this->scopeStartTime;
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
        if (isset($map['BlockHarm'])) {
            $model->blockHarm = $map['BlockHarm'];
        }

        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }

        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }

        if (isset($map['ScopeEndTime'])) {
            $model->scopeEndTime = $map['ScopeEndTime'];
        }

        if (isset($map['ScopeNodeList'])) {
            if (!empty($map['ScopeNodeList'])) {
                $model->scopeNodeList = [];
                $n1 = 0;
                foreach ($map['ScopeNodeList'] as $item1) {
                    $model->scopeNodeList[$n1] = scopeNodeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScopeRuleId'])) {
            $model->scopeRuleId = $map['ScopeRuleId'];
        }

        if (isset($map['ScopeStartTime'])) {
            $model->scopeStartTime = $map['ScopeStartTime'];
        }

        return $model;
    }
}
