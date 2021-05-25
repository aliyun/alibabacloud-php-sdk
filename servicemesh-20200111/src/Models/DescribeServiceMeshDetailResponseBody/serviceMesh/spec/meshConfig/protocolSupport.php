<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class protocolSupport extends Model
{
    /**
     * @var bool
     */
    public $mysqlFilterEnabled;

    /**
     * @var bool
     */
    public $redisFilterEnabled;

    /**
     * @var bool
     */
    public $thriftFilterEnabled;

    /**
     * @var bool
     */
    public $dubboFilterEnabled;
    protected $_name = [
        'mysqlFilterEnabled'  => 'MysqlFilterEnabled',
        'redisFilterEnabled'  => 'RedisFilterEnabled',
        'thriftFilterEnabled' => 'ThriftFilterEnabled',
        'dubboFilterEnabled'  => 'DubboFilterEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mysqlFilterEnabled) {
            $res['MysqlFilterEnabled'] = $this->mysqlFilterEnabled;
        }
        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
        }
        if (null !== $this->thriftFilterEnabled) {
            $res['ThriftFilterEnabled'] = $this->thriftFilterEnabled;
        }
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocolSupport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MysqlFilterEnabled'])) {
            $model->mysqlFilterEnabled = $map['MysqlFilterEnabled'];
        }
        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
        }
        if (isset($map['ThriftFilterEnabled'])) {
            $model->thriftFilterEnabled = $map['ThriftFilterEnabled'];
        }
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }

        return $model;
    }
}
