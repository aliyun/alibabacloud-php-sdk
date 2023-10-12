<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListEventDefinitionsResponseBody extends Model
{
    /**
     * @var EventDefinition[]
     */
    public $eventDefinitions;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 21
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example BC004409-9E71-57FC-8E9A-7929665BF39B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'eventDefinitions' => 'EventDefinitions',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDefinitions) {
            $res['EventDefinitions'] = [];
            if (null !== $this->eventDefinitions && \is_array($this->eventDefinitions)) {
                $n = 0;
                foreach ($this->eventDefinitions as $item) {
                    $res['EventDefinitions'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListEventDefinitionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventDefinitions'])) {
            if (!empty($map['EventDefinitions'])) {
                $model->eventDefinitions = [];
                $n                       = 0;
                foreach ($map['EventDefinitions'] as $item) {
                    $model->eventDefinitions[$n++] = null !== $item ? EventDefinition::fromMap($item) : $item;
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
