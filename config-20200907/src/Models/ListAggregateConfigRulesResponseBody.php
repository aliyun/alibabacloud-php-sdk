<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesResponseBody\configRules;

class ListAggregateConfigRulesResponseBody extends Model
{
    /**
     * @var configRules
     */
    public $configRules;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configRules' => 'ConfigRules',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->configRules) {
            $this->configRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRules) {
            $res['ConfigRules'] = null !== $this->configRules ? $this->configRules->toArray($noStream) : $this->configRules;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConfigRules'])) {
            $model->configRules = configRules::fromMap($map['ConfigRules']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
