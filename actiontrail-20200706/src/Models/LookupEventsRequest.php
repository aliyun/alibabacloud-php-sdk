<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsRequest\lookupAttribute;
use AlibabaCloud\Tea\Model;

class LookupEventsRequest extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var lookupAttribute[]
     */
    public $lookupAttribute;

    /**
     * @var string
     */
    public $direction;
    protected $_name = [
        'nextToken'       => 'NextToken',
        'maxResults'      => 'MaxResults',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'lookupAttribute' => 'LookupAttribute',
        'direction'       => 'Direction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lookupAttribute) {
            $res['LookupAttribute'] = [];
            if (null !== $this->lookupAttribute && \is_array($this->lookupAttribute)) {
                $n = 0;
                foreach ($this->lookupAttribute as $item) {
                    $res['LookupAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LookupEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LookupAttribute'])) {
            if (!empty($map['LookupAttribute'])) {
                $model->lookupAttribute = [];
                $n                      = 0;
                foreach ($map['LookupAttribute'] as $item) {
                    $model->lookupAttribute[$n++] = null !== $item ? lookupAttribute::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        return $model;
    }
}
