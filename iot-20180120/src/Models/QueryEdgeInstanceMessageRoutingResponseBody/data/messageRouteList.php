<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponseBody\data\messageRouteList\messageRoute;
use AlibabaCloud\Tea\Model;

class messageRouteList extends Model
{
    /**
     * @var messageRoute[]
     */
    public $messageRoute;
    protected $_name = [
        'messageRoute' => 'MessageRoute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageRoute) {
            $res['MessageRoute'] = [];
            if (null !== $this->messageRoute && \is_array($this->messageRoute)) {
                $n = 0;
                foreach ($this->messageRoute as $item) {
                    $res['MessageRoute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageRouteList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageRoute'])) {
            if (!empty($map['MessageRoute'])) {
                $model->messageRoute = [];
                $n                   = 0;
                foreach ($map['MessageRoute'] as $item) {
                    $model->messageRoute[$n++] = null !== $item ? messageRoute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
