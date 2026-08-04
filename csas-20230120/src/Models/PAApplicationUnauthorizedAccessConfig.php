<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAApplicationUnauthorizedAccessConfig\blockContent;

class PAApplicationUnauthorizedAccessConfig extends Model
{
    /**
     * @var bool
     */
    public $allowReport;

    /**
     * @var blockContent
     */
    public $blockContent;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $reportProcessId;
    protected $_name = [
        'allowReport' => 'AllowReport',
        'blockContent' => 'BlockContent',
        'enabled' => 'Enabled',
        'reportProcessId' => 'ReportProcessId',
    ];

    public function validate()
    {
        if (null !== $this->blockContent) {
            $this->blockContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowReport) {
            $res['AllowReport'] = $this->allowReport;
        }

        if (null !== $this->blockContent) {
            $res['BlockContent'] = null !== $this->blockContent ? $this->blockContent->toArray($noStream) : $this->blockContent;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->reportProcessId) {
            $res['ReportProcessId'] = $this->reportProcessId;
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
        if (isset($map['AllowReport'])) {
            $model->allowReport = $map['AllowReport'];
        }

        if (isset($map['BlockContent'])) {
            $model->blockContent = blockContent::fromMap($map['BlockContent']);
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ReportProcessId'])) {
            $model->reportProcessId = $map['ReportProcessId'];
        }

        return $model;
    }
}
