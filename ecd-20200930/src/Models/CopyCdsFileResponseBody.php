<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CopyCdsFileResponseBody\copyCdsFileModel;
use AlibabaCloud\Tea\Model;

class CopyCdsFileResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @var copyCdsFileModel
     */
    public $copyCdsFileModel;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 93AD30C1-16B8-5C54-AD23-A51FF53F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'copyCdsFileModel' => 'CopyCdsFileModel',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
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
        if (null !== $this->copyCdsFileModel) {
            $res['CopyCdsFileModel'] = null !== $this->copyCdsFileModel ? $this->copyCdsFileModel->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyCdsFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CopyCdsFileModel'])) {
            $model->copyCdsFileModel = copyCdsFileModel::fromMap($map['CopyCdsFileModel']);
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

        return $model;
    }
}
