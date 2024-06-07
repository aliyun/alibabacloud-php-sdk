<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoResponseBody\secretBuyInfoDTO;
use AlibabaCloud\Tea\Model;

class BuySecretNoResponseBody extends Model
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
     * @example 2D1AEB96-96D0-454E-B0DC-AE2A8DF08020
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information returned after the operation was called.
     *
     * @var secretBuyInfoDTO
     */
    public $secretBuyInfoDTO;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'secretBuyInfoDTO' => 'SecretBuyInfoDTO',
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
        if (null !== $this->secretBuyInfoDTO) {
            $res['SecretBuyInfoDTO'] = null !== $this->secretBuyInfoDTO ? $this->secretBuyInfoDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BuySecretNoResponseBody
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
        if (isset($map['SecretBuyInfoDTO'])) {
            $model->secretBuyInfoDTO = secretBuyInfoDTO::fromMap($map['SecretBuyInfoDTO']);
        }

        return $model;
    }
}
