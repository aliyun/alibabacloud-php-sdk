<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\routeSetting\routes;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routes) {
            $res['Routes'] = [];
            if (null !== $this->routes && \is_array($this->routes)) {
                $n = 0;
                foreach ($this->routes as $item) {
                    $res['Routes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Routes'])) {
            if (!empty($map['Routes'])) {
                $model->routes = [];
                $n             = 0;
                foreach ($map['Routes'] as $item) {
                    $model->routes[$n++] = null !== $item ? routes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
