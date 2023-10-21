<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponseBody\group;
use AlibabaCloud\Tea\Model;

class DeleteMonitorGroupResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The deleted application group.
     *
     * @var group
     */
    public $group;

    /**
     * @description The returned message.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example CA35B3AE-4FFD-4A33-AE67-67EF68711EFA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. The value true indicates a success. The value false indicates a failure.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'group'     => 'Group',
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
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
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
     * @return DeleteMonitorGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
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
