<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeResponseBody\schemeQueryResultDTO;

class DescribeVerifySchemeResponseBody extends Model
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
     * @var schemeQueryResultDTO
     */
    public $schemeQueryResultDTO;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'schemeQueryResultDTO' => 'SchemeQueryResultDTO',
    ];

    public function validate()
    {
        if (null !== $this->schemeQueryResultDTO) {
            $this->schemeQueryResultDTO->validate();
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

        if (null !== $this->schemeQueryResultDTO) {
            $res['SchemeQueryResultDTO'] = null !== $this->schemeQueryResultDTO ? $this->schemeQueryResultDTO->toArray($noStream) : $this->schemeQueryResultDTO;
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

        if (isset($map['SchemeQueryResultDTO'])) {
            $model->schemeQueryResultDTO = schemeQueryResultDTO::fromMap($map['SchemeQueryResultDTO']);
        }

        return $model;
    }
}
