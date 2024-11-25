<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomLineResponseBody extends Model
{
    /**
     * @description The unique ID of the custom line.
     *
     * @example 765001
     *
     * @var string
     */
    public $lineId;

    /**
     * @description The request ID.
     *
     * @example 0B7AD377-7E86-44A8-B9A8-53E8666E72FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lineId'    => 'LineId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomLineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
