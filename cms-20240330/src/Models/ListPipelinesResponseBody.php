<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPipelinesResponseBody\pipelines;

class ListPipelinesResponseBody extends Model
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
     * @var pipelines[]
     */
    public $pipelines;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'pipelines' => 'pipelines',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->pipelines)) {
            Model::validateArray($this->pipelines);
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

        if (null !== $this->pipelines) {
            if (\is_array($this->pipelines)) {
                $res['pipelines'] = [];
                $n1 = 0;
                foreach ($this->pipelines as $item1) {
                    $res['pipelines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['pipelines'])) {
            if (!empty($map['pipelines'])) {
                $model->pipelines = [];
                $n1 = 0;
                foreach ($map['pipelines'] as $item1) {
                    $model->pipelines[$n1] = pipelines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
