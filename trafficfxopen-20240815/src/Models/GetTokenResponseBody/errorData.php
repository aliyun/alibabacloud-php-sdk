<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\GetTokenResponseBody;

use AlibabaCloud\Tea\Model;

class errorData extends Model
{
    /**
     * @example 1001
     *
     * @var string
     */
    public $rawErrorCode;

    /**
     * @var string
     */
    public $rawErrorMsg;
    protected $_name = [
        'rawErrorCode' => 'rawErrorCode',
        'rawErrorMsg'  => 'rawErrorMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rawErrorCode) {
            $res['rawErrorCode'] = $this->rawErrorCode;
        }
        if (null !== $this->rawErrorMsg) {
            $res['rawErrorMsg'] = $this->rawErrorMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['rawErrorCode'])) {
            $model->rawErrorCode = $map['rawErrorCode'];
        }
        if (isset($map['rawErrorMsg'])) {
            $model->rawErrorMsg = $map['rawErrorMsg'];
        }

        return $model;
    }
}
