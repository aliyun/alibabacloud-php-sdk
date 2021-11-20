<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponseBody\configRuleComplianceResult\configRuleCompliances;
use AlibabaCloud\Tea\Model;

class configRuleComplianceResult extends Model
{
    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var configRuleCompliances[]
     */
    public $configRuleCompliances;

    /**
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'compliancePackId'      => 'CompliancePackId',
        'configRuleCompliances' => 'ConfigRuleCompliances',
        'nonCompliantCount'     => 'NonCompliantCount',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->configRuleCompliances) {
            $res['ConfigRuleCompliances'] = [];
            if (null !== $this->configRuleCompliances && \is_array($this->configRuleCompliances)) {
                $n = 0;
                foreach ($this->configRuleCompliances as $item) {
                    $res['ConfigRuleCompliances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleComplianceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ConfigRuleCompliances'])) {
            if (!empty($map['ConfigRuleCompliances'])) {
                $model->configRuleCompliances = [];
                $n                            = 0;
                foreach ($map['ConfigRuleCompliances'] as $item) {
                    $model->configRuleCompliances[$n++] = null !== $item ? configRuleCompliances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
