<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleSummaryByRiskLevelResponseBody\configRuleSummaries;
use AlibabaCloud\Tea\Model;

class GetConfigRuleSummaryByRiskLevelResponseBody extends Model
{
    /**
     * @description The summary of compliance evaluation results by rule risk level.
     *
     * @var configRuleSummaries[]
     */
    public $configRuleSummaries;

    /**
     * @description The ID of the request.
     *
     * @example A3CED98C-DE65-46AC-B2D2-04A4A9AB5B36
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configRuleSummaries' => 'ConfigRuleSummaries',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleSummaries) {
            $res['ConfigRuleSummaries'] = [];
            if (null !== $this->configRuleSummaries && \is_array($this->configRuleSummaries)) {
                $n = 0;
                foreach ($this->configRuleSummaries as $item) {
                    $res['ConfigRuleSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigRuleSummaryByRiskLevelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleSummaries'])) {
            if (!empty($map['ConfigRuleSummaries'])) {
                $model->configRuleSummaries = [];
                $n                          = 0;
                foreach ($map['ConfigRuleSummaries'] as $item) {
                    $model->configRuleSummaries[$n++] = null !== $item ? configRuleSummaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
