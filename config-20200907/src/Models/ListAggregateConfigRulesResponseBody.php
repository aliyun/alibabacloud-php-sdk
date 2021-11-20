<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesResponseBody\configRules;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRules) {
            $res['ConfigRules'] = null !== $this->configRules ? $this->configRules->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateConfigRulesResponseBody
     */
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
