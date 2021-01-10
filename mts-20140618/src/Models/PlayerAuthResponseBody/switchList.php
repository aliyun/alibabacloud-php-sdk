<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\PlayerAuthResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\PlayerAuthResponseBody\switchList\switch_;
use AlibabaCloud\Tea\Model;

class switchList extends Model
{
    /**
     * @var switch_[]
     */
    public $switch;
    protected $_name = [
        'switch' => 'Switch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switch) {
            $res['Switch'] = [];
            if (null !== $this->switch && \is_array($this->switch)) {
                $n = 0;
                foreach ($this->switch as $item) {
                    $res['Switch'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Switch'])) {
            if (!empty($map['Switch'])) {
                $model->switch = [];
                $n             = 0;
                foreach ($map['Switch'] as $item) {
                    $model->switch[$n++] = null !== $item ? switch_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
