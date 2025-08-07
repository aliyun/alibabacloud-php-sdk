<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesResponseBody\memoryNodes;

class ListMemoryNodesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var memoryNodes[]
     */
    public $memoryNodes;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'maxResults',
        'memoryNodes' => 'memoryNodes',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->memoryNodes)) {
            Model::validateArray($this->memoryNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->memoryNodes) {
            if (\is_array($this->memoryNodes)) {
                $res['memoryNodes'] = [];
                $n1 = 0;
                foreach ($this->memoryNodes as $item1) {
                    $res['memoryNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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

        if (isset($map['memoryNodes'])) {
            if (!empty($map['memoryNodes'])) {
                $model->memoryNodes = [];
                $n1 = 0;
                foreach ($map['memoryNodes'] as $item1) {
                    $model->memoryNodes[$n1] = memoryNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
