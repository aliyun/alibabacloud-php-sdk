<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\UpdateSLARulesRequest\slaRuleList;
use AlibabaCloud\Tea\Model;

class UpdateSLARulesRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](~~424565~~) or [ListLhTaskFlowAndScenario](~~426672~~) operation to query the task flow ID.
     *
     * @example 11****
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The list of SLA rules.
     *
     * @var slaRuleList[]
     */
    public $slaRuleList;

    /**
     * @description The ID of the tenant.
     *
     * > :To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](~~181330~~).
     * @example 3***
     *
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
