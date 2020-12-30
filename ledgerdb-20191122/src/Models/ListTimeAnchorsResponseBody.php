<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\ListTimeAnchorsResponseBody\timeAnchors;
use AlibabaCloud\Tea\Model;

class ListTimeAnchorsResponseBody extends Model
{
    /**
     * @var timeAnchors[]
     */
    public $timeAnchors;

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
    public $maxResults;
    protected $_name = [
        'timeAnchors' => 'TimeAnchors',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'maxResults'  => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeAnchors) {
            $res['TimeAnchors'] = [];
            if (null !== $this->timeAnchors && \is_array($this->timeAnchors)) {
                $n = 0;
                foreach ($this->timeAnchors as $item) {
                    $res['TimeAnchors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTimeAnchorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeAnchors'])) {
            if (!empty($map['TimeAnchors'])) {
                $model->timeAnchors = [];
                $n                  = 0;
                foreach ($map['TimeAnchors'] as $item) {
                    $model->timeAnchors[$n++] = null !== $item ? timeAnchors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
