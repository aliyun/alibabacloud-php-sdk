<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveShiftConfigsResponseBody\content;
use AlibabaCloud\Tea\Model;

class DescribeLiveShiftConfigsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var content
     */
    public $content;
    protected $_name = [
        'requestId' => 'RequestId',
        'content'   => 'Content',
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
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveShiftConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }

        return $model;
    }
}
