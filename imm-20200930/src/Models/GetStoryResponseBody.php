<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetStoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Story
     */
    public $story;
    protected $_name = [
        'requestId' => 'RequestId',
        'story' => 'Story',
    ];

    public function validate()
    {
        if (null !== $this->story) {
            $this->story->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->story) {
            $res['Story'] = null !== $this->story ? $this->story->toArray($noStream) : $this->story;
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

        if (isset($map['Story'])) {
            $model->story = Story::fromMap($map['Story']);
        }

        return $model;
    }
}
