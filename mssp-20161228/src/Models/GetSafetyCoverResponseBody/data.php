<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data\cfwProtection;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data\ecsProtection;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSafetyCoverResponseBody\data\wafProtection;

class data extends Model
{
    /**
     * @var cfwProtection
     */
    public $cfwProtection;

    /**
     * @var ecsProtection
     */
    public $ecsProtection;

    /**
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
        if (null !== $this->cfwProtection) {
            $this->cfwProtection->validate();
        }
        if (null !== $this->ecsProtection) {
            $this->ecsProtection->validate();
        }
        if (null !== $this->wafProtection) {
            $this->wafProtection->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cfwProtection) {
            $res['CfwProtection'] = null !== $this->cfwProtection ? $this->cfwProtection->toArray($noStream) : $this->cfwProtection;
        }

        if (null !== $this->ecsProtection) {
            $res['EcsProtection'] = null !== $this->ecsProtection ? $this->ecsProtection->toArray($noStream) : $this->ecsProtection;
        }

        if (null !== $this->wafProtection) {
            $res['WafProtection'] = null !== $this->wafProtection ? $this->wafProtection->toArray($noStream) : $this->wafProtection;
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
