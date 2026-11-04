<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListInstancesOfUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListInstancesOfUserResponseBody\instances\callCenterInstance;

class instances extends Model
{
    /**
     * @var callCenterInstance[]
     */
    public $callCenterInstance;
    protected $_name = [
        'callCenterInstance' => 'CallCenterInstance',
    ];

    public function validate()
    {
        if (\is_array($this->callCenterInstance)) {
            Model::validateArray($this->callCenterInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callCenterInstance) {
            if (\is_array($this->callCenterInstance)) {
                $res['CallCenterInstance'] = [];
                $n1 = 0;
                foreach ($this->callCenterInstance as $item1) {
                    $res['CallCenterInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CallCenterInstance'])) {
            if (!empty($map['CallCenterInstance'])) {
                $model->callCenterInstance = [];
                $n1 = 0;
                foreach ($map['CallCenterInstance'] as $item1) {
                    $model->callCenterInstance[$n1] = callCenterInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
