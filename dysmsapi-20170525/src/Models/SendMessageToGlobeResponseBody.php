<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendMessageToGlobeResponseBody\numberDetail;
use AlibabaCloud\Tea\Model;

class SendMessageToGlobeResponseBody extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $segments;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $to;

    /**
     * @var numberDetail
     */
    public $numberDetail;
    protected $_name = [
        'from'         => 'From',
        'messageId'    => 'MessageId',
        'requestId'    => 'RequestId',
        'segments'     => 'Segments',
        'code'         => 'Code',
        'to'           => 'To',
        'numberDetail' => 'NumberDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->segments) {
            $res['Segments'] = $this->segments;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->numberDetail) {
            $res['NumberDetail'] = null !== $this->numberDetail ? $this->numberDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageToGlobeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Segments'])) {
            $model->segments = $map['Segments'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['NumberDetail'])) {
            $model->numberDetail = numberDetail::fromMap($map['NumberDetail']);
        }

        return $model;
    }
}
