<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\Dara\Model;

class deletionProtectionConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $enabledTime;
    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'enabled'     => 'Enabled',
        'enabledTime' => 'EnabledTime',
        'reason'      => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
