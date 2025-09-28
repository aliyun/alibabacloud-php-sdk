<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileResponseBody\getMobileResultDTO;

class GetMobileResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var getMobileResultDTO
     */
    public $getMobileResultDTO;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'getMobileResultDTO' => 'GetMobileResultDTO',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->getMobileResultDTO) {
            $this->getMobileResultDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->getMobileResultDTO) {
            $res['GetMobileResultDTO'] = null !== $this->getMobileResultDTO ? $this->getMobileResultDTO->toArray($noStream) : $this->getMobileResultDTO;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['GetMobileResultDTO'])) {
            $model->getMobileResultDTO = getMobileResultDTO::fromMap($map['GetMobileResultDTO']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
