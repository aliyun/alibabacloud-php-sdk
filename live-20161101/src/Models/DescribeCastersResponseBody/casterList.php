<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCastersResponseBody\casterList\caster;
use AlibabaCloud\Tea\Model;

class casterList extends Model
{
    /**
     * @var caster[]
     */
    public $caster;
    protected $_name = [
        'caster' => 'Caster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caster) {
            $res['Caster'] = [];
            if (null !== $this->caster && \is_array($this->caster)) {
                $n = 0;
                foreach ($this->caster as $item) {
                    $res['Caster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return casterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caster'])) {
            if (!empty($map['Caster'])) {
                $model->caster = [];
                $n             = 0;
                foreach ($map['Caster'] as $item) {
                    $model->caster[$n++] = null !== $item ? caster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
