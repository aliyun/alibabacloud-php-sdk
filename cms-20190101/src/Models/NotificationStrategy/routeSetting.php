<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\routeSetting\routes;

class routeSetting extends Model
{
    /**
     * @var routes[]
     */
    public $routes;
    protected $_name = [
        'routes' => 'Routes',
    ];

    public function validate()
    {
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['Routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['Routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Routes'])) {
            if (!empty($map['Routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['Routes'] as $item1) {
                    $model->routes[$n1] = routes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
