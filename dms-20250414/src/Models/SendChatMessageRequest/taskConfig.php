<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest\taskConfig\reportConfig;

class taskConfig extends Model
{
    /**
     * @var reportConfig
     */
    public $reportConfig;
    protected $_name = [
        'reportConfig' => 'ReportConfig',
    ];

    public function validate()
    {
        if (null !== $this->reportConfig) {
            $this->reportConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportConfig) {
            $res['ReportConfig'] = null !== $this->reportConfig ? $this->reportConfig->toArray($noStream) : $this->reportConfig;
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
        if (isset($map['ReportConfig'])) {
            $model->reportConfig = reportConfig::fromMap($map['ReportConfig']);
        }

        return $model;
    }
}
