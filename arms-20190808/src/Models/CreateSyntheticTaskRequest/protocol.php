<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\protocol\requestContent;

class protocol extends Model
{
    /**
     * @var int
     */
    public $characterEncoding;
    /**
     * @var int
     */
    public $customHost;
    /**
     * @var string
     */
    public $customHostIp;
    /**
     * @var int
     */
    public $protocolConnectionTime;
    /**
     * @var string
     */
    public $protocolMonitorTimeout;
    /**
     * @var int
     */
    public $receivedDataSize;
    /**
     * @var requestContent
     */
    public $requestContent;
    /**
     * @var string
     */
    public $verifyContent;
    /**
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
        if (null !== $this->requestContent) {
            $this->requestContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RequestContent'] = null !== $this->requestContent ? $this->requestContent->toArray($noStream) : $this->requestContent;
        }

        if (null !== $this->verifyContent) {
            $res['VerifyContent'] = $this->verifyContent;
        }

        if (null !== $this->verifyWay) {
            $res['VerifyWay'] = $this->verifyWay;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
