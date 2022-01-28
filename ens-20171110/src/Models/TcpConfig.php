<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class TcpConfig extends Model
{
    /**
     * @description 连接超时时间。取值：10~900（秒）。
     *
     * @var int
     */
    public $establishedTimeout;

    /**
     * @description 会话保持的超时时间。取值：0~3600（秒）。默认值：0，表示关闭会话保持。
     *
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @description 调度算法。取值：wrr（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。wlc：除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的次数（概率）也越高。rr：按照访问顺序依次将外部请求依序分发到后端服务器。sch：基于源IP地址的一致性hash，相同的源地址会调度到相同的后端服务器。
     *
     * @var string
     */
    public $scheduler;
    protected $_name = [
        'establishedTimeout' => 'EstablishedTimeout',
        'persistenceTimeout' => 'PersistenceTimeout',
        'scheduler'          => 'Scheduler',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TcpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        return $model;
    }
}
