<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO;
use AlibabaCloud\Tea\Model;

class QuerySecretNoRemainResponseBody extends Model
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
     * @example 9FC30594-3841-43AD-9008-03393BCB5CD2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information returned after the operation was called.
     *
     * @var secretRemainDTO
     */
    public $secretRemainDTO;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'secretRemainDTO' => 'SecretRemainDTO',
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
        if (null !== $this->secretRemainDTO) {
            $res['SecretRemainDTO'] = null !== $this->secretRemainDTO ? $this->secretRemainDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySecretNoRemainResponseBody
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
        if (isset($map['SecretRemainDTO'])) {
            $model->secretRemainDTO = secretRemainDTO::fromMap($map['SecretRemainDTO']);
        }

        return $model;
    }
}
