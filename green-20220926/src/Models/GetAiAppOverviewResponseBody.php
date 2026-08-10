<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetAiAppOverviewResponseBody extends Model
{
    /**
     * @var int
     */
    public $appTotal;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $riskEventLevelDistribution;

    /**
     * @var int
     */
    public $riskEventResolvedTotal;

    /**
     * @var int
     */
    public $riskEventTotal;

    /**
     * @var int
     */
    public $riskEventUnhandledTotal;
    protected $_name = [
        'appTotal' => 'AppTotal',
        'requestId' => 'RequestId',
        'riskEventLevelDistribution' => 'RiskEventLevelDistribution',
        'riskEventResolvedTotal' => 'RiskEventResolvedTotal',
        'riskEventTotal' => 'RiskEventTotal',
        'riskEventUnhandledTotal' => 'RiskEventUnhandledTotal',
    ];

    public function validate()
    {
        if (\is_array($this->riskEventLevelDistribution)) {
            Model::validateArray($this->riskEventLevelDistribution);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appTotal) {
            $res['AppTotal'] = $this->appTotal;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskEventLevelDistribution) {
            if (\is_array($this->riskEventLevelDistribution)) {
                $res['RiskEventLevelDistribution'] = [];
                foreach ($this->riskEventLevelDistribution as $key1 => $value1) {
                    $res['RiskEventLevelDistribution'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->riskEventResolvedTotal) {
            $res['RiskEventResolvedTotal'] = $this->riskEventResolvedTotal;
        }

        if (null !== $this->riskEventTotal) {
            $res['RiskEventTotal'] = $this->riskEventTotal;
        }

        if (null !== $this->riskEventUnhandledTotal) {
            $res['RiskEventUnhandledTotal'] = $this->riskEventUnhandledTotal;
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
        if (isset($map['AppTotal'])) {
            $model->appTotal = $map['AppTotal'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskEventLevelDistribution'])) {
            if (!empty($map['RiskEventLevelDistribution'])) {
                $model->riskEventLevelDistribution = [];
                foreach ($map['RiskEventLevelDistribution'] as $key1 => $value1) {
                    $model->riskEventLevelDistribution[$key1] = $value1;
                }
            }
        }

        if (isset($map['RiskEventResolvedTotal'])) {
            $model->riskEventResolvedTotal = $map['RiskEventResolvedTotal'];
        }

        if (isset($map['RiskEventTotal'])) {
            $model->riskEventTotal = $map['RiskEventTotal'];
        }

        if (isset($map['RiskEventUnhandledTotal'])) {
            $model->riskEventUnhandledTotal = $map['RiskEventUnhandledTotal'];
        }

        return $model;
    }
}
