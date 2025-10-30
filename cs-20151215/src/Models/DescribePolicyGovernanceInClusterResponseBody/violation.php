<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violation\totalViolations;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\violation\violations;

class violation extends Model
{
    /**
     * @var totalViolations
     */
    public $totalViolations;

    /**
     * @var violations
     */
    public $violations;
    protected $_name = [
        'totalViolations' => 'totalViolations',
        'violations' => 'violations',
    ];

    public function validate()
    {
        if (null !== $this->totalViolations) {
            $this->totalViolations->validate();
        }
        if (null !== $this->violations) {
            $this->violations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalViolations) {
            $res['totalViolations'] = null !== $this->totalViolations ? $this->totalViolations->toArray($noStream) : $this->totalViolations;
        }

        if (null !== $this->violations) {
            $res['violations'] = null !== $this->violations ? $this->violations->toArray($noStream) : $this->violations;
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
        if (isset($map['totalViolations'])) {
            $model->totalViolations = totalViolations::fromMap($map['totalViolations']);
        }

        if (isset($map['violations'])) {
            $model->violations = violations::fromMap($map['violations']);
        }

        return $model;
    }
}
