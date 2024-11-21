<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;
use AlibabaCloud\Tea\Model;

class managedRulesGroup extends Model
{
    /**
     * @description Indicates whether the WAF managed rule group is enabled.
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The maximum number of WAF managed rule groups.
     *
     * @var WafQuotaInteger
     */
    public $numberTotal;
    protected $_name = [
        'enable'      => 'Enable',
        'numberTotal' => 'NumberTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->numberTotal) {
            $res['NumberTotal'] = null !== $this->numberTotal ? $this->numberTotal->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedRulesGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['NumberTotal'])) {
            $model->numberTotal = WafQuotaInteger::fromMap($map['NumberTotal']);
        }

        return $model;
    }
}
