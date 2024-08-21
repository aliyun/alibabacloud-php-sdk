<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent;
use AlibabaCloud\Tea\Model;

class protocol extends Model
{
    /**
     * @description The encoding format.
     *
     *   0: UTF-8
     *   1: GBK
     *   2: GB2312
     *   3: Unicode
     *
     * @example 0
     *
     * @var int
     */
    public $characterEncoding;

    /**
     * @description The custom host mode.
     *
     *   1: round robin
     *   0: random
     *
     * @example 1
     *
     * @var int
     */
    public $customHost;

    /**
     * @description The custom host IP address. You can enter multiple IP addresses. Separate the IP addresses with commas (,).
     *
     * @example ipv4:192.168.2.1,192.168.2.5:img.a.com|192.168.2.1[8080]:img.a.com
     *
     * @var string
     */
    public $customHostIp;

    /**
     * @description The connection timeout period of the protocol. Unit: seconds.
     *
     * @example 3
     *
     * @var int
     */
    public $protocolConnectionTime;

    /**
     * @description The timeout period of API performance synthetic monitoring. Unit: seconds.
     *
     * @example 30
     *
     * @var string
     */
    public $protocolMonitorTimeout;

    /**
     * @description The size of the received data. This parameter is required when you set the value of the VerifyWay parameter to 2.
     *
     * @example 500
     *
     * @var int
     */
    public $receivedDataSize;

    /**
     * @description The request content, including the request header and request body.
     *
     * @var requestContent
     */
    public $requestContent;

    /**
     * @description The verification string.
     *
     * @example "code":200
     *
     * @var string
     */
    public $verifyContent;

    /**
     * @description The method that is used to verify the response content.
     *
     *   0: no verification.
     *   1: exact match with the verification string.
     *   2: partial match with the verification string.
     *   3: MD5 verification.
     *
     * @example 0
     *
     * @var int
     */
    public $verifyWay;
    protected $_name = [
        'characterEncoding'      => 'CharacterEncoding',
        'customHost'             => 'CustomHost',
        'customHostIp'           => 'CustomHostIp',
        'protocolConnectionTime' => 'ProtocolConnectionTime',
        'protocolMonitorTimeout' => 'ProtocolMonitorTimeout',
        'receivedDataSize'       => 'ReceivedDataSize',
        'requestContent'         => 'RequestContent',
        'verifyContent'          => 'VerifyContent',
        'verifyWay'              => 'VerifyWay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->characterEncoding) {
            $res['CharacterEncoding'] = $this->characterEncoding;
        }
        if (null !== $this->customHost) {
            $res['CustomHost'] = $this->customHost;
        }
        if (null !== $this->customHostIp) {
            $res['CustomHostIp'] = $this->customHostIp;
        }
        if (null !== $this->protocolConnectionTime) {
            $res['ProtocolConnectionTime'] = $this->protocolConnectionTime;
        }
        if (null !== $this->protocolMonitorTimeout) {
            $res['ProtocolMonitorTimeout'] = $this->protocolMonitorTimeout;
        }
        if (null !== $this->receivedDataSize) {
            $res['ReceivedDataSize'] = $this->receivedDataSize;
        }
        if (null !== $this->requestContent) {
            $res['RequestContent'] = null !== $this->requestContent ? $this->requestContent->toMap() : null;
        }
        if (null !== $this->verifyContent) {
            $res['VerifyContent'] = $this->verifyContent;
        }
        if (null !== $this->verifyWay) {
            $res['VerifyWay'] = $this->verifyWay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocol
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterEncoding'])) {
            $model->characterEncoding = $map['CharacterEncoding'];
        }
        if (isset($map['CustomHost'])) {
            $model->customHost = $map['CustomHost'];
        }
        if (isset($map['CustomHostIp'])) {
            $model->customHostIp = $map['CustomHostIp'];
        }
        if (isset($map['ProtocolConnectionTime'])) {
            $model->protocolConnectionTime = $map['ProtocolConnectionTime'];
        }
        if (isset($map['ProtocolMonitorTimeout'])) {
            $model->protocolMonitorTimeout = $map['ProtocolMonitorTimeout'];
        }
        if (isset($map['ReceivedDataSize'])) {
            $model->receivedDataSize = $map['ReceivedDataSize'];
        }
        if (isset($map['RequestContent'])) {
            $model->requestContent = requestContent::fromMap($map['RequestContent']);
        }
        if (isset($map['VerifyContent'])) {
            $model->verifyContent = $map['VerifyContent'];
        }
        if (isset($map['VerifyWay'])) {
            $model->verifyWay = $map['VerifyWay'];
        }

        return $model;
    }
}
