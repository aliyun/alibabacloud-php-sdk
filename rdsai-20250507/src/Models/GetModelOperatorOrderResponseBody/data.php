<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetModelOperatorOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetModelOperatorOrderResponseBody\data\instanceList;

class data extends Model
{
    /**
     * @var bool
     */
    public $hasValidOrder;

    /**
     * @var instanceList[]
     */
    public $instanceList;
    protected $_name = [
        'hasValidOrder' => 'HasValidOrder',
        'instanceList' => 'InstanceList',
    ];

    public function validate()
    {
        if (\is_array($this->instanceList)) {
            Model::validateArray($this->instanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasValidOrder) {
            $res['HasValidOrder'] = $this->hasValidOrder;
        }

        if (null !== $this->instanceList) {
            if (\is_array($this->instanceList)) {
                $res['InstanceList'] = [];
                $n1 = 0;
                foreach ($this->instanceList as $item1) {
                    $res['InstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HasValidOrder'])) {
            $model->hasValidOrder = $map['HasValidOrder'];
        }

        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n1 = 0;
                foreach ($map['InstanceList'] as $item1) {
                    $model->instanceList[$n1] = instanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
