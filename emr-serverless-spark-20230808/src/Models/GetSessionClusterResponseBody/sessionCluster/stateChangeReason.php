<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster;

use AlibabaCloud\Tea\Model;

class stateChangeReason extends Model
{
    /**
     * @description The status change code.
     *
     * @example 1000000
     *
     * @var string
     */
    public $code;

    /**
     * @description The status change message.
     *
     * @example ok
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'code',
        'message' => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stateChangeReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
