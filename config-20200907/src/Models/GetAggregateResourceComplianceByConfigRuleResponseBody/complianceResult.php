<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleResponseBody\complianceResult\compliances;
use AlibabaCloud\Tea\Model;

class complianceResult extends Model
{
    /**
     * @var compliances[]
     */
    public $compliances;

    /**
     * @description The ID of the request.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'compliances' => 'Compliances',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliances) {
            $res['Compliances'] = [];
            if (null !== $this->compliances && \is_array($this->compliances)) {
                $n = 0;
                foreach ($this->compliances as $item) {
                    $res['Compliances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compliances'])) {
            if (!empty($map['Compliances'])) {
                $model->compliances = [];
                $n                  = 0;
                foreach ($map['Compliances'] as $item) {
                    $model->compliances[$n++] = null !== $item ? compliances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
