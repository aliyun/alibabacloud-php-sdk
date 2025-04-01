<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class InstanceLifecycleConfig extends Model
{
    /**
     * @var LifecycleHook
     */
    public $preFreeze;

    /**
     * @var LifecycleHook
     */
    public $preStop;
    protected $_name = [
        'preFreeze' => 'preFreeze',
        'preStop' => 'preStop',
    ];

    public function validate()
    {
        if (null !== $this->preFreeze) {
            $this->preFreeze->validate();
        }
        if (null !== $this->preStop) {
            $this->preStop->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preFreeze) {
            $res['preFreeze'] = null !== $this->preFreeze ? $this->preFreeze->toArray($noStream) : $this->preFreeze;
        }

        if (null !== $this->preStop) {
            $res['preStop'] = null !== $this->preStop ? $this->preStop->toArray($noStream) : $this->preStop;
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
        if (isset($map['preFreeze'])) {
            $model->preFreeze = LifecycleHook::fromMap($map['preFreeze']);
        }

        if (isset($map['preStop'])) {
            $model->preStop = LifecycleHook::fromMap($map['preStop']);
        }

        return $model;
    }
}
