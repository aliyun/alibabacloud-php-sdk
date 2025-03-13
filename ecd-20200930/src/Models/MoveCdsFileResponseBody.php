<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\MoveCdsFileResponseBody\moveCdsFileModel;
use AlibabaCloud\Tea\Model;

class MoveCdsFileResponseBody extends Model
{
    /**
     * @description The result of the modification. A value of success indicates that the modification is successful. If the modification failed, an error message is returned.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message that is returned. This parameter is not returned if the value of Code is success.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The response object when you move a file.
     *
     * @var moveCdsFileModel
     */
    public $moveCdsFileModel;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * Valid values:
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'moveCdsFileModel' => 'MoveCdsFileModel',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->moveCdsFileModel) {
            $res['MoveCdsFileModel'] = null !== $this->moveCdsFileModel ? $this->moveCdsFileModel->toMap() : null;
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
     * @return MoveCdsFileResponseBody
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
        if (isset($map['MoveCdsFileModel'])) {
            $model->moveCdsFileModel = moveCdsFileModel::fromMap($map['MoveCdsFileModel']);
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
