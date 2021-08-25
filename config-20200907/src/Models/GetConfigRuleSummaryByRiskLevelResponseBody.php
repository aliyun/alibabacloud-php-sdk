<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleSummaryByRiskLevelResponseBody\configRuleSummaries;
use AlibabaCloud\Tea\Model;

class GetConfigRuleSummaryByRiskLevelResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configRuleSummaries[]
     */
    public $configRuleSummaries;
    protected $_name = [
        'requestId'           => 'RequestId',
        'configRuleSummaries' => 'ConfigRuleSummaries',
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
        if (null !== $this->configRuleSummaries) {
            $res['ConfigRuleSummaries'] = [];
            if (null !== $this->configRuleSummaries && \is_array($this->configRuleSummaries)) {
                $n = 0;
                foreach ($this->configRuleSummaries as $item) {
                    $res['ConfigRuleSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigRuleSummaries'])) {
            if (!empty($map['ConfigRuleSummaries'])) {
                $model->configRuleSummaries = [];
                $n                          = 0;
                foreach ($map['ConfigRuleSummaries'] as $item) {
                    $model->configRuleSummaries[$n++] = null !== $item ? configRuleSummaries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
