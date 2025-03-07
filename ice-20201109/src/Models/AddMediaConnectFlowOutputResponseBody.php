<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowOutputResponseBody\content;
use AlibabaCloud\Tea\Model;

class AddMediaConnectFlowOutputResponseBody extends Model
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
     * @example ok
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
     * @example 11AA9E73-FBA0-58DC-97BA-D606D847BCB6
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
        'content'     => 'Content',
        'description' => 'Description',
        'requestId'   => 'RequestId',
        'retCode'     => 'RetCode',
    ];

    public function validate()
    {
    }

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
     * @return AddMediaConnectFlowOutputResponseBody
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
