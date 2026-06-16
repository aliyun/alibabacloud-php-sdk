<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest;

use AlibabaCloud\Dara\Model;

class sessionConfig extends Model
{
    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var string
     */
    public $customAgentStage;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $reportWaterMark;

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
        'customAgentId' => 'CustomAgentId',
        'customAgentStage' => 'CustomAgentStage',
        'language' => 'Language',
        'mode' => 'Mode',
        'reportWaterMark' => 'ReportWaterMark',
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
        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->customAgentStage) {
            $res['CustomAgentStage'] = $this->customAgentStage;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->reportWaterMark) {
            $res['ReportWaterMark'] = $this->reportWaterMark;
        }

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
        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['CustomAgentStage'])) {
            $model->customAgentStage = $map['CustomAgentStage'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ReportWaterMark'])) {
            $model->reportWaterMark = $map['ReportWaterMark'];
        }

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
