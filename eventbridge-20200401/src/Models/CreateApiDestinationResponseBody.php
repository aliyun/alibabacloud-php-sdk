<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateApiDestinationResponseBody\date;

class CreateApiDestinationResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var date
     */
    public $date;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'date'      => 'Date',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->date) {
            $this->date->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->date) {
            $res['Date'] = null !== $this->date ? $this->date->toArray($noStream) : $this->date;
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

        if (isset($map['Date'])) {
            $model->date = date::fromMap($map['Date']);
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
