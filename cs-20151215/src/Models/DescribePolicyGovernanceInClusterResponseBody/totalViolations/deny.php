<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\totalViolations;

use AlibabaCloud\Dara\Model;

class deny extends Model
{
    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $violations;
    protected $_name = [
        'severity' => 'severity',
        'violations' => 'violations',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->violations) {
            $res['violations'] = $this->violations;
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
        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['violations'])) {
            $model->violations = $map['violations'];
        }

        return $model;
    }
}
