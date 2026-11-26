<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLJobObservabilityConfig extends Model
{
    /**
     * @var bool
     */
    public $rayDashboardEnabled;

    /**
     * @var bool
     */
    public $xfuseEnabled;
    protected $_name = [
        'rayDashboardEnabled' => 'RayDashboardEnabled',
        'xfuseEnabled' => 'XfuseEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rayDashboardEnabled) {
            $res['RayDashboardEnabled'] = $this->rayDashboardEnabled;
        }

        if (null !== $this->xfuseEnabled) {
            $res['XfuseEnabled'] = $this->xfuseEnabled;
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
        if (isset($map['RayDashboardEnabled'])) {
            $model->rayDashboardEnabled = $map['RayDashboardEnabled'];
        }

        if (isset($map['XfuseEnabled'])) {
            $model->xfuseEnabled = $map['XfuseEnabled'];
        }

        return $model;
    }
}
