<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items;

class DescribeScanResultsByEngineResponseBody extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $scanId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'engine' => 'engine',
        'items' => 'items',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'projectId' => 'projectId',
        'requestId' => 'requestId',
        'scanId' => 'scanId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['engine'] = $this->engine;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scanId) {
            $res['scanId'] = $this->scanId;
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
        if (isset($map['engine'])) {
            $model->engine = $map['engine'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scanId'])) {
            $model->scanId = $map['scanId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
