<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelResponseBody\configRuleSummaries;

class GetAggregateConfigRuleSummaryByRiskLevelResponseBody extends Model
{
    /**
     * @var configRuleSummaries[]
     */
    public $configRuleSummaries;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configRuleSummaries' => 'ConfigRuleSummaries',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->configRuleSummaries)) {
            Model::validateArray($this->configRuleSummaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRuleSummaries) {
            if (\is_array($this->configRuleSummaries)) {
                $res['ConfigRuleSummaries'] = [];
                $n1 = 0;
                foreach ($this->configRuleSummaries as $item1) {
                    $res['ConfigRuleSummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ConfigRuleSummaries'])) {
            if (!empty($map['ConfigRuleSummaries'])) {
                $model->configRuleSummaries = [];
                $n1 = 0;
                foreach ($map['ConfigRuleSummaries'] as $item1) {
                    $model->configRuleSummaries[$n1] = configRuleSummaries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
