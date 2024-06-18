<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data;

use AlibabaCloud\Tea\Model;

class internet extends Model
{
    /**
     * @var string
     */
    public $cookie;

    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var string
     */
    public $httpsCaCertId;

    /**
     * @description The supported protocol.
     *
     * @example 1513561019707729_16f37aae5f3_-375882821_-169099****
     *
     * @var string
     */
    public $httpsCertId;

    /**
     * @description The ID of the internal-facing SLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The container port.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @var bool
     */
    public $stickySession;

    /**
     * @var string
     */
    public $stickySessionType;

    /**
     * @description The port specified for the SLB listener.
     *
     * @example 8080
     *
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'cookie'            => 'Cookie',
        'cookieTimeout'     => 'CookieTimeout',
        'httpsCaCertId'     => 'HttpsCaCertId',
        'httpsCertId'       => 'HttpsCertId',
        'port'              => 'Port',
        'protocol'          => 'Protocol',
        'stickySession'     => 'StickySession',
        'stickySessionType' => 'StickySessionType',
        'targetPort'        => 'TargetPort',
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
        if (null !== $this->httpsCaCertId) {
            $res['HttpsCaCertId'] = $this->httpsCaCertId;
        }
        if (null !== $this->httpsCertId) {
            $res['HttpsCertId'] = $this->httpsCertId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internet
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
        if (isset($map['HttpsCaCertId'])) {
            $model->httpsCaCertId = $map['HttpsCaCertId'];
        }
        if (isset($map['HttpsCertId'])) {
            $model->httpsCertId = $map['HttpsCertId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
