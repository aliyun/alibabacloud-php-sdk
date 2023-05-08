<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class protocolSupport extends Model
{
    /**
     * @description Indicates whether Dubbo Filter is enabled. Valid values:
     *
     *   `true`: Dubbo Filter is enabled.
     *   `false`: Dubbo Filter is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $dubboFilterEnabled;

    /**
     * @description Indicates whether MySQL Filter is enabled. Valid values:
     *
     *   `true`: MySQL Filter is enabled.
     *   `false`: MySQL Filter is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $mysqlFilterEnabled;

    /**
     * @description Indicates whether Redis Filter is enabled. Valid values:
     *
     *   `true`: Redis Filter is enabled.
     *   `false`: Redis Filter is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $redisFilterEnabled;

    /**
     * @description Indicates whether Thrift Filter is enabled. Valid values:
     *
     *   `true`: Thrift Filter is enabled.
     *   `false`: Thrift Filter is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $thriftFilterEnabled;
    protected $_name = [
        'dubboFilterEnabled'  => 'DubboFilterEnabled',
        'mysqlFilterEnabled'  => 'MysqlFilterEnabled',
        'redisFilterEnabled'  => 'RedisFilterEnabled',
        'thriftFilterEnabled' => 'ThriftFilterEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }
        if (null !== $this->mysqlFilterEnabled) {
            $res['MysqlFilterEnabled'] = $this->mysqlFilterEnabled;
        }
        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
        }
        if (null !== $this->thriftFilterEnabled) {
            $res['ThriftFilterEnabled'] = $this->thriftFilterEnabled;
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
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }
        if (isset($map['MysqlFilterEnabled'])) {
            $model->mysqlFilterEnabled = $map['MysqlFilterEnabled'];
        }
        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
        }
        if (isset($map['ThriftFilterEnabled'])) {
            $model->thriftFilterEnabled = $map['ThriftFilterEnabled'];
        }

        return $model;
    }
}
