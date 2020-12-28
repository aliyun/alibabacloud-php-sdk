<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponseBody\data\connectionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var connectionList[]
     */
    public $connectionList;
    protected $_name = [
        'connectionList' => 'ConnectionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionList) {
            $res['ConnectionList'] = [];
            if (null !== $this->connectionList && \is_array($this->connectionList)) {
                $n = 0;
                foreach ($this->connectionList as $item) {
                    $res['ConnectionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ConnectionList'])) {
            if (!empty($map['ConnectionList'])) {
                $model->connectionList = [];
                $n                     = 0;
                foreach ($map['ConnectionList'] as $item) {
                    $model->connectionList[$n++] = null !== $item ? connectionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
