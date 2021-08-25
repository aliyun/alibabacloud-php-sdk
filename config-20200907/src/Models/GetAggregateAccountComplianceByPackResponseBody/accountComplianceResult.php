<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult\accountCompliances;
use AlibabaCloud\Tea\Model;

class accountComplianceResult extends Model
{
    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var accountCompliances[]
     */
    public $accountCompliances;
    protected $_name = [
        'compliancePackId'   => 'CompliancePackId',
        'nonCompliantCount'  => 'NonCompliantCount',
        'totalCount'         => 'TotalCount',
        'accountCompliances' => 'AccountCompliances',
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
        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->accountCompliances) {
            $res['AccountCompliances'] = [];
            if (null !== $this->accountCompliances && \is_array($this->accountCompliances)) {
                $n = 0;
                foreach ($this->accountCompliances as $item) {
                    $res['AccountCompliances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['AccountCompliances'])) {
            if (!empty($map['AccountCompliances'])) {
                $model->accountCompliances = [];
                $n                         = 0;
                foreach ($map['AccountCompliances'] as $item) {
                    $model->accountCompliances[$n++] = null !== $item ? accountCompliances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
