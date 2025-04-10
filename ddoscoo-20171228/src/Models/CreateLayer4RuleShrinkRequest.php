<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;

class CreateLayer4RuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $listeners;

    /**
     * @var int
     */
    public $proxyEnable;

    /**
     * @var string
     */
    public $usTimeoutShrink;
    protected $_name = [
        'listeners' => 'Listeners',
        'proxyEnable' => 'ProxyEnable',
        'usTimeoutShrink' => 'UsTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }

        if (null !== $this->proxyEnable) {
            $res['ProxyEnable'] = $this->proxyEnable;
        }

        if (null !== $this->usTimeoutShrink) {
            $res['UsTimeout'] = $this->usTimeoutShrink;
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
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        if (isset($map['ProxyEnable'])) {
            $model->proxyEnable = $map['ProxyEnable'];
        }

        if (isset($map['UsTimeout'])) {
            $model->usTimeoutShrink = $map['UsTimeout'];
        }

        return $model;
    }
}
