<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListTagResourcesResponseBody\tagResources;

class ListTagResourcesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'tagResources' => 'tagResources',
    ];

    public function validate()
    {
        if (\is_array($this->tagResources)) {
            Model::validateArray($this->tagResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->tagResources) {
            if (\is_array($this->tagResources)) {
                $res['tagResources'] = [];
                $n1 = 0;
                foreach ($this->tagResources as $item1) {
                    $res['tagResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['tagResources'])) {
            if (!empty($map['tagResources'])) {
                $model->tagResources = [];
                $n1 = 0;
                foreach ($map['tagResources'] as $item1) {
                    $model->tagResources[$n1] = tagResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
