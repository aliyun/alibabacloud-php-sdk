<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateApiDestinationResponseBody\date;
use AlibabaCloud\Tea\Model;

class CreateApiDestinationResponseBody extends Model
{
    /**
     * @description The returned response code. The value Success indicates that the request is successful.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The data returned if the API destination is created.
     *
     * @var date
     */
    public $date;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 5DAF96FB-A4B6-548C-B999-0BFDCB2261B9
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->date) {
            $res['Date'] = null !== $this->date ? $this->date->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiDestinationResponseBody
     */
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
