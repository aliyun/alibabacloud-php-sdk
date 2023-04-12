<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRulesResponseBody\configRules;
use AlibabaCloud\Tea\Model;

class ListConfigRulesResponseBody extends Model
{
    /**
     * @var configRules
     */
    public $configRules;

    /**
     * @example AC3A7E12-72E6-5CC9-A5C1-D8D8919829A7
     *
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
     * @return ListConfigRulesResponseBody
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
