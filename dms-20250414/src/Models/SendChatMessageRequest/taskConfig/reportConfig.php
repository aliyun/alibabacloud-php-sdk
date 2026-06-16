<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest\taskConfig;

use AlibabaCloud\Dara\Model;

class reportConfig extends Model
{
    /**
     * @var string
     */
    public $reportPrompt;

    /**
     * @var string
     */
    public $reportTheme;

    /**
     * @var string
     */
    public $reportType;
    protected $_name = [
        'reportPrompt' => 'ReportPrompt',
        'reportTheme' => 'ReportTheme',
        'reportType' => 'ReportType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportPrompt) {
            $res['ReportPrompt'] = $this->reportPrompt;
        }

        if (null !== $this->reportTheme) {
            $res['ReportTheme'] = $this->reportTheme;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
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
        if (isset($map['ReportPrompt'])) {
            $model->reportPrompt = $map['ReportPrompt'];
        }

        if (isset($map['ReportTheme'])) {
            $model->reportTheme = $map['ReportTheme'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        return $model;
    }
}
