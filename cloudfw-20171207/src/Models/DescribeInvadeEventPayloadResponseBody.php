<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInvadeEventPayloadResponseBody extends Model
{
    /**
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @var string
     */
    public $eventUuid;

    /**
     * @var int
     */
    public $highlightEnd;

    /**
     * @var int
     */
    public $highlightStart;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var int
     */
    public $payloadLen;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetsInstanceId' => 'AssetsInstanceId',
        'eventUuid' => 'EventUuid',
        'highlightEnd' => 'HighlightEnd',
        'highlightStart' => 'HighlightStart',
        'payload' => 'Payload',
        'payloadLen' => 'PayloadLen',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }

        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }

        if (null !== $this->highlightEnd) {
            $res['HighlightEnd'] = $this->highlightEnd;
        }

        if (null !== $this->highlightStart) {
            $res['HighlightStart'] = $this->highlightStart;
        }

        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }

        if (null !== $this->payloadLen) {
            $res['PayloadLen'] = $this->payloadLen;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }

        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }

        if (isset($map['HighlightEnd'])) {
            $model->highlightEnd = $map['HighlightEnd'];
        }

        if (isset($map['HighlightStart'])) {
            $model->highlightStart = $map['HighlightStart'];
        }

        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        if (isset($map['PayloadLen'])) {
            $model->payloadLen = $map['PayloadLen'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
