<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpTagsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example E70074C8-DFB4-44C5-96C7-909DXXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tags that are added to the IP address.
     *
     * @example latest
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'requestId' => 'RequestId',
        'tags'      => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
