<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetStoryResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1B3D5E0A-D8B8-4DA0-8127-ED32C851****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the story.
     *
     * @var Story
     */
    public $story;
    protected $_name = [
        'requestId' => 'RequestId',
        'story'     => 'Story',
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
        if (null !== $this->story) {
            $res['Story'] = null !== $this->story ? $this->story->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Story'])) {
            $model->story = Story::fromMap($map['Story']);
        }

        return $model;
    }
}
