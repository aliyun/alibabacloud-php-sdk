<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\ListTagsResponseBody\tagInfos;
use AlibabaCloud\Tea\Model;

class ListTagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagInfos
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
            $res['TagInfos'] = null !== $this->tagInfos ? $this->tagInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagInfos'])) {
            $model->tagInfos = tagInfos::fromMap($map['TagInfos']);
        }

        return $model;
    }
}
