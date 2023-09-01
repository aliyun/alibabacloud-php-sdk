<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTagsResponseBody\tagInfos;
use AlibabaCloud\Tea\Model;

class DescribeTagsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example requestid
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tagInfos[]
     */
    public $tagInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagInfos'  => 'TagInfos',
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
        if (null !== $this->tagInfos) {
            $res['TagInfos'] = [];
            if (null !== $this->tagInfos && \is_array($this->tagInfos)) {
                $n = 0;
                foreach ($this->tagInfos as $item) {
                    $res['TagInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagInfos'])) {
            if (!empty($map['TagInfos'])) {
                $model->tagInfos = [];
                $n               = 0;
                foreach ($map['TagInfos'] as $item) {
                    $model->tagInfos[$n++] = null !== $item ? tagInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
