<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnResponseBody\secretBindDTO;
use AlibabaCloud\Tea\Model;

class BindAxnResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   The value OK indicates that the request was successful.
     *   Other values indicate that the request failed. For more information, see [Error codes](https://help.aliyun.com/document_detail/109196.html).
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
     * @example F655A8D5-B967-440B-8683-DAD6FF8DE990
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information returned after the phone numbers were bound.
     *
     * @var secretBindDTO
     */
    public $secretBindDTO;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'secretBindDTO' => 'SecretBindDTO',
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
        if (null !== $this->secretBindDTO) {
            $res['SecretBindDTO'] = null !== $this->secretBindDTO ? $this->secretBindDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAxnResponseBody
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
        if (isset($map['SecretBindDTO'])) {
            $model->secretBindDTO = secretBindDTO::fromMap($map['SecretBindDTO']);
        }

        return $model;
    }
}
