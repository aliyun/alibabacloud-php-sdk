<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySubscriptionDetailResponseBody\secretBindDetailDTO;

class QuerySubscriptionDetailResponseBody extends Model
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
        if (null !== $this->secretBindDetailDTO) {
            $this->secretBindDetailDTO->validate();
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

        if (null !== $this->secretBindDetailDTO) {
            $res['SecretBindDetailDTO'] = null !== $this->secretBindDetailDTO ? $this->secretBindDetailDTO->toArray($noStream) : $this->secretBindDetailDTO;
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

        if (isset($map['SecretBindDetailDTO'])) {
            $model->secretBindDetailDTO = secretBindDetailDTO::fromMap($map['SecretBindDetailDTO']);
        }

        return $model;
    }
}
