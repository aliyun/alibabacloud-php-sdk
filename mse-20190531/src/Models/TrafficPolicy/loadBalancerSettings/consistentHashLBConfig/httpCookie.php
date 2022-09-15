<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\loadBalancerSettings\consistentHashLBConfig;

use AlibabaCloud\Tea\Model;

class httpCookie extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $TTL;
    protected $_name = [
        'name' => 'Name',
        'path' => 'Path',
        'TTL'  => 'TTL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpCookie
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }

        return $model;
    }
}
