<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetExecuteOperationResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The output of the operation.
     *
     * @example " "
     *
     * @var string
     */
    public $arguments;

    /**
     * @description The returned message.
     *
     * @example “ ”
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the operation.
     *
     * @example op_xxxxxxxx
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The status of the operation.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'arguments' => 'Arguments',
        'message' => 'Message',
        'operationId' => 'OperationId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
