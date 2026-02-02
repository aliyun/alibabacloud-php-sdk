<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetReportTemplateResponseBody\reportTemplate;

class GetReportTemplateResponseBody extends Model
{
    /**
     * @var reportTemplate
     */
    public $reportTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportTemplate' => 'ReportTemplate',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->reportTemplate) {
            $this->reportTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportTemplate) {
            $res['ReportTemplate'] = null !== $this->reportTemplate ? $this->reportTemplate->toArray($noStream) : $this->reportTemplate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ReportTemplate'])) {
            $model->reportTemplate = reportTemplate::fromMap($map['ReportTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
