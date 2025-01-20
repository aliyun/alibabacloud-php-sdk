<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportResponseBody\configRulesReport;

class GetAggregateConfigRulesReportResponseBody extends Model
{
    /**
     * @var configRulesReport
     */
    public $configRulesReport;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configRulesReport' => 'ConfigRulesReport',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->configRulesReport) {
            $this->configRulesReport->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRulesReport) {
            $res['ConfigRulesReport'] = null !== $this->configRulesReport ? $this->configRulesReport->toArray($noStream) : $this->configRulesReport;
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
        if (isset($map['ConfigRulesReport'])) {
            $model->configRulesReport = configRulesReport::fromMap($map['ConfigRulesReport']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
