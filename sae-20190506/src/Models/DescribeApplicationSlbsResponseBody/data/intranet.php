<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data;

use AlibabaCloud\Tea\Model;

class intranet extends Model
{
    /**
     * @example wwe
     *
     * @var string
     */
    public $cookie;

    /**
     * @example 56
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description The timestamp when the canary release rule was created.
     *
     * @example 1741247308294
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1513561019707729_16f37aae5f3_-375882821_-169099****
     *
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
     * @description The IP address of the Internet-facing SLB instance.
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
     * @example false
     *
     * @var bool
     */
    public $stickySession;

    /**
     * @example insert
     *
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
        'cookie' => 'Cookie',
        'cookieTimeout' => 'CookieTimeout',
        'createTime' => 'CreateTime',
        'httpsCaCertId' => 'HttpsCaCertId',
        'httpsCertId' => 'HttpsCertId',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'stickySession' => 'StickySession',
        'stickySessionType' => 'StickySessionType',
        'targetPort' => 'TargetPort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
     * @return intranet
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
