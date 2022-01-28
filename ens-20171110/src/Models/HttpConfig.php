<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class HttpConfig extends Model
{
    /**
     * @description 服务器上配置的Cookie。 长度为1-200，只能包含ASCII英文字母和数字字符，不能包含逗号、分号或空格，也不能以$开头。 说明 当StickySession为on且StickySessionType为server时，该参数必选。
     *
     * @var string
     */
    public $cookie;

    /**
     * @description Cookie超时时间。  取值：1~86400（秒）。   说明 当StickySession为on且StickySessionType为insert时，该参数必选。
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description 指定连接空闲超时时间，取值范围为1~60秒，默认值为15秒。  在超时时间内一直没有访问请求，负载均衡会暂时中断当前连接，直到一下次请求来临时重新建立新的连接。
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description 指定请求超时时间，取值范围为1~180秒，默认值为60秒。  在超时时间内后端服务器一直没有响应，负载均衡将放弃等待，给客户端返回 HTTP 504 错误码。
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description 调度算法。取值：  wrr（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。 wlc：除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的次数（概率）也越高。 rr：按照访问顺序依次将外部请求依序分发到后端服务器。
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description 服务器证书的ID。
     *
     * @var string
     */
    public $serverCertificateId;

    /**
     * @description 是否开启会话保持。  取值：on | off。
     *
     * @var string
     */
    public $stickySession;

    /**
     * @description cookie的处理方式。取值：  insert：植入Cookie。  客户端第一次访问时，负载均衡会在返回请求中植入Cookie（即在HTTP/HTTPS响应报文中插入SERVERID），下次客户端携带此Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器上。  server：重写Cookie。  负载均衡发现用户自定义了Cookie，将会对原来的Cookie进行重写，下次客户端携带新的Cookie访问，负载均衡服务会将请求定向转发给之前记录到的后端服务器。   说明 当StickySession的值为on时，必须指定该参数。
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @description 是否开启通过X-Forwarded-For头字段获取来访者真实 IP。  取值为on。
     *
     * @var string
     */
    public $XForwardedFor;
    protected $_name = [
        'cookie'              => 'Cookie',
        'cookieTimeout'       => 'CookieTimeout',
        'idleTimeout'         => 'IdleTimeout',
        'requestTimeout'      => 'RequestTimeout',
        'scheduler'           => 'Scheduler',
        'serverCertificateId' => 'ServerCertificateId',
        'stickySession'       => 'StickySession',
        'stickySessionType'   => 'StickySessionType',
        'XForwardedFor'       => 'XForwardedFor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }

        return $model;
    }
}
