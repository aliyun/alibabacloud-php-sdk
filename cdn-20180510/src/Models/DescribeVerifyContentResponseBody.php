<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeVerifyContentResponseBody extends Model
{
    /**
     * @description The verification content.
     *
     * @example verify_dffeb6610035dcb77b413a59c32cd91f
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the request.
     *
     * @example 34AB41F1-04A5-496F-8C8D-634BDBE6A9FB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content' => 'Content',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyContentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
