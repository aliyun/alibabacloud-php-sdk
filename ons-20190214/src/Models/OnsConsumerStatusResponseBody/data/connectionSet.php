<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\connectionSet\connectionDo;
use AlibabaCloud\Tea\Model;

class connectionSet extends Model
{
    /**
     * @var connectionDo[]
     */
    public $connectionDo;
    protected $_name = [
        'connectionDo' => 'ConnectionDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionDo) {
            $res['ConnectionDo'] = [];
            if (null !== $this->connectionDo && \is_array($this->connectionDo)) {
                $n = 0;
                foreach ($this->connectionDo as $item) {
                    $res['ConnectionDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectionSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionDo'])) {
            if (!empty($map['ConnectionDo'])) {
                $model->connectionDo = [];
                $n                   = 0;
                foreach ($map['ConnectionDo'] as $item) {
                    $model->connectionDo[$n++] = null !== $item ? connectionDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
