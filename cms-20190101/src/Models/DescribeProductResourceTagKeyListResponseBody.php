<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListResponseBody\tagKeys;
use AlibabaCloud\Tea\Model;

class DescribeProductResourceTagKeyListResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $message;

    /**
     * @description The pagination cursor. If more entries are to be returned on the next page, a pagination cursor is returned.
     *
     * >  If the value of this parameter is not null, more entries are to be returned on the next page. You can use the returned pagination cursor as a request parameter to obtain entries on the next page. If the value of this parameter is null, all the entries have been returned.
     * @example dbc2826f237e****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 945ACAA9-89F2-4A62-8913-076FDEDAA8DB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. The value true indicates a success. The value false indicates a failure.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The keys of tags.
     *
     * @var tagKeys
     */
    public $tagKeys;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'tagKeys'   => 'TagKeys',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = null !== $this->tagKeys ? $this->tagKeys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProductResourceTagKeyListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeys = tagKeys::fromMap($map['TagKeys']);
        }

        return $model;
    }
}
