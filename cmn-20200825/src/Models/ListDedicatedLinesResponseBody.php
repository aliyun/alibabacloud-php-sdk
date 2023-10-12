<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDedicatedLinesResponseBody\dedicatedLines;
use AlibabaCloud\Tea\Model;

class ListDedicatedLinesResponseBody extends Model
{
    /**
     * @var dedicatedLines[]
     */
    public $dedicatedLines;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 10
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example 8de935f6-90c7-444e-a2b4-bb4185153435
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dedicatedLines' => 'DedicatedLines',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedLines) {
            $res['DedicatedLines'] = [];
            if (null !== $this->dedicatedLines && \is_array($this->dedicatedLines)) {
                $n = 0;
                foreach ($this->dedicatedLines as $item) {
                    $res['DedicatedLines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDedicatedLinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedLines'])) {
            if (!empty($map['DedicatedLines'])) {
                $model->dedicatedLines = [];
                $n                     = 0;
                foreach ($map['DedicatedLines'] as $item) {
                    $model->dedicatedLines[$n++] = null !== $item ? dedicatedLines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
