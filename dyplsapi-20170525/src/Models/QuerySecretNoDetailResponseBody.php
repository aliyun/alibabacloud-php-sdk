<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoDetailResponseBody\secretNoInfoDTO;
use AlibabaCloud\Tea\Model;

class QuerySecretNoDetailResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 066E6E47-04CB-4774-A976-4F73CB76D4A3
     *
     * @var string
     */
    public $requestId;

    /**
     * @var secretNoInfoDTO
     */
    public $secretNoInfoDTO;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'secretNoInfoDTO' => 'SecretNoInfoDTO',
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
        if (null !== $this->secretNoInfoDTO) {
            $res['SecretNoInfoDTO'] = null !== $this->secretNoInfoDTO ? $this->secretNoInfoDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySecretNoDetailResponseBody
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
        if (isset($map['SecretNoInfoDTO'])) {
            $model->secretNoInfoDTO = secretNoInfoDTO::fromMap($map['SecretNoInfoDTO']);
        }

        return $model;
    }
}
