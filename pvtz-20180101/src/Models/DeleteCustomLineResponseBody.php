<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomLineResponseBody extends Model
{
    /**
     * @description The unique ID of the custom line.
     *
     * @example 520002
     *
     * @var string
     */
    public $lineId;

    /**
     * @description The request ID.
     *
     * @example A73F3BD0-B1A8-42A9-A9B6-689BBABC4891
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
     * @return DeleteCustomLineResponseBody
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
