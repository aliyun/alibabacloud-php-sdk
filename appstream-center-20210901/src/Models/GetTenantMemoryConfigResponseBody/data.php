<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetTenantMemoryConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $disabledReason;

    /**
     * @var bool
     */
    public $effectiveEnabled;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $instanceDesiredEnabled;

    /**
     * @var bool
     */
    public $tenantEnabled;
    protected $_name = [
        'disabledReason' => 'DisabledReason',
        'effectiveEnabled' => 'EffectiveEnabled',
        'enabled' => 'Enabled',
        'instanceDesiredEnabled' => 'InstanceDesiredEnabled',
        'tenantEnabled' => 'TenantEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disabledReason) {
            $res['DisabledReason'] = $this->disabledReason;
        }

        if (null !== $this->effectiveEnabled) {
            $res['EffectiveEnabled'] = $this->effectiveEnabled;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->instanceDesiredEnabled) {
            $res['InstanceDesiredEnabled'] = $this->instanceDesiredEnabled;
        }

        if (null !== $this->tenantEnabled) {
            $res['TenantEnabled'] = $this->tenantEnabled;
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
        if (isset($map['DisabledReason'])) {
            $model->disabledReason = $map['DisabledReason'];
        }

        if (isset($map['EffectiveEnabled'])) {
            $model->effectiveEnabled = $map['EffectiveEnabled'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['InstanceDesiredEnabled'])) {
            $model->instanceDesiredEnabled = $map['InstanceDesiredEnabled'];
        }

        if (isset($map['TenantEnabled'])) {
            $model->tenantEnabled = $map['TenantEnabled'];
        }

        return $model;
    }
}
