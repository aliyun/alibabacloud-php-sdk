<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsResponseBody\invalidProductTags;
use AlibabaCloud\Tea\Model;

class CreateProductTagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var invalidProductTags
     */
    public $invalidProductTags;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'          => 'RequestId',
        'invalidProductTags' => 'InvalidProductTags',
        'errorMessage'       => 'ErrorMessage',
        'code'               => 'Code',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->invalidProductTags) {
            $res['InvalidProductTags'] = null !== $this->invalidProductTags ? $this->invalidProductTags->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InvalidProductTags'])) {
            $model->invalidProductTags = invalidProductTags::fromMap($map['InvalidProductTags']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
