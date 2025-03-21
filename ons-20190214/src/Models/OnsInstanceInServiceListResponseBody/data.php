<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data\instanceVO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var instanceVO[]
     */
    public $instanceVO;
    protected $_name = [
        'instanceVO' => 'InstanceVO',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceVO) {
            $res['InstanceVO'] = [];
            if (null !== $this->instanceVO && \is_array($this->instanceVO)) {
                $n = 0;
                foreach ($this->instanceVO as $item) {
                    $res['InstanceVO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceVO'])) {
            if (!empty($map['InstanceVO'])) {
                $model->instanceVO = [];
                $n = 0;
                foreach ($map['InstanceVO'] as $item) {
                    $model->instanceVO[$n++] = null !== $item ? instanceVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
