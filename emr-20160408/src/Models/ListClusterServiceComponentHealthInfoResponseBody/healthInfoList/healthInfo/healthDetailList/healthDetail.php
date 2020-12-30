<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList\healthDetail\healthRuleParam;
use AlibabaCloud\Tea\Model;

class healthDetail extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var healthRuleParam
     */
    public $healthRuleParam;
    protected $_name = [
        'code'            => 'code',
        'healthRuleParam' => 'HealthRuleParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->healthRuleParam) {
            $res['HealthRuleParam'] = null !== $this->healthRuleParam ? $this->healthRuleParam->toMap() : null;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['HealthRuleParam'])) {
            $model->healthRuleParam = healthRuleParam::fromMap($map['HealthRuleParam']);
        }

        return $model;
    }
}
