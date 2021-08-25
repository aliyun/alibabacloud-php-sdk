<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponseBody\configRulesReport;
use AlibabaCloud\Tea\Model;

class GetConfigRulesReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configRulesReport
     */
    public $configRulesReport;
    protected $_name = [
        'requestId'         => 'RequestId',
        'configRulesReport' => 'ConfigRulesReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configRulesReport) {
            $res['ConfigRulesReport'] = null !== $this->configRulesReport ? $this->configRulesReport->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigRulesReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigRulesReport'])) {
            $model->configRulesReport = configRulesReport::fromMap($map['ConfigRulesReport']);
        }

        return $model;
    }
}
