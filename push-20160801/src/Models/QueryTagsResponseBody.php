<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryTagsResponseBody\tagInfos;
use AlibabaCloud\Tea\Model;

class QueryTagsResponseBody extends Model
{
    /**
     * @var tagInfos
     */
    public $tagInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'tagInfos'  => 'TagInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagInfos) {
            $res['TagInfos'] = null !== $this->tagInfos ? $this->tagInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagInfos'])) {
            $model->tagInfos = tagInfos::fromMap($map['TagInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
