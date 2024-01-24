<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class EnableSqlFlashbackMatchSwitchResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 463A5F0F-12AD-4544-A902-B2B983******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether SqlFlashbackMatchSwitch is enabled or not.
     *
     * @example true
     *
     * @var bool
     */
    public $result;

    /**
     * @description Indicates whether the request was sent successfully or not.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableSqlFlashbackMatchSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
