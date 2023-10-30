<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class TagResourcesResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example ""
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 154FT
     *
     * @var string
     */
    public $tagResponseId;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'tagResponseId' => 'TagResponseId',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagResponseId) {
            $res['TagResponseId'] = $this->tagResponseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TagResponseId'])) {
            $model->tagResponseId = $map['TagResponseId'];
        }

        return $model;
    }
}
