<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowInputResponseBody\content;
use AlibabaCloud\Tea\Model;

class AddMediaConnectFlowInputResponseBody extends Model
{
    /**
     * @description The response body.
     *
     * @var content
     */
    public $content;

    /**
     * @description The call description.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example 11357BE8-4C54-58EA-890A-5AB646EDE4B2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned error code. A value of 0 indicates the call is successful.
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
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
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
     * @return AddMediaConnectFlowInputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
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
