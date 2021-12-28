<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetResourceComplianceGroupByResourceTypeRequest extends Model
{
    /**
     * @var string
     */
    public $configRuleIds;
    protected $_name = [
        'configRuleIds' => 'ConfigRuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleIds) {
            $res['ConfigRuleIds'] = $this->configRuleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceComplianceGroupByResourceTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleIds'])) {
            $model->configRuleIds = $map['ConfigRuleIds'];
        }

        return $model;
    }
}
