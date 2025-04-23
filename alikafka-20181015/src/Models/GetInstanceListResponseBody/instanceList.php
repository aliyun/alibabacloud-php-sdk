<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO;

class instanceList extends Model
{
    /**
     * @var instanceVO[]
     */
    public $instanceVO;
    protected $_name = [
        'instanceVO' => 'InstanceVO',
    ];

    public function validate()
    {
        if (\is_array($this->instanceVO)) {
            Model::validateArray($this->instanceVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceVO) {
            if (\is_array($this->instanceVO)) {
                $res['InstanceVO'] = [];
                $n1 = 0;
                foreach ($this->instanceVO as $item1) {
                    $res['InstanceVO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceVO'])) {
            if (!empty($map['InstanceVO'])) {
                $model->instanceVO = [];
                $n1 = 0;
                foreach ($map['InstanceVO'] as $item1) {
                    $model->instanceVO[$n1++] = instanceVO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
