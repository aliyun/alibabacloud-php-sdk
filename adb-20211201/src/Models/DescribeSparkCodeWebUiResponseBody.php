<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeSparkCodeWebUiResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     *   If the request was successful, **SUCCESS** is returned.
     *   If the request failed, an error message is returned.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 774DDC37-1908-58F6-B9CA-99E3E45965A6
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
     * @var bool
     */
    public $success;

    /**
     * @description The URL of the web UI for the Spark application.
     *
     * @example https://adb-subuser-cn-hangzhou-1358535755648527-100000648.oss-cn-hangzhou.aliyuncs.com/%3Facl?Expires=1681295967&OSSAccessKeyId=LTAI5tB7NAkm25oiGASu****&Signature=hKAZ1vgvhJ%2FD8hNHTuX%2FOOBWht****
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSparkCodeWebUiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
