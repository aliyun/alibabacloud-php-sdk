<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateAlertStrategyRequest\strategy;

class CreateAlertStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $k8sLabel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'enabled' => 'enabled',
        'k8sLabel' => 'k8sLabel',
        'name' => 'name',
        'strategy' => 'strategy',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->k8sLabel) {
            $res['k8sLabel'] = $this->k8sLabel;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['k8sLabel'])) {
            $model->k8sLabel = $map['k8sLabel'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['strategy'])) {
            $model->strategy = strategy::fromMap($map['strategy']);
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
