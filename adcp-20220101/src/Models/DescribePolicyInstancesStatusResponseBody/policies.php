<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponseBody;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponseBody\policies\policyInstances;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponseBody\policies\severityInfo;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The number of policy instances of each policy type.
     *
     * @var policyInstances[]
     */
    public $policyInstances;

    /**
     * @description The number of policy instances that are deployed in the cluster.
     *
     * @var severityInfo[]
     */
    public $severityInfo;
    protected $_name = [
        'policyInstances' => 'PolicyInstances',
        'severityInfo'    => 'SeverityInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyInstances) {
            $res['PolicyInstances'] = [];
            if (null !== $this->policyInstances && \is_array($this->policyInstances)) {
                $n = 0;
                foreach ($this->policyInstances as $item) {
                    $res['PolicyInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->severityInfo) {
            $res['SeverityInfo'] = [];
            if (null !== $this->severityInfo && \is_array($this->severityInfo)) {
                $n = 0;
                foreach ($this->severityInfo as $item) {
                    $res['SeverityInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyInstances'])) {
            if (!empty($map['PolicyInstances'])) {
                $model->policyInstances = [];
                $n                      = 0;
                foreach ($map['PolicyInstances'] as $item) {
                    $model->policyInstances[$n++] = null !== $item ? policyInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SeverityInfo'])) {
            if (!empty($map['SeverityInfo'])) {
                $model->severityInfo = [];
                $n                   = 0;
                foreach ($map['SeverityInfo'] as $item) {
                    $model->severityInfo[$n++] = null !== $item ? severityInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
