<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLivePullToPushResponseBody extends Model
{
    /**
     * @description The error description.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The code that is returned for the request.
     *
     * >
     *
     *   0 is returned if the request is normal.
     *
     *   For information about codes that are returned when exceptions occur, see the following Error codes table.
     *
     * @example 0
     *
     * @var int
     */
    public $retCode;
    protected $_name = [
        'description' => 'Description',
        'requestId' => 'RequestId',
        'retCode' => 'RetCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLivePullToPushResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }

        return $model;
    }
}
