<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList\healthDetail\healthRuleParam;
use AlibabaCloud\Tea\Model;

class healthDetail extends Model
{
    /**
     * @var healthRuleParam
     */
    public $healthRuleParam;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;
    protected $_name = [
        'healthRuleParam' => 'HealthRuleParam',
        'code'            => 'code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthRuleParam) {
            $res['HealthRuleParam'] = null !== $this->healthRuleParam ? $this->healthRuleParam->toMap() : null;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthRuleParam'])) {
            $model->healthRuleParam = healthRuleParam::fromMap($map['HealthRuleParam']);
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        return $model;
    }
}
