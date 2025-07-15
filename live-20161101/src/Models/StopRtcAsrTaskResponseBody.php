<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StopRtcAsrTaskResponseBody extends Model
{
    /**
     * @description The result of the request. If success is returned, the request is successful. If an error message is returned, the request failed.
     *
     * @example success
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example 3D208CC1-27C9-51E9-82B8-A6682D466421
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned HTTP status code. HTTP status code 2000 indicates that the request is successful. If another HTTP status code is returned, the request failed.
     *
     * @example 2000
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
     * @return StopRtcAsrTaskResponseBody
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
