<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\protocol\requestContent;
use AlibabaCloud\Tea\Model;

class protocol extends Model
{
    /**
     * @description The encoding format. Valid values:
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
     * @description The custom host. Valid values:
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
     * @description The custom IP address of the host. Multiple IP addresses are separated with commas (,).
     *
     * @example 119.119.53.156
     *
     * @var string
     */
    public $customHostIp;

    /**
     * @description The timeout period.
     *
     * @example 20
     *
     * @var int
     */
    public $protocolConnectionTimeout;

    /**
     * @description The timeout period of API performance monitoring. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $protocolMonitorTimeout;

    /**
     * @description The size of the received data. This parameter is returned when **VerifyWay** is set to 2.
     *
     * @example 30
     *
     * @var int
     */
    public $receivedDataSize;

    /**
     * @description The request content, including the header and body.
     *
     * @var requestContent
     */
    public $requestContent;

    /**
     * @description The verification string.
     *
     * @example list
     *
     * @var string
     */
    public $verifyContent;

    /**
     * @description The method that is used to verify the response content. Valid values:
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
        'characterEncoding' => 'CharacterEncoding',
        'customHost' => 'CustomHost',
        'customHostIp' => 'CustomHostIp',
        'protocolConnectionTimeout' => 'ProtocolConnectionTimeout',
        'protocolMonitorTimeout' => 'ProtocolMonitorTimeout',
        'receivedDataSize' => 'ReceivedDataSize',
        'requestContent' => 'RequestContent',
        'verifyContent' => 'VerifyContent',
        'verifyWay' => 'VerifyWay',
    ];

    public function validate() {}

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
        if (null !== $this->protocolConnectionTimeout) {
            $res['ProtocolConnectionTimeout'] = $this->protocolConnectionTimeout;
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
        if (isset($map['ProtocolConnectionTimeout'])) {
            $model->protocolConnectionTimeout = $map['ProtocolConnectionTimeout'];
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
