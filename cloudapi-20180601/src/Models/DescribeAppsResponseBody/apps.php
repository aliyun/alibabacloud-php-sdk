<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsResponseBody\apps\app;
use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @var app[]
     */
    public $app;
    protected $_name = [
        'app' => 'App',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = [];
            if (null !== $this->app && \is_array($this->app)) {
                $n = 0;
                foreach ($this->app as $item) {
                    $res['App'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            if (!empty($map['App'])) {
                $model->app = [];
                $n          = 0;
                foreach ($map['App'] as $item) {
                    $model->app[$n++] = null !== $item ? app::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
