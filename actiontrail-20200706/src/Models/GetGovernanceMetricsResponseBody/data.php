<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetGovernanceMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetGovernanceMetricsResponseBody\data\governanceMetrics;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var governanceMetrics[]
     */
    public $governanceMetrics;
    protected $_name = [
        'accountId' => 'AccountId',
        'governanceMetrics' => 'GovernanceMetrics',
    ];

    public function validate()
    {
        if (\is_array($this->governanceMetrics)) {
            Model::validateArray($this->governanceMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->governanceMetrics) {
            if (\is_array($this->governanceMetrics)) {
                $res['GovernanceMetrics'] = [];
                $n1 = 0;
                foreach ($this->governanceMetrics as $item1) {
                    $res['GovernanceMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['GovernanceMetrics'])) {
            if (!empty($map['GovernanceMetrics'])) {
                $model->governanceMetrics = [];
                $n1 = 0;
                foreach ($map['GovernanceMetrics'] as $item1) {
                    $model->governanceMetrics[$n1] = governanceMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
