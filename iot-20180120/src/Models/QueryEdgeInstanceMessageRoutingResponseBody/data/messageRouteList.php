<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponseBody\data\messageRouteList\messageRoute;

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
        if (\is_array($this->messageRoute)) {
            Model::validateArray($this->messageRoute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageRoute) {
            if (\is_array($this->messageRoute)) {
                $res['MessageRoute'] = [];
                $n1 = 0;
                foreach ($this->messageRoute as $item1) {
                    $res['MessageRoute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MessageRoute'])) {
            if (!empty($map['MessageRoute'])) {
                $model->messageRoute = [];
                $n1 = 0;
                foreach ($map['MessageRoute'] as $item1) {
                    $model->messageRoute[$n1] = messageRoute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
