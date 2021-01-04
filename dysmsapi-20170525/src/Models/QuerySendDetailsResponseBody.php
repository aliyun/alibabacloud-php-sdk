<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponseBody\smsSendDetailDTOs;
use AlibabaCloud\Tea\Model;

class QuerySendDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $totalCount;

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

    /**
     * @var smsSendDetailDTOs
     */
    public $smsSendDetailDTOs;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'code'              => 'Code',
        'smsSendDetailDTOs' => 'SmsSendDetailDTOs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (null !== $this->smsSendDetailDTOs) {
            $res['SmsSendDetailDTOs'] = null !== $this->smsSendDetailDTOs ? $this->smsSendDetailDTOs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySendDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['SmsSendDetailDTOs'])) {
            $model->smsSendDetailDTOs = smsSendDetailDTOs::fromMap($map['SmsSendDetailDTOs']);
        }

        return $model;
    }
}
