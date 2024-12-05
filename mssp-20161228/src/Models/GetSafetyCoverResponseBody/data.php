<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data\cfwProtection;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data\ecsProtection;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data\wafProtection;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description CFW protection coverage.
     *
     * @var cfwProtection
     */
    public $cfwProtection;

    /**
     * @description ECS protection coverage.
     *
     * @var ecsProtection
     */
    public $ecsProtection;

    /**
     * @description WAF protection coverage.
     *
     * @var wafProtection
     */
    public $wafProtection;
    protected $_name = [
        'cfwProtection' => 'CfwProtection',
        'ecsProtection' => 'EcsProtection',
        'wafProtection' => 'WafProtection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cfwProtection) {
            $res['CfwProtection'] = null !== $this->cfwProtection ? $this->cfwProtection->toMap() : null;
        }
        if (null !== $this->ecsProtection) {
            $res['EcsProtection'] = null !== $this->ecsProtection ? $this->ecsProtection->toMap() : null;
        }
        if (null !== $this->wafProtection) {
            $res['WafProtection'] = null !== $this->wafProtection ? $this->wafProtection->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CfwProtection'])) {
            $model->cfwProtection = cfwProtection::fromMap($map['CfwProtection']);
        }
        if (isset($map['EcsProtection'])) {
            $model->ecsProtection = ecsProtection::fromMap($map['EcsProtection']);
        }
        if (isset($map['WafProtection'])) {
            $model->wafProtection = wafProtection::fromMap($map['WafProtection']);
        }

        return $model;
    }
}
