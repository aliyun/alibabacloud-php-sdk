<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCdsFileShareLinkResponseBody extends Model
{
    /**
     * @description The modification result. The value success indicates that the modification is successful. If the modification failed, an error message is returned.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The data information.
     *
     * @var CdsFileShareLinkModel
     */
    public $data;

    /**
     * @description The error message that is returned. This parameter is not returned if the value of Code is success.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example F7E4322D-D679-5ACB-A909-490D2F0E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The request status.
     *
     * Valid values:
     *
     *   true: The request is successful.
     *
     * <!-- -->
     *
     *   false: The request fails.
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return ModifyCdsFileShareLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = CdsFileShareLinkModel::fromMap($map['Data']);
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
