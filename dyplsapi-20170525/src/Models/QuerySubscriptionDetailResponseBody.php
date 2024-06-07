<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponseBody\secretBindDetailDTO;
use AlibabaCloud\Tea\Model;

class QuerySubscriptionDetailResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   The value OK indicates that the request was successful.
     *   Other status codes indicate that the request failed. For more information, see [Error codes](https://help.aliyun.com/document_detail/109196.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 066E6E47-04CB-4774-A976-4F73CB76D4A3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information returned after the QuerySubscriptionDetail operation was called.
     *
     * @var secretBindDetailDTO
     */
    public $secretBindDetailDTO;
    protected $_name = [
        'code'                => 'Code',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'secretBindDetailDTO' => 'SecretBindDetailDTO',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretBindDetailDTO) {
            $res['SecretBindDetailDTO'] = null !== $this->secretBindDetailDTO ? $this->secretBindDetailDTO->toMap() : null;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretBindDetailDTO'])) {
            $model->secretBindDetailDTO = secretBindDetailDTO::fromMap($map['SecretBindDetailDTO']);
        }

        return $model;
    }
}
