<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult\accountCompliances;
use AlibabaCloud\Tea\Model;

class accountComplianceResult extends Model
{
    /**
     * @description The information about the compliance evaluation result of member account.
     *
     * @var accountCompliances[]
     */
    public $accountCompliances;

    /**
     * @description The ID of the compliance package.
     *
     * @example cp-541e626622af0087****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The number of non-compliant member accounts.
     *
     * @example 0
     *
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @description The total number of monitored member accounts.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accountCompliances' => 'AccountCompliances',
        'compliancePackId'   => 'CompliancePackId',
        'nonCompliantCount'  => 'NonCompliantCount',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountCompliances) {
            $res['AccountCompliances'] = [];
            if (null !== $this->accountCompliances && \is_array($this->accountCompliances)) {
                $n = 0;
                foreach ($this->accountCompliances as $item) {
                    $res['AccountCompliances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
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
     * @return accountComplianceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountCompliances'])) {
            if (!empty($map['AccountCompliances'])) {
                $model->accountCompliances = [];
                $n                         = 0;
                foreach ($map['AccountCompliances'] as $item) {
                    $model->accountCompliances[$n++] = null !== $item ? accountCompliances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
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
