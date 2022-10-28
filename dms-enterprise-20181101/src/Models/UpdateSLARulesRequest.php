<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateSLARulesRequest\slaRuleList;
use AlibabaCloud\Tea\Model;

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
        'dagId'       => 'DagId',
        'slaRuleList' => 'SlaRuleList',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->slaRuleList) {
            $res['SlaRuleList'] = [];
            if (null !== $this->slaRuleList && \is_array($this->slaRuleList)) {
                $n = 0;
                foreach ($this->slaRuleList as $item) {
                    $res['SlaRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSLARulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['SlaRuleList'])) {
            if (!empty($map['SlaRuleList'])) {
                $model->slaRuleList = [];
                $n                  = 0;
                foreach ($map['SlaRuleList'] as $item) {
                    $model->slaRuleList[$n++] = null !== $item ? slaRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
