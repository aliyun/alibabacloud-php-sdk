<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponseBody\accountComplianceResult\accountCompliances;

class accountComplianceResult extends Model
{
    /**
     * @var accountCompliances[]
     */
    public $accountCompliances;
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
    protected $_name = [
        'accountCompliances' => 'AccountCompliances',
        'compliancePackId'   => 'CompliancePackId',
        'nonCompliantCount'  => 'NonCompliantCount',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->accountCompliances)) {
            Model::validateArray($this->accountCompliances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCompliances) {
            if (\is_array($this->accountCompliances)) {
                $res['AccountCompliances'] = [];
                $n1                        = 0;
                foreach ($this->accountCompliances as $item1) {
                    $res['AccountCompliances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountCompliances'])) {
            if (!empty($map['AccountCompliances'])) {
                $model->accountCompliances = [];
                $n1                        = 0;
                foreach ($map['AccountCompliances'] as $item1) {
                    $model->accountCompliances[$n1++] = accountCompliances::fromMap($item1);
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
