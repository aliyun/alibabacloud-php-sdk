<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\Tea\Model;

class onState extends Model
{
    /**
     * @description The number of policies that are enabled.
     *
     * @example 3
     *
     * @var int
     */
    public $enabledCount;

    /**
     * @description The severity level of the policy.
     *
     * @example high
     *
     * @var string
     */
    public $severity;

    /**
     * @description The total number of policies of the severity level.
     *
     * @example 8
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'enabledCount' => 'enabled_count',
        'severity'     => 'severity',
        'total'        => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabledCount) {
            $res['enabled_count'] = $this->enabledCount;
        }
        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['enabled_count'])) {
            $model->enabledCount = $map['enabled_count'];
        }
        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
