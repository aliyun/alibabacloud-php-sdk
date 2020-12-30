<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models;

use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardFlowInfoResponseBody\cardFlowInfos;
use AlibabaCloud\Tea\Model;

class QueryCardFlowInfoResponseBody extends Model
{
    /**
     * @var cardFlowInfos
     */
    public $cardFlowInfos;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'cardFlowInfos' => 'CardFlowInfos',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'code'          => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardFlowInfos) {
            $res['CardFlowInfos'] = null !== $this->cardFlowInfos ? $this->cardFlowInfos->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCardFlowInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardFlowInfos'])) {
            $model->cardFlowInfos = cardFlowInfos::fromMap($map['CardFlowInfos']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
