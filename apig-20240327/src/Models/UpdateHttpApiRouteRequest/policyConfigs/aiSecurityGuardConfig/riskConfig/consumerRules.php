<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiSecurityGuardConfig\riskConfig;

use AlibabaCloud\Dara\Model;

class consumerRules extends Model
{
    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $pattern;
    protected $_name = [
        'matchType' => 'matchType',
        'pattern' => 'pattern',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchType) {
            $res['matchType'] = $this->matchType;
        }

        if (null !== $this->pattern) {
            $res['pattern'] = $this->pattern;
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
        if (isset($map['matchType'])) {
            $model->matchType = $map['matchType'];
        }

        if (isset($map['pattern'])) {
            $model->pattern = $map['pattern'];
        }

        return $model;
    }
}
