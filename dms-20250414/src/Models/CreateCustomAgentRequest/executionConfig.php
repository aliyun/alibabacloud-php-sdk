<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\CreateCustomAgentRequest;

use AlibabaCloud\Dara\Model;

class executionConfig extends Model
{
    /**
     * @var bool
     */
    public $skipAskHuman;

    /**
     * @var bool
     */
    public $skipPlan;

    /**
     * @var bool
     */
    public $skipSqlConfirm;

    /**
     * @var bool
     */
    public $skipWebReportConfirm;
    protected $_name = [
        'skipAskHuman' => 'SkipAskHuman',
        'skipPlan' => 'SkipPlan',
        'skipSqlConfirm' => 'SkipSqlConfirm',
        'skipWebReportConfirm' => 'SkipWebReportConfirm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skipAskHuman) {
            $res['SkipAskHuman'] = $this->skipAskHuman;
        }

        if (null !== $this->skipPlan) {
            $res['SkipPlan'] = $this->skipPlan;
        }

        if (null !== $this->skipSqlConfirm) {
            $res['SkipSqlConfirm'] = $this->skipSqlConfirm;
        }

        if (null !== $this->skipWebReportConfirm) {
            $res['SkipWebReportConfirm'] = $this->skipWebReportConfirm;
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
        if (isset($map['SkipAskHuman'])) {
            $model->skipAskHuman = $map['SkipAskHuman'];
        }

        if (isset($map['SkipPlan'])) {
            $model->skipPlan = $map['SkipPlan'];
        }

        if (isset($map['SkipSqlConfirm'])) {
            $model->skipSqlConfirm = $map['SkipSqlConfirm'];
        }

        if (isset($map['SkipWebReportConfirm'])) {
            $model->skipWebReportConfirm = $map['SkipWebReportConfirm'];
        }

        return $model;
    }
}
