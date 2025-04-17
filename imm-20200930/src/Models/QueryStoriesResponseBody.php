<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class QueryStoriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Story[]
     */
    public $stories;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'stories' => 'Stories',
    ];

    public function validate()
    {
        if (\is_array($this->stories)) {
            Model::validateArray($this->stories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stories) {
            if (\is_array($this->stories)) {
                $res['Stories'] = [];
                $n1 = 0;
                foreach ($this->stories as $item1) {
                    $res['Stories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Stories'])) {
            if (!empty($map['Stories'])) {
                $model->stories = [];
                $n1 = 0;
                foreach ($map['Stories'] as $item1) {
                    $model->stories[$n1++] = Story::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
