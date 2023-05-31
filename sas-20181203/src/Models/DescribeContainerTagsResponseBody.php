<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerTagsResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 028CF634-5268-5660-9575-48C9ED6BF880
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the attributes of container assets.
     *
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagValues' => 'TagValues',
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
        if (null !== $this->tagValues) {
            $res['TagValues'] = $this->tagValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = $map['TagValues'];
            }
        }

        return $model;
    }
}
