<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetPartitionsHeatmapResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The hot data of the PolarDB-X 2.0 instance. The data is returned in JSON format.
     *
     * @example {
     * "boundAxis": [
     * {
     * "bound": "A,B,C,D",
     * "labels": [
     * "L1",
     * "L2",
     * "L3",
     * "L4"
     * ],
     * "rows": 3171
     * },
     * {
     * "bound": "A,B,C,D",
     * "labels": [
     * "L1",
     * "L2",
     * "L3",
     * "L4"
     * ],
     * "rows": 277128
     * }
     * ],
     * "dataMap": {
     * "READ_WRITTEN_ROWS": [
     * [
     * 0,
     * 0,
     * 0
     * ],
     * [
     * 0,
     * 0,
     * 0
     * ]
     * ]
     * },
     * "timeAxis": [
     * 1671701056070,
     * 1671701116551,
     * 1671701177020
     * ]
     * }
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * >  If the request was successful, **Successful** is returned. If the request failed, an error message that contains information such as an error code is returned.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example D00DB161-FEF6-5428-B37A-8D29A4C2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPartitionsHeatmapResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
