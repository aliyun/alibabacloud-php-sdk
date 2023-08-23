<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The private HTTP endpoint of the instance.
     *
     * @example http://138015630679****.mqrest.cn-chengdu-internal.aliyuncs.com
     *
     * @var string
     */
    public $httpInternalEndpoint;

    /**
     * @description The public HTTP endpoint of the instance.
     *
     * @example http://138015630679****.mqrest.cn-chengdu.aliyuncs.com
     *
     * @var string
     */
    public $httpInternetEndpoint;

    /**
     * @description The public HTTPS endpoint of the instance.
     *
     * @example https://138015630679****.mqrest.cn-chengdu.aliyuncs.com
     *
     * @var string
     */
    public $httpInternetSecureEndpoint;

    /**
     * @description The private TCP endpoint of the instance.
     *
     * @example http://MQ_INST_138015630679****_BAAy1Hac.cn-chengdu.mq-internal.aliyuncs.com:8080
     *
     * @var string
     */
    public $tcpEndpoint;

    /**
     * @description The public TCP endpoint of the instance.
     *
     *   Only instances that are deployed in the China (Chengdu), China (Qingdao), or China (Shenzhen) region can be accessed by using public TCP endpoints.
     *
     *   Before you use a public TCP endpoint, make sure that your client SDK meets the following requirements:
     *
     *   TCP client SDK for Java: V2.0.0.Final or later For more information, see [Release notes for the SDK for Java](~~325569~~).
     *   TCP client SDK for C++: V3.0.0 or later For more information, see [Release notes for the SDK for C++](~~325570~~).
     *
     *   You are charged for Internet traffic when you use a public TCP endpoint. For more information, see [Internet traffic fee](~~325571~~).
     *
     * @example http://MQ_INST_138015630679****_BAAy1Hac.mq.cn-chengdu.aliyuncs.com:80
     *
     * @var string
     */
    public $tcpInternetEndpoint;
    protected $_name = [
        'httpInternalEndpoint'       => 'HttpInternalEndpoint',
        'httpInternetEndpoint'       => 'HttpInternetEndpoint',
        'httpInternetSecureEndpoint' => 'HttpInternetSecureEndpoint',
        'tcpEndpoint'                => 'TcpEndpoint',
        'tcpInternetEndpoint'        => 'TcpInternetEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpInternalEndpoint) {
            $res['HttpInternalEndpoint'] = $this->httpInternalEndpoint;
        }
        if (null !== $this->httpInternetEndpoint) {
            $res['HttpInternetEndpoint'] = $this->httpInternetEndpoint;
        }
        if (null !== $this->httpInternetSecureEndpoint) {
            $res['HttpInternetSecureEndpoint'] = $this->httpInternetSecureEndpoint;
        }
        if (null !== $this->tcpEndpoint) {
            $res['TcpEndpoint'] = $this->tcpEndpoint;
        }
        if (null !== $this->tcpInternetEndpoint) {
            $res['TcpInternetEndpoint'] = $this->tcpInternetEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpInternalEndpoint'])) {
            $model->httpInternalEndpoint = $map['HttpInternalEndpoint'];
        }
        if (isset($map['HttpInternetEndpoint'])) {
            $model->httpInternetEndpoint = $map['HttpInternetEndpoint'];
        }
        if (isset($map['HttpInternetSecureEndpoint'])) {
            $model->httpInternetSecureEndpoint = $map['HttpInternetSecureEndpoint'];
        }
        if (isset($map['TcpEndpoint'])) {
            $model->tcpEndpoint = $map['TcpEndpoint'];
        }
        if (isset($map['TcpInternetEndpoint'])) {
            $model->tcpInternetEndpoint = $map['TcpInternetEndpoint'];
        }

        return $model;
    }
}
