<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetCustomServiceUrlResponseBody\urlData;
use AlibabaCloud\Tea\Model;

class GetCustomServiceUrlResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 79C01D47-3C44-57D9-BC99-1B33F7ED****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var urlData
     */
    public $urlData;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'urlData'   => 'UrlData',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->urlData) {
            $res['UrlData'] = null !== $this->urlData ? $this->urlData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCustomServiceUrlResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UrlData'])) {
            $model->urlData = urlData::fromMap($map['UrlData']);
        }

        return $model;
    }
}
