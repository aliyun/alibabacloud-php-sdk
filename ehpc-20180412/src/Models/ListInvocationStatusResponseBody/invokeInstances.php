<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody\invokeInstances\invokeInstance;

class invokeInstances extends Model
{
    /**
     * @var invokeInstance[]
     */
    public $invokeInstance;
    protected $_name = [
        'invokeInstance' => 'InvokeInstance',
    ];

    public function validate()
    {
        if (\is_array($this->invokeInstance)) {
            Model::validateArray($this->invokeInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invokeInstance) {
            if (\is_array($this->invokeInstance)) {
                $res['InvokeInstance'] = [];
                $n1 = 0;
                foreach ($this->invokeInstance as $item1) {
                    $res['InvokeInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InvokeInstance'])) {
            if (!empty($map['InvokeInstance'])) {
                $model->invokeInstance = [];
                $n1 = 0;
                foreach ($map['InvokeInstance'] as $item1) {
                    $model->invokeInstance[$n1++] = invokeInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
