<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeResponseBody\schemeQueryResultDTO;
use AlibabaCloud\Tea\Model;

class DescribeVerifySchemeResponseBody extends Model
{
    /**
     * @description The response code. OK indicates that the request is successful. For more information about other error codes, see [API response codes](https://help.aliyun.com/document_detail/85198.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 0C5380A7-2032-5F7D-9614-1BF8B54D16CB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The response parameters.
     *
     * @var schemeQueryResultDTO
     */
    public $schemeQueryResultDTO;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
        'schemeQueryResultDTO' => 'SchemeQueryResultDTO',
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
        if (null !== $this->schemeQueryResultDTO) {
            $res['SchemeQueryResultDTO'] = null !== $this->schemeQueryResultDTO ? $this->schemeQueryResultDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifySchemeResponseBody
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
        if (isset($map['SchemeQueryResultDTO'])) {
            $model->schemeQueryResultDTO = schemeQueryResultDTO::fromMap($map['SchemeQueryResultDTO']);
        }

        return $model;
    }
}
