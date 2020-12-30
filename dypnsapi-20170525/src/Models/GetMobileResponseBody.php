<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetMobileResponseBody\getMobileResultDTO;
use AlibabaCloud\Tea\Model;

class GetMobileResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var getMobileResultDTO
     */
    public $getMobileResultDTO;
    protected $_name = [
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'code'               => 'Code',
        'getMobileResultDTO' => 'GetMobileResultDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->getMobileResultDTO) {
            $res['GetMobileResultDTO'] = null !== $this->getMobileResultDTO ? $this->getMobileResultDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMobileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GetMobileResultDTO'])) {
            $model->getMobileResultDTO = getMobileResultDTO::fromMap($map['GetMobileResultDTO']);
        }

        return $model;
    }
}
