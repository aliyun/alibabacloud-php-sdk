<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponseBody\configRulesReport;
use AlibabaCloud\Tea\Model;

class GetConfigRulesReportResponseBody extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRulesReport) {
            $res['ConfigRulesReport'] = null !== $this->configRulesReport ? $this->configRulesReport->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConfigRulesReport'])) {
            $model->configRulesReport = configRulesReport::fromMap($map['ConfigRulesReport']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
