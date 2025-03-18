<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CopySDGResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\CopySDGResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The response message. Success is returned for a successful request.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The execution result of the synchronization request.
     *
     * @var result
     */
    public $result;

    /**
     * @description Indicates whether all tasks are successful. Valid values:
     *
     *   **true**: All tasks are successful.
     *   **false**: Failed tasks exist.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'message' => 'Message',
        'result' => 'Result',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
