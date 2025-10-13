<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetCertificateAttributeResponseBody\certificateAttributeDto;

class GetCertificateAttributeResponseBody extends Model
{
    /**
     * @var certificateAttributeDto
     */
    public $certificateAttributeDto;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $httpStatusCode;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateAttributeDto' => 'CertificateAttributeDto',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'success' => 'Success',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->certificateAttributeDto) {
            $this->certificateAttributeDto->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateAttributeDto) {
            $res['CertificateAttributeDto'] = null !== $this->certificateAttributeDto ? $this->certificateAttributeDto->toArray($noStream) : $this->certificateAttributeDto;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['CertificateAttributeDto'])) {
            $model->certificateAttributeDto = certificateAttributeDto::fromMap($map['CertificateAttributeDto']);
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
