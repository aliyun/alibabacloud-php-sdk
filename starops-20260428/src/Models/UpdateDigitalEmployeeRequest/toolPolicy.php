<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\Hook;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest\toolPolicy\aliyun;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest\toolPolicy\global_;

class toolPolicy extends Model
{
    /**
     * @var aliyun
     */
    public $aliyun;

    /**
     * @var global_
     */
    public $global;

    /**
     * @var Hook[]
     */
    public $hooks;
    protected $_name = [
        'aliyun' => 'aliyun',
        'global' => 'global',
        'hooks' => 'hooks',
    ];

    public function validate()
    {
        if (null !== $this->aliyun) {
            $this->aliyun->validate();
        }
        if (null !== $this->global) {
            $this->global->validate();
        }
        if (\is_array($this->hooks)) {
            Model::validateArray($this->hooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyun) {
            $res['aliyun'] = null !== $this->aliyun ? $this->aliyun->toArray($noStream) : $this->aliyun;
        }

        if (null !== $this->global) {
            $res['global'] = null !== $this->global ? $this->global->toArray($noStream) : $this->global;
        }

        if (null !== $this->hooks) {
            if (\is_array($this->hooks)) {
                $res['hooks'] = [];
                $n1 = 0;
                foreach ($this->hooks as $item1) {
                    $res['hooks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['aliyun'])) {
            $model->aliyun = aliyun::fromMap($map['aliyun']);
        }

        if (isset($map['global'])) {
            $model->global = global_::fromMap($map['global']);
        }

        if (isset($map['hooks'])) {
            if (!empty($map['hooks'])) {
                $model->hooks = [];
                $n1 = 0;
                foreach ($map['hooks'] as $item1) {
                    $model->hooks[$n1] = Hook::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
