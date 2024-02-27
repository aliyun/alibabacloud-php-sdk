<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponseBody\results;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Error Code, 200 OK
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Message, Notes of Code
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Returning Message of Invitation Results
     *
     * @var \AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponseBody\results\result\result
     */
    public $result;

    /**
     * @description Always true.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
        'result'  => 'Result',
        'success' => 'Success',
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
     * @return result
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
        if (isset($map['Result'])) {
            $model->result = \AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponseBody\results\result\result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
