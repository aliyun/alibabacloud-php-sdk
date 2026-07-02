<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeSdlLastPayloadResponseBody extends Model
{
    /**
     * @var string
     */
    public $dstPortList;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $protoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $srcPortList;
    protected $_name = [
        'dstPortList' => 'DstPortList',
        'payload' => 'Payload',
        'protoList' => 'ProtoList',
        'requestId' => 'RequestId',
        'srcPortList' => 'SrcPortList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstPortList) {
            $res['DstPortList'] = $this->dstPortList;
        }

        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }

        if (null !== $this->protoList) {
            $res['ProtoList'] = $this->protoList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->srcPortList) {
            $res['SrcPortList'] = $this->srcPortList;
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
        if (isset($map['DstPortList'])) {
            $model->dstPortList = $map['DstPortList'];
        }

        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        if (isset($map['ProtoList'])) {
            $model->protoList = $map['ProtoList'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SrcPortList'])) {
            $model->srcPortList = $map['SrcPortList'];
        }

        return $model;
    }
}
