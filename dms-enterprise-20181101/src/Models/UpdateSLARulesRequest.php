<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateSLARulesRequest\slaRuleList;

class UpdateSLARulesRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var slaRuleList[]
     */
    public $slaRuleList;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId' => 'DagId',
        'slaRuleList' => 'SlaRuleList',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->slaRuleList)) {
            Model::validateArray($this->slaRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        if (null !== $this->slaRuleList) {
            if (\is_array($this->slaRuleList)) {
                $res['SlaRuleList'] = [];
                $n1 = 0;
                foreach ($this->slaRuleList as $item1) {
                    $res['SlaRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        if (isset($map['SlaRuleList'])) {
            if (!empty($map['SlaRuleList'])) {
                $model->slaRuleList = [];
                $n1 = 0;
                foreach ($map['SlaRuleList'] as $item1) {
                    $model->slaRuleList[$n1] = slaRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
