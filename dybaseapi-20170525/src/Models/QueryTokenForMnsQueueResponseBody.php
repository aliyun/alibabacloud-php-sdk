<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dybaseapi\V20170525\Models;

use AlibabaCloud\SDK\Dybaseapi\V20170525\Models\QueryTokenForMnsQueueResponseBody\messageTokenDTO;
use AlibabaCloud\Tea\Model;

class QueryTokenForMnsQueueResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var messageTokenDTO
     */
    public $messageTokenDTO;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'messageTokenDTO' => 'MessageTokenDTO',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageTokenDTO) {
            $res['MessageTokenDTO'] = null !== $this->messageTokenDTO ? $this->messageTokenDTO->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTokenForMnsQueueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MessageTokenDTO'])) {
            $model->messageTokenDTO = messageTokenDTO::fromMap($map['MessageTokenDTO']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
