<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaConnectFlowStatusResponseBody extends Model
{
    /**
     * @description The response body.
     *
     * @example ""
     *
     * @var string
     */
    public $content;

    /**
     * @description The call description.
     *
     * @example ok
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example 20B3A1B6-4BD2-5DE6-BCBC-098C9B4F4E91
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned error code. A value of 0 indicates that the call is successful.
     *
     * @example 0
     *
     * @var int
     */
    public $retCode;
    protected $_name = [
        'content' => 'Content',
        'description' => 'Description',
        'requestId' => 'RequestId',
        'retCode' => 'RetCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
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
     * @return UpdateMediaConnectFlowStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
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
