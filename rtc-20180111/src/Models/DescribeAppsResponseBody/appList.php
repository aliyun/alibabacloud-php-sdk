<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponseBody\appList\app;

class appList extends Model
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
        if (\is_array($this->app)) {
            Model::validateArray($this->app);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            if (\is_array($this->app)) {
                $res['App'] = [];
                $n1 = 0;
                foreach ($this->app as $item1) {
                    $res['App'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['App'])) {
            if (!empty($map['App'])) {
                $model->app = [];
                $n1 = 0;
                foreach ($map['App'] as $item1) {
                    $model->app[$n1] = app::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
