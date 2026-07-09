<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;

class SignUserImageResponseBody extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $certificateSubject;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signTime;

    /**
     * @var string
     */
    public $signedImageUrl;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certificateSubject' => 'CertificateSubject',
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'objectKey' => 'ObjectKey',
        'requestId' => 'RequestId',
        'signTime' => 'SignTime',
        'signedImageUrl' => 'SignedImageUrl',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->certificateSubject) {
            $res['CertificateSubject'] = $this->certificateSubject;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signTime) {
            $res['SignTime'] = $this->signTime;
        }

        if (null !== $this->signedImageUrl) {
            $res['SignedImageUrl'] = $this->signedImageUrl;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['CertificateSubject'])) {
            $model->certificateSubject = $map['CertificateSubject'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SignTime'])) {
            $model->signTime = $map['SignTime'];
        }

        if (isset($map['SignedImageUrl'])) {
            $model->signedImageUrl = $map['SignedImageUrl'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
