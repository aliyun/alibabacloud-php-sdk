<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryTagsResponseBody\tagInfos;

class QueryTagsResponseBody extends Model
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
        'tagInfos' => 'TagInfos',
    ];

    public function validate()
    {
        if (null !== $this->tagInfos) {
            $this->tagInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tagInfos) {
            $res['TagInfos'] = null !== $this->tagInfos ? $this->tagInfos->toArray($noStream) : $this->tagInfos;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
