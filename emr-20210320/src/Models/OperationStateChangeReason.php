<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class OperationStateChangeReason extends Model
{
    /**
     * @description 状态码。
     *
     * @example OutOfStock
     *
     * @var string
     */
    public $code;

    /**
     * @description 状态变化信息。
     *
     * @example The requested resource is sold out in the specified zone, try other types of resources or other regions and zones.
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
     * @return OperationStateChangeReason
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
