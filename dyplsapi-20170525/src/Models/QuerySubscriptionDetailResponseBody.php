<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponseBody\secretBindDetailDTO;
use AlibabaCloud\Tea\Model;

class QuerySubscriptionDetailResponseBody extends Model
{
    /**
     * @var secretBindDetailDTO
     */
    public $secretBindDetailDTO;

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
        'secretBindDetailDTO' => 'SecretBindDetailDTO',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'code'                => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretBindDetailDTO) {
            $res['SecretBindDetailDTO'] = null !== $this->secretBindDetailDTO ? $this->secretBindDetailDTO->toMap() : null;
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
     * @return QuerySubscriptionDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretBindDetailDTO'])) {
            $model->secretBindDetailDTO = secretBindDetailDTO::fromMap($map['SecretBindDetailDTO']);
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
