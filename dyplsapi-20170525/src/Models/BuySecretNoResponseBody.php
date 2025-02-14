<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoResponseBody\secretBuyInfoDTO;

class BuySecretNoResponseBody extends Model
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
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->secretBuyInfoDTO) {
            $this->secretBuyInfoDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SecretBuyInfoDTO'] = null !== $this->secretBuyInfoDTO ? $this->secretBuyInfoDTO->toArray($noStream) : $this->secretBuyInfoDTO;
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
