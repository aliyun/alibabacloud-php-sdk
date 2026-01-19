<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetReportFromTemplateResponseBody\templateReport;

class GetReportFromTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateReport
     */
    public $templateReport;
    protected $_name = [
        'requestId' => 'RequestId',
        'templateReport' => 'TemplateReport',
    ];

    public function validate()
    {
        if (null !== $this->templateReport) {
            $this->templateReport->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateReport) {
            $res['TemplateReport'] = null !== $this->templateReport ? $this->templateReport->toArray($noStream) : $this->templateReport;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateReport'])) {
            $model->templateReport = templateReport::fromMap($map['TemplateReport']);
        }

        return $model;
    }
}
