<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListVswitchResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListVswitchResponseBody\vswitchList\vswitch;
use AlibabaCloud\Tea\Model;

class vswitchList extends Model
{
    /**
     * @var vswitch[]
     */
    public $vswitch;
    protected $_name = [
        'vswitch' => 'Vswitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswitch) {
            $res['Vswitch'] = [];
            if (null !== $this->vswitch && \is_array($this->vswitch)) {
                $n = 0;
                foreach ($this->vswitch as $item) {
                    $res['Vswitch'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vswitchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Vswitch'])) {
            if (!empty($map['Vswitch'])) {
                $model->vswitch = [];
                $n              = 0;
                foreach ($map['Vswitch'] as $item) {
                    $model->vswitch[$n++] = null !== $item ? vswitch::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
