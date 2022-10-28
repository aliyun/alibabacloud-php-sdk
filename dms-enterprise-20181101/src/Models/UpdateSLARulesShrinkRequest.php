<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateSLARulesShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var string
     */
    public $slaRuleListShrink;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId'             => 'DagId',
        'slaRuleListShrink' => 'SlaRuleList',
        'tid'               => 'Tid',
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
        if (null !== $this->slaRuleListShrink) {
            $res['SlaRuleList'] = $this->slaRuleListShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSLARulesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['SlaRuleList'])) {
            $model->slaRuleListShrink = $map['SlaRuleList'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
