<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponseBody\failures;

use AlibabaCloud\Tea\Model;

class failures extends Model
{
    /**
     * @description The response code. Valid values:
     *
     *   **200**: success
     *   **400**: client error
     *   **401**: identity authentication failed
     *   **404**: requested page not found
     *   **500**: server error
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failures
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

        return $model;
    }
}
