<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateLayer4RuleRequest\usTimeout;

class CreateLayer4RuleRequest extends Model
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
     * @var usTimeout
     */
    public $usTimeout;
    protected $_name = [
        'listeners' => 'Listeners',
        'proxyEnable' => 'ProxyEnable',
        'usTimeout' => 'UsTimeout',
    ];

    public function validate()
    {
        if (null !== $this->usTimeout) {
            $this->usTimeout->validate();
        }
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

        if (null !== $this->usTimeout) {
            $res['UsTimeout'] = null !== $this->usTimeout ? $this->usTimeout->toArray($noStream) : $this->usTimeout;
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
            $model->usTimeout = usTimeout::fromMap($map['UsTimeout']);
        }

        return $model;
    }
}
