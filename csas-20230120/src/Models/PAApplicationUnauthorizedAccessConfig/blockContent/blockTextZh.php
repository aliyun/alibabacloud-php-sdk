<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAApplicationUnauthorizedAccessConfig\blockContent;

use AlibabaCloud\Dara\Model;

class blockTextZh extends Model
{
    /**
     * @var string
     */
    public $browserAlertContent;

    /**
     * @var string
     */
    public $browserAlertStyle;

    /**
     * @var string
     */
    public $browserAlertTitle;

    /**
     * @var string
     */
    public $reportButtonText;
    protected $_name = [
        'browserAlertContent' => 'BrowserAlertContent',
        'browserAlertStyle' => 'BrowserAlertStyle',
        'browserAlertTitle' => 'BrowserAlertTitle',
        'reportButtonText' => 'ReportButtonText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserAlertContent) {
            $res['BrowserAlertContent'] = $this->browserAlertContent;
        }

        if (null !== $this->browserAlertStyle) {
            $res['BrowserAlertStyle'] = $this->browserAlertStyle;
        }

        if (null !== $this->browserAlertTitle) {
            $res['BrowserAlertTitle'] = $this->browserAlertTitle;
        }

        if (null !== $this->reportButtonText) {
            $res['ReportButtonText'] = $this->reportButtonText;
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
        if (isset($map['BrowserAlertContent'])) {
            $model->browserAlertContent = $map['BrowserAlertContent'];
        }

        if (isset($map['BrowserAlertStyle'])) {
            $model->browserAlertStyle = $map['BrowserAlertStyle'];
        }

        if (isset($map['BrowserAlertTitle'])) {
            $model->browserAlertTitle = $map['BrowserAlertTitle'];
        }

        if (isset($map['ReportButtonText'])) {
            $model->reportButtonText = $map['ReportButtonText'];
        }

        return $model;
    }
}
