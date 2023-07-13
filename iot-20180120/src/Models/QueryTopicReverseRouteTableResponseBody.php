<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryTopicReverseRouteTableResponseBody\srcTopics;
use AlibabaCloud\Tea\Model;

class QueryTopicReverseRouteTableResponseBody extends Model
{
    /**
     * @description The error message returned if the call fails.
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the request.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the call was successful.
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example FCC27691-9151-4B93-9622-9C90F30542EC"
     *
     * @var string
     */
    public $requestId;

    /**
     * @var srcTopics
     */
    public $srcTopics;

    /**
     * @description The list of source topics returned if the call is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'srcTopics'    => 'SrcTopics',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->srcTopics) {
            $res['SrcTopics'] = null !== $this->srcTopics ? $this->srcTopics->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTopicReverseRouteTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SrcTopics'])) {
            $model->srcTopics = srcTopics::fromMap($map['SrcTopics']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
