<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListMemoryStoresResponseBody\memoryStores;

class ListMemoryStoresResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var memoryStores[]
     */
    public $memoryStores;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'maxResults',
        'memoryStores' => 'memoryStores',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->memoryStores)) {
            Model::validateArray($this->memoryStores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->memoryStores) {
            if (\is_array($this->memoryStores)) {
                $res['memoryStores'] = [];
                $n1 = 0;
                foreach ($this->memoryStores as $item1) {
                    $res['memoryStores'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['memoryStores'])) {
            if (!empty($map['memoryStores'])) {
                $model->memoryStores = [];
                $n1 = 0;
                foreach ($map['memoryStores'] as $item1) {
                    $model->memoryStores[$n1] = memoryStores::fromMap($item1);
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

        return $model;
    }
}
