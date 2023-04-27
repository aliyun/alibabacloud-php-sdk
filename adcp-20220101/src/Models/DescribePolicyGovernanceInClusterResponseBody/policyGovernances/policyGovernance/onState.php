<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance;

use AlibabaCloud\Tea\Model;

class onState extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $enabledCount;

    /**
     * @example low
     *
     * @var string
     */
    public $severity;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'enabledCount' => 'EnabledCount',
        'severity'     => 'Severity',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabledCount) {
            $res['EnabledCount'] = $this->enabledCount;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnabledCount'])) {
            $model->enabledCount = $map['EnabledCount'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
